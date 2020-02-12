<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model {

	public function get_user(){
		$query = $this->db->get('user');
		return $query->result_array(); //ngambil data yg udah array 
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
			'level' => $this->input->post('level')
		);

		$this->db->insert('user', $data);
	}

	public function update(){
		$data = array(
				'nama' => $this->input->post('nama'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp')
			);

		$this->db->where('id_user',$id);
		$this->db->update('user', $data);
	}

	public function delete($id){
		$query = $this->db->query('DELETE from user WHERE id_user= '.$id);
	}

}