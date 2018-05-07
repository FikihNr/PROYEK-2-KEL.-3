<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if (isset($_POST['username']))
		{
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			if ($username !== '' && $password !== '') {
				$db = $this->db->get_where('users', array('username' => $username), 1)->row();
				if ($db !== null && $db !== false) {
					$newdata = array(
							'user_id' => $db->id,
					        'username'  => $username,
					        'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
					redirect('chat', 'refresh');
				}
			}
		}

		$this->load->view('login');
	}


	public function logout() {
		$this->load->view('login');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data, 'chat');
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')=='pengajar') {
				redirect('pengajar/c_pengajar');
			}
			elseif ($this->session->userdata('level')=='pelajar') {
				redirect('pelajar/c_pelajar');
			}	
			elseif ($this->session->userdata('level')=='ortu') {
				redirect('ortu/c_ortu');
			}			
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}



