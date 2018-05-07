<?php
class Crud_nilai extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_nilai');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['nilai'] = $this->m_nilai->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('pengajar/v_tampil_nilai',$data);
	}
 
	function tambah(){
		$this->load->model('m_mapel');
		$data['mapel'] = $this->m_mapel->tampil_data()->result();
		$this->load->model('m_kelas');
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$this->load->model('m_pengajar');
		$data['pengajar'] = $this->m_pengajar->tampil_data()->result();
		$this->load->model('m_data');
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$data['nilai'] = $this->m_nilai->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('pengajar/v_tampil_nilai',$data);
	}

		function tambah_aksi(){
		$Id_Mapel = $this->input->post('id_mapel');
		$Id_Kelas = $this->input->post('id_kelas');
		$Id_Pengajar = $this->input->post('id_pengajar');
		$Id_Siswa = $this->input->post('id_siswa');
 
		$data = array(
			'Id_Mapel' => $Id_Mapel,
			'Id_Kelas' => $Id_Kelas,
			'Id_Pengajar' => $Id_Pengajar,
			'Id_Siswa' => $Id_Siswa,
			);
		$this->m_nilai->input_data($data,'nilai');
		redirect('pengajar/crud_nilai/tambah');
	}

	function edit($id_nilai=''){
		$data['username'] = $this->session->userdata('username');
	$where = array('id_nilai' => $id_nilai);
	$data['nilai'] = $this->m_nilai->edit_data($where,'nilai')->result();
	$this->load->view('pengajar/v_edit_nilai',$data);
}

function insertnilai($id_laporan_nilai, $nama_siswa, $nilaisiswanya){
	$data['nilai'] = $this->m_nilai->tampil_data()->result();
	$data['username'] = $this->session->userdata('username');
	$data['id'] = $id_laporan_nilai;
	$data['nama'] = $nama_siswa;
	$data['nilaisiswa'] = $nilaisiswanya;
	$this->load->view('pengajar/v_tampil_nilai',$data);
}

function update($id){
		// $Id_Mapel = $this->input->post('Id_Mapel');
		// $Id_Kelas = $this->input->post('Id_Kelas');
		// $Id_Pengajar = $this->input->post('Id_Pengajar');
		// $Id_Siswa = $this->input->post('Id_Siswa');
		// $Mapel = $this->input->post('Mapel');
		$Nilai = $this->input->post('nilai');

		$data = array(
			// 'Id_Mapel' => $Id_Mapel,
			// 'Id_Kelas' => $Id_Kelas,
			// 'Id_Pengajar' => $Id_Pengajar,
			// 'Id_Siswa' => $Id_Siswa,
			// 'Mapel' => $Mapel,
			'Nilai' => $Nilai
			);
	// 		$where = array(
	// 	'id_nilai' => $id_nilai
	// );
		$this->m_nilai->update_data($data,$id);
		redirect('pengajar/crud_nilai/index');
	// echo "$nama_siswa";
	// echo "$id_laporan_nilai";
	} 

	function hapus($id_nilai){
		
		$where = array('id_nilai' => $id_nilai);
		$this->m_nilai->hapus_data($where, 'nilai');
		redirect('pengajar/crud_nilai/index');
}
}
 

?>