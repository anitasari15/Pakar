<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model {

	public function get_user(){
		$this->db->select('*');
		$this->db->from('tb_user');
		return $this->db->get()->result();
	}

	public function get_file($id_user)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->result();
	}

	public function get_single($id)
	{
		$query = $this->db->query('SELECT * from user WHERE id_user='.$id);
		return $query->result();
	}

	public function insert($enc_password)
	{
		$data = array(
			'id_user' => '',
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'username' => $this->input->post('username'),
			'password' => $enc_password,
			'level' => '2'
		);

		$this->db->insert('user', $data);
	}

	public function update($id){
		$data = array(
				'nama' => $this->input->post('nama'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'username' => $this->input->post('username')
			);

		$this->db->where('id_user',$id);
		$this->db->update('user', $data);
	}

	public function delete($id){
		$query = $this->db->query('DELETE from user WHERE id_user= '.$id);
	}

	public function login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('tb_user');

		if ($result->num_rows() == 1) {
			return $result->row(0)->id_user;
		} else {
			return false;
		}
	}

}