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
}