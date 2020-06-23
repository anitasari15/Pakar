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

	public function get_riwayat($id){

		$this->db->select('*');
		$this->db->from('tb_konsultasi');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_konsultasi.id_pasien');
		$this->db->where('tb_pasien.id_pasien', $id);
		return $this->db->get()->result();

		// $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_konsultasi.id_pasien', 'left');
  //       $this->db->where('id_konsultasi', $id);

  //       $result = $this->db->get('tb_konsultasi');
		// return $this->db->get()->result();
	}

	public function get_detail($id){
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_konsultasi.id_pasien', 'left');
        $this->db->where('id_konsultasi', $id);

        $result = $this->db->get('tb_konsultasi');
		return $result->result();
	}

	public function get_profil($id){
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_konsultasi.id_pasien', 'left');
        $this->db->where('id_konsultasi', $id);

        $result = $this->db->get('tb_konsultasi');
		return $result->result();
	}
}