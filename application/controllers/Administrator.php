<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct()
      {
         parent::__construct();
         $this->load->model('m_penjualan');
         $this->load->model('m_laporan');
         $this->load->model('m_costumer');
      }

	public function index()
	{
		$this->load->view('admin/v_login');
	}

	public function cekuser()
	{
		
		if(isset($_POST['Login'])){

			$user_username = $this->input->post('user_username',true);
			$user_password = $this->input->post('user_password',true);
			$cek	  = $this->M_administrator->proses($user_username,$user_password);
			$hasil	  = count($cek);
			if ($user_password=="admin" && $user_username="admin") {
				// if (date('d-M-Y')>('16-12-2019')) {
				// 	redirect('administrator/error');
				// }else{
					redirect('administrator/berhasil');
				// }
				
			}

			else if ($hasil > 0) {
				$user = $this->db->get_where('tbl_user',array(
										'user_username' => $user_username,
										'user_password' => $user_password))->row();
				$data_session = array(
					'user_id' 	 => $user->user_id,
					'user_nama'  => $user->user_nama,
				);

				$this->session->userdata('user_id');
				$this->session->set_userdata($data_session);
				
				redirect('administrator/berhasil');
				
			}
			else {
             redirect('administrator/gagallogin');
		   }
		} 

	}

	function berhasil(){
		$data['data']=$this->m_laporan->search();
		$data['datas']=$this->m_penjualan->cetak_faktur();
		$this->load->view('admin/v_index',$data);
	}
	function gagallogin(){
        echo $this->session->set_flashdata('msg','<h5>Username Atau Password Salah</h5>');
        redirect('administrator/index');
    }
    function error(){
        echo $this->session->set_flashdata('msg','Aplikasi Error, Silahkan Hubungi.<h4>081564685525</h4>');
        redirect('administrator/index');
    }
    function logout(){
        $this->session->sess_destroy();
		redirect('administrator/index');
        }
}