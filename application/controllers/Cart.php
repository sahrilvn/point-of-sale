<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct()
      {
         parent::__construct();
         $this->load->model('M_cart');
      }	

     public function index($id)
     {
      	 
      $data['barang'] = $this->M_cart->tampilkan_keranjang($id);
      $data['sum_jumlah'] = $this->M_cart->get_sum($id);
      $this->load->view('v_cart', $data);
     }

    public function data_keranjang(){
       $id = $this->session->userdata("kode");

    if ($id != '') {
      
      $data['barang'] = $this->model_keranjang->tampilkan_keranjang($id);
      $data['sum_jumlah'] = $this->model_keranjang->get_sum($id);
      $this->load->view('Keranjang', $data);
    }
    else{

      redirect('welcome/berandalogin');
    }
  }

	public function masukan_keranjang()
    {
      $kodepelanggan    = $this->session->userdata('kode');
      $kodebarang       = $_POST['KodeBarang'];
	    $namabarang       = $_POST['NamaBarang'];
	    $harga            = $_POST['Harga'];

      if ($kodepelanggan != '') {

          $data = $this->model_keranjang->ambil_id_keranjang($kodepelanggan,$kodebarang);

          if($data->KodePelanggan == $kodepelanggan || $data->KodeBarang == $kodebarang || $data->KodeStatus == '1'){

            $i = $data->JumlahBeli + 1;

            $data = array('JumlahBeli'=> $i);

            $edit = $this->model_keranjang->updateStok('keranjang', $data,$kodepelanggan, $kodebarang);

              if ($edit > 0){

                redirect('welcome/berandalogin');
              }
              else{

                echo "Gagal Update!";
              }
           }
           else{

             $data = array('KodeBarang'=> $kodebarang,'NamaBarang'=> $namabarang, 'Harga'=> $harga, 'JumlahBeli'=> 1,'KodeStatus'=> '1', 'KodePelanggan'=> $kodepelanggan);

             $tambah = $this->model_keranjang->tambah_data('keranjang',$data);

              if($tambah > 0){

                redirect('welcome/berandalogin');
              }
              else{

                echo "gagal Masukan ke keranjang!";
              }        
          }
      }
      else{

        echo"hai";
      }
  }

  public function hapus($id)
  {
  $hapus = $this->model_keranjang->hapus_data_keranjang('keranjang',$id);
    if($hapus > 0){
      redirect('welcome/berandalogin');
    }else{
      echo "Gagal menghapus!";
    }

  }

    //kurangi stok produk pembelian!

   public function kurang_qty($id){

     $data = $this->model_keranjang->ambil_data_keranjang($id);

     $i = $data->JumlahBeli - 1;

     $data = array('JumlahBeli'=> $i);

     $edit = $this->model_keranjang->update_tambah_Stok_beli('keranjang', $data,$id);

     if ($edit > 0){

        redirect('Keranjang_controller/data_keranjang');
     }
     else{

        echo "Gagal Update!";
     }
  }

    //Tambah stok produk pembelian!

  public function tambah_qty($id){

     $data = $this->model_keranjang->ambil_data_keranjang($id);

     $i = $data->JumlahBeli + 1;

     $data = array('JumlahBeli'=> $i);

     $edit = $this->model_keranjang->update_tambah_Stok_beli('keranjang', $data,$id);

     if ($edit > 0){

        redirect('Keranjang_controller/data_keranjang');
     }
     else{

        echo "Gagal Update!";
    }
  }

 

}

