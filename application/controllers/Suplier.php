<?php
class Suplier extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_suplier');
	}
	function index(){	
		$data['data']=$this->M_suplier->tampil_suplier();
		$this->load->view('admin/v_suplier',$data);
	}
	function tambah_suplier(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$norek=$this->input->post('norek');
		$balance=$this->input->post('balance');
		$debit=$this->input->post('debit');
		$this->M_suplier->simpan_suplier($nama,$alamat,$notelp,$norek,$balance,$debit);
		redirect('Suplier/index');	
	}
	function edit_suplier(){
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$norek=$this->input->post('norek');
		$balance=$this->input->post('balance');
		$debit=$this->input->post('debit');
		$this->M_suplier->update_suplier($kode,$nama,$alamat,$notelp,$norek,$balance,$debit);
		redirect('Suplier/index');
	}
	function hapus_suplier(){
		$kode=$this->input->post('kode');
		$this->M_suplier->hapus_suplier($kode);
		redirect('Suplier/index');
	}
}