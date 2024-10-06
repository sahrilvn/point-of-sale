<?php
class Laporan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
		$this->load->model('m_penjualan');
		$this->load->model('m_barang');
	}
	function index(){
		$data['data']=$this->m_laporan->get();
		$data['datas']=$this->m_penjualan->cetak_faktur();
		$data['jual_bln']=$this->m_laporan->get_bulan_jual();
		$data['jual_thn']=$this->m_laporan->get_tahun_jual();
		$this->load->view('admin/v_laporan',$data);
	}
	public function lapor(){
		$data['jual_bln']=$this->m_laporan->get_bulan_jual();
		$data['jual_thn']=$this->m_laporan->get_tahun_jual();
		$this->load->view('laporan/v_laporan',$data);
	}
	public function cetak($id){
		$data['print'] = $this->m_laporan->join($id);
		$data['data'] = $this->m_laporan->data();
		$kode = $this->db->get('tbl_jual_detail',array('jd_tj_id'));

		if ($id != $kode) {
			$this->load->view('admin/v_cetak',$data);
		}else{
			echo "gagal";
		}
		
	}

	public function hapus($id){
		$hapus = $this->m_laporan->hapusData('tbl_jual_header',$id);
		if($hapus > 0){
			echo $this->session->set_flashdata('msg','<label class="alert alert-success" role="alert" >Hapus Berhasil</label>');
			redirect('Laporan/index');
		}else{
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Hapus Gagal!</label>');
			redirect('Laporan/index');
		}
	}

	public function update($id){
		$tunggakan = str_replace(",", "", $_POST['tunggakan']);
		$uang = str_replace(",", "", $_POST['uang']);
		$total = str_replace(",", "", $_POST['total']);
		$tunai = $_POST['tunai'];
		$status = $_POST['status'];
		$tgl = $_POST['tgl'];

         	$data = array(
         		'tj_tunggakan' => $tunggakan-$tunai,
				'tj_jumlah_uang' => $uang+$tunai,
				'tj_kembalian' => $tunai-$tunggakan,
				'tj_tempo_bayar'=>$tgl,
				'tj_status' => $status);
         	$this->session->set_userdata('nofak',$id);
         	$edit = $this->m_laporan->edit('tbl_jual_header',$data ,$id );
         	$this->load->view('admin/alert_sukses');
	}

	public function lap_data_barang(){
		$kategori = $this->input->post('kategori');
		$data['data']=$this->m_barang->ambil_barang($kategori);
		$data['kop']=$this->m_laporan->get_kop_surat();
		$this->load->view('laporan/v_lap_barang',$data);
	}

	public function lap_data_barang_basah(){
		$data['data']=$this->m_barang->ambil_barang_basah();
		$data['kop']=$this->m_laporan->get_kop_surat();
		$this->load->view('laporan/v_lap_barang_basah',$data);
	}

	public function lap_data_barang_pembeli(){
		$kategori = $this->input->post('kategori');
		$data['data']=$this->m_barang->ambil_barang($kategori);
		$data['kop']=$this->m_laporan->get_kop_surat();
		$this->load->view('laporan/v_lap_barang_pembeli',$data);
	}

	public function lap_data_barang_pembeli_basah(){
		$data['data']=$this->m_barang->ambil_barang_basah();
		$data['kop']=$this->m_laporan->get_kop_surat();
		$this->load->view('laporan/v_lap_barang_pembeli_basah',$data);
	}

	public function lap_penjualan_pertanggal(){
		$tanggal=$this->input->post('tgl');
		$x['jml']=$this->m_laporan->get_data__total_jual_pertanggal($tanggal);
		$x['data']=$this->m_laporan->get_data_jual_pertanggal($tanggal);
		$this->load->view('laporan/v_lap_jual_pertanggal',$x);
	}
	public function lap_penjualan_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->m_laporan->get_total_jual_perbulan($bulan);
		$x['data']=$this->m_laporan->get_jual_perbulan($bulan);
		$this->load->view('laporan/v_lap_jual_perbulan',$x);
	}
	public function lap_penjualan_pertahun(){
		$tahun=$this->input->post('thn');
		$x['jml']=$this->m_laporan->get_total_jual_pertahun($tahun);
		$x['data']=$this->m_laporan->get_jual_pertahun($tahun);
		$this->load->view('laporan/v_lap_jual_pertahun',$x);
	}
	public function add_barang_kering(){
		$id=$this->m_laporan->kode();
		$data = array(
			'id'=>$id,
			'email' =>$this->input->post('email'),
			'telp'  =>$this->input->post('telp'),
			'office'=>$this->input->post('office'),
			'suplier'=>$this->input->post('suplier'),
			'periode'=>$this->input->post('periode')
		);
		$this->session->set_userdata('id',$id);

		$this->db->insert('tbl_kop_surat',$data);
		redirect('laporan/lapor');
	}
	
}