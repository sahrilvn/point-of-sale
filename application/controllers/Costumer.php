<?php
class Costumer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_costumer');
	}
	function index(){	
		$data['data']=$this->M_costumer->tampil_costumer();
		$this->load->view('admin/v_costumer',$data);
	}
	function get(){
		$data['data']=$this->M_costumer->tampil_costumer();
		$this->load->view('admin/v_penjualan',$data);
		$this->load->view('admin/v_pembelian',$data);
	}
	function tambah_costumer(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$norek=$this->input->post('norek');
		$balance=$this->input->post('balance');
		$debit=$this->input->post('debit');
		$this->M_costumer->simpan_costumer($nama,$alamat,$notelp,$norek,$balance,$debit);
		redirect('Costumer/index');	
	}
	function edit_costumer(){
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$norek=$this->input->post('norek');
		$balance=$this->input->post('balance');
		$debit=$this->input->post('debit');
		$this->M_costumer->update_costumer($kode,$nama,$alamat,$notelp,$norek,$balance,$debit);
		redirect('Costumer/index');
	}
	function hapus_costumer(){
		$kode=$this->input->post('kode');
		$this->M_costumer->hapus_costumer($kode);
		redirect('Costumer/index');
	}
}