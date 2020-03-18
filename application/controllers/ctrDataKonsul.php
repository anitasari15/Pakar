<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */

 /**
  * 
  */
 /**
  * 
  */
 class ctrDataKonsul extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index(){
 		$data = array(
 			"all" => $this->db->query('SELECT tb_konsultasi.*, tb_pasien.*FROM tb_konsultasi INNER JOIN tb_pasien ON tb_konsultasi.id_pasien=tb_pasien.id_pasien')->result(),
 		);

        for ($i=0; $i < count($data['all']); $i++) { 
 			$birthDt = new DateTime($data['all'][$i]->tgl_lahir);
 			$today = new DateTime('today');
 			$y = $today->diff($birthDt)->y;
 			$data['all'][$i]->umur = $y;
 		}

 		$this->load->view('template/index');
 		$this->load->view('admin/viewDataKonsul', $data);
 		$this->load->view('template/footerindex');
 	}
 }