<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function proses_login()
	{
		$query = $this->db->where('username', $this->input->post('username'))
						  ->where('password', md5($this->input->post('password')))
						  ->join('level','level.id_level = user.id_level')
						  ->get('user');
		if ($query->num_rows() > 0) {
			$array = array(
				'username' => $this->input->post('username'),
				'id_user' => $query->row()->id_user,
				'level_name' => $query->row()->nama_level,
				'nama_user' => $query->row()->nama_user
			);

			$this->session->set_userdata( $array );
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function proses_login_pelanggan()
	{
		$query = $this->db->where('username', $this->input->post('username'))
						  ->where('password', $this->input->post('password'))
						  ->get('pelanggan');
		if ($query->num_rows() > 0) {
			$array = array(
				'username_pelanggan' => $this->input->post('username'),
				'id_pelanggan' => $query->row()->id_pelanggan,
				'nama_pelanggan' => $query->row()->nama
			);

			$this->session->set_userdata( $array );
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function proses_register()
	{
		$object = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp')
		);
		$this->db->insert('pelanggan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */