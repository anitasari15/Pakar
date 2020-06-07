<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_test extends CI_Model {
	public function get_kategori_gejala($id_kategori_gejala, $column='kategori_gejala') {
		$kategori_gejala = $this->db->get_where('v_kategori_gejala', array('id_kategori_gejala' => $id_kategori_gejala))->row_array();

		return $kategori_gejala[$column];
	}

	public function get_id_konsultasi(){

	}
	
	// public function get_aturan() {
	// 	$arr_aturan = array();

	// 	$semua_aturan = $this->db->get('tb_aturan')->result_array();

	// 	foreach($semua_aturan as $aturan) {
	// 		$this->db->where('id_aturan', $aturan['id_aturan']);
	// 		$this->db->order_by('id_detail_aturan', 'ASC');

	// 		$semua_detail = $this->db->get('tb_detail_aturan')->result_array();

	// 		$temp = array(
	// 			'status_aturan' => $aturan['status_aturan'],
	// 			'cf_aturan' => $aturan['cf_aturan'],
	// 			'tds' => $this->get_kategori_gejala($semua_detail[0]['id_kategori_gejala']),
	// 			'tdd' => $this->get_kategori_gejala($semua_detail[1]['id_kategori_gejala']),
	// 			'kbb' => $this->get_kategori_gejala($semua_detail[2]['id_kategori_gejala']),
	// 			'uk' => $this->get_kategori_gejala($semua_detail[3]['id_kategori_gejala']),
	// 			'ui' => $this->get_kategori_gejala($semua_detail[4]['id_kategori_gejala']),
	// 			'edema' => $this->get_kategori_gejala($semua_detail[5]['id_kategori_gejala']),
	// 			'proteinuria' => $this->get_kategori_gejala($semua_detail[6]['id_kategori_gejala'])
	// 		);

	// 		array_push($arr_aturan, $temp);
	// 	}

	// 	return $arr_aturan;
	// }

	// public function tbhDetKon()
	// {
	// 	$data = array(
	// 		$id_detail_konsultasi = '', 
	// 		$id_konsultasi = $this->input->post('id_konsultasi'),
	// 		$kategori_gejala = $this->input->post('kategori_gejala'),
	// 		$nilai = $this->input->post('nilai')
	// 	);

	// 	$this->db->insert('tb_detail_konsultasi', $data);
	// }

	public function cari_aturan($tds, $tdd, $kbb, $uk, $ui, $edema, $proteinuria) {
		$where = array(
			'tds' => $tds,
			'tdd' => $tdd,
			'kbb' => $kbb,
			'uk' => $uk,
			'ui' => $ui,
			'edema' => $edema,
			'proteinuria' => $proteinuria
		);

		$data_aturan = $this->db->get_where('v_aturan', $where)->row_array();

		return $data_aturan['status_aturan'];
	}

	public function get_jumlah_kombinasi($arr) {
		$result = array();

		$jumlah_normal = 0;
		$jumlah_sedang = 0;
		$jumlah_tinggi = 0;

		foreach($arr as $row) {
			$status_aturan = $this->cari_aturan($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);

			if($status_aturan == 'Normal') {
				$jumlah_normal += 1;
			} else if($status_aturan == 'Sedang') {
				$jumlah_sedang += 1;
			} else if($status_aturan == 'Tinggi') {
				$jumlah_tinggi += 1;
			}
		}

		$result['normal'] = $jumlah_normal;
		$result['sedang'] = $jumlah_sedang;
		$result['tinggi'] = $jumlah_tinggi;

		return $result;
	}

	public function get_persentase_kombinasi($arr, $nilai_z) {
		$result = array();

		foreach($arr as $key => $value) {
			$cf_persentase = 0;
			$cf_combine = 0;

			for($i=1; $i<=$value; $i++) {
				if($i == 1) {
					$cf_combine = 0 + (0.8 * $nilai_z) * (1 - 0);
				} else {
					$cf_combine = $cf_combine + (0.8 * $nilai_z) * (1 - $cf_combine);
				}
			}

			$cf_persentase = $cf_combine * 100;

			$temp = array(
				'status' => ucwords($key),
				'cf_combine' => $cf_combine,
				'cf_persentase' => $cf_persentase
			);

			array_push($result, $temp);

		// 	$data = array(
		// 	'id_pasien' => $this->input->post('id_pasien', true),
		// 	'hasil_konsultasi' => $key,
		// 	'persentase' =>$cf_persentase
		// );

		// return $this->db->insert('tb_konsultasi',$data);
		// $this->db->insert('tb_detail_konsultasi',$data);

		}

		return $result;
	}
	function getlast(){
		$last=$this->db->query("SELECT * FROM tb_konsultasi ORDER BY id_konsultasi DESC LIMIT 1");
		return $last->row();
	}

	public function insert(){
		// $a = stdClass($cf_persentase);
		// $cf_persentase = array();
		// $kalimat = $cf_persentase;
		// $arr_kalimat = implode (", ",$kalimat);
		// $a = [$cf_persentase => 'cf_persentase'];
		$data = array(
			'id_pasien' => $this->input->post('id_pasien'),
			'hasil_konsultasi' => $cf_persentase
		);

		return $this->db->insert('tb_konsultas',$data);
	}

	public function get_keanggotaan_tds($himpunan, $nilai) {
		$nilai_himpunan = 0;

		switch ($himpunan) {
			case 'normal':
				if($nilai <= 120) {
					$nilai_himpunan = 1;
				} else if($nilai > 120 && $nilai < 160) {
					$nilai_himpunan = (160 - $nilai) / (160 - 120);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'tinggi':
				if($nilai <= 120) {
					$nilai_himpunan = 0;
				} else if($nilai > 120 && $nilai < 160) {
					$nilai_himpunan = ($nilai - 120) / (160 - 120);
				} else if($nilai == 160) {
					$nilai_himpunan = 1;
				} else if($nilai > 160 && $nilai < 200) {
					$nilai_himpunan = (200 - $nilai) / (200 - 160);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'sangat_tinggi':
				if($nilai <= 160) {
					$nilai_himpunan = 0;
				} else if($nilai > 160 && $nilai < 200) {
					$nilai_himpunan = ($nilai - 200) / (200 - 160);
				} else {
					$nilai_himpunan = 1;
				}
				break;
			
			default:
				# code...
				break;
		}

		return $nilai_himpunan;
	}

	public function get_keanggotaan_tdd($himpunan, $nilai) {
		$nilai_himpunan = 0;

		switch ($himpunan) {
			case 'normal':
				if($nilai <= 70) {
					$nilai_himpunan = 1;
				} else if($nilai > 70 && $nilai < 110) {
					$nilai_himpunan = (110 - $nilai) / (110 - 70);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'tinggi':
				if($nilai <= 70) {
					$nilai_himpunan = 0;
				} else if($nilai > 70 && $nilai < 110) {
					$nilai_himpunan = ($nilai - 70) / (110 - 70);
				} else if($nilai == 110) {
					$nilai_himpunan = 1;
				} else if($nilai > 110 && $nilai < 150) {
					$nilai_himpunan = (150 - $nilai) / (150 - 110);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'sangat_tinggi':
				if($nilai <= 110) {
					$nilai_himpunan = 0;
				} else if($nilai > 110 && $nilai < 150) {
					$nilai_himpunan = ($nilai - 150) / (150 - 110);
				} else {
					$nilai_himpunan = 1;
				}
				break;
			
			default:
				# code...
				break;
		}

		return $nilai_himpunan;
	}

	public function get_keanggotaan_kbb($himpunan, $nilai) {
		$nilai_himpunan = 0;

		switch ($himpunan) {
			case 'rendah':
				if($nilai <= 0) {
					$nilai_himpunan = 1;
				} else if($nilai > 0 && $nilai < 2) {
					$nilai_himpunan = (2 - $nilai) / (2 - 0);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'normal':
				if($nilai <= 0) {
					$nilai_himpunan = 0;
				} else if($nilai > 0 && $nilai < 2) {
					$nilai_himpunan = ($nilai - 0) / (2 - 0);
				} else if($nilai == 2) {
					$nilai_himpunan = 1;
				} else if($nilai > 2 && $nilai < 4) {
					$nilai_himpunan = (4 - $nilai) / (4 - 2);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'tinggi':
				if($nilai <= 2) {
					$nilai_himpunan = 0;
				} else if($nilai > 2 && $nilai < 4) {
					$nilai_himpunan = ($nilai - 4) / (4 - 2);
				} else {
					$nilai_himpunan = 1;
				}
				break;
			
			default:
				# code...
				break;
		}

		return $nilai_himpunan;
	}

	public function get_keanggotaan_uk($nilai) {
		$nilai_himpunan = "";

		if($nilai >= 1 && $nilai <= 13) {
			$nilai_himpunan = "Trimester 1";
		} else if($nilai >= 14 && $nilai <= 27) {
			$nilai_himpunan = "Trimester 2";
		} else {
			$nilai_himpunan = "Trimester 3";
		}

		return $nilai_himpunan;
	}

	public function get_keanggotaan_ui($himpunan, $nilai) {
		$nilai_himpunan = 0;

		switch ($himpunan) {
			case 'tinggi':
				if($nilai <= 15) {
					$nilai_himpunan = 1;
				} else if($nilai > 15 && $nilai < 20) {
					$nilai_himpunan = (20 - $nilai) / (20 - 15);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'normal':
				if($nilai <= 15) {
					$nilai_himpunan = 0;
				} else if($nilai > 15 && $nilai < 20) {
					$nilai_himpunan = ($nilai - 15) / (20 - 15);
				} else if($nilai >= 20 && $nilai <= 35) {
					$nilai_himpunan = 1;
				} else if($nilai > 35 && $nilai < 40) {
					$nilai_himpunan = (40 - $nilai) / (40 - 35);
				} else {
					$nilai_himpunan = 0;
				}
				break;

			case 'resiko_tinggi':
				if($nilai <= 40) {
					$nilai_himpunan = 0;
				} else if($nilai > 35 && $nilai < 40) {
					$nilai_himpunan = ($nilai - 35) / (40 - 35);
				} else {
					$nilai_himpunan = 1;
				}
				break;
			
			default:
				# code...
				break;
		}

		return $nilai_himpunan;
	}

	public function get_cf_gejala($kode_gejala, $kategori_gejala) {
		$kategori_gejala = $this->db->get_where('v_kategori_gejala', array('kode_gejala' => $kode_gejala, 'kategori_gejala' => $kategori_gejala))->row_array();

		return $kategori_gejala['cf_gejala'];
	}

	public function get_nilai_defuzzyfikasi($tds, $tdd, $kbb, $ui) {
		$total_nilai = 0;
		$total_cf = 0;

		foreach($tds as $key => $value) {
			if($value != 0) {
				$kategori_gejala = str_replace('_', ' ', $key);
				$kategori_gejala = ucwords($kategori_gejala);

				$cf = $this->get_cf_gejala('TDS', $kategori_gejala);

				$total_nilai += $value * $cf;
				$total_cf += $cf;
			}
		}

		foreach($tdd as $key => $value) {
			if($value != 0) {
				$kategori_gejala = str_replace('_', ' ', $key);
				$kategori_gejala = ucwords($kategori_gejala);

				$cf = $this->get_cf_gejala('TDD', $kategori_gejala);

				$total_nilai += $value * $cf;
				$total_cf += $cf;
			}
		}

		foreach($kbb as $key => $value) {
			if($value != 0) {
				$kategori_gejala = str_replace('_', ' ', $key);
				$kategori_gejala = ucwords($kategori_gejala);

				$cf = $this->get_cf_gejala('KBB', $kategori_gejala);

				$total_nilai += $value * $cf;
				$total_cf += $cf;
			}
		}

		foreach($ui as $key => $value) {
			if($value != 0) {
				$kategori_gejala = str_replace('_', ' ', $key);
				$kategori_gejala = ucwords($kategori_gejala);

				$cf = $this->get_cf_gejala('UI', $kategori_gejala);

				$total_nilai += $value * $cf;
				$total_cf += $cf;
			}
		}

		return $total_nilai / $total_cf;
	}

	public function get_arr_keanggotaan($arr) {
		$result = array();

		foreach($arr as $key => $value) {
			if($value != 0) {
				$str = str_replace('_', ' ', $key);
				$str = ucwords($str);

				$result[] = $str;
			}
		}

		return $result;
	}

	// public function get_konsul(){
	// 	 $query = $this->db->query("SELECT * FROM tb_detail_konsultasi 
	// 	 	join tb_konsultasi 
	// 	 	on tb_detail_konsultasi.id_konsultasi = tb_konsultasi.id_konsultasi");
 //        return $query->result(); 
	// }
}
