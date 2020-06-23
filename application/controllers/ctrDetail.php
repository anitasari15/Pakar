<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ctrDetail extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
 		$this->load->model('rekamMedik');
        $this->load->model('modelView');
	}

	public function detail($id){
		$data ['data'] = $this->modelView->getDataLabel($id);

		$this->load->view('template/index');
        $this->load->view('admin/viewDetailKonsul', $data);
        $this->load->view('template/footerindex');
	}
}