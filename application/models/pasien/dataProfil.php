<?php

/**
 * 
 */
class dataProfil extends CI_Model
{
	
	public function get_pasien($id){
		$hsl=$this->db->query("SELECT * FROM tb_pasien WHERE id_pasien=".$id);
		return $hsl->result();
	}
}