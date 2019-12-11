<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_pelanggan($id)
	{
		$query = null;
		if ($id != 0) {
			$query = $this->db->where('id_pelanggan',$id)
							  ->where('username !=','none')
							  ->get('pelanggan')
							  ->row();
		}else{
			$query = $this->db->where('username !=','none')
							  ->get('pelanggan')
							  ->result();
		}
		return $query;
	}

	public function add_pelanggan()
	{
		$object = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('pelanggan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit_pelanggan()
	{
		$object = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->where('id_pelanggan', $this->input->post('id_pelanggan'))
				 ->update('pelanggan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete_pelanggan($id)
	{
		$this->db->where('id_pelanggan',$id)
				 ->delete('pelanggan');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Pelanggan_model.php */
/* Location: ./application/models/Pelanggan_model.php */