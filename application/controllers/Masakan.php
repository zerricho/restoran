<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masakan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masakan_model');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			$id = 0;
			$data['list_masakan'] = $this->masakan_model->get_masakan($id);
			$data['list_jenis'] = $this->masakan_model->get_jenis();
			$data['main_menu'] = 'masakan';
			$data['main_view'] = 'admin/masakan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function detail_masakan($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_masakan'] = $this->masakan_model->get_masakan($id);
			$data['main_menu'] = 'masakan';
			$data['main_view'] = 'admin/detail_masakan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function edit_masakan($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_masakan'] = $this->masakan_model->get_masakan($id);
			$data['main_menu'] = 'masakan';
			$data['main_view'] = 'admin/edit_masakan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function proses_edit()
	{
		if ($this->session->userdata('username')) {
			if ($this->masakan_model->edit_masakan() == TRUE) {
				$this->session->set_flashdata('success', 'Edit Masakan Success');
				redirect('masakan');
			}else{
				$this->session->set_flashdata('failed', 'Edit Masakan Failed');
				redirect('masakan/edit_masakan/'+$this->input->post('id_masakan'));
			}
		}else{
			redirect('login');
		}
	}

	public function add_masakan()
	{
		if ($this->session->userdata('username')) {
			if ($this->masakan_model->add_masakan() == TRUE) {
				$this->session->set_flashdata('success', 'Add Masakan Success');
				redirect('masakan');
			}else{
				$this->session->set_flashdata('failed', 'Add Masakan Failed');
				redirect('masakan');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_masakan($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->masakan_model->delete_masakan($id) == TRUE) {
				$this->session->set_flashdata('success', 'Delete Masakan Success');
				redirect('masakan');
			}else{
				$this->session->set_flashdata('failed', 'Delete Masakan Failed');
				redirect('masakan');
			}
		}else{
			redirect('login');
		}
	}
}

/* End of file Masakan.php */
/* Location: ./application/controllers/Masakan.php */