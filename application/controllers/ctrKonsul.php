<?php

class ctrKonsul extends CI_Controller
{
    function __construct(){
        parent :: __construct();
        $this->load->model('konsultasi');
        $this->load->model('model_test');
    }

    public function index(){
    	 // $x['data']=$this->konsultasi->get_pasien();
         // $x['terakhir']=$this->model_test->getlast();
        $this->load->view('template/index');
        $this->load->view('admin/viewKonsul');
        $this->load->view('template/footerindexx');
    }

    public function hitung(){
        //gejala tdd
        $tdd= array(
            'tdd'=>$_POST['tdd']
            // $tdd=>$this->input->post('tdd');
        );

        // $nilai = $tdd['tdd']; 75
        if ($tdd ["tdd"] <= 70) {
            $tdd["normal"] = 1;
        }elseif ($tdd ["tdd"] > 70 && $tdd ["tdd"] < 110) {
            $tdd["normal"] = ((110 - $tdd["tdd"]) / (110 - 70)); #0.875
            $tdd["tinggi"] = (($tdd["tdd"] - 70) / (110 - 70)); #0.125
        }elseif ($tdd ["tdd"] = 110) {
            $tdd["tinggi"] = 1;
        }elseif ($tdd ["tdd"] > 110 && $tdd ["tdd"] < 150) {
            $tdd["tinggi"] = ((150 - $tdd["tdd"]) / (150 - 110));
            $tdd["sangat tinggi"] = (($tdd["tdd"] - 150) / (150 - 110));
        }else{
            $tdd["sangat tinggi"] = 1;
        }

        // $count = count($tdd);

        // for($i=0; $i<$count; $i++) {
        //     for ($i=1; $i < $count ; $i++) { 
        //         // echo $i * 0.4;
        //         echo $tdd ['normal'] = (($tdd ['normal']) * 0.4);
        //         echo "<br />";
        //         // echo $tdd ['tinggi'] = (($tdd ['tinggi']) * 0.6);
        //         // echo $tdd['sangat tinggi'] = (($tdd['sangat tinggi']) *0.8);
        //     }for ($i=2; $i < $count ; $i++) { 
        //         echo $tdd ['tinggi'] = (($tdd ['tinggi']) * 0.6);
        //         echo "<br />";
        //     }for ($i=3; $i < $count ; $i++) { 
        //         echo $tdd['sangat tinggi'] = (($tdd['sangat tinggi']) *0.8);

        //     }
        //     // break;
        // } 

        // $array = count($tdd);
        // for ($i=0; $i < $array ; $i++) { 
        //         echo $tdd ['normal'] = (($tdd ['normal']) * 0.4);
        //         echo "<br />";
        //         echo $tdd ['tinggi'] = (($tdd ['tinggi']) * 0.6);
        //         echo "<br />";
        //         // echo $tdd['sangat tinggi'] = (($tdd['sangat tinggi']) *0.8);
        //         break;
        // } 

        
        // }   

        // $total_perhitungan = 0;

        // $array = count($tdd);

        // for($i=0; $i<$array; $i++) {
        //     if($tdd['normal']) {
        //         $total_perhitungan += $tdd['normal'] * 0.4;
        //     }

        //     if($tdd['tinggi']) {
        //         $total_perhitungan += $tdd['tinggi'] * 0.6;
        //     }

        //     if($tdd['sangat tinggi']) {
        //         $total_perhitungan += $tdd['sangat tinggi'] * 0.8;
        //     }
        // }

        // var_dump($total_perhitungan);die(); 

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

        //gajala usia kehamilan
        $uk = array(
            'uk'=>$_POST['uk']
        );

        $input = $uk;

        if ($uk ["uk"] > 0 && $uk ["uk"] <= 13) {
            $uk  ["trimester 1"] = $input;
        }else if ($uk ["uk"] > 13 && $uk ["uk"] <= 27) {
            $uk ["trimester 2"] =$input;
            // $uk = 'trimester 2';
        }else  if ($uk ["uk"] > 27 ) {
            $uk ["trimester 3"] =$input;
        }

        //gejala edema
        $edema = array(
            'edema'=>$_POST['edema']
        );

        //gejala proteinuria
        $proteinuria = array(
            'proteinuria'=>$_POST['proteinuria']
        );

        //perhitungan array cf
        $total_tdd = 0;
        $cf_normal = 0.4;
        $cf_tinggi = 0.6;
        $cf_sangat = 0.8;

        $pembagi = 0;

        $array = count($tdd);
            if(isset($tdd['normal'])) {
                $total_tdd += $tdd['normal'] * $cf_normal;
                $pembagi += $cf_normal;
            }

            if(isset($tdd['tinggi'])) {
                $total_tdd += $tdd['tinggi'] * $cf_tinggi;
                $pembagi += $cf_tinggi;
            }

            if(isset($tdd['sangat_tinggi'])) {
                $total_tdd += $tdd['sangat_tinggi'] * $cf_sangat;
                $pembagi += $cf_sangat;
            }


        $total_tds = 0;

        $array = count($tds);
            if(isset($tds['normal'])) {
                $total_tds += $tds['normal'] * 0.4;
                $pembagi += 0.4;
            }

            if(isset($tds['tinggi'])) {
                $total_tds += $tds['tinggi'] * 0.6;
                $pembagi += 0.6;
            }

            if(isset($tds['sangat_tinggi'])) {
                $total_tds += $tds['sangat_tinggi'] * 0.8;
                $pembagi += 0.8;
            }

        $total_kbb = 0;

        $array = count($kbb);
            if(isset($kbb['rendah'])) {
                $total_kbb += $kbb['rendah'] * 0.4;
                $pembagi += 0.4;
            }

            if(isset($kbb['normal'])) {
                $total_kbb += $kbb['normal'] * 0.6;
                $pembagi += 0.6;
            }

            if(isset($kbb['tinggi'])) {
                $total_kbb += $kbb['tinggi'] * 0.8;
                $pembagi += 0.8;
            }

        $total_ui = 0;

        $array = count($ui);
            if(isset($ui['normal'])) {
                $total_ui += $ui['normal'] * 0.4;
                $pembagi += 0.4;
            }

            if(isset($ui['tinggi'])) {
                $total_ui += $ui['tinggi'] * 0.6;
                $pembagi += 0.6;
            }

            if(isset($ui['sangat tinggi'])) {
                $total_ui += $ui['sangat tinggi'] * 0.8;
                $pembagi += 0.8;
            }

        //perhitungan defuzzyfikasi

            $z = ($total_tdd + $total_tds + $total_kbb + $total_ui)/$pembagi;
            print_r($z);
            $gejala_a = $this->get_gejala('Normal', 'Normal', 'Rendah', 'Trimester 3', 'Normal', 'Iya', 'Tinggi');
            // foreach ($list_gejala as $key => $gejala) {
            //     $id_kategori = $this->get_id_kategori_gejala($gejala->id_gejala, $gejala->kategori_gejala);
            //     echo "<pre>";
            //     print_r(array_values($id_kategori));
            //     echo "</pre>";
            // }
            // var_dump($total_tdd,$total_tds,$total_kbb,$total_ui,$total);

            // CF sekuensial
            $aturan = array();
            for ($i=0; $i < 4; $i++) { 
                $aturan[$i] = $z*0.8;
            }
            echo("<br>");
            print_r($aturan);
            echo("<br>");

            // CF Combine
            $combine = array();
            $combine[0] = $aturan[0];
            for ($i=1; $i < count($aturan); $i++) { 
                $combine[$i] = $combine[$i-1]+$aturan[$i]*(1-$combine[$i-1]);
            }
            array_shift($combine);
            print_r($combine);
            echo("<br>");
            print_r(sprintf("%.2f%%", end($combine) * 100));
            die();

            // SELECT * FROM `tb_detail_aturan` WHERE id_kategori_gejala in (1, 21, 7, 12, 14, 16, 18)
            // SELECT * FROM `tb_detail_aturan` WHERE id_kategori_gejala = 1 and id_kategori_gejala = 21 and id_kategori_gejala = 7 and id_kategori_gejala = 12 and id_kategori_gejala = 14 and id_kategori_gejala = 16 and id_kategori_gejala = 18
    }

    public function get_gejala($tds, $tdd, $kbb, $uk, $ui, $edema, $proteinuria)
    {
        $this->db->select('id_gejala,nama_gejala');
        $this->db->order_by('id_gejala');
        $result = $this->db->get('tb_gejala')->result();
        $result[0]->kategori_gejala = $tds;
        $result[1]->kategori_gejala = $tdd;
        $result[2]->kategori_gejala = $kbb;
        $result[3]->kategori_gejala = $uk;
        $result[4]->kategori_gejala = $ui;
        $result[5]->kategori_gejala = $edema;
        $result[6]->kategori_gejala = $proteinuria;
        return $result;
    }

    public function get_id_kategori_gejala($id_gejala, $kategori_gejala){
        $this->db->select('tkg.id_kategori_gejala');
        // $this->db->select('tkg.id_kategori_gejala, tda.id_detail_aturan, tda.id_aturan, ta.status_aturan, ta.cf_aturan');
        // $this->db->join('tb_detail_aturan tda', 'tda.id_kategori_gejala = tkg.id_kategori_gejala', 'left');
        // $this->db->join('tb_aturan ta', 'ta.id_aturan = tda.id_aturan', 'left');
        $this->db->where('tkg.id_gejala', $id_gejala);
        $this->db->where('tkg.kategori_gejala', $kategori_gejala);
        $this->db->group_by('tkg.id_gejala');
        return $this->db->get('tb_kategori_gejala tkg')->result();
    }
}
