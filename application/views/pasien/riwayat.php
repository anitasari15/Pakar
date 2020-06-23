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

    <body>
        <!-- <div class="title-area">
            <h2>Data User</h2>
        </div> -->
        <div class="section" style="margin-top: 60pt">
            <h2>Data Riwayat Konsultasi</h2>
        <!-- <div class="container" style="width: 2000px"> -->
<!-- <div class="col-sm-10 left_col grid-margin stretch-card"> -->
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table table-bordered">
              <thead>
                <tr>
                  <th> No </th>
                  <!-- <th> Id Konsultasi </th> -->
                  <th> Nama Pasien </th>
                  <!-- <th> Tanggal Lahir Pasien </th> -->
                  <th> Tanggal Konsultasi </th>
                  <th> Tekanan Darah Diastolic (mmHg)</th>
                  <th> Tekanan Darah Sistolic </th>
                  <th> Kenaikan Berat Badan </th>
                  <th> Usia Kehamilan </th>
                  <th> Usia Ibu </th>
                  <th> Edema </th>
                  <th> Proteinuria </th>
                  <th> Hasil Konsultasi </th>
                  <th> Presentase </th>
                  <th> Solusi </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($data as $row): ?> 
                <td><?php echo $no++; ?></td>
                <!-- <td><?php echo $row->id_konsultasi;?> </td> -->
                <td><?php echo $row->nama;?> </td>
                <td><?php echo $row->tanggal_konsultasi; ?></td>
                <td><?php echo $row->tdd; ?></td>
                <td><?php echo $row->tds; ?></td>
                <td><?php echo $row->kbb; ?></td>
                <td><?php echo $row->uk; ?></td>
                <td><?php echo $row->ui; ?></td>
                <td><?php echo $row->edema; ?></td>
                <td><?php echo $row->proteinuria; ?></td>
                <td><?php echo $row->hasil_konsultasi; ?></td>
                <td><?php echo $row->persentase; ?></td>
                <td><?php echo $row->solusi; ?></td>
                <td>
                  <center>
                    <div>
                      <a href="<?php echo base_url() ?>pasien/ctrRiwayat/viewdetail/<?php echo $row->id_konsultasi ?>" class="btn btn-info btn-success" data-placement="top" title="Lihat Data"><i class="fa fa-eye"></i></a>
                      <!-- <a data-toggle="modal" data-target="#modal-edit<?=$row->id_konsultasi;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a> -->
                    </div>
                  </center>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
    </div>
</div>
</div>
    </body>