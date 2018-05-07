<?php
class Crud_mapel extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_mapel');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['mata_pelajaran'] = $this->m_mapel->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_mapel',$data);
	}

	function tambah(){
		$data['mata_pelajaran'] = $this->m_mapel->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_mapel',$data);
	}

		function tambah_aksi(){
		$nama_mapel = $this->input->post('nama_mapel');
		
		$data = array(
			'nama_mapel' => $nama_mapel
			);
		$this->m_mapel->input_data($data,'mata_pelajaran');
		redirect('admin/crud_mapel/index');
	}

function edit($id_mapel=''){
		$data['username'] = $this->session->userdata('username');
	$where = array('id_mapel' => $id_mapel);
	$data['mata_pelajaran'] = $this->m_mapel->edit_data($where,'mata_pelajaran')->result();
	$this->load->view('admin/v_edit_mapel',$data);
}

function update($id_mapel){
		$nama_mapel = $this->input->post('nama_mapel');
		
		$data = array(
			'nama_mapel' => $nama_mapel,
			);
			$where = array(
		'id_mapel' => $id_mapel
	);
		$this->m_mapel->update_data($data,$id_mapel);
		redirect('admin/crud_mapel/index');
	}

function hapus($id_mapel){
		
		$where = array('id_mapel' => $id_mapel);
		$this->m_mapel->hapus_data($where, 'mata_pelajaran');
		redirect('admin/crud_mapel/index');
}
 }

?>