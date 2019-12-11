<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level_name') == 'superadmin') {
				$id = 0;
				$data['list_admin'] = $this->admin_model->get_admin($id);
				$data['main_menu'] = 'admin';
				$data['main_view'] = 'admin/admin_view';
				$this->load->view('template', $data);	
			}else {
				redirect('dashboard');
			}
		}else{
			redirect('login');
		}
	}

	public function add_admin()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level_name') == 'superadmin') {
				if ($this->admin_model->add_admin() == TRUE) {
					$this->session->set_flashdata('success', 'Add Admin Success');
					redirect('admin');
				}else{
					$this->session->set_flashdata('failed', 'Add Admin Failed');
					redirect('admin');
				}
			}else {
				redirect('dashboard');
			}
		}else{
			redirect('login');
		}
	}

	public function edit_admin($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level_name') == 'superadmin') {
				$data['list_level'] = $this->admin_model->get_level();
				$data['list_admin'] = $this->admin_model->get_admin($id);
				$data['main_menu'] = 'admin';
				$data['main_view'] = 'admin/edit_admin_view';
				$this->load->view('template', $data);	
			}else {
				redirect('dashboard');
			}
		}else{
			redirect('login');
		}
	}

	public function proses_edit()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level_name') == 'superadmin') {
				if ($this->admin_model->edit_admin() == TRUE) {
					$this->session->set_flashdata('success', 'Edit Admin Success');
					redirect('admin');
				}else{
					$this->session->set_flashdata('failed', 'Edit Admin Failed');
					redirect('admin');
				}
			}else {
				redirect('dashboard');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_admin($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level_name') == 'superadmin') {
				if ($this->admin_model->delete_admin($id) == TRUE) {
					$this->session->set_flashdata('success', 'Delete Admin Success');
					redirect('admin');
				}else{
					$this->session->set_flashdata('failed', 'Delete Admin Failed');
					redirect('admin');
				}
			}else {
				redirect('dashboard');
			}
		}else{
			redirect('login');
		}
	}

	public function detail_admin($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level_name') == 'superadmin') {
				$data['list_admin'] = $this->admin_model->get_admin($id);
				$data['main_menu'] = 'admin';
				$data['main_view'] = 'admin/detail_admin_view';
				$this->load->view('template', $data);	
			}else {
				redirect('dashboard');
			}
		}else{
			redirect('login');
		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */