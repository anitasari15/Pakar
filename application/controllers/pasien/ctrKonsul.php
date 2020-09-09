<?php 

/**
 * 
 */
class ctrKonsul extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_test');
		$this->load->model('konsultasi');
		$this->load->model('user');
		$this->load->model('pasien/dataProfil');
	}

	public function index() {

		// $this->load->view('admin/viewKonsul');
		$data['pasien'] = $this->dataProfil->get_pasien($this->session->userdata('id_pasien'));
		// $x['data']=$this->konsultasi->get_pasien();
        // $x['terakhir']=$this->model_test->getlast();
        $this->load->view('pasien/konsul',$data);
        // $this->load->view('template/index');
        // $this->load->view('template/footerindex	x');
		// $this->load->view('register_view',$data);
	}

	public function konsul(){
		// Inputan Konsultasi
		$id_pasien = $this->input->post('id_pasien');
		$tds = $this->input->post('TDS');
		$tdd = $this->input->post('TDD');
		$kbb = $this->input->post('KBB');
		$uk = $this->input->post('UK');
		$ui = $this->input->post('UI');
		$edema = $this->input->post('EDEMA');
		$proteinuria = $this->input->post('PROTEINURIA');

		// Fungsi Keanggotaan TDS
		$fk_tds = array();

		$fk_tds["normal"] = $this->model_test->get_keanggotaan_tds("normal", $tds);
		$fk_tds["tinggi"] = $this->model_test->get_keanggotaan_tds("tinggi", $tds);
		$fk_tds["sangat_tinggi"] = $this->model_test->get_keanggotaan_tds("sangat_tinggi", $tds);

		// Fungsi Keanggotaan TDD
		$fk_tdd = array();

		$fk_tdd["normal"] = $this->model_test->get_keanggotaan_tdd("normal", $tdd);
		$fk_tdd["tinggi"] = $this->model_test->get_keanggotaan_tdd("tinggi", $tdd);
		$fk_tdd["sangat_tinggi"] = $this->model_test->get_keanggotaan_tdd("sangat_tinggi", $tdd);

		// Fungsi Keanggotaan KBB
		$fk_kbb = array();

		$fk_kbb["rendah"] = $this->model_test->get_keanggotaan_kbb("rendah", $kbb);
		$fk_kbb["normal"] = $this->model_test->get_keanggotaan_kbb("normal", $kbb);
		$fk_kbb["tinggi"] = $this->model_test->get_keanggotaan_kbb("tinggi", $kbb);

		// Fungsi Keanggotaan UK
		$fk_uk = $this->model_test->get_keanggotaan_uk($uk);

		// Fungsi Keanggotaan UI
		$fk_ui = array();

		$fk_ui["tinggi"] = $this->model_test->get_keanggotaan_ui("tinggi", $ui);
		$fk_ui["normal"] = $this->model_test->get_keanggotaan_ui("normal", $ui);
		$fk_ui["resiko_tinggi"] = $this->model_test->get_keanggotaan_ui("resiko_tinggi", $ui);

		// Fungsi Keanggotaan EDEMA
		$fk_edema = $edema;

		// Fungsi Keanggotaan PROTEINURIA
		$fk_proteinuria = $proteinuria;

		// Nilai Defuzzyfikasi
		$nilai_z = $this->model_test->get_nilai_defuzzyfikasi($fk_tds, $fk_tdd, $fk_kbb, $fk_ui, $fk_uk, $fk_edema, $fk_proteinuria);

		// Array Keanggotaan
		$arr_tds = $this->model_test->get_arr_keanggotaan($fk_tds);
		$arr_tdd = $this->model_test->get_arr_keanggotaan($fk_tdd);
		$arr_kbb = $this->model_test->get_arr_keanggotaan($fk_kbb);
		$arr_uk = array($fk_uk);
		$arr_ui = $this->model_test->get_arr_keanggotaan($fk_ui);
		$arr_edema = array($fk_edema);
		$arr_proteinuria = array($fk_proteinuria);

		// Semua Kombinasi
		$semua_kombinasi = combinations(array($arr_tds, $arr_tdd, $arr_kbb, $arr_uk, $arr_ui, $arr_edema, $arr_proteinuria));
		$jumlah_kombinasi = $this->model_test->get_jumlah_kombinasi($semua_kombinasi);
		$persentase_kombinasi = $this->model_test->get_persentase_kombinasi($jumlah_kombinasi, $nilai_z);

		if(isset($_POST['kirim_data'])) {
			$hasil_konsultasi = $this->model_test->get_hasil_konsultasi($persentase_kombinasi);
			$id_pasien = $this->session->userdata('id_pasien');
			// $data['pasien'] = $this->dataProfil->get_pasien($this->session->userdata('id_pasien'));

			// $id_pasien = $this->session->userdata('id_pasien');
			// $pasien = $this->db->get_where('tb_pasien', array('id_pasien' => $id_pasien))->result();
			// $data= $this->dataProfil->get_pasien($this->session->userdata('id_pasien'));
			// var_dump($data);
			$data_konsultasi = array(
				'id_pasien' => $id_pasien,
				// 'id_pasien' => $this->dataProfil->get_pasien($this->session->userdata('id_pasien')),
				'hasil_konsultasi' => $hasil_konsultasi['status'],
				'persentase' => $hasil_konsultasi['cf_persentase'],
				'solusi' => $this->model_test->get_solusi($hasil_konsultasi['status']),
				'tdd' => $tdd,
				'tds' => $tds,
				'kbb' => $kbb,
				'uk' => $uk,
				'ui' => $ui,
				'edema' => $edema,
				'proteinuria' => $proteinuria
			);

			// $pasien = $this->session->userdata('id_pasien');
			// $pasiens = $this->db->get_where('tb_konsultasi', array('id_pasien' => $pasien, ))->result();

			// $this->model_test->insert($id,$data_konsultasi);
			// $this->db->where('id_pasien');
			$this->db->insert('tb_konsultasi', $data_konsultasi);
		}

		redirect('pasien/ctrRiwayat');
	}
}