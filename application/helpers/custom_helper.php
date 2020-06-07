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

function combinations($arrays, $i = 0) {
    if (!isset($arrays[$i])) {
        return array();
    }
    if ($i == count($arrays) - 1) {
        return $arrays[$i];
    }

    // get combinations from subsequent arrays
    $tmp = combinations($arrays, $i + 1);

    $result = array();

    // concat each array from tmp with each element from $arrays[$i]
    foreach ($arrays[$i] as $v) {
        foreach ($tmp as $t) {
            $result[] = is_array($t) ? 
                array_merge(array($v), $t) :
                array($v, $t);
        }
    }

    return $result;
}	