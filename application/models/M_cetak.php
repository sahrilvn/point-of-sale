<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cetak extends CI_Model {
	public function get_laporan()
	{
		$sql = $this->db
		->select(
			"barang_nama, barang_merk,barang_ukuran")
		->from('tbl_barang')
		->where('curdate()')
		->get();

		return $sql->num_rows() > 0 ? $sql->result_array() : false;
	}
}