<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 /**
  * 
  */
 class ctrPenyakit extends CI_Controller
 {
 	
 	function __construct()
 	{
 		# code...
 		parent::__construct();
 		$this->load->model('penyakit');
 	}

 	public function index(){
 		$data['penyakit'] = $this->penyakit->get_penyakit();

 		$this->load->view('template/header');
 		$this->load->view('admin/viewPenyakit');
 		$this->load->view('template/footer');
 	}

 	public function tbhPenyakit(){
 		$data = array();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tipe_penyakit', 'tipe_penyakit', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/header');
			$this->load->view('admin/addPenyakit');
		}else{
			if($this->input->post('simpan')){
				$this->penyakit->insert();
			redirect('ctrPenyakit');
				// var_dump($data);
			}
			// var_dump($data);
			$this->load->view('template/header');
			$this->load->view('admin/addPenyakit');
		}
 	}
 }