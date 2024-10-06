<?php
class Barang extends CI_Controller{
	public function __construct()
      {
         parent::__construct();
         $this->load->model('M_barang');
         $this->load->library('cfpdf');
      }

	function index(){
		$data['data']=$this->M_barang->ambil();
		$data['kode'] = $this->M_barang->kode_unik();
		$this->load->view('admin/v_barang',$data);
	}
	public function barang_basah(){
		$data['data'] = $this->M_barang->ambil_barang_basah();
		$data['kode'] = $this->M_barang->kode_unik();
		$this->load->view('admin/v_barang_basah',$data);
	}
	public function tambah_barang(){
	$barang_id = $this->input->post('kode');
	$barang_jenis = $this->input->post('barang_jenis');
	$barang_kategori=$this->input->post('barang_kategori');
	$barang_nama = $this->input->post('barang_nama');
	$barang_merk = $this->input->post('barang_merk');
	$barang_ukuran = $this->input->post('barang_ukuran');
	$barang_satuan = $this->input->post('barang_satuan');
	$barang_harga_beli = $this->input->post('barang_harga_beli');
	$barang_harga = $this->input->post('barang_harga');
	$barang_harga_jual = $this->input->post('barang_harga_jual');
	$barang_jumlah = $this->input->post('barang_jumlah');
	$barang_total_harga = $this->input->post('barang_total_harga');

	$data = array(
		'barang_jenis'=>$barang_jenis,
		'barang_kategori'=>$barang_kategori,
		'barang_id' => $barang_id,
		'barang_nama' => $barang_nama,
		'barang_merk' => $barang_merk,
		'barang_ukuran' => $barang_ukuran,
		'barang_satuan' => $barang_satuan,
		'barang_harga_beli' => $barang_harga_beli,
		'barang_harga' => $barang_harga,
		'barang_harga_jual' => $barang_harga_jual,
		'barang_jumlah' => $barang_jumlah,
		'barang_total_harga' => $barang_total_harga
	);
	
	$tambah = $this->M_barang->simpan_barang('tbl_barang',$data);
	redirect('Barang/index');
	}

	public function update($id){
		$barang_jenis = $_POST['barang_jenis'];
		$barang_kategori = $_POST['barang_kategori'];
		$barang_nama = $_POST['barang_nama'];
		$barang_merk = $_POST['barang_merk'];
		$barang_ukuran = $_POST['barang_ukuran'];
		$barang_satuan = $_POST['barang_satuan'];
		$barang_harga_beli = $_POST['barang_harga_beli'];
		$barang_harga = $_POST['barang_harga'];
		$barang_harga_jual = $_POST['barang_harga_jual'];
		$barang_jumlah = $_POST['barang_jumlah'];
		$barang_total_harga = $_POST['barang_total_harga'];


         	$data = array(
         		'barang_jenis'=>$barang_jenis,
         		'barang_kategori'=>$barang_kategori,
         		'barang_nama' => $barang_nama,
				'barang_merk' => $barang_merk,
				'barang_ukuran' => $barang_ukuran,
				'barang_satuan' => $barang_satuan,
				'barang_harga_beli' => $barang_harga_beli,
				'barang_harga' => $barang_harga,
				'barang_harga_jual' => $barang_harga_jual,
				'barang_jumlah' => $barang_jumlah,
				'barang_total_harga' => $barang_total_harga

			);
	
    
			$edit = $this->M_barang->edit('tbl_barang',$data ,$id );
			// echo $this->db->last_query();
			redirect('Barang/index');
		
	}

	public function hapus($id){
		$hapus = $this->M_barang->hapusData('tbl_barang',$id);
		if($hapus > 0){
			echo $this->session->set_flashdata('msg','<label class="alert alert-success" role="alert" >Hapus Berhasil</label>');
			redirect('Barang/index');
		}else{
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Hapus Gagal!</label>');
			redirect('Barang/index');
		}
	}

	public function laporanpenjualan(){
            
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(45);
        $pdf->Cell(100,0,'Daftar Barang',0,0,'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(0,0,0);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(0,0,0);
        $header = array('No', 'Nama barang', 'Merk', 'Ukuran', 'Satuan', 'Harga beli','Harga Jual');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
        $w = array(10, 43, 30, 40, 20, 25,25);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = false;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
    foreach ($this->M_barang->tampilkan() as $row):
    	$pdf->Cell($w[0],7,$i++,'LR',0,'L',$fill);
        $pdf->Cell($w[1],7,$row->barang_nama,'LR',0,'L',$fill); 
        $pdf->Cell($w[2],7,$row->barang_merk,'LR',0,'L',$fill);
        $pdf->Cell($w[3],7,$row->barang_ukuran,'LR',0,'L',$fill);
        $pdf->Cell($w[4],7,$row->barang_satuan,'LR',0,'L',$fill);
        $pdf->Cell($w[5],7,$row->barang_harga_beli,'LR',0,'L',$fill);
        $pdf->Cell($w[6],7,$row->barang_harga_jual,'LR',0,'L',$fill);

        $pdf->Ln();
        $fill = !$fill;
    endforeach;
    $pdf->Cell(array_sum($w),0,'','T');
        
        $pdf->Output();
        
    }


}