<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('model_test');
		$this->load->model('konsultasi');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/footer');
		// $this->load->view('vDaftarAgenSembako');
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

	// public function hasil(){
	// 	$this->db->select('*');
	// 	$this->db->where('hasil_konsultasi IS NULL', null, false);
	// 	$result = $this->db->get('tb_konsultasi')->result();
	// 	print_r($result);
	// 	foreach ($result as $key => $data) {
	// 		echo "<pre>";
	// 		$this->metode($data->id_konsultasi,$data->id_pasien, $data->tds, $data->tdd, $data->kbb, $data->uk, $data->ui, $data->edema, $data->proteinuria);
	// 		echo "</pre>";
	// 	}
	// }

	// public function metode($id_konsultasi, $id_pasien, $tds, $tdd, $kbb, $uk, $ui, $edema, $proteinuria) {

	// 	$fk_tds = array();

	// 	$fk_tds["normal"] = $this->model_test->get_keanggotaan_tds("normal", $tds);
	// 	$fk_tds["tinggi"] = $this->model_test->get_keanggotaan_tds("tinggi", $tds);
	// 	$fk_tds["sangat_tinggi"] = $this->model_test->get_keanggotaan_tds("sangat_tinggi", $tds);
	// 	$fk_tdd = array();
	// 	$fk_tdd["normal"] = $this->model_test->get_keanggotaan_tdd("normal", $tdd);
	// 	$fk_tdd["tinggi"] = $this->model_test->get_keanggotaan_tdd("tinggi", $tdd);
	// 	$fk_tdd["sangat_tinggi"] = $this->model_test->get_keanggotaan_tdd("sangat_tinggi", $tdd);
	// 	$fk_kbb = array();
	// 	$fk_kbb["rendah"] = $this->model_test->get_keanggotaan_kbb("rendah", $kbb);
	// 	$fk_kbb["normal"] = $this->model_test->get_keanggotaan_kbb("normal", $kbb);
	// 	$fk_kbb["tinggi"] = $this->model_test->get_keanggotaan_kbb("tinggi", $kbb);
	// 	$fk_uk = $this->model_test->get_keanggotaan_uk($uk);
	// 	$fk_ui = array();
	// 	$fk_ui["tinggi"] = $this->model_test->get_keanggotaan_ui("tinggi", $ui);
	// 	$fk_ui["normal"] = $this->model_test->get_keanggotaan_ui("normal", $ui);
	// 	$fk_ui["resiko_tinggi"] = $this->model_test->get_keanggotaan_ui("resiko_tinggi", $ui);
	// 	$fk_edema = $edema;
	// 	$fk_proteinuria = $proteinuria;
	// 	$nilai_z = $this->model_test->get_nilai_defuzzyfikasi($fk_tds, $fk_tdd, $fk_kbb, $fk_ui);
	// 	$arr_tds = $this->model_test->get_arr_keanggotaan($fk_tds);
	// 	$arr_tdd = $this->model_test->get_arr_keanggotaan($fk_tdd);
	// 	$arr_kbb = $this->model_test->get_arr_keanggotaan($fk_kbb);
	// 	$arr_uk = array($fk_uk);
	// 	$arr_ui = $this->model_test->get_arr_keanggotaan($fk_ui);
	// 	$arr_edema = array($fk_edema);
	// 	$arr_proteinuria = array($fk_proteinuria);
	// 	$semua_kombinasi = combinations(array($arr_tds, $arr_tdd, $arr_kbb, $arr_uk, $arr_ui, $arr_edema, $arr_proteinuria));
	// 	$jumlah_kombinasi = $this->model_test->get_jumlah_kombinasi($semua_kombinasi);
	// 	$persentase_kombinasi = $this->model_test->get_persentase_kombinasi($jumlah_kombinasi, $nilai_z);
		
	// 		$hasil_konsultasi = $this->model_test->get_hasil_konsultasi($persentase_kombinasi);
	// 		$data_konsultasi = array(
	// 			'id_pasien' => $id_pasien,
	// 			'hasil_konsultasi' => $hasil_konsultasi['status'],
	// 			'persentase' => $hasil_konsultasi['cf_persentase'],
	// 			'solusi' => $this->model_test->get_solusi($hasil_konsultasi['status']),
	// 			'tdd' => $tdd,
	// 			'tds' => $tds,
	// 			'kbb' => $kbb,
	// 			'uk' => $uk,
	// 			'ui' => $ui,
	// 			'edema' => $edema,
	// 			'proteinuria' => $proteinuria
	// 		);
	// 		print_r($data_konsultasi);
	// 		$this->db->where('id_konsultasi', $id_konsultasi);
	// 		$this->db->update('tb_konsultasi', $data_konsultasi);
		
	// }

}