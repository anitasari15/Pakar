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
}