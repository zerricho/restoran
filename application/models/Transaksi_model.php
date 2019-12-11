<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_transaksi($id)
	{
		$query = null;
		if ($this->session->userdata('username')) {
			if ($id != 0) {
				$query = $this->db->where('id_order',$id)
								  ->join('pelanggan', 'pelanggan.id_pelanggan = order.id_pelanggan')
								  ->join('user', 'user.id_user = order.id_user')
								  ->get('order')
								  ->row();
			}else{
				$query = $this->db->join('pelanggan', 'pelanggan.id_pelanggan = order.id_pelanggan')
								  ->join('user', 'user.id_user = order.id_user')
								  ->get('order')
								  ->result();
			}
		}else{
			$query = $this->db->where('order.id_pelanggan',$this->session->userdata('id_pelanggan'))
							  ->join('pelanggan', 'pelanggan.id_pelanggan = order.id_pelanggan')
							  ->join('user', 'user.id_user = order.id_user')
							  ->get('order')
							  ->result();
		}
		return $query;
	}

	public function get_detail_order($id)
	{
		return $this->db->where('id_order',$id)
						->join('masakan','masakan.id_masakan = detail_order.id_masakan')
						->join('jenis','jenis.id_jenis = masakan.id_jenis')
						->get('detail_order')
						->result();
	}

	public function add_order($data)
	{
		
		$this->db->insert('order', $data);

		if ($this->db->affected_rows()) {
			return $this->db->insert_id();
		} else {
			return 0;
		}
	}

	public function add_order_detail($data)
	{
		$this->db->insert_batch('detail_order', $data);

		if ($this->db->affected_rows()) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function delete_order($id)
	{
		$this->db->where('id_order',$id)
				 ->delete('order');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function konfirmasi($id)
	{
		$object = array(
			'status' => 'success',
			'id_user' => $this->session->userdata('id_user')
		);
		$this->db->where('id_order', $id)
				 ->update('order', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete_transaksi($id)
	{
		$this->db->where('id_order',$id)
				 ->delete('order');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */