<?php 
 class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('siswa');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($data,$id_siswa){
		$this->db->where('id_siswa',$id_siswa);
		$this->db->update('siswa',$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}