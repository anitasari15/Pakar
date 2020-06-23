<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/footer');
	}
	public function dashboard($year=null){
		$data['selected_year'] = $year;
		$data['year'] = array_column($this->get_year(), 'tahun');
		$data['data'] = json_encode(array_column($this->get_data($year), 'count'));

		$this->load->view('template/index');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footerindex');
	}

	public function get_data($year=null){
		$this->db->select('hasil_konsultasi as tingkat,count(hasil_konsultasi) as count'); //jumlah
		if ($year && $year != 'Semua') {
			$this->db->where("DATE_FORMAT(tanggal_konsultasi,'%Y')", $year);
		}
		$this->db->group_by('hasil_konsultasi');
		return $this->db->get('tb_konsultasi')->result();
	}

	public function get_year(){
		$this->db->select('YEAR(tanggal_konsultasi) as tahun');
		$this->db->group_by('YEAR(tanggal_konsultasi)');
		return $this->db->get('tb_konsultasi')->result();
	}
}
