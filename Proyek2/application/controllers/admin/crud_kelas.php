<?php
class Crud_kelas extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kelas');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_kelas',$data);
	}
 
	function tambah(){
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_kelas',$data);
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
	
 
		$data = array(
			'nama_kelas' => $nama
			
			);
		$this->m_kelas->input_data($data,'kelas');
		redirect('admin/crud_kelas/index');
	}

function edit($id_kelas=''){
		$data['username'] = $this->session->userdata('username');
	$where = array('id_kelas' => $id_kelas);
	$data['kelas'] = $this->m_kelas->edit_data($where,'kelas')->result();
	$this->load->view('admin/v_edit_kelas',$data);
}

function update($id_kelas){
		$nama = $this->input->post('nama');

		$data = array(
			'nama_kelas' => $nama,
			);
			$where = array(
		'id_kelas' => $id_kelas
	);
		$this->m_kelas->update_data($data,$id_kelas);
		redirect('admin/crud_kelas/index');
	}
	function hapus($id_kelas){
		
		$where = array('id_kelas' => $id_kelas);
		$this->m_kelas->hapus_data($where, 'kelas');
		redirect('admin/crud_kelas/index');
}
 
}
 

?>