<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		$this->load->model('masakan_model');
		$this->load->model('transaksi_model');
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('username_pelanggan')) {
			$id = 0;
			$data['list_masakan'] = $this->masakan_model->get_masakan($id);
			$data['list_transaksi'] = $this->transaksi_model->get_transaksi($id);
			$data['main_view'] = 'pelanggan/pelanggan_view';
			$this->load->view('template', $data);
		}else {
			redirect('login/login_pelanggan');
		}
	}

	public function detail_pelanggan($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_pelanggan'] = $this->pelanggan_model->get_pelanggan($id);
			$data['main_menu'] = 'pelanggan';
			$data['main_view'] = 'admin/detail_pelanggan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function list_pelanggan()
	{
		if ($this->session->userdata('username')) {
			$id = 0;
			$data['list_pelanggan'] = $this->pelanggan_model->get_pelanggan($id);
			$data['main_menu'] = 'pelanggan';
			$data['main_view'] = 'admin/list_pelanggan_view';
			$this->load->view('template', $data);
		}else {
			redirect('login');
		}
	}

	public function edit_pelanggan($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_pelanggan'] = $this->pelanggan_model->get_pelanggan($id);
			$data['main_menu'] = 'pelanggan';
			$data['main_view'] = 'admin/edit_pelanggan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function proses_edit()
	{
		if ($this->session->userdata('username')) {
			if ($this->pelanggan_model->edit_pelanggan() == TRUE) {
				$this->session->set_flashdata('success', 'Edit Pelanggan Success');
				redirect('pelanggan/list_pelanggan');
			}else{
				$this->session->set_flashdata('failed', 'Edit Pelanggan Failed');
				redirect('pelanggan/edit_pelanggan/'+$this->input->post('id_pelanggan'));
			}
		}else{
			redirect('login');
		}
	}

	public function add_pelanggan()
	{
		if ($this->session->userdata('username')) {
			if ($this->pelanggan_model->add_pelanggan() == TRUE) {
				$this->session->set_flashdata('success', 'Add Pelanggan Success');
				redirect('pelanggan/list_pelanggan');
			}else{
				$this->session->set_flashdata('failed', 'Add Pelanggan Failed');
				redirect('pelanggan/list_pelanggan');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_pelanggan($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->pelanggan_model->delete_pelanggan($id) == TRUE) {
				$this->session->set_flashdata('success', 'Delete Pelanggan Success');
				redirect('pelanggan/list_pelanggan');
			}else{
				$this->session->set_flashdata('failed', 'Delete Pelanggan Failed');
				redirect('pelanggan/list_pelanggan');
			}
		}else{
			redirect('login');
		}
	}
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */