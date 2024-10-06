<?php
class M_pembelian extends CI_Model{

	function hapus_retur($kode){
		$hsl=$this->db->query("DELETE FROM tbl_retur WHERE retur_id='$kode'");
		return $hsl;
	}

	function tampil_retur(){
		$hsl=$this->db->query("SELECT retur_id,DATE_FORMAT(retur_tanggal,'%d/%m/%Y') AS retur_tanggal,retur_barang_id,retur_barang_nama,retur_barang_satuan,retur_harjul,retur_qty,(retur_harjul*retur_qty) AS retur_subtotal,retur_keterangan FROM tbl_retur ORDER BY retur_id DESC");
		return $hsl;
	}

	function simpan_retur($kobar,$nabar,$satuan,$harjul,$qty,$keterangan){
		$hsl=$this->db->query("INSERT INTO tbl_retur(retur_barang_id,retur_barang_nama,retur_barang_satuan,retur_harjul,retur_qty,retur_keterangan) VALUES ('$kobar','$nabar','$satuan','$harjul','$qty','$keterangan')");
		return $hsl;
	}
	function simpan_pembelian($nofak,$total,$jml_uang,$kembalian,$tgl,$costumer,$status){
		$this->db->query("INSERT INTO tbl_beli_header (beli_id,beli_total,beli_jumlah_uang,beli_kembalian,beli_tanggal,beli_supplier_id,beli_status) VALUES ('$nofak','$total','$jml_uang','$kembalian','$tgl','$costumer','$status')");
	}

	function simpan_penjualan($nofak,$total,$jml_uang,$kembalian){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO tbl_jual (jual_nofak,jual_total,jual_jml_uang,jual_kembalian,jual_user_id,jual_keterangan) VALUES ('$nofak','$total','$jml_uang','$kembalian','$idadmin','eceran')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_jual_nofak' 			=>	$nofak,
				'd_jual_barang_id'		=>	$item['id'],
				'd_jual_barang_nama'	=>	$item['name'],
				'd_jual_barang_satuan'	=>	$item['satuan'],
				'd_jual_barang_harpok'	=>	$item['harpok'],
				'd_jual_barang_harjul'	=>	$item['amount'],
				'd_jual_qty'			=>	$item['qty'],
				'd_jual_diskon'			=>	$item['disc'],
				'd_jual_total'			=>	$item['subtotal']
			);
			$this->db->insert('tbl_detail_jual',$data);
			$this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
		}
		return true;
	}
	function get_nofak(){
		$q = $this->db->query("SELECT MAX(RIGHT(jual_nofak,6)) AS kd_max FROM tbl_jual WHERE DATE(jual_tanggal)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return date('dmy').$kd;
	}

	//=====================Penjualan grosir================================
	function simpan_penjualan_grosir($nofak,$total,$jml_uang,$kembalian){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO tbl_jual (jual_nofak,jual_total,jual_jml_uang,jual_kembalian,jual_user_id,jual_keterangan) VALUES ('$nofak','$total','$jml_uang','$kembalian','$idadmin','grosir')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_jual_nofak' 			=>	$nofak,
				'd_jual_barang_id'		=>	$item['id'],
				'd_jual_barang_nama'	=>	$item['name'],
				'd_jual_barang_satuan'	=>	$item['satuan'],
				'd_jual_barang_harpok'	=>	$item['harpok'],
				'd_jual_barang_harjul'	=>	$item['amount'],
				'd_jual_qty'			=>	$item['qty'],
				'd_jual_diskon'			=>	$item['disc'],
				'd_jual_total'			=>	$item['subtotal']
			);
			$this->db->insert('tbl_detail_jual',$data);
			$this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
		}
		return true;
	}

	function cetak_faktur(){
		$nofak=$this->session->userdata('nofak');
		$hsl=$this->db->query("SELECT beli_id,DATE_FORMAT(beli_tanggal,'%d/%m/%Y ') AS beli_tanggal,beli_total,beli_jumlah_uang,beli_kembalian,bd_barang_nama,bd_barang_satuan,bd_barang_harga_beli,tb_id,bd_barang_merk,bd_barang_jumlah,bd_barang_total,beli_supplier_id,bd_barang_ukuran,beli_tempo_bayar FROM tbl_beli_header JOIN tbl_beli_detail ON beli_id=tb_id WHERE beli_id='$nofak'");
		return $hsl;
	}
	public function kode_unik_beli_header(){
		$this->db->select('RIGHT(tbl_beli_header.beli_id,6) as kode',FALSE);
		$this->db->order_by('beli_id','DESC');
		$this->db->limit(1);

		$query=$this->db->get('tbl_beli_header');

		if($query->num_rows()<>0)
		{
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$kode_max=str_pad($kode,6,"0",STR_PAD_LEFT);
		$kode_jadi="B".date('ym').$kode_max;
		return $kode_jadi;
	}


	function simpan($nofak,$total,$tgl,$costumer,$tempo,$status){
		$this->db->query("INSERT INTO tbl_beli_header (beli_id,beli_total,beli_tanggal,beli_supplier_id,beli_tempo_bayar,beli_status) VALUES ('$nofak','$total','$tgl','$costumer','$tempo','$status')");
	}





	public function simpan_kode_transaksi($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
     	return $tambah;
	}

	 function simpan_data($data){
        //get bill entries 
        $count = count($data['count']);
        
        for($i = 0; $i<$count; $i++){
            $entries[] = array(
                'bd_barang_id'=>$data['barang_id'][$i],
                'bd_barang_nama'=>$data['barang_nama'][$i],
                'bd_barang_merk'=>$data['barang_merk'][$i],
                'bd_barang_satuan'=>$data['barang_satuan'][$i],
                'bd_barang_harga_beli'=>$data['barang_harga_beli'][$i],
                'bd_barang_jumlah'=>$data['barang_jumlah'][$i],
                'bd_barang_total'=>$data['barang_total'][$i],
                );
        }
        $this->db->insert_batch('tbl_beli_detail', $entries); 
        if($this->db->affected_rows() > 0)
            return 1;
        else
            return 0;
        }
        
	
	
}