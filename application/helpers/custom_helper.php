<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function encrypt( $password ) {
	$ci =& get_instance();
   	
   	$encrypt = $ci->encryption->encrypt($password);  

   	return $encrypt;
}

function decrypt( $password ) {
	$ci =& get_instance();
    
    $decrypt = $ci->encryption->decrypt($password);  

  	return $decrypt;
}