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
		$data = array();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');

		if ($this->form_validation->run() == FALSE){
			// $this->load->view('template/header');
			$this->load->view('template/headerRegis');
		}else{
			if($this->input->post('simpan')){
				$this->registrasi->insert(md5($this->input->post('password')));
			redirect('welcome');
			}
			// var_dump($data);
			$this->load->view('template/header');
			$this->load->view('template/headerRegis');
		}
	}

}