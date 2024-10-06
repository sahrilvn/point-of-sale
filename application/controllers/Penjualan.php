<?php
class Penjualan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_penjualan');
		$this->param = array();
		$this->load->model('m_costumer');
		$this->load->library('cfpdf');
	}
	function index(){
		$data['datas']=$this->m_barang->tampil_barang();
		$data['data']=$this->m_costumer->tampil_costumer();
		$data['kode'] = $this->m_penjualan->kode_unik_jual_header();
		$this->load->view('admin/v_penjualan',$data);
	}
	function get_barang(){
	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
		$kobar=$this->input->post('kode_brg');
		$x['brg']=$this->m_barang->get_barang($kobar);
		$this->load->view('admin/v_detail_barang_jual',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
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
			
		
		redirect('Penjualan/index');

	}
	function remove($row_id){
		$data = array(
               'rowid'      => $row_id,
               'qty'     => 0
            );
		$this->cart->update($data);
		redirect('Penjualan/index');
	}
	function update_qty($row_id){
		$data= array(
			'rowid'=>$row_id,
			'qty'=>$this->input->post('qty'));
		$this->cart->update($data);
		echo $this->db->last_query();
		redirect('Penjualan/index');
	}
	function simpan_penjualan(){
		$status=$this->input->post('tombol');
		$tgl=date('y/m/d');
		$costumer = $this->input->post('nama_cos');
		$total=str_replace(",", "", $this->input->post('total'));
		$jml_uang=str_replace(",", "", $this->input->post('jml_uang'));
		$kembalian=$jml_uang-$total;
		if(!empty($total) && !empty($jml_uang)){
			if($jml_uang < $total){
				echo $this->session->set_flashdata('msg','<label class="label label-danger">Jumlah Uang yang anda masukan Kurang</label>');
				redirect('penjualan/lanjut_trans');
			}else{
				$nofak=$this->m_penjualan->kode_unik_jual_header();
				$this->session->set_userdata('nofak',$nofak);
				$order_proses=$this->m_penjualan->simpan_penjualan($nofak,$total,$jml_uang,$kembalian,$tgl,$costumer,$status);
				if($order_proses){
					$this->cart->destroy();
					
					// $this->session->unset_userdata('tglfak');
					// $this->session->unset_userdata('suplier');
					$this->load->view('admin/alert/alert_sukses');

				}else{
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses');	
				}
			}
			
		}else{
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Transaksi Gagal di Simpan, Mohon Periksa Kembali Semua Inputan Anda!</label>');
			redirect('penjualan/lanjut_trans');
		}
	}

		function simpan(){
		$status=$this->input->post('tombol');
		$tgl=date('y/m/d');
		$costumer = $this->input->post('nama_cos');
		$total=str_replace(",", "", $this->input->post('total'));
		$tempo=$this->input->post('tempo');
				$nofak=$this->m_penjualan->kode_unik_jual_header();
				$this->session->set_userdata('nofak',$nofak);
				$order_proses=$this->m_penjualan->simpan($nofak,$total,$tgl,$costumer,$tempo,$status);
				if($order_proses){
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_nontunai');	
				}else{
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_nontunai');
				}
	}

	function cetak_faktur(){
		$x['data']=$this->m_penjualan->cetak_faktur();
		$this->load->view('admin/v_faktur',$x);
		//$this->session->unset_userdata('nofak');
	}
	function cetak_faktur_nontunai(){
		$x['data']=$this->m_penjualan->cetak_faktur();
		$this->load->view('admin/v_faktur_nontunai',$x);
		//$this->session->unset_userdata('nofak');
	}

	public function add(){
		$kop_surat = $this->input->post('kop_surat');
		$office = $this->input->post('office');
		$telpon = $this->input->post('telpon');
		$email  = $this->input->post('email');
		$periode = $this->input->post('periode');
		$kepada = $this->input->post('kepada');
		$total = $this->input->post('total');
		$tgl=date('y/m/d');

		$nofak=$this->m_penjualan->kode_unik_jual_header();
			   $this->session->set_userdata('nofak',$nofak);
		$order_proses=$this->m_penjualan->kirim($nofak,$kop_surat,$office,$telpon,$email,$periode,$kepada,$total,$tgl);
				if($order_proses){
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_nontunai');	
				}else{
					$this->cart->destroy();
					$this->load->view('admin/alert_sukses_nontunai');
				}
	}


	function simpan_detail_barang(){
	$cart = $this->cart->contents();
      foreach($cart as $item){
        $data = array(
        'jd_barang_id'=>$item['id'],
		'jd_barang_nama'=>$item['name'],
		'jd_barang_merk'=>$item['merk'],
		'jd_barang_ukuran'=>$item['ukuran'],
		'jd_barang_satuan'=>$item['satuan'],
		'jd_barang_harga_jual'=>$item['price'],
		'jd_barang_jumlah'=>$item['qty'],
		'jd_barang_total'=>$item['subtotal'],
		'jd_tj_id'=>$this->input->post('kode')
        );
        $this->db->insert('tbl_jual_detail',$data);
        

      }
    redirect('Penjualan/lanjut_trans');

}

function lanjut_trans(){
	$data['data']=$this->m_costumer->tampil_costumer();
	$data['kode'] = $this->m_penjualan->kode_unik_jual_header();
	$this->load->view('admin/v_kop_surat',$data);
}

function laporanpenjualan(){
            
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(45);
        $pdf->Cell(100,0,'Laporan Data Penjualan',0,0,'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(0,0,0);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(0,0,0);
        $header = array('No', 'Nama Costumer', 'Tanggal', 'Tempo Bayar', 'Total', 'Jumlah Uang');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
        $w = array(30, 30, 24, 40, 35, 27);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = false;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
    foreach ($this->m_penjualan->tampilkan() as $row):
        $pdf->Cell($w[0],6,$row->barang_nama,'LR',0,'L',$fill); 
        $pdf->Cell($w[1],6,$row->barang_merk,'LR',0,'L',$fill);
        $pdf->Cell($w[2],6,$row->barang_ukuran,'LR',0,'L',$fill);
        $pdf->Cell($w[3],6,$row->barang_satuan,'LR',0,'L',$fill);
        $pdf->Cell($w[4],6,$row->barang_harga_beli,'LR',0,'L',$fill);
        $pdf->Cell($w[5],6,$row->barang_harga_jual,'LR',0,'L',$fill);
        $pdf->Ln();
        $fill = !$fill;
    endforeach;
    $pdf->Cell(array_sum($w),0,'','T');
        
        $pdf->Output();
        
    }

}