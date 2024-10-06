<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	public function index(){
		$this->load->view('v_cetak');
	}

	function laporan_pdf(){
		$data = array(
			"Dataku"=>array(
				"nama"=>"S",
				"Email"=>"@.com")
		);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->filename = "Laporan-s.pdf";
		$this->pdf->load_view('v_cetak',$data);
	}
}
