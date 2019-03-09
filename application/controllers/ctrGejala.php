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
		$data=array(
            // "content"=>'Tampil_Modal',
            "all"=>$this->db->get('tb_gejala')->result(),
            // "judul"=>"Modal",
        );
        $this->load->view('template/index');
		$this->load->view('admin/viewGejala', $data);
		$this->load->view('template/footerindex');	
	}

	public function tbhGejala(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama_gejala', 'nama_gejala', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrGejala');
        }else{
            $data=array(
                "nama_gejala"=>$_POST['nama_gejala'],
                "label_gejala"=>$_POST['label_gejala'],
            );
            $this->db->insert('tb_gejala',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrGejala');
        }
	}

	public function edit(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama_gejala', 'nama_gejala', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('ctrGejala');
        }else{
            $data=array(
                "nama_gejala"=>$_POST['nama_gejala'],
                "label_gejala"=>$_POST['label_gejala'],
            );
            $this->db->where('id_gejala', $_POST['id_gejala']);
            $this->db->update('tb_gejala',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('ctrGejala');
        }
	}

	public function hapus($id){
		if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('ctrGejala');
        }else{
            $this->db->where('id_gejala', $id);
            $this->db->delete('tb_gejala');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('ctrGejala');
        }
	}
}