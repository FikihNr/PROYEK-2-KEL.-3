<?php 
 
class M_kelas extends CI_Model{
	function tampil_data(){
		return $this->db->get('kelas');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($data,$id_kelas){
		$this->db->where('id_kelas',$id_kelas);
		$this->db->update('kelas',$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}