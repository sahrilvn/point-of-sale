<?php
class M_costumer extends CI_Model{

	function hapus_costumer($kode){
		$hsl=$this->db->query("DELETE FROM tbl_costumer where costumer_id='$kode'");
		return $hsl;
	}

	function update_costumer($kode,$nama,$alamat,$notelp,$norek,$balance,$debit){
		$hsl=$this->db->query("UPDATE tbl_costumer set costumer_nama='$nama',costumer_alamat='$alamat',costumer_notelp='$notelp',costumer_no_rekening='$norek',costumer_balance='$balance',costumer_debit='$debit'
		 where costumer_id='$kode'");
		return $hsl;
	}

	function tampil_costumer(){
		$hsl=$this->db->query("select * from tbl_costumer order by costumer_id desc");
		return $hsl;
	}

	function simpan_costumer($nama,$alamat,$notelp,$norek,$balance,$debit){
		$hsl=$this->db->query("INSERT INTO tbl_costumer(costumer_nama,costumer_alamat,costumer_notelp,costumer_no_rekening,costumer_balance,costumer_debit) VALUES ('$nama','$alamat','$notelp','$norek','$balance','$debit')");
		return $hsl;
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

}