<?php

/**
 * 
 */
class ctrProfil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pasien/dataProfil');
	}

	public function index(){
		$data['pasien'] = $this->dataProfil->get_pasien($this->session->userdata('id_pasien'));
		// var_dump($data);
		// die();

		$this->load->view('pasien/profil',$data);
		$this->load->view('template/footer');
	}

	// public function detail(){
	// 	$data['data'] = $this->dataProfil->get_pasien($id);

 //        $this->load->view('pasien/riwayat',$data);
 //        // $this->load->view('admin/detailkonsul',$data);
 //        // $this->load->view('template/footerindex');
	// }
}