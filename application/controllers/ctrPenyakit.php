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
 		$data=array(
            // "content"=>'Tampil_Modal',
            "all"=>$this->db->get('penyakit')->result(),
            // "judul"=>"Modal",
        );
        $this->load->view('template/index');
		$this->load->view('admin/viewPenyakit', $data);
		$this->load->view('template/footerindex');	
 	}

 	public function tbhPenyakit(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('tipe_penyakit', 'tipe_penyakit', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrPenyakit');
        }else{
            $data=array(
                "tipe_penyakit"=>$_POST['tipe_penyakit'],
                "saran"=>$_POST['saran'],
            );
            $this->db->insert('Penyakit',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrPenyakit');
        }
 	}

 	public function edit(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('tipe_penyakit', 'tipe_penyakit', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('ctrPenyakit');
        }else{
            $data=array(
                "tipe_penyakit"=>$_POST['tipe_penyakit'],
                "saran"=>$_POST['saran'],
            );
            $this->db->where('id_penyakit', $_POST['id_penyakit']);
            $this->db->update('penyakit',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('ctrPenyakit');
        }
 	}

 	public function hapus($id){
 		if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('ctrPenyakit');
        }else{
            $this->db->where('id_penyakit', $id);
            $this->db->delete('penyakit');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('ctrPenyakit');
        }
 	}
 }