<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ctrPdf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('modelView');
	}

	public function cetak($id){
        $data = $this->modelView->get_konsul($id);
		$pdf = new FPDF('L','mm','A4'); //L = lanscape P= potrait
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        $ya = 44;
        // mencetak string 
        // $pdf->Write(0, 'Simpan ke PDF - Jaranguda.com', '', 0, 'L');
        $pdf->Cell(290,7,'Sistem Pakar',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'Diagnosa Preeklampsia Dini Pada Ibu Hamil',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(30,6,'ID Konsultasi',1,0);
        $pdf->Cell(25,6,'Nama : '.$data[0]->nama,0,1);
        $pdf->Cell(45,6,'Tekanan Darah Diastolic :'.$data[0]->tdd,0,1);
        $pdf->Cell(45,6,'Tekanan Darah Sistolic :'.$data[0]->tds,0,1);
        $pdf->Cell(40,6,'Kenaikan Berat Badan :'.$data[0]->kbb,0,1);
        $pdf->Cell(30,6,'Usia Kehamilan :'.$data[0]->uk,0,1);
        $pdf->Cell(20,6,'Usia Ibu :'.$data[0]->ui,0,1);
        $pdf->Cell(15,6,'Edema :'.$data[0]->edema,0,1);
        $pdf->Cell(22,6,'Proteinuria :'.$data[0]->proteinuria,0,1);
        $pdf->Cell(15,6,'Hasil :'.$data[0]->hasil_konsultasi,0,1);
        $pdf->Cell(33,6,'Persentase :'.sprintf("%.2f%%", $data[0]->persentase),0,1);
        $pdf->Cell(40,6,'Solusi :'.$data[0]->solusi,0,1);
        $pdf->SetFont('Arial','',10);
        // $this->load->view('admin/cetakPDF', $data);
        // foreach ($data as $row){
        //     // $pdf->Cell(30,6,$row->id_konsultasi,1,0);
        //     $pdf->Cell(25,6,$row->nama,0,1);
        //     $pdf->Cell(45,6,$row->tdd,0,1);
	       //  $pdf->Cell(45,6,$row->tds,0,1);
	       //  $pdf->Cell(40,6,$row->kbb,0,1);
	       //  $pdf->Cell(30,6,$row->uk,0,1);
	       //  $pdf->Cell(20,6,$row->ui,0,1);
	       //  $pdf->Cell(15,6,$row->edema,0,1);
	       //  $pdf->Cell(22,6,$row->proteinuria,0,1);
	       //  $pdf->Cell(15,6,$row->hasil_konsultasi,0,1);
	       //  $pdf->Cell(33,6,$row->persentase,0,1);
	       //  $pdf->Cell(40,6,$row->solusi,0,1);
        // }
        $pdf->Output();
	}


}