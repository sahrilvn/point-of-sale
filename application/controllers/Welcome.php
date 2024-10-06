<?php
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index(){
		$data['data']=$this->m_barang->tampil_barang();
		$this->load->view('admin/v_barang',$data);
	}
	
}