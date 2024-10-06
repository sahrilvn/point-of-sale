<?php
class M_penjualan extends CI_Model{

	function hapus_retur($kode){
		$hsl=$this->db->query("DELETE FROM tbl_retur WHERE retur_id='$kode'");
		return $hsl;
	}

	function add($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
     	return $tambah;
	}

	function get_data_customer(){
		$hsl=$this->db->query("SELECT * FROM tbl_costumer ");
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

	function simpan_penjualan($nofak,$total,$jml_uang,$kembalian,$tgl,$costumer,$status){
		$this->db->query("INSERT INTO tbl_jual_header (tj_id,tj_total,tj_jumlah_uang,tj_kembalian,tj_tanggal,tj_costumer_id,tj_status) VALUES ('$nofak','$total','$jml_uang','$kembalian','$tgl','$costumer','$status')");
	}
	function simpan($nofak,$total,$tgl,$costumer,$tempo,$status){
		$this->db->query("INSERT INTO tbl_jual_header (tj_id,tj_total,tj_tanggal,tj_costumer_id,tj_tempo_bayar,tj_status,tj_tunggakan) VALUES ('$nofak','$total','$tgl','$costumer','$tempo','$status','$total')");
	}

	function kirim($nofak,$kop_surat,$office,$telpon,$email,$periode,$kepada,$total,$tgl){
		$this->db->query("INSERT INTO tbl_jual_header (tj_id,tj_total,kop_surat,tj_costumer_id,office,telepon,periode,email,tj_tanggal) VALUES ('$nofak','$total','$kop_surat','$kepada','$office','$telpon','$periode','$email','$tgl')");
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
		$hsl=$this->db->query("SELECT tj_id,DATE_FORMAT(tj_tanggal,'%d/%m/%Y ') AS tj_tanggal,tj_total,tj_jumlah_uang,tj_kembalian,jd_barang_nama,jd_barang_satuan,jd_barang_harga_jual,jd_tj_id,jd_barang_merk,jd_barang_jumlah,jd_barang_total,tj_costumer_id,jd_barang_ukuran,tj_tempo_bayar,tj_status,kop_surat,office,telepon,email,periode FROM tbl_jual_header JOIN tbl_jual_detail ON tj_id=jd_tj_id WHERE tj_id='$nofak'");
		return $hsl;
	}

	public function kode_unik_jual_header(){
		$this->db->select('RIGHT(tbl_jual_header.tj_id,6) as kode',FALSE);
		$this->db->order_by('tj_id','DESC');
		$this->db->limit(1);

		$query=$this->db->get('tbl_jual_header');

		if($query->num_rows()<>0)
		{
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$kode_max=str_pad($kode,6,"0",STR_PAD_LEFT);
		$kode_jadi="P".date('ym').$kode_max;
		return $kode_jadi;
	}

	public function simpan_kode_transaksi($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
     	return $tambah;
	}

	// public function simpan($table_name,$data){
	// 	$tambah = $this->db->insert($table_name,$data);
 //     	return $tambah;
	// }

	 function simpan_data($data){
        //get bill entries 
        $count = count($data['count']);
        
        for($i = 0; $i<$count; $i++){
            $entries[] = array(
                'jd_barang_id'=>$data['barang_id'][$i],
                'jd_barang_nama'=>$data['barang_nama'][$i],
                'jd_barang_merk'=>$data['barang_merk'][$i],
                'jd_barang_satuan'=>$data['barang_satuan'][$i],
                'jd_barang_harga_jual'=>$data['barang_harga_jual'][$i],
                'jd_barang_jumlah'=>$data['barang_jumlah'][$i],
                'jd_barang_total'=>$data['barang_total'][$i],
                );
        }
        $this->db->insert_batch('tbl_jual_detail', $entries); 
        if($this->db->affected_rows() > 0)
            return 1;
        else
            return 0;
        }

        function tampilkan(){
         
        $query = $this->db->get('tbl_jual_header');
        return $query->result();    
        
    }
	
}