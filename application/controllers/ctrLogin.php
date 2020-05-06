<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
  * 
  */
 class ctrLogin extends CI_Controller
 {
 	
 	function __construct()
 	{
 		# code...
 		parent:: __construct();
 		$this->load->model('user');
 	}

 	public function index(){
 		$this->load->view('template/headerLogin');
 	}

 	//pasien pakar

 	public function cekLogin(){
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('ctrLogin');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			// $level = 2;



			$id_user = $this->user->login($username, $password);
			// var_dump($level); 
			// die();
			if ($id_user) {
				$level = $this->user->get_file($id_user);
				$nama = $this->user->get_file($id_user);
				$user_data = array(
					'id_user' => $id_user,
					'username' => $username,
					'nama' => $nama[0]->nama,
					'logged_in' => true,
					'level' => $level[0]->level  
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_loggedin', 'You are now logged in');
				// redirect('admin');
				if ($this->session->userdata('level') == 0 ) {
					redirect('welcome/dashboard');
				}
				
			} else {
				$this->session->set_flashdata('login_failed', 'Login Failed');
				redirect('ctrLogin');
			}

		}
 	}

 	public function logOut()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('user_loggedout', 'You are logged out');

		redirect('welcome');
	}

	//login pasien

	public function loginPasien(){
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('ctrLogin');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			// $level = 2;



			$id_pasien = $this->user->loginn($username, $password);
			// var_dump($id_pasien); 
			// die();
			if ($id_pasien) {
				$level = $this->user->get_files($id_pasien);
				$nama = $this->user->get_files($id_pasien);
				$user_data = array(
					'id_pasien' => $id_pasien,
					'username' => $username,
					'nama' => $nama[0]->nama,
					'logged_in' => true,
					'level' => $level[0]->level  
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_loggedin', 'You are now logged in');
				// redirect('admin');
				if ($this->session->userdata('level') == 2 ) {
					redirect('pasien/ctrPasien');
				}
				
			} else {
				$this->session->set_flashdata('login_failed', 'Login Failed');
				redirect('ctrLogin');
			}

		}
 	}

 	public function logOutt()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_pasien');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('user_loggedout', 'You are logged out');

		redirect('welcome');
	}
 }