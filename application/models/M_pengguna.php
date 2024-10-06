<?php
class M_pengguna extends CI_Model{
	function get_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_user where level in('0')");
		return $hsl;
	}
	public function simpan_pengguna($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
     	return $tambah;
	}
	public function edit($table_name,$data,$id){
   	 	$this->db->where('user_id', $id);
   	 	$edit = $this->db->update($table_name,$data);
   	 	return $edit;
  	}
	public function hapusData($table_name,$id){
    	$this->db->where('user_id',$id);
    	$hapus = $this->db->delete($table_name);
    	return $hapus;
  }
}