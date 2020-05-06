<?php

class ctrKonsul extends CI_Controller
{
    function __construct(){
        parent :: __construct();
        $this->load->model('konsultasi');
    }

    public function index(){
    	 $x['data']=$this->konsultasi->get_pasien();
        $this->load->view('template/index');
        $this->load->view('admin/viewKonsul',$x);
        $this->load->view('template/footerindexx');
    }

    public function get_subkategori(){
        $id=$this->input->post('id_pasien');
        $data=$this->konsultasi->get_konsultasi($id);
        echo json_encode($data);
    }
}
