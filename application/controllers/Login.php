<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if (!$this->session->userdata('username')) {
			$this->load->view('admin/login_view');
		}else {
			redirect('dashboard');
		}
	}

	public function login_pelanggan()
	{
		if (!$this->session->userdata('username_pelanggan')) {
			$this->load->view('pelanggan/login_pelanggan_view');
		}else {
			redirect('pelanggan');
		}
	}

	public function register_pelanggan()
	{
		$this->load->view('pelanggan/register_view');
	}

	public function proses_register()
	{
		if ($this->login_model->proses_register() == TRUE) {
			$this->session->set_flashdata('success', 'Register Success');
			redirect('login/login_pelanggan');
		}else{
			$this->session->set_flashdata('failed', 'Register failed');
			redirect('login/register_pelanggan');
		}
	}

	public function proses_login(){
		if ($this->login_model->proses_login() == TRUE) {
			$this->session->set_flashdata('success', 'Login Success');
			redirect('dashboard');
		}else {
			$this->session->set_flashdata('failed', 'Login Failed');
			redirect('login');
		}
	}

	public function proses_login_pelanggan()
	{
		if ($this->login_model->proses_login_pelanggan() == TRUE) {
			$this->session->set_flashdata('success', 'Login Success');
			redirect('pelanggan');
		}else {
			$this->session->set_flashdata('failed', 'Login Failed');
			redirect('login/login_pelanggan');
		}
	}

	public function logout()
	{
		if ($this->session->userdata('username')) {
			$this->session->sess_destroy();
			redirect('login');	
		}elseif ($this->session->userdata('username_pelanggan')) {
			$this->session->sess_destroy();
			redirect('login/login_pelanggan');	
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */