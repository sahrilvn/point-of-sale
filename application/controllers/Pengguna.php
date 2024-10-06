<?php
class Pengguna extends CI_Controller{
	public function __construct()
      {
         parent::__construct();
         $this->load->model('M_pengguna');
      }
	
	function index(){
		$data['data']=$this->M_pengguna->get_pengguna();
		$this->load->view('admin/v_pengguna',$data);
	}
	
	public function tambah_pengguna(){

	$user_nama = $this->input->post('user_nama');
	$user_username = $this->input->post('user_username');
	$user_password = $this->input->post('user_password');
	$user_password2 = $this->input->post('user_password2');

	$data = array(
		'user_nama' => $user_nama,
		'user_username' => $user_username,
		'user_password' => $user_password,
		'user_password' => $user_password2
	);



	if($user_password != $user_password2){
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Password yang Anda Masukan Tidak Sama</label>');
			redirect('Pengguna/index');
		}else{
			$tambah = $this->M_pengguna->simpan_pengguna('tbl_user',$data);
			echo $this->session->set_flashdata('msg','<label class="label label-success">Pengguna Berhasil ditambahkan</label>');
			redirect('Pengguna/index');
		}

	}
	public function update($id){
		
		$user_nama = $_POST['user_nama'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		$user_password2 = $_POST['user_password2'];


         	$data = array(
         		'user_nama' => $user_nama,
				'user_username' => $user_username,
				'user_password' => $user_password,
				'user_password' => $user_password2);
		
			
     if($user_password != $user_password2){
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Password yang Anda Masukan Tidak Sama</label>');
			redirect('Pengguna/index');
		}else{
			$edit = $this->M_pengguna->edit('tbl_user',$data ,$id );
			echo $this->session->set_flashdata('msg','<label class="label label-success">Pengguna Berhasil diupdate</label>');
			redirect('Pengguna/index');
		}
	}


	public function hapus($id){
		$hapus = $this->M_pengguna->hapusData('tbl_user',$id);
		if($hapus > 0){
			echo $this->session->set_flashdata('msg','<label class="label label-success">Pengguna Berhasil dihapus</label>');
			redirect('Pengguna/index');
		}else{
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Hapus Gagal!</label>');
			redirect('Pengguna/index');
		}
	}
}