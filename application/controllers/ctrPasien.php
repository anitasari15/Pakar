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
 	
 	public function index(){
 		$data=array(
            // "content"=>'Tampil_Modal',
            "all"=>$this->db->get('tb_pasien')->result(),
            // "judul"=>"Modal",
        );
        $this->load->view('template/index');
		$this->load->view('admin/viewPasien', $data);
		$this->load->view('template/footerindex');
 	}

 	public function tbhPasien(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrPasien');
        }else{
            $data=array(
                "nama"=>$_POST['nama'],
                "alamat"=>$_POST['alamat'],
                // "tgl_lahir"=>$_POST['tgl_lahir'],
            );
            $this->db->insert('tb_pasien',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrPasien');
        }
 	}

 	public function edit(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('ctrPasien');
        }else{
            $data=array(
                "nama"=>$_POST['nama'],
                "alamat"=>$_POST['alamat'],
            );
            $this->db->where('id_pasien', $_POST['id_pasien']);
            $this->db->update('tb_pasien',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('ctrPasien');
        }
 	}

 	public function hapus($id){
 		if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('ctrPasien');
        }else{
            $this->db->where('id_pasien', $id);
            $this->db->delete('tb_pasien');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('ctrPasien');
        }
 	}
 }