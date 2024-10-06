<?php
class Pembelian extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_pembelian');
	}
	function index(){
		$data['data']=$this->m_barang->tampil_barang();
		$data['kode'] = $this->m_pembelian->kode_unik_beli_header();
		$this->load->view('admin/v_pembelian',$data);
	}
	function get_barang(){
		$kobar=$this->input->post('kode_brg');
		$x['brg']=$this->m_barang->get_barang($kobar);
		$this->load->view('admin/v_detail_barang_jual',$x);
	}
	function add_to_cart(){

		$kobar=$this->input->post('kode_brg');
		$produk=$this->m_barang->get_barang($kobar);
		$i=$produk->row_array();
		$data = array(
               'id'       => $i['barang_id'],
               'name'     => $i['barang_nama'],
               'satuan'   => $i['barang_satuan'],
               'merk'	  => $i['barang_merk'],
               'ukuran'	  => $i['barang_ukuran'],
               'price'    => str_replace(",", "", $this->input->post('harjul')),
               'qty'      => $this->input->post('qty'),
               'amount'	  => str_replace(",", "", $this->input->post('harjul'))
            );

		$this->cart->insert($data);
			
		
		redirect('Pembelian/index');
	
	}
	function remove($row_id){
		$data = array(
               'rowid'      => $row_id,
               'qty'     => 0
            );
		$this->cart->update($data);
		redirect('Pembelian/index');
	}
		function simpan_pembelian(){
		$status=$this->input->post('tombol');
		$tgl=date('y/m/d');
		$costumer = $this->input->post('nama_cos');
		$total=str_replace(",", "", $this->input->post('total'));
		$jml_uang=str_replace(",", "", $this->input->post('jml_uang'));
		$kembalian=$jml_uang-$total;
		if(!empty($total) && !empty($jml_uang)){
			if($jml_uang < $total){
				echo $this->session->set_flashdata('msg','<label class="label label-danger">Jumlah Uang yang anda masukan Kurang</label>');
				redirect('pembelian/lanjut_trans');
			}else{
				$nofak=$this->m_pembelian->kode_unik_beli_header();
				$this->session->set_userdata('nofak',$nofak);
				$order_proses=$this->m_pembelian->simpan_pembelian($nofak,$total,$jml_uang,$kembalian,$tgl,$costumer,$status);
				if($order_proses){
					$this->cart->destroy();
					
					// $this->session->unset_userdata('tglfak');
					// $this->session->unset_userdata('suplier');
					$this->load->view('admin/alert_sukses_beli');	
				}else{
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_beli');
				}
			}
			
		}else{
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Transaksi Gagal di Simpan, Mohon Periksa Kembali Semua Inputan Anda!</label>');
			redirect('pembelian/lanjut_trans');
		}
	}

	function cetak_faktur(){
		$x['data']=$this->m_pembelian->cetak_faktur();
		$this->load->view('admin/v_faktur_beli',$x);
		//$this->session->unset_userdata('nofak');
	}
	function cetak_faktur_nontunai(){
		$x['data']=$this->m_pembelian->cetak_faktur();
		$this->load->view('admin/v_faktur_beli_nontunai',$x);
		//$this->session->unset_userdata('nofak');
	}

	function add(){
		$nabar=$this->input->post('nabar');
		$merk=$this->input->post('merk');
		$ukuran=$this->input->post('ukuran');
		$satuan=$this->input->post('satuan');
		$harga_belir=str_replace(',', '', $this->input->post('harga_belir'));
		$stok=str_replace(',', '', $this->input->post('stok'));
		#$total=$this->input->post('');
		$tgl= date('Y-m-d');
		$this->m_barang->simpan_barang($nabar,$merk,$ukuran,$satuan,$harga_belir,$stok,$tgl);

		echo "good";
	}
	function simpan_detail_barang(){

	$cart = $this->cart->contents();
      foreach($cart as $item){
        $data = array(
        'bd_barang_id'=>$item['id'],
		'bd_barang_nama'=>$item['name'],
		'bd_barang_merk'=>$item['merk'],
		'bd_barang_ukuran'=>$item['ukuran'],
		'bd_barang_satuan'=>$item['satuan'],
		'bd_barang_harga_beli'=>$item['price'],
		'bd_barang_jumlah'=>$item['qty'],
		'bd_barang_total'=>$item['subtotal'],
		'tb_id'=>$this->input->post('kode')
        );
        $this->db->insert('tbl_beli_detail',$data);
        

      }
      redirect('Pembelian/lanjut_trans');

  }
  function lanjut_trans(){
  	$data['data']=$this->m_suplier->tampil_suplier();
	$data['kode'] = $this->m_pembelian->kode_unik_beli_header();
	$this->load->view('admin/v_transaksi_pembelian',$data);
}

	function simpan(){
		$status=$this->input->post('tombol');
		$tgl=date('y/m/d');
		$costumer = $this->input->post('nama_cos');
		$total=str_replace(",", "", $this->input->post('total'));
		$tempo=$this->input->post('tempo');
				$nofak=$this->m_pembelian->kode_unik_beli_header();
				$this->session->set_userdata('nofak',$nofak);
				$order_proses=$this->m_pembelian->simpan($nofak,$total,$tgl,$costumer,$tempo,$status);
				if($order_proses){
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_beli_nontunai');	
				}else{
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_beli_nontunai');
				}
	}





}