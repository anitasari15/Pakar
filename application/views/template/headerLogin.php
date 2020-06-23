<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login Sistem Pakar Preeklampsia</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-login-pakar"><i class="fa fa-plus"></i> Login Pakar </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-login-pasien"><i class="fa fa-plus"></i> Login Pasien </button>
      <form method="post" action="<?php echo base_url('index.php/ctrLogin/cekLogin') ?>">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <!-- <div>
        <select name="level" class="form-control">
          <option >Pilih Jenis User</option>
          <option name="user" value="user">User</option>
          <option name="petugas" value="petugas">Petugas</option>
        </select>
      </div> -->
        <p class="remember_me">
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
        <!-- <p>Don’t have an account? <a href="<?php echo site_url()?>/ctrRegis">Sign up now</a></p> -->
        <p>Back to home? <a href="<?php echo site_url()?>/welcome">Home</a></p>
      </form>
    </div>
  </section>

</body>

</html>
<div id="modal-login-pakar" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('ctrLogin/ceklogin'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a class="modal-title">Login Petugas</a>
        </div>
        <div class="modal-body">
          
          <!-- <div class="form-group">
            <label class='col-md-9'>Level</label>
            <div class='col-md-9'><input type="text" name="level" value="2" autocomplete="off" required placeholder="Masukkan Nama" class="form-control" ></div>
          </div> -->
          <br>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Username</label>
            <div class='col-md-9'><input type="text" name="username" autocomplete="off" required placeholder="Masukkan Username" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Password</label>
            <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control" ></div>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          </div>
        </form>
    </div>
</div>
</div>

<!-- modal pasien -->
<div id="modal-login-pasien" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('ctrLogin/loginPasien'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a class="modal-title">Login Pasien</a>
        </div>
        <div class="modal-body">
          
          <!-- <div class="form-group">
            <label class='col-md-9'>Nama</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama" class="form-control" ></div>
          </div> -->
          <br>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Username</label>
            <div class='col-md-9'><input type="text" name="username" autocomplete="off" required placeholder="Masukkan Username" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Password</label>
            <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control" ></div>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          </div>
        </form>
    </div>
</div>
</div>

