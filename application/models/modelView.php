<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class modelView extends CI_Model
{

	public function data($id_pasien){
		// $query = $this->db->query('SELECT * FROM tb_konsultasi, tb_pasien WHERE id_pasien = ' .$id);

		// return $query->result();

		// $query = "SELECT * FROM tb_konsultasi WHERE id_pasien = ?";
		// return $this->query($query, [$id_pasien]);

		$query = $this->db->query("SELECT * FROM tb_konsultasi WHERE id_pasien = $id_pasien");
		return $query->result();
	}

	function getDataLabel($id)
	{
		$query = $this->db->query("SELECT*
         FROM tb_konsultasi tu
         left join tb_pasien mt
         on tu.id_pasien = mt.id_pasien
         WHERE tu.id_pasien = $id");
		return $query->result();
		// return $this->db->get()->result();
	}
	
	
	public function view(){
		// $query = $this->db->query('SELECT tb_konsultasi.*, tb_pasien.* FROM tb_konsultasi INNER JOIN tb_pasien ON tb_konsultasi.id_pasien=tb_pasien.id_pasien ORDER BY id_pasien');
		$query = $this->db->query('SELECT *
			FROM tb_konsultasi, tb_pasien
			WHERE tb_konsultasi.id_pasien = tb_pasien.id_pasien GROUP BY nama');
		// $query = $this->db->query('SELECT * 
		// FROM tb_konsultasi, tb_pasien
		// WHERE tb_konsultasi.id_pasien = tb_pasien.id_pasien
		// ORDER BY id_pasien');
		return $query->result();
	}

	public function viewDetail(){
		$query = $this->db->query('SELECT *
		FROM tb_konsultasi, tb_pasien
		WHERE tb_konsultasi.id_konsultasi = tb_detail_konsultasi.id_konsultasi');

		// $query = $this->db->query('SELECT *
		// 	FROM tb_pasien, tb_konsultasi, tb_detail_konsultasi
		// 	JOIN tb_pasien.id_pasien = tb_konsultasi.id_pasien
		// 	JOIN tb_konsultasi.id_konsultasi = tb_detail_konsultasi.id_konsultasi');

		return $query->result();
	}

	public function get_konsul($id)
	{
		// $query = $this->db->query("SELECT * FROM tb_konsultasi, tb_pasien WHERE tb_konsultasi.id_konsultasi = tb_detail_konsultasi.id_konsultasi =".$id);
		// $query = $this->db->query('SELECT * from tb_konsultasi WHERE id_konsultasi='.$id);
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_konsultasi.id_pasien', 'left');
        $this->db->where('id_konsultasi', $id);

        $result = $this->db->get('tb_konsultasi');
		return $result->result();
	}

}
