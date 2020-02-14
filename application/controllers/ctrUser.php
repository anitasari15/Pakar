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

		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/header');
			$this->load->view('admin/addUser');
		}else{
			if($this->input->post('simpan')){
				$this->user->insert(md5($this->input->post('password')));
			redirect('ctrUser');
			}
			var_dump($data);
			// $this->load->view('template/header');
			// $this->load->view('admin/addUser');
		}
	}

	public function edit($id){	
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['user'] = $this->user->get_single($id);

		// if($this->input->post('edit')){
		// 	$this->user->update($id);
		// 	redirect('ctrUser');
		// }
		if($this->input->post('edit')){
			$enc_password=md5($this->input->post('password'));
			$this->user->update($enc_password);
			// $this->session->set_flashdata('notif_user_edit', 'Data user berhasil diedit');
			redirect('ctrUser');
		}
		// var_dump($data);
		$this->load->view('template/header');
		$this->load->view('admin/editUser',$data);
	}
}