<?php 
 
class M_mapel extends CI_Model{
	function tampil_data(){
		return $this->db->get('mata_pelajaran');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($data,$id_mapel){
		$this->db->where('id_mapel',$id_mapel);
		$this->db->update('mata_pelajaran',$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}