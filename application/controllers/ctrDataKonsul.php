<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
  * 
  */
 class ctrDataKonsul extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('rekamMedik');
        $this->load->model('modelView');
 	}

 	public function index(){
 		
 		$dataa = array(
 			"all" => $this->db->query('SELECT tb_konsultasi.*, tb_pasien.*FROM tb_konsultasi INNER JOIN tb_pasien ON tb_konsultasi.id_pasien=tb_pasien.id_pasien')->result(),
 		);

   //      for ($i=0; $i < count($data['all']); $i++) { 
 		// 	$birthDt = new DateTime($data['all'][$i]->tgl_lahir);
 		// 	$today = new DateTime('today');
 		// 	$y = $today->diff($birthDt)->y;
 		// 	$data['all'][$i]->umur = $y;
 		// }

 		$data['data'] = $this->modelView->view();

 		$this->load->view('template/index');
 		$this->load->view('admin/viewDataKonsul', $data);
 		$this->load->view('template/footerindex');
 	}



    public function detail($id){
        $data['data'] = $this->modelView->getDataLabel($id);
        $data['pasien'] = $this->modelView->get_pasien($id);
        // $dataa['data'] = $this->modelView->view();

        $this->load->view('template/index');
        $this->load->view('admin/viewDetailKonsul', $data);
        $this->load->view('template/footerindex');   
    }

    public function edit(){
        // $data = array(
        //     'solusi' => $_POST['solusi']
        // );

        // $this->db->where('id_konsultasi', $_POST['id_konsultasi']);
        // $this->db->update('tb_konsultasi',$data);


        // $this->load->view('admin/viewDetailKonsul', $data);
        // $this->session->set_flashdata('sukses',"Data Berhasil Diedit");

        $data = $this->input->post();
        $id = $data['id_konsultasi'];

        $data_update = array (
            'solusi'=>$data['solusi']
        );
        $dataa ['data'] = $this->modelView->getDataLabel($id);


        $this->db->where('id_konsultasi',$id);
        $this->db->update('tb_konsultasi', $data_update);
        $this->load->view('admin/viewDetailKonsul', $dataa);
        // redirect('ctrDataKonsul/detail');
    }

 	public function tbhKonsul(){
 		$this->load->library('form_validation');
        $this->form_validation->set_rules('id_pasien', 'id_pasien', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrDataKonsul');
        }else{
            $data=array(
                "id_pasien"=>$_POST['id_pasien'],
                "hasil_konsultasi"=>$_POST['hasil_konsultasi'],
                "persentase"=>$_POST['persentase'],
                "solusi"=>$_POST['solusi'],
            );
            // $data1=array(
            // 	"id_konsultasi"=>$_POST['id_konsultasi'],
            // 	"id_kategori_gejala"=>$_POST['id_kategori_gejala'],
            // 	"nilai"=>$_POST['nilai'],
            // );
            $this->db->insert('tb_konsultasi',$data);
            $id_konsultasi = $this->db->insert_id();
            // $this->db->insert('tb_detail_konsultasi',$data1);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrDataKonsul');
        }
 	}

    public function viewDetail($id){
        $data['data'] = $this->modelView->get_konsul($id);

        $this->load->view('template/index');
        $this->load->view('admin/detailkonsul',$data);
        $this->load->view('template/footerindex');
    }

 	
 }