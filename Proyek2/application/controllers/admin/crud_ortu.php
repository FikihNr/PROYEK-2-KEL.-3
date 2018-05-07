<?php
class Crud_ortu extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_ortu');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['orangtua'] = $this->m_ortu->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_ortu',$data);
	}
 
	function tambah_ortu(){
		$data['orangtua'] = $this->m_ortu->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_ortu',$data);
	}

		function input_data_ortu(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);
		$this->m_ortu->input_data($data,'orangtua');
		redirect('admin/crud_ortu/index');
	}

	function edit_ortu($id_ortu=''){
		$data['username'] = $this->session->userdata('username');
	$where = array('id_ortu' => $id_ortu);
	$data['ortu'] = $this->m_ortu->edit_data($where,'orangtua')->result();
	$this->load->view('admin/v_edit_ortu',$data);
}

function update_data_ortu($id_ortu){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'no_hp' => $no_hp,
			'alamat' => $alamat
			);
			$where = array(
		'id_ortu' => $id_ortu
	);
		$this->m_ortu->update_data($data,$id_ortu);
		redirect('admin/crud_ortu/index');
	} 

	function hapus_data_ortu($id_ortu){
		
		$where = array('id_ortu' => $id_ortu);
		$this->m_ortu->hapus_data($where, 'orangtua');
		redirect('admin/crud_ortu/index');
}
}
 

?>