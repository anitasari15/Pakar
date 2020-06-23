<?php

/**
 * 
 */
class ctrRiwayat extends CI_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('pasien/dataProfil');
	}

	public function index(){
		$data['data'] = $this->dataProfil->get_riwayat($this->session->userdata('id_pasien'));

		$this->load->view('pasien/riwayat',$data);
	}

	public function viewDetail($id){
		$data['data'] = $this->dataProfil->get_detail($id);

        $this->load->view('pasien/detailRiwayat',$data);
        // $this->load->view('admin/detailkonsul',$data);
        // $this->load->view('template/footerindex');
	}
}