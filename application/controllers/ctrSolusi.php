<?php 

/**
 * 
 */
class ctrSolusi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data=array(
            "all"=>$this->db->query("SELECT * FROM tb_solusi")->result(),
        );

        $this->load->view('template/index');
		$this->load->view('admin/viewsolusi', $data);
		$this->load->view('template/footerindex');
	}

	public function edit(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('solusi', 'solusi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('ctrSolusi');
        }else{
            $data=array(
                "solusi"=>$_POST['solusi']
            );
            $this->db->where('id_solusi', $_POST['id_solusi']);
            $this->db->update('tb_solusi',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('ctrSolusi');
        }
	}

    public function tambah(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('status', 'status', 'required | is_unique[tb_solusi.status]');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrSolusi');
        }else{
            $data=array(
                "status"=>$_POST['status'],
                "solusi"=>$_POST['solusi'],
            );
            $this->db->insert('tb_solusi',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrSolusi');
        }
    }
}