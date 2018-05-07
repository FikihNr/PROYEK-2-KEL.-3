<?php
class Crud_pengajar extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengajar');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['pengajar'] = $this->m_pengajar->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_pengajar',$data);
	}
 
	function tambah_pengajar(){
		$data['pengajar'] = $this->m_pengajar->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_pengajar',$data);
	}

		function input_data_pengajar(){
		$nama = $this->input->post('nama');
		$NIP = $this->input->post('NIP');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'nama_pengajar' => $nama,
			'NIP' => $NIP,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);
		$this->m_pengajar->input_data($data,'pengajar');
		redirect('admin/crud_pengajar/index');
	}

function edit_pengajar($id_pengajar=''){
		$data['username'] = $this->session->userdata('username');
	$where = array('id_pengajar' => $id_pengajar);
	$data['pengajar'] = $this->m_pengajar->edit_data($where,'pengajar')->result();
	$this->load->view('admin/v_edit_pengajar',$data);
}

function update_data_pengajar($id_pengajar){
		$NIP = $this->input->post('NIP');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_hp = $this->input->post('no_hp');
		$password = $this->input->post('password');
 		$username = $this->input->post('username');

		$data = array(
			'NIP' => $NIP,
			'nama_pengajar' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin,
			'no_hp' => $no_hp,
			'password' => $password,
			'username' => $username
			);
			$where = array(
		'id_pengajar' => $id_pengajar
	);
		$this->m_pengajar->update_data($data,$id_pengajar);
		redirect('admin/crud_pengajar/index');
	}

function hapus_data_pengajar($id_pengajar){
		
		$where = array('id_pengajar' => $id_pengajar);
		$this->m_pengajar->hapus_data($where, 'pengajar');
		redirect('admin/crud_pengajar/index');
}
 
}
 

?>