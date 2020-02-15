<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Penyakit extends CI_Model
{
	
	public function get_penyakit(){
		$this->db->select(*);
		$this->db->from('penyakit');
		return $this->db->get()->result();
	}

	public function get_single($id){
		$query = $this->db->query('SELECT * FROM penyakit WHERE id_penyakit= ' .$id);
		return $query->result();
	}

	public function insert(){
		$data = array(
			'id_penyakit' => '',
			'tipe_penyakit' => $this->input->post('tipe_penyakit'),
			'solusi' => $this->input->post('solusi')
		);
		return $this->db->insert('penyakit');
	}

	public function update($id){
		$data = array(
			'id_penyakit' => '',
			'tipe_penyakit' => $this->input->post('tipe_penyakit'),
			'solusi' => $this->input->post('solusi')
		);
		$this->db->where('id_penyakit', $id);
		$this->db->update('penyakit', $data);
	}

	public function delete($id){
		$query = $this->db->query('DELETE FROM penyakit WHERE id_penyakit =' $id);
	}
}