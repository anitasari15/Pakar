<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

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
                        <a href="<?php echo site_url() ?>/pasien/ctrProfil" class="btn btn-info btn-fill btn-lg ">Profil</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/pasien/ctrKonsul" class="btn btn-info btn-fill btn-lg ">Konsultasi</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/pasien/ctrRiwayat" class="btn btn-info btn-fill btn-lg ">Riwayat</a>
                    </li>
                    <li>
                      <!-- <button class="fa fa-sign-out" style="margin-top: 20pt ; color: red; font-size: 20px">
                      </button> -->
                        <a href="<?php echo site_url() ?>/ctrLogin/logOutt" class="btn btn-danger btn-fill btn-lg">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="section" style="margin-top: 60pt">
<div>
    <div>
        <div>
            <center><h1>Data Pasien</h1></center>
            <?php foreach ($pasien as $x): ?>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <b>Nama <text style="padding-left:3.8em"></text>: <?php echo $x->nama; ?></b><br/>
                <b>Tanggal Lahir : <?php echo $x->tgl_lahir;?></b><br>
                <b>Alamat <text style="padding-left:3.2em"></text>: <?php echo $x->alamat;?></b></br>
            <?php endforeach ?>
        </div>
        <center>
                    <div>
                     <a data-toggle="modal" data-target="#modal-edit<?=$x->id_pasien;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                      <!-- <a href="<?php echo base_url()?>ctrPdf/cetak/<?php echo $x->id_konsultasi ?>" class="btn btn-danger btn-circle" style="color: black" data-placement="top" title="Cetak Data"><i class="fa fa-file"></i></a> -->
                      <!-- <button class="btn btn-danger" type="Submit" name="tampil" value="download"><span class="glyphicon glyphicon-download-alt" title="cetak data"></span></button> -->
                    </div>
                  </center>
        
    </div>

<?php $no=0; foreach($pasien as $row): $no++; ?>
<div id="modal-edit<?=$row->id_pasien;?>" class="modal fade">
  <div class="modal-dialog">
    <form action="<?php echo site_url('pasien/ctrPasien/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_pasien;?>" name="id_pasien" class="form-control" >
          <div class="form-group">
            <label class='col-md-3'>Nama Pasien</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" value="<?=$row->nama;?>" required placeholder="Masukkan Nama Pasien" class="form-control" readonly></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Alamat Pasien</label>
            <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" value="<?=$row->alamat;?>" required placeholder="Masukkan Alamat Pasien" class="form-control" readonly></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Username</label>
            <div class='col-md-9'><input type="text" name="tgl_lahir" autocomplete="off" value="<?=$row->username;?>" required placeholder="Masukkan Tanggal Lahir" class="form-control" readonly></div>
          </div>
          <div>
            <label class='col-md-3'>Password</label>
            <div class='col-md-9'><input type="password" name="password" autocomplete="off" value="<?=$row->password;?>" required placeholder="Masukkan Password" class="form-control" ></div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Reset Password</button>
      </div>
      </div>
      
    </form>
  </div>
</div>
<?php endforeach; ?>