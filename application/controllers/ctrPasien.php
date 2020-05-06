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
        $this->db->select('*, DATE_FORMAT(tgl_lahir, "%d %M %Y") as tgl_lahir, DATE_FORMAT(tgl_daftar, "%d %M %Y") as tgl_daftar');
        $result = $this->db->get('tb_pasien')->result();
 		$data=array(
            // "content"=>'Tampil_Modal',
            "all"=>$result,
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
                "tgl_lahir"=>$_POST['tgl_lahir'],
                "username"=>$_POST['username'],
                "password"=>md5($_POST['password']),
                "level"=>'2'
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
                "tgl_lahir"=>$_POST['tgl_lahir']
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