<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_admin($id)
	{
		$query = null;
		if ($id != 0) {
			$query = $this->db->where('id_user',$id)
							  ->join('level','level.id_level = user.id_level')
							  ->get('user')
							  ->row();
		}else{
			$query = $this->db->join('level','level.id_level = user.id_level')
							  ->get('user')
							  ->result();
		}
		return $query;
	}

	public function add_admin()
	{
		$object = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama_user' => $this->input->post('nama_user'),
			'id_level' => $this->input->post('id_level')
		);
		$this->db->insert('user', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit_admin()
	{
		$object = array(
			'username' => $this->input->post('username'),
			'nama_user' => $this->input->post('nama_user'),
			'id_level' => $this->input->post('id_level')
		);
		$this->db->where('id_user', $this->input->post('id_user'))
				 ->update('user', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_level()
	{
		return $this->db->get('level')
						->result();
	}

	public function delete_admin($id)
	{
		$this->db->where('id_user',$id)
				 ->delete('user');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */