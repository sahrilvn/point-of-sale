<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model {
	public function ambil_id_keranjang($kodepelanggan, $kodebarang){

        $kodestatus = '1';

        $options = array('KodePelanggan' => $kodepelanggan,
                        'KodeBarang' => $kodebarang,
                        'KodeStatus' => $kodestatus);

        $this->db->from('keranjang');
        $this->db->where($options);
        $result = $this->db->get('');

        if($result->num_rows() > 0){

            return $result->row();
        }
    }

     public function updateStok($table_name,$data,$kodepelanggan, $kodebarang){

        $kodestatus = '1';
        $options = array('KodePelanggan' => $kodepelanggan,
                        'KodeBarang' => $kodebarang,
                        'KodeStatus' => $kodestatus);

        $this->db->where($options);
        $edit = $this->db->update($table_name,$data);
        return $edit;
    }

     public function tambah_data($table_name,$data){

		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function hapus_data_keranjang($table_name,$id){
        $this->db->where('KodeKeranjang',$id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }

    public function ambil_data_keranjang($id){

        $this->db->from('keranjang');
        $this->db->where('KodeKeranjang',$id);
        $result = $this->db->get('');

        if($result->num_rows() > 0){

            return $result->row();
        }
    }

     public function update_tambah_Stok_beli($table_name,$data,$id){

        $this->db->where('KodeKeranjang',$id);
        $edit = $this->db->update($table_name,$data);
        return $edit;
    }

    public function auto_id_penjualan(){

        $kode = "PJ";
        $query = "SELECT max(id_penjualan) as kode_auto FROM keranjang";
        $data = $this->db->query($query)->row_array();
        $max_kode = $data['kode_auto'];
        $max_kode2 = (int)substr($max_kode, 12,4);
        $kodecount = $max_kode2+1;
        $kode_auto = $kode.date("omd").sprintf('%04s', $kodecount);
        return $kode_auto;
    }

     public function tampilkan_keranjang($kodepelanggan){

        $status = '1';
        $options = array('KodePelanggan' => $kodepelanggan,
                        'KodeStatus' => $status);

         $this->db->select('KodeKeranjang,
                            KodeBarang, 
                            NamaBarang,
                            Harga,
                            JumlahBeli,
                            (Harga * JumlahBeli) as TotalHarga');
        $this->db->from('keranjang');
        $this->db->where($options);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0){

            return $query->result();
        }
        else{

            echo "Error 404";
        }
    }

    public function get_sum($id){

        $kodestatus = '1';
        $options = array('KodeStatus' => $kodestatus,
                        'KodePelanggan' => $id);

        $this->db->select_sum('JumlahBeli');
        $this->db->from('keranjang');
        $this->db->where($options);
        return $this->db->get('')->row();
    }

   public function detailbarang($table_name,$id){

        $this->db->where('barang_id',$id);
        $get_user = $this->db->get($table_name);
        return $get_user->row();
    }
      public function joinkeranjang(){
        $this->db->select('*');
        $this->db->from('keranjang');
        $this->db->join('status', 'status.KodeStatus = keranjang.KodeStatus');
        $query = $this->db->get(); 
        return $query->result_array();

    }

    public function ambilbarang($table_name,$id){

        $this->db->where('KodeBarang', $id);
        $ambildata = $this->db->get($table_name);
        return $ambildata->row();
    }

    public function editstatus($table_name,$data,$id){

        $status = '1';
        $options = array('KodePelanggan' => $id,
                         'KodeStatus' => $status);

        $this->db->where($options);
        $edit = $this->db->update($table_name,$data);
        return $edit;
    }

    public function getproduk($table_name,$id){

        $this->db->where('KodeBarang', $id);
        $ambildata = $this->db->get($table_name);
        return $ambildata->row();
    }

    public function get($table_name,$id){

        $this->db->where('KodePenjualan', $id);
        $ambil = $this->db->get($table_name);
        return $ambil->row();
    }

    public function autoKode(){

        $kode = "PJ";
        $query = "SELECT max(KodePenjualan) as kode_auto FROM penjualan";
        $data = $this->db->query($query)->row_array();
        $max_kode = $data['kode_auto'];
        $max_kode2 = (int)substr($max_kode, 12,4);
        $kodecount = $max_kode2+1;
        $kode_auto = $kode.date("omd").sprintf('%04s', $kodecount);
        return $kode_auto;
    }


}