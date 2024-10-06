<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_administrator extends CI_Model {

	public function proses($user_username,$user_password){
		$this->db->where('user_username',$user_username);
		$this->db->where('user_password',$user_password);
		return $this->db->get('tbl_user')->row();
	}
}