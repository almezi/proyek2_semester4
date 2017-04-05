<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $var,$data;
	public function __construct(){
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper(array('url','form','html'));
		$this->load->library(
			array('form_validation','table','session'));
		if (isset($this->session->userdata('nama'))){

			echo "sudah login";
		}
		else
				$this->form_login();
	}
	public function form_login()
	{
		# code...
	}
	 public function lihat(){
		 $data['hasil'] = $this->model->m_model();
		 $this->load->view('listing',$data);
	 }
	 public function tambah(){
		 $this->load->view('tambah');
	 }
	 public function simpan(){
		 $this->m_model->simpan();
		 redirect('welcome/lihat');
	 }
	 public function edit(){
		 $primarykey=$this->uri->segment(3);
		 $data['edit']=$this->M_model->getDataById($primarykey);
	 }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$ceklogin = $this->m_model->ceklogin();
		if($ceklogin->num_rows() > 0){
			$hasil = $ceklogin->row();
			if($hasil->password()==$this->input->post('password')){
				$this->session->set_userdata('username',$hasil->username);
				$this->session->set_userdata('username',$hasil->hakakses);
				echo "terdaftar";
			}
		}
		else{
			echo "tidak terdaftar";
		}
	}
}
