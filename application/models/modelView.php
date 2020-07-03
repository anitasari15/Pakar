<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class modelView extends CI_Model
{

	public function data($id_pasien){
		$query = $this->db->query("SELECT * FROM tb_konsultasi WHERE id_pasien = $id_pasien");
		return $query->result();
	}

	function getDataLabel($id)
	{
		$query = $this->db->query("SELECT* , DATE_FORMAT(tanggal_konsultasi, '%d %M %Y') as tanggal_konsultasi
			FROM tb_konsultasi tu
			left join tb_pasien mt
			on tu.id_pasien = mt.id_pasien
			WHERE tu.id_pasien = $id");
		return $query->result();
		// return $this->db->get()->result();
	}
	
	
	public function view(){
		$query = $this->db->query("SELECT * , DATE_FORMAT(tgl_lahir, '%d %M %Y') as tgl_lahir
			FROM tb_konsultasi, tb_pasien
			WHERE tb_konsultasi.id_pasien = tb_pasien.id_pasien GROUP BY nama");
		return $query->result();
	}

	public function viewDetail(){
		$query = $this->db->query('SELECT *
			FROM tb_konsultasi, tb_pasien
			WHERE tb_konsultasi.id_konsultasi = tb_detail_konsultasi.id_konsultasi');

		return $query->result();
	}

	public function get_konsul($id)
	{
		$this->db->select("tb_konsultasi.id_konsultasi as id_konsultasi, tb_konsultasi.id_pasien as id_pasien, tb_pasien.nama as nama, DATE_FORMAT(tb_konsultasi.tanggal_konsultasi, '%d %M %Y') as tanggal_konsultasi, tb_konsultasi.hasil_konsultasi as hasil_konsultasi, tb_konsultasi.persentase as persentase, tb_konsultasi.solusi as solusi, tb_konsultasi.tdd as tdd, tb_konsultasi.tds as tds, tb_konsultasi.kbb as kbb, tb_konsultasi.uk as uk, tb_konsultasi.ui as ui, tb_konsultasi.edema as edema, tb_konsultasi.proteinuria as proteinuria");
        $this->db->from("tb_konsultasi");
        $this->db->join("tb_pasien", "tb_pasien.id_pasien = tb_konsultasi.id_pasien", "left");
        $this->db->where("tb_konsultasi.id_konsultasi", $id);
        $query = $this->db->get();

        return $query->result();
		// $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_konsultasi.id_pasien', 'left');
		// $this->db->where('id_konsultasi', $id);

		// $result = $this->db->get('tb_konsultasi');
		// return $result->result();
	}

	public function get_pasien($id){
		$this->db->where('id_pasien', $id)->limit(1);
		$result = $this->db->get('tb_pasien')->result();
		if ($result){
			return $result[0];
		} else {
			return false;
		}
	}

}
