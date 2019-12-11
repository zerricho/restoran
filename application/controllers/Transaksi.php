<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('masakan_model');
	}
	
	public function index()
	{
		if ($this->session->userdata('username')) {
			$id = 0;
			$data['list_transaksi'] = $this->transaksi_model->get_transaksi($id);
			$data['list_masakan'] = $this->masakan_model->get_masakan($id);
			$data['main_menu'] = 'transaksi';
			$data['main_view'] = 'admin/transaksi_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function detail_transaksi($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_order'] = $this->transaksi_model->get_transaksi($id);
			$data['list_detail_order'] = $this->transaksi_model->get_detail_order($id);
			$data['main_menu'] = 'transaksi';
			$data['main_view'] = 'admin/detail_transaksi_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function add_transaksi()
	{
		if ($this->session->userdata('username') || $this->session->userdata('username_pelanggan')) {
			$masakan = $this->input->post('masakan');
			$keterangan_masakan = $this->input->post('keterangan_masakan');

			$harga = 0;
			foreach ($masakan as $datamasakan) {
				$harga = $this->masakan_model->get_masakan($datamasakan)->harga + $harga;
			}

			$data = null;
			if ($this->session->userdata('username_pelanggan')) {
				$data = array(
					'no_meja' => $this->input->post('no_meja'),
					'tanggal' => date('Y-m-d'),
					'id_user' => 2,
					'keterangan' => $this->input->post('keterangan'),
					'status' => 'pending',
					'id_pelanggan' => $this->session->userdata('id_pelanggan'),
					'total_bayar' => $harga
				);
			}else{
				$data = array(
					'no_meja' => $this->input->post('no_meja'),
					'tanggal' => date('Y-m-d'),
					'id_user' => $this->session->userdata('id_user'),
					'keterangan' => $this->input->post('keterangan'),
					'status' => 'pending',
					'id_pelanggan' => 4,
					'total_bayar' => $harga
				);
			}

			$id_order = $this->transaksi_model->add_order($data);
			if ($id_order != 0) {
				$detail = array();
				$index = 0;
				foreach ($masakan as $datamasakan) {
					array_push($detail, array(
						'id_order' => $id_order,
						'id_masakan' => $datamasakan,
						'keterangan' => $keterangan_masakan[$index],
						'status_detail_order' => 'done'
					));

					$index++;
				}

				if ($this->transaksi_model->add_order_detail($detail) == TRUE) {
					$this->session->set_flashdata('success', 'Transaksi Success');
					if ($this->session->userdata('username_pelanggan')) {
						redirect('pelanggan');
					}else{
						redirect('transaksi');
					}
				}else{
					if ($this->transaksi_model->delete_order($id_order)) {
						$this->session->set_flashdata('failed', 'Transaksi Failed');
						if ($this->session->userdata('username_pelanggan')) {
							redirect('pelanggan');
						}else{
							redirect('transaksi');
						}
					}else{
						$this->session->set_flashdata('failed', 'Transaksi Failed');
						if ($this->session->userdata('username_pelanggan')) {
							redirect('pelanggan');
						}else{
							redirect('transaksi');
						}
					}
				}
			}else{
				$this->session->set_flashdata('failed', 'Transaksi Failed');
				if ($this->session->userdata('username_pelanggan')) {
					redirect('pelanggan');
				}else{
					redirect('transaksi');
				}
			}
		}else{
			redirect('login');
		}
	}

	public function konfirmasi_pembayaran($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->transaksi_model->konfirmasi($id) == TRUE) {
				$this->session->set_flashdata('success', 'Konfirmasi Success');
				redirect('transaksi');
			}else{
				$this->session->set_flashdata('failed', 'Konfirmasi Failed');
				redirect('transaksi');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_transaksi($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->transaksi_model->delete_transaksi($id) == TRUE) {
				$this->session->set_flashdata('success', 'Delete Transaksi Success');
				redirect('transaksi');
			}else{
				$this->session->set_flashdata('failed', 'Delete Transaksi Failed');
				redirect('transaksi');
			}
		}else{
			redirect('login');
		}
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */