<?php

class ctrKonsul extends CI_Controller
{
    function __construct(){
        parent :: __construct();
        $this->load->model('konsultasi');
    }

    public function index(){
    	 $x['data']=$this->konsultasi->get_pasien();
        $this->load->view('template/index');
        $this->load->view('admin/viewKonsul',$x);
        $this->load->view('template/footerindexx');
    }

    public function hitung(){
        //gejala tdd
        $tdd= array(
            'tdd'=>$_POST['tdd']
        );

        // $nilai = $tdd['tdd'];
        if ($tdd ["tdd"] <= 70) {
            $tdd["normal"] = 1;
        }elseif ($tdd ["tdd"] > 70 && $tdd ["tdd"] < 110) {
            $tdd["normal"] = ((110 - $tdd["tdd"]) / (110 - 70));
            $tdd["tinggi"] = (($tdd["tdd"] - 70) / (110 - 70));
        }elseif ($tdd ["tdd"] = 110) {
            $tdd["tinggi"] = 1;
        }elseif ($tdd ["tdd"] > 110 && $tdd ["tdd"] < 150) {
            $tdd["tinggi"] = ((150 - $tdd["tdd"]) / (150 - 110));
            $tdd["sangat tinggi"] = (($tdd["tdd"] - 150) / (150 - 110));
        }else{
            $tdd["sangat tinggi"] = 1;
        }

        //gejala tds
        $tds = array(
            'tds'=>$_POST['tds']
        );

        if ($tds ["tds"] <= 120) {
            $tds["normal"] = 1;
        }elseif ($tds ["tds"] > 120 && $tds ["tds"] < 160) {
            $tds["normal"] = ((160 - $tds["tds"]) / (160 - 120));
            $tds["tinggi"] = (($tds["tds"] - 120) / (160 - 120));
        }elseif ($tds ["tds"] = 160) {
            $tds["tinggi"] = 1;
        }elseif ($tds ["tds"] > 160 && $tds ["tds"] < 220) {
            $tds["tinggi"] = ((200 - $tds["tds"]) / (200 - 160));
            $tds["sangat tinggi"] = (($tds["tds"] - 200) / (200 - 160));
        }else{
            $tds["sangat tinggi"] = 1;
        }

        //gejala kbb
        $kbb = array(
            'kbb'=>$_POST['kbb']
        );

        if ($kbb ["kbb"] <= 0) {
            $kbb["rendah"]  = 1;
        }elseif ($kbb ["kbb"] > 0 && $kbb ["kbb"] < 2) {
            $kbb ["rendah"] = ((2 - $kbb ["kbb"]) / (2 - 0));
            $kbb ["normal"] = (($kbb ["kbb"] - 0) / (2 - 0));
        }elseif ($kbb ['kbb'] = 2) {
            $kbb ["normal"] = 1;
        }elseif ($kbb ["kbb"] > 2 && $kbb ["kbb"] < 4) {
            $kbb ["normal"] = ((4 - $kbb ["kbb"]) / (4 -  2));
            $kbb ["tinggi"] = (($kbb ["kbb"] - 2) / (4 - 2));
        }else{
            $kbb ["tinggi"] = 1;
        }


        //gajala usia kehamilan
        $uk = array(
            'uk'=>$_POST['uk']
        );

        if ($uk ["uk"] > 0 && $uk ["uk"] <= 13) {
            $uk ["trimester 1"] ='trimester 1';
        }elseif ($uk ["uk"] <= 27) {
            $uk ["trimester 2"] = 'trimester 2';
        }else {
            $uk ["trimester 3"] = 'trimester 3';
        }

        //gejala usia ibu
        $ui = array(
            'ui'=>$_POST['ui']
        );

        if ($ui ["ui"] <= 15) {
            $ui ["tinggi"] = 1;
        }elseif ($ui ["ui"] >15 && $ui ["ui"] < 20) {
            $ui ["tinggi"] = ((20 - $ui ["ui"]) / (20 - 15));
            $ui ["normal"] = (($ui ["ui"] - 15) / (20 - 15));
        }elseif ($ui ["ui"] >= 20 && $ui ["ui"] <= 35) {
            $ui ["normal"] = 1;
        }elseif ($ui ["ui"] > 35 && $ui ["ui"] < 40) {
            $ui ["normal"] = ((40 - $ui ["ui"]) / (40 - 35));
            $ui ["sangat tinggi"] = (($ui ["ui"] - 35) / (40 - 35));
        }else{
            $ui ["sangat tinggi"] = 1;
        }

        //gejala edema
        $edema = array(
            'edema'=>$_POST['edema']
        );

        //gejala proteinuria
        $proteinuria = array(
            'proteinuria'=>$_POST['proteinuria']
        );

        var_dump($tdd,$tds,$kbb,$uk,$ui,$edema,$proteinuria);
        die();
    }
}
