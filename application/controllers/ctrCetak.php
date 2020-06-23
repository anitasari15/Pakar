<?php

/**
 * 
 */
class ctrCetak extends CI_Controller
{
	
	function __construct()
	{

	}

	public function laporan_audit()
		{
			$data = array(
 			"all" => $this->db->query('SELECT tb_konsultasi.*, tb_pasien.*FROM tb_konsultasi INNER JOIN tb_pasien ON tb_konsultasi.id_pasien=tb_pasien.id_pasien')->result(),
 		);

        for ($i=0; $i < count($data['all']); $i++) { 
 			$birthDt = new DateTime($data['all'][$i]->tgl_lahir);
 			$today = new DateTime('today');
 			$y = $today->diff($birthDt)->y;
 			$data['all'][$i]->umur = $y;
 		}

 		// $data['lap_audit'] = $this->rekamMedik->rekam();

 		$this->load->view('template/index');
 		$this->load->view('admin/viewDataKonsul', $data);
 		$this->load->view('template/footerindex');
		}

		public function Rekap()
		{
			$data['bulannn']=$this->input->post('bulan');
			$data['lap_audit'] = $this->rekamMedik->rekam();
			// $data['level'] = $this->pinjam->joinNamaLevel(2);
			// $data['page'] = "staff/kas/laporan_audit";
			$this->load->view('template/index');
			$this->load->view('admin/viewDataKonsul', $data);
			$this->load->view('template/footerindex');
		}

		public function laporan()
		{
			if($this->input->post('tampil')=='tampilkan'){
				$data['bulannn']=$this->input->post('bulan');
				$data['lap_audit'] = $this->rekamMedik->rekam();
				// $data['level'] = $this->pinjam->joinNamaLevel(2);
				// $data['page'] = "staff/kas/laporan_audit";
			$this->load->view('template/index');
			$this->load->view('admin/viewFilter', $data);
			$this->load->view('template/footerindex');		
			}else {
				$bulan=array("name","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				$bul = $this->input->post('bulan');
				$this->load->library('pdf');
				$pdf = new FPDF('l','mm','A4');
		        // membuat halaman baru
		        $pdf->AddPage();
		        // setting jenis font yang akan digunakan
		        $pdf->SetFont('Arial','B',16);
		        // mencetak string 
		        $pdf->Cell(190,7,'Sistem Pakar',0,1,'C');
		        $pdf->SetFont('Arial','B',12);
		        $pdf->Cell(190,7,'Laporan Rekam Medik',0,1,'C');
		        // $pdf->Cell(50,6,'Bulan : '.$bulan[$bul],1,0);
		        // Memberikan space kebawah agar tidak terlalu rapat
		        $pdf->Cell(10,7,'',0,1);
		        $pdf->SetFont('Arial','B',10);
		        $pdf->Cell(25,6,'Id Konsultasi',1,0);
		        $pdf->Cell(20,6,'Id Pasien',1,0);
		        $pdf->Cell(35,6,'Tanggal Konsultasi',1,0);
		        $pdf->Cell(10,6,'TDS',1,0);
		        $pdf->Cell(10,6,'TDD',1,0);
		        $pdf->Cell(10,6,'KBB',1,0);
		        $pdf->Cell(10,6,'UK',1,0);
		        $pdf->Cell(15,6,'Edema',1,0);
		        $pdf->Cell(25,6,'Proteinuria',1,0);
		        $pdf->Cell(10,6,'Hasil',1,0);
		        $pdf->Cell(25,6,'Presentase',1,0);
		        $pdf->Cell(30,6,'Solusi',1,1);
		        $pdf->SetFont('Arial','',10);
		        // $pinjaman = $this->db->get('pinjaman')->result();
		        $medik = $this->rekamMedik->rekam();
		        foreach ($medik as $row){

		        $pdf->Cell(25,6,$row->id_konsultasi,1,0); //ngunu t?
		        $pdf->Cell(20,6,$row->id_pasien,1,0);
		        $pdf->Cell(35,6,$row->tanggal_konsultasi,1,0);
		        $pdf->Cell(10,6,$row->tds,1,0);
		        $pdf->Cell(10,6,$row->tdd,1,0);
		        $pdf->Cell(10,6,$row->kbb,1,0);
		        $pdf->Cell(10,6,$row->uk,1,0);
		        $pdf->Cell(15,6,$row->edema,1,0);
		        $pdf->Cell(25,6,$row->proteinuria,1,0);
		        $pdf->Cell(10,6,$row->hasil_konsultasi,1,0);
		        $pdf->Cell(25,6,$row->persentase,1,0);
		        $pdf->Cell(30,6,$row->solusi,1,1); 
		        }
		        $pdf->Output();
			}
		}
}