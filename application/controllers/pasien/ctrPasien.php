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
 }