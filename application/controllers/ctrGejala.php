<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
cindexlass ctrGejala extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('gejala');
	}
	public function index(){
		$data['gejala'] = $this->gejala->get_gejala();
		$this->load->view('template/index');
		$this->load->view('admin/viewGejala', $data);
		$this->load->view('template/footerindex');	
	}

	public function tbhGejala(){
		$data = array();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama_gejala', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/index');
			$this->load->view('admin/addGejala');
		}else{
			if($this->input->post('simpan')){
				$this->gejala->insert();
			redirect('ctrGejala');
				// var_dump($data);
			}
			// var_dump($data);
			$this->load->view('template/index');
			$this->load->view('admin/addGejala');
		}
	}

	public function edit($id){
		$this->load->helper('form');

		$data['gejala'] = $this->gejala->get_single($id);


		// var_dump($data);
		if($this->input->post('edit')){
			$this->gejala->update($id);
			redirect('ctrGejala');
		}
		
		$this->load->view('template/index');
		$this->load->view('admin/editGejala',$data);
	}

	public function hapus($id){
		$this->gejala->delete($id);
		redirect('ctrGejala');
	}
}