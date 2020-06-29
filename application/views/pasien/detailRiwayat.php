<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sistem Pakar Deteksi Preeklampsia</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?php echo base_url() ?>assets/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/assets/css/gaia.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <a href="<?php echo site_url() ?>/welcome" class="navbar-brand">
                    Sistem Pakar
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="<?php echo site_url() ?>pasien/ctrPasien" class="btn btn-info btn-fill btn-lg ">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>pasien/ctrProfil" class="btn btn-info btn-fill btn-lg ">Profil</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/pasien/ctrKonsul" class="btn btn-info btn-fill btn-lg ">Konsultasi</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>pasien/ctrRiwayat" class="btn btn-info btn-fill btn-lg ">Riwayat</a>
                    </li>
                    <li>
                      <!-- <button class="fa fa-sign-out" style="margin-top: 20pt ; color: red; font-size: 20px">
                      </button> -->
                        <a href="<?php echo site_url() ?>ctrLogin/logOutt" class="btn btn-danger btn-fill btn-lg">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <!-- <div class="container" style="width: 2000px"> -->
<div class="section" style="margin-top: 60pt">
<div>
    <div class="card">
        <div class="card-body">
            <center><h1>Data Konsultasi Pasien</h1></center>
            <?php foreach ($data as $x): ?>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <b>Nama <text style="padding-left:9em"></text>: <?php echo $x->nama; ?></b><br/>
                <b>Tanggal Konsultasi <text style="padding-left:2.5em"></text>: <?php echo $x->tanggal_konsultasi;?><br/></b>
                <b>Tekanan Darah Diastolic : <?php echo $x->tdd;?></b> mmHg<br>
                <b>Tekanan Darah Sistolic <text style="padding-left:0.65em"></text>: <?php echo $x->tds;?></b> mmHg</br>
                <b>Kenaikan Berat Badan <text style="padding-left:1em"></text>: <?php echo $x->kbb;?></b> Kg<br/>
                <b>Usia Kehamil <text style="padding-left:5.5em"></text>: <?php echo $x->uk;?></b> Minggu<br/>
                <b>Usia Ibu <text style="padding-left:8em"></text>: <?php echo $x->ui;?></b> Tahun<br/>
                <b>Edema <text style="padding-left:8.5em"></text>: <?php echo $x->edema;?></b><br/>
                <b>Proteinuria <text style="padding-left:6.5em"></text> : <?php echo $x->proteinuria;?></b><br/>
                <b>Hasil Konsultasi <text style="padding-left:4em"></text>: <?php echo $x->hasil_konsultasi;?></b><br/>
                <b>Presentase <text style="padding-left:6.5em"></text>: <?php echo sprintf("%.2f%%", $x->persentase);?></b><br/>
                <b>Solusi<text style="padding-left:9em"></text>: <?php echo $x->solusi;?></b><br/>
            <?php endforeach ?>
        </div>
        <center>
                    <div>
                      <a href="<?php echo base_url()?>pasien/ctrRiwayat/" class="btn btn-circle btn-success" style="color: black" data-placement="top" title="Kembali"><i class="fa fa-mail-reply"></i></a>
                      <a href="<?php echo base_url()?>ctrPdf/cetak/<?php echo $x->id_konsultasi ?>" class="btn btn-danger btn-circle" style="color: black" data-placement="top" title="Cetak Data"><i class="fa fa-file"></i></a>
                      <!-- <button class="btn btn-danger" type="Submit" name="tampil" value="download"><span class="glyphicon glyphicon-download-alt" title="cetak data"></span></button> -->
                    </div>
                  </center>
        
    </div>