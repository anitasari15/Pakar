<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ctrRegis extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('registrasi');
	}

	public function index(){
		$this->load->view('template/headerRegis');
	}

	public function register(){
		// $data = array();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');

		if($this->form_validation->run() === FALSE){
		$this->load->view('template/headerRegis');
 		} else {
 			$enc_password = md5($this->input->post('password'));
 			$this->registrasi->insert($enc_password);
		$this->session->set_flashdata('notif_user_buat', 'Data user berhasil dibuat');
		redirect('ctrAturan');
 		}
	}

}