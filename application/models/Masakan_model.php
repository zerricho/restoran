<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masakan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function add_masakan()
	{
		$object = array(
			'nama_masakan' => $this->input->post('nama_masakan'),
			'harga' => $this->input->post('harga'),
			'status_masakan' => 'ada',
			'id_jenis' => $this->input->post('id_jenis')
		);
		$this->db->insert('masakan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_masakan($id)
	{
		$query = null;
		if ($id != 0) {
			$query = $this->db->where('id_masakan',$id)
							  ->join('jenis','jenis.id_jenis = masakan.id_jenis')
							  ->get('masakan')
							  ->row();
		}else{
			$query = $this->db->join('jenis','jenis.id_jenis = masakan.id_jenis')
							  ->get('masakan')
							  ->result();
		}
		return $query;
	}

	public function get_jenis()
	{
		return $this->db->get('jenis')
					 	->result();
	}

	public function edit_masakan()
	{
		$object = array(
			'nama_masakan' => $this->input->post('nama_masakan'),
			'harga' => $this->input->post('harga'),
			'status_masakan' => $this->input->post('status_masakan')
		);
		$this->db->where('id_masakan', $this->input->post('id_masakan'))
				 ->update('masakan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete_masakan($id)
	{
		$this->db->where('id_masakan',$id)
				 ->delete('masakan');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Masakan_model.php */
/* Location: ./application/models/Masakan_model.php */