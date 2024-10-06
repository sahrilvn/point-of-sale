<?php
class M_barang extends CI_Model{

	function ambil_barang($kategori){
		if ($kategori == 'semua') {
			$hsl = $this->db->query("SELECT * FROM tbl_barang");
			return $hsl;
		}else{
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_kategori in ('$kategori')");
		return $hsl;
	 }
	}
	function ambil_barang_kat(){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_kategori in ('Bahan Pangan')");
		return $hsl;
	}
	function ambil_barang_kat_dua(){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_kategori in ('Barang Non-Food')");
		return $hsl;
	}
	function ambil_barang_basah(){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_jenis in ('Barang-basah')");
		return $hsl;
	}
	function ambil(){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_jenis in ('Barang-kering')");
		return $hsl;
	}

	function get_barang($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_id='$kobar'");
		return $hsl;
	}

	public function simpan_barang($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
     	return $tambah;
	}

	public function edit($table_name,$data,$id){
   	 	$this->db->where('barang_id', $id);
   	 	$edit = $this->db->update($table_name,$data);
   	 	return $edit;
  	}

	public function hapusData($table_name,$id){
    	$this->db->where('barang_id',$id);
    	$hapus = $this->db->delete($table_name);
    	return $hapus;
  	}

  	public function kode_unik(){
		$this->db->select('RIGHT(tbl_barang.barang_id,6) as kode',FALSE);
		$this->db->order_by('barang_id','DESC');
		$this->db->limit(1);

		$query=$this->db->get('tbl_barang');

		if($query->num_rows()<>0)
		{
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$kode_max=str_pad($kode,6,"0",STR_PAD_LEFT);
		$kode_jadi="BR".$kode_max;
		return $kode_jadi;
	}

	function tampil_barang(){
		$hsl=$this->db->query("SELECT barang_id,barang_nama,barang_satuan,barang_merk,barang_ukuran,barang_harga_beli,barang_harga,barang_harga_jual,barang_jumlah FROM tbl_barang");
		return $hsl;
	}
	function tampilkan(){
         
        $query = $this->db->get('tbl_barang');
        return $query->result();    
        
    }

}