<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('pelanggan_model');
		$this->load->model('admin_model');
		$this->load->model('masakan_model');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			$id = 0;
			$data['list_transaksi'] = $this->transaksi_model->get_transaksi($id);
			$data['list_pelanggan'] = $this->pelanggan_model->get_pelanggan($id);
			$data['list_admin'] = $this->admin_model->get_admin($id);
			$data['list_masakan'] = $this->masakan_model->get_masakan($id);
			$data['main_menu'] = 'dashboard';
			$data['main_view'] = 'admin/dashboard_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */