<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gejala extends CI_Model {

	public function get_gejala(){
		$this->db->select('*');
		$this->db->from('gejala');
		return $this->db->get()->result();
	}

	public function get_single($id){
		$query = $this->db->query('SELECT * FROM gejala WHERE id_gejala='.$id);
		return $query->result();
	}

	public function insert(){
		$data = array(
			'id_gejala' => '',
			'kode_gejala' => 'kode_gejala',
			'nama_gejala' => 'nama_gejala'
		)
		$this->db->insert('gejala',$data);
	}
}