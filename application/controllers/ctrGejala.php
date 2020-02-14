<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
class ctrGejala extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('gejala');
	}
	public function index(){
		$data['gejala'] = $this->gejala->get_gejala();
		$this->load->view('template/header');
		$this->load->view('admin/viewGejala', $data);
		$this->load->view('template/footer');	
	}

	public function tbhGejala(){
		$data = array();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_gejala', 'nama_gejala', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/header');
			$this->load->view('admin/addGejala');
		}else{
			if($this->input->post('simpan')){
				$this->gejala->insert();
			// redirect('ctrGejala');
				var_dump($data);
			}
			// var_dump($data);
			// $this->load->view('template/header');
			// $this->load->view('admin/addGejala');
		}
	}
}