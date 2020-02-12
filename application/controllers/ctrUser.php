<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ctrUser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index(){
		$data['user'] = $this->user->get_user();
		$this->load->view('template/header');
		$this->load->view('admin/viewUser', $data);
		$this->load->view('template/footer');	
	}

	public function tbhUser(){
		$data = array();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/header');
			$this->load->view('addUser');
		}else{
			if($this->input->post('simpan')){
				$this->user->insert(md5($this->input->post('password')));
			redirect('ctrUser');
			}
			// var_dump($data);
			$this->load->view('template/header');
			$this->load->view('admin/addUser');
		}
	}
}