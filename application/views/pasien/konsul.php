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
  <div class="section" style="margin-top: 60pt">
  <div class="col-sm-10 right_col grid-margin stretch-card">
  <!-- <div class="card">
    <div class="card-body"> -->
      <center><h2>Halaman Konsultasi</h2></center>
    </div>

    <div>
      <form method="POST"  action="<?php echo site_url('pasien/ctrkonsul/konsul'); ?>">
      <!-- <form method="POST"> -->
          <!-- <input type="text" value="<?php echo (int)$terakhir->id_konsultasi+1; ?>" name="id_konsultasi" hidden> -->
          <?php foreach ($pasien as $x): ?>
          <div class="form-group">

            <input type="text" name="id_pasien" value="<?php echo $x->id_pasien ?>" hidden>
              <!-- <?php 
                $this->session->userdata('id_pasien');
              ?> -->
            
          </div>
        <?php endforeach ?>
            <div class="form-group">
            <label class='col-md-9'>Tekanan Darah Diastolic (mmHg)</label>
            <div class='col-md-9'><input type="text" name="TDD" autocomplete="off" required placeholder="Masukkan Tekanan Darah Diastolic" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Tekanan Darah Sistolic (mmHg)</label>
            <div class='col-md-9'><input type="text" name="TDS" autocomplete="off" required placeholder="Masukkan Tekanan Darah Sistolic" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Kenaikan Berat Badan (kg)</label>
            <div class='col-md-9'><input type="text" name="KBB" autocomplete="off" required placeholder="Masukkan Kenaikan Berat Badan" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Usia Kehamilan (minggu)</label>
            <div class='col-md-9'><input type="text" name="UK" autocomplete="off" required placeholder="Masukkan Usia Kehamilan" class="form-control" ></div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Usia Ibu (Tahun) </label>
            <div class='col-md-9'><input type="text" name="UI" autocomplete="off" required placeholder="Masukkan Usia Ibu" class="form-control"  ></div>
          </div>
          <div class="form-group">
            <label class="col-md-9">Edema</label>
              <div class="col-md-9">
                <select name="EDEMA" class="form-control form-control-line">
                  <option value="">Masukkan Edema</option>
                  <option value="Iya">Punya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-9">Proteinuria</label>
              <div class="col-md-9">
                <select name="PROTEINURIA" class="form-control form-control-line">
                  <option value="">Masukkan Proteinuria</option>
                  <option value="Normal">Normal</option>
                  <option value="Tinggi">Tinggi</option>
                  <option value="Sangat Tinggi">Sangat Tinggi</option>
                </select>
              </div>
          </div>
          <br>
          <div class="form-group">
            <div class="col-md-4">
              <button name="kirim_data" type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          </div>
          </div>
    </form>
    </div>
  </div>
</div>
</body>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

	<script type="text/javascript">
 		$(document).ready(function() {
     		$('#search').select2();
 		});
	</script>

 <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
 <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script> -->