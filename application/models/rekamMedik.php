<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class rekamMedik extends CI_Model {

    public function getRekam()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        // $bulann = date("Y");
   //   var_dump($bulann); 
            // die();
        // /$query = $this->db->query("SELECT tanggal_konsultasi FROM tb_konsultasi where MONTH(STR_TO_DATE(tanggal_konsultasi,'%d %m %Y')) = $bulan && YEAR(STR_TO_DATE(tanggal_konsultasi,'%d %m %Y')) = $tahun group by tanggal_konsultasi");
        $query = $this->db->query("SELECT 
            tb_konsultasi.*, tb_pasien.id_pasien,tb_pasien.tgl_lahir 
            from tb_konsultasi
            JOIN tb_pasien on tb_pasien.id_pasien = tb_konsultasi.id_pasien
            where MONTH(tanggal_konsultasi) = $bulan AND YEAR(tanggal_konsultasi) = $tahun group by tanggal_konsultasi");
        return $query->result_array();
    }

    public function rekam()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        // $bulann = date("Y");
   //   var_dump($bulann); 
            // die();
        // /$query = $this->db->query("SELECT tanggal_konsultasi FROM tb_konsultasi where MONTH(STR_TO_DATE(tanggal_konsultasi,'%d %m %Y')) = $bulan && YEAR(STR_TO_DATE(tanggal_konsultasi,'%d %m %Y')) = $tahun group by tanggal_konsultasi");
        $query = $this->db->query("SELECT 
            tb_konsultasi.*, tb_pasien.id_pasien,tb_pasien.tgl_lahir 
            from tb_konsultasi
            JOIN tb_pasien on tb_pasien.id_pasien = tb_konsultasi.id_pasien
            where MONTH(tanggal_konsultasi) = $bulan AND YEAR(tanggal_konsultasi) = $tahun group by tanggal_konsultasi");


        return $query->result();
    }
}