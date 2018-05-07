<?php 
 
class M_pengajar extends CI_Model{
	function tampil_data(){
		return $this->db->get('pengajar');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($data,$id_pengajar){
		$this->db->where('id_pengajar',$id_pengajar);
		$this->db->update('pengajar',$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}