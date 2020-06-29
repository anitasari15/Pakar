<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */

 /**
  * 
  */
 class ctrPasien extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index(){
 		
 		$this->load->view('pasien/home');
 		$this->load->view('template/footer');
 	}

 	public function edit(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'password', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('pasien/ctrPasien');
        }else{
            $data=array(
                "password"=>md5($_POST['password'])
            );
            $this->db->where('id_pasien', $_POST['id_pasien']);
            $this->db->update('tb_pasien',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('pasien/ctrPasien');
        }
 	}
 }