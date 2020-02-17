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

 	public function cekLogin(){
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'usenrame', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('ctrLogin');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$id_user = $this->user->login($username, $password);
			// var_dump($id_user);
			// die();
			if ($id_user) {
				$level = $this->user->get_user($id_user);
				$nama = $this->user->get_user($id_user);
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
				if ($this->session->userdata('level') == 1) {
					redirect('welcome');
				} else if ($this->session->userdata('level') == 2) {
					redirect('ctrGejala');
				} 
				
			} else {
				$this->session->set_flashdata('login_failed', 'Login Failed');
				redirect('ctrLogin');
			}

		}
 	}
 }