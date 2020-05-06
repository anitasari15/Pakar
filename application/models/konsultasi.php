<?php

/**
 * 
 */
class konsultasi extends CI_Model
{
	
	function get_pasien(){
        $hasil=$this->db->query("SELECT * FROM tb_pasien");
        return $hasil;
    }
 
    function get_subkategori($id){
        $hasil=$this->db->query("SELECT * FROM tb_konsultasi WHERE nama_id_pasien='$id'");
        return $hasil->result();
    }
}