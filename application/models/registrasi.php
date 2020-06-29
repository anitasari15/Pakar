<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class registrasi extends CI_Model {

	public function insert($enc_password)
	{
		$data = array(
			'id_user' => '',
			'nama' => $this->input->post('nama'),
			// 'tgl_lahir' => $this->input->post('tgl_lahir'),
			// 'alamat' => $this->input->post('alamat'),
			// 'no_telp' => $this->input->post('no_telp'),
			'username' => $this->input->post('username'),
			'password' => $enc_password,
			'level' => '2'
		);

		$this->db->insert('tb_user', $data);
	}

	public function data($nik){
		$this->db->where('nik', $nik);

		$result = $this->db->get('tb_pasien');

		if ($result->num_rows() == 1) {
			return $result->row(0)->id_user;
		} else {
			return false;
		}
	}
}