<?php 
 
class M_nilai extends CI_Model{
	function tampil_data(){
		return $this->db->get('v_nilai');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($data,$id){
		$this->db->where('id_laporan_nilai',$id);
		$this->db->update('nilai',$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}