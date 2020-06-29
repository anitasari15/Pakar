<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 /**
  * 
  */
 class ctrKategori extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
    // $this->load->database();
 	}

 	public function index(){
 		$data=array(
            "all"=>$this->db->query(" SELECT tb_kategori_gejala.*, tb_gejala.*FROM tb_kategori_gejala INNER JOIN tb_gejala ON tb_kategori_gejala.id_gejala=tb_gejala.id_gejala")->result(),
        );

        for ($i=0; $i < count($data['all']); $i++) { 
            $nilai = $data['all'][$i]->cf_gejala;
            if ($nilai == 0.4) {
                $data['all'][$i]->gejala = "Sedikit Yakin";
            } elseif ($nilai == 0.6) {
                $data['all'][$i]->gejala = "Cukup Yakin";
            } elseif ($nilai == 0.8) {
                $data['all'][$i]->gejala = "Yakin";
            } else {
                $data['all'][$i]->gejala = "";
            }
        }

        // akan dimasukkan kedalam <select> dan <input>
        $data['gejalas'] = json_encode($this->getGejala());

        $this->load->view('template/index');
		$this->load->view('admin/viewKategoriGejala', $data);
		$this->load->view('template/footerindex');
 	}

 	public function tbhKategori(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('kategori_gejala', 'kategori_gejala', 'required | is_unique[tb_kategori_gejala.id_gejala]');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrKategori');
        }else{
            $data=array(
                "id_gejala"=>$_POST['id_gejala'],
                "kategori_gejala"=>$_POST['kategori_gejala'],
                "nilai_gejala"=>$_POST['nilai_gejala'],
                "cf_gejala"=>$_POST['cf_gejala'],
            );
            $this->db->insert('tb_kategori_gejala',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrKategori');
        }
 	}

    public function edit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kategori_gejala', 'kategori_gejala', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('ctrKategori');
        }else{
            $data=array(
                "id_gejala"=>$_POST['id_gejala'],
                "kategori_gejala"=>$_POST['kategori_gejala'],
                "nilai_gejala"=>$_POST['nilai_gejala'],
                "cf_gejala"=>$_POST['cf_gejala'],
            );
            $this->db->where('id_kategori_gejala', $_POST['id_kategori_gejala']);
            $this->db->update('tb_kategori_gejala',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('ctrKategori');
        }
    }

    public function hapus($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('ctrKategori');
        }else{
            $this->db->where('id_kategori_gejala', $id);
            $this->db->delete('tb_kategori_gejala');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('ctrKategori');
        }
    }

    public function getGejala(){
        $this->db->select('g.id_gejala, g.nama_gejala, GROUP_CONCAT(kg.kategori_gejala) as kategori, GROUP_CONCAT(kg.nilai_gejala) as nilai, GROUP_CONCAT(kg.cf_gejala) as cf');
        $this->db->join('tb_kategori_gejala kg', 'kg.id_gejala=g.id_gejala', 'left');
        $this->db->group_by('kg.id_gejala');
        $query = $this->db->get('tb_gejala g');
        return $query->result();
    }
 }