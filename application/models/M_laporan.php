<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function get(){
		$hsl=$this->db->query("SELECT * FROM tbl_jual_header ");
		return $hsl;
	}
	public function get_kop_surat(){
		$id=$this->session->userdata('id');
		$hsl=$this->db->query("SELECT * FROM tbl_kop_surat where id='$id' ");
		return $hsl;
	}

	public function join($id){
		$hsl=$this->db->query("SELECT * FROM tbl_jual_header ");
		return $hsl;
	}
		public function data(){
		$hsl=$this->db->query("SELECT * FROM tbl_jual_detail ");
		return $hsl;
	}

	public function hapusData($table_name,$id){
    	$this->db->where('tj_id',$id);
    	$hapus = $this->db->delete($table_name);
    	return $hapus;
  	}

	public function edit($table_name,$data,$id){
   	 	$this->db->where('tj_id', $id);
   	 	$edit = $this->db->update($table_name,$data);
   	 	return $edit;
  	}

  	public function search(){
  		$tgl = date('Y-m-d');
  		$this->db->like('tj_tempo_bayar',$tgl);
  		$this->db->where("tj_status in ('Belum Lunas')");
  		return $this->db->get('tbl_jual_header')->result_array();
  	}
	function get_data_jual_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT tj_id,DATE_FORMAT(tj_tanggal,'%d %M %Y') AS tj_tanggal,jd_barang_id,jd_barang_nama,jd_barang_satuan,jd_barang_merk,jd_barang_harga_jual,jd_barang_jumlah,jd_barang_total FROM tbl_jual_header JOIN tbl_jual_detail ON tj_id=jd_tj_id WHERE DATE(tj_tanggal)='$tanggal' ORDER BY tj_id DESC");
		return $hsl;
	}
	function get_data__total_jual_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT tj_id,DATE_FORMAT(tj_tanggal,'%d %M %Y') AS tj_tanggal,jd_barang_id,jd_barang_nama,jd_barang_satuan,jd_barang_merk,jd_barang_harga_jual,jd_barang_jumlah,SUM(jd_barang_total) as total FROM tbl_jual_header JOIN tbl_jual_detail ON tj_id=jd_tj_id WHERE DATE(tj_tanggal)='$tanggal' ORDER BY tj_id DESC");
		return $hsl;
	}
	function get_jual_perbulan($bulan){
		$hsl=$this->db->query("SELECT tj_id,DATE_FORMAT(tj_tanggal,' %M %Y') AS tj_tanggal,tj_status,tj_total,tj_costumer_id FROM tbl_jual_header WHERE DATE_FORMAT(tj_tanggal,'%M %Y')='$bulan' ORDER BY tj_id DESC");
		return $hsl;
	}
	function get_total_jual_perbulan($bulan){
		$hsl=$this->db->query("SELECT tj_id,DATE_FORMAT(tj_tanggal,'%M %Y') AS tj_tanggal,jd_barang_id,jd_barang_nama,jd_barang_satuan,jd_barang_merk,jd_barang_harga_jual,jd_barang_jumlah,SUM(jd_barang_total) as total FROM tbl_jual_header JOIN tbl_jual_detail ON tj_id=jd_tj_id WHERE DATE_FORMAT(tj_tanggal,'%M %Y')='$bulan' ORDER BY tj_id DESC");
		return $hsl;
	}	
	function get_bulan_jual(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(tj_tanggal,'%M %Y') AS bulan FROM tbl_jual_header");
		return $hsl;
	}
	function get_tahun_jual(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(tj_tanggal) AS tahun FROM tbl_jual_header");
		return $hsl;
	}
	function get_jual_pertahun($tahun){
		$hsl=$this->db->query("SELECT tj_id,YEAR(tj_tanggal) AS tahun,DATE_FORMAT(tj_tanggal,'%M %Y') AS bulan,DATE_FORMAT(tj_tanggal,'%d %M %Y') AS tj_tanggal,tj_total,tj_costumer_id,tj_status FROM tbl_jual_header WHERE YEAR(tj_tanggal)='$tahun' ORDER BY tj_id DESC ");
		return $hsl;
	}
	function get_total_jual_pertahun($tahun){
		$hsl=$this->db->query("SELECT tj_id,YEAR(tj_tanggal) AS tahun,DATE_FORMAT(tj_tanggal,'%M %Y') AS bulan,DATE_FORMAT(tj_tanggal,'%d %M %Y') AS tj_tanggal,jd_barang_id,jd_barang_nama,jd_barang_satuan,jd_barang_merk,jd_barang_harga_jual,jd_barang_jumlah,SUM(tj_total) as total FROM tbl_jual_header JOIN tbl_jual_detail ON tj_id=jd_tj_id WHERE YEAR(tj_tanggal)='$tahun' ORDER BY tj_id DESC");
		return $hsl;
	}
	public function kode(){
		$this->db->select('RIGHT(tbl_kop_surat.id,6) as kode',FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);

		$query=$this->db->get('tbl_kop_surat');

		if($query->num_rows()<>0)
		{
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$kode_max=str_pad($kode,6,"0",STR_PAD_LEFT);
		$kode_jadi="S".$kode_max;
		return $kode_jadi;
	}

}