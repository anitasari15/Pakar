<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */

 /**
  * 
  */
 class ctrAturan extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index(){
 		$data = array(
 			"all"=>$this->db->get('tb_detail_aturan')->result(),
 		);
 		$this->load->view('template/index');
 		$this->load->view('admin/viewAturan',$data);
 		$this->load->view('template/footerindex');
 	}
 }