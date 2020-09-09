<!DOCTYPE html>
<html>
<head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <title>Paket Nasi Indonesia | Daftar Agen Sembako</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo base_url('front/images/logo_paketnasi.svg'); ?>" type="image/ico" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>

  <!-- ------- -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/css/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/agensembako.css') ?>">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Agen_Sembako.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/css/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/css/aos.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('front/js/aos.js') ?>"></script>
  <!--  -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <style>
    body, html {
      height: 100%;
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .bg-img {
      /*top: 30px;*/
      /* The image used */
      background-image: url('assets/Pendaftaran_Agen_sembako.png');


      /*min-height: 380px;*/
      min-height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    /* Add styles to the form container */
/*.container {
  position: absolute;
  right: 0px;
  top: 10%;
  margin-right: 15%;
  height: 80%;
  max-width: 30%;
  padding: 16px;
  background-color: transparent;
  }*/

  /* Full-width input fields */
  input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit button */
  .btn {
    background-color: #4CAF50;
    color: white;
    /*padding: 16px 20px;*/
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .btn:hover {
    opacity: 1;
  }

  /*tambahan*/
  .stepwizard {
    display: table;
    width: 100%;
  /*position: relative;
  margin-top: 90px;*/
}
.stepwizard p {
  margin-top: 100px;
}
.stepwizard-row {
  display: table-row;
}
.stepwizard-row:before {
  top: 140px;
  bottom: 0;
  /*position: absolute;*/
  content: " ";
  width: 100%;
  height: 1px;
  background-color: #ccc;
  z-order: 0;
}
.stepwizard-step {
  display: table-cell;
  text-align: center;
  /*position: relative;*/
}
.stepwizard-step .btn.disabled {
  opacity: 1 !important;
  filter: alpha(opacity=100) !important;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}


/*tambahan*/


/*input {
  width: 80%;
  height: 20px;
  }*/

  /*......*/
  /**/

  /*Nama*/
  .error
  {
    color: white;

  }

  .valid
  {

    color: black;

  }

  .hidden {
   visibility:hidden;
 }
 .dropdown{
   width:100%;
   height:50%;
 }

 label{
  font-size: 20px;
  color: white;
}

.form-control{
  margin: 10px;
  font-size: 12pt;
  padding: 10px;
  border-radius: 25px;
  width: 25px;
  height: 35px;
}
.form-control-textarea{
  margin: 10px;
  font-size: 15pt;
  padding: 10px;
  border-radius: 25px;
  width: 500px;
  border: 1px solid transparent !important;
  height: 150px; 
}
/*.selectWrapper{*/
  /*border-radius:50px;*/
  /*display:inline-block;*/
  /*overflow:hidden;*/
  /*background:#cccccc;*/
  /*border:1px solid transparent !important;*/
  /*border:none;*/
}
/*.selectBox{
  width:200px;
  height:90px;
  border:none;
  outline:none;
  border-radius: 100px;
  }*/

  select {
    width:150px;
    border:1px solid red;
    -webkit-border-top-right-radius: 15px;
    -webkit-border-bottom-right-radius: 15px;
    -moz-border-radius-topright: 15px;
    -moz-border-radius-bottomright: 15px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    padding:2px;
  }
  .nextBtn{
    /*font-size: 14px;*/
    height: 40px;
    border-radius: 25px;
    background-color: white;
  }
  .upload-btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .btn-upload {
    border: none;
    color: white;
    background-color: grey;
    width: 90%;
    padding: 8px 20px 8px;
    border-radius: 25px;
    font-size: 15px;
    font-weight: bold;
  }

  .upload-btn-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
  }

  button[type="submit"]{
    visibility: hidden;
  }

  .field-icon {
  float: right;
  right: 20px;  
  margin-top: -45px;
  position: relative;
  z-index: 2;
}



</style>
</head>
<body class="font">

  <!-- <h3>Form on Hero Image</h2> -->
    <div class="bg-img">
      <!-- <form method="post" action="<?php echo base_url('agensembako/save_data') ?>" id="formbaru"> -->
        <form method="post" name="frm" action="<?php echo base_url('agensembako/simpan_register') ?>" id="formbaru" enctype="multipart/form-data">

          <div class="container">
            <div class="stepwizard">
              <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                  <a href="#step-1" type="button" class="btn btn-primary btn-circle" hidden>1</a>
                  <!-- <p>Step 1</p> -->
                </div>
                <div class="stepwizard-step">
                  <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" hidden >2</a>
                  <!-- <p>Step 2</p> -->
                </div>
                <div class="stepwizard-step">
                  <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" hidden>3</a>
                  <!-- <p>Step 3</p> -->
                </div>
                <div class="stepwizard-step">
                  <a href="#step-4" type="button" class="btn btn-default btn-circle disabled" hidden>4</a>
                  <!-- <p>Step 4</p> -->
                </div>

              </div>
            </div>
          </div>
          <div class="container">
            <!-- <form role="form" id="form" > -->
              <div class="row setup-content" id="step-1">
                <div class="col-xs-6 offset-md-7">
                  <!-- <center> -->
                  <h1 class="mb-5 mt-5 pb-5  text-center text-white"> Pendaftaran Agen Sembako</h1>
                  <!-- </center> -->
                  <p >
                    <h3 class="ml-3  text-white" for="nama"> Nama Lengkap<span class="required"></span></h3>
                    <input id="nama" name="name" class="form-control mt-4" type="text" value="asasas" size="30" />
                  </p>
                  <p class="comment-form-email">
                    <h3 class="ml-3 mt-5 text-white"  for="email">Email<span class="required"></span></h3>
                    <input id="email" name="email" type="text" class="form-control mt-4" value="anas@gmail.com" size="30" />
                  </p>
                  <p class="comment-form-password">
                    <h3 class="ml-3 mt-5 text-white" for="password">Kata Sandi<span class="required"></span></h3>
                    <!-- <input id="password" name="password" type="password" class="form-control mt-4" value="asasasas" size="30" /> -->
                     <input id="password-field" type="password" class="form-control" name="password" value="secret">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </p>
                  <div class="row">
                    <div class="col">
                      <p class="comment-form-password">
                        <h3 class="ml-3  text-white" for="facebook">Facebook<span class="required"></span></h3>
                        <input id="facebook" name="facebook" type="text" class="form-control mt-4" value="asasasasas" size="30" />
                      </p>
                    </div>
                    <div class="col">
                      <p class="comment-form-instagram">
                        <h3 class="ml-3  text-white" for="instagram">Instagram<span class="required"></span></h3>
                        <input id="instagram" name="instagram" type="text" class="form-control mt-4" value="asasasas" size="30" />
                      </p>
                    </div>
                  </div>
                  <h3 class="mt-3 text-white">Jenis Kelamin</h3>
                  <div class="form-inline ">
                    <div class="form-group">
                      <input type="radio"  class="form-control mr-3"  name="gender" value="Pria">
                      <h4 class="text-white mr-5" >Pria</h4>
                      <input type="radio"  class="form-control mr-3"  name="gender" value="Wanita">
                      <h4 class="text-white">Wanita</h4>
                      <!-- <span class="required"></span> -->
                    </div>
                    <div class="form-group">
                      <!-- <input type="radio"  class="form-control mr-3" id="jenis_kelamin"  name="gender" value="Wanita">
                      <h4 class="text-white" for="pwd">Wanita</h4> -->
                      

                    </div>
                    
                  </div>

                  <!-- _____ -->

                   <!-- <p>Provinsi :</p>
                   <select name="prov" class="" id="provinsi">
                     <option>- Select Provinsi -</option>
                     <?php foreach($provinsi as $prov){
                      echo '<option value="'.$prov->id.'">'.$prov->provinsi.'</option>';
                    } ?>
                  </select>

                  <p>Kota :</p>
                  <select name="kab" class="" id="kabupaten">
                   <option value=''>Select Kabupaten</option>
                 </select>

                 <p>Kecamatan :</p>
                 <select name="kec" class="" id="kecamatan">
                   <option>Select Kecamatan</option>
                 </select> -->

                 

                 <!-- _____ -->



                 <button class="btn btn-light text-success nextBtn text-center mt-5 mb-4" style="font-size: 20px;border: none;" type="button">
                  Selanjutnya
                  <i class="fa fa-arrow-right ml-5 pl-5 text-success " aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="container ">
            <div class="row setup-content" id="step-2">
              <!-- <div class="col-xs-12"> -->
                <!-- <div class="col-md-11"> -->
                  <div class="col-xs-6 offset-md-7">

                    <h1 class="mb-5 mt-5 text-white text-center">Informasi Alamat dan Kontak</h1>
                    <p class="comment-form-comment"><br/>
                      <h3 class="ml-3 text-white" for="alamat">Alamat Lengkap<span class="required"></span></h3><br/>
                      <textarea id="alamat" type="text" name="address" style="border: 1px solid transparent !important; width: 500px;height: 150px" class="form-control" cols="75" rows="8" aria-required="true"></textarea>
                    </p>
                    <div class="row">
                      <div class="col">
                        <p class="comment-form-provinsi">
                          <h3 class="ml-3 text-white" for="provinsi">Provinsi<span class="required"></span></h3><br/>
                          <select name="province_id" class="dropdown" id="provinsi" required >
                           <option style="border: 1px solid transparent !important;">Pilih Provinsi</option>
                           <?php foreach($provinsi as $prov){
                            echo '<option value="'.$prov->id.'">'.$prov->provinsi.'</option>';
                          } ?>
                        </select>
                      </p>
                      <label id="result"></label>
                    </div>
                    <div class="col">
                      <p class="comment-form-kota">
                        <h3 class="ml-3 text-white" for="kota">Kota<span class="required"></span></h3><br/>
                        <select name="regency_id" class="dropdown" id="kabupaten">
                         <option value=''>Pilih Kota</option>
                       </select>
                     </p>
                   </div>
                 </div>
                 <div class="row">
                  <div class="col">
                    <p class="comment-form-kecamatan">
                      <h3 class="ml-3 text-white" for="kecamatan">Kecamatan<span class="required"></span></h3><br/>
                      <select name="sub_district_id" class="dropdown" id="kecamatan" >
                       <option>Pilih Kecamatan</option>
                     </select>
                   </p>
                 </div>
                 <div class="col">
                  <p class="comment-form-kodepos">
                    <h3 class="ml-3 text-white" for="kodepos">Kode Pos<span class="required"></span></h3>
                    <input id="kodepos" name="post_code" class="form-control mt-4" type="text" value="12345" size="30" />
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p class="comment-form-notelp">
                    <h3 class="ml-3 mt-2 text-white" for="no_telp">Nomer Telepon<span class="required"></span></h3>
                    <input id="no_telp" name="phone" class="form-control" type="text" value="12345678910" size="30" />
                  </p>
                </div>
                <div class="col">

                </div>
              </div>

              <button class="btn btn-light text-success nextBtn text-center mt-5 mb-4" type="button" style="font-size: 20px;border: none;" onclick="return val();" >
                Selanjutnya
                <i class="fa fa-arrow-right ml-5 pl-5 text-success " aria-hidden="true"></i>
              </button>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="row setup-content" id="step-3">
            <div class="col-xs-6 offset-md-7">

              <h1 class="mb-5 mt-5 text-white text-center"> Informasi Rekening Bank</h1>
              <p class="comment-form-author">
                <h3 class="ml-3 mt-5 pt-5 text-white" for="bank_name">Nama Pemilik Rekening<span class="required"></span></h3>
                <input id="bank_name" name="bank_name" type="text" class="form-control mt-4" value="asasas" size="30" />
              </p>
              <p class="comment-form-email">
                <h3 class="ml-3 mt-5 text-white" for="bank">Nama Bank<span class="required"></span></h3> <br/>
                <select name="bank" id="bank">
                 <option value="0">Pilih Bank</option>
                 <?php
                 foreach ($bank->result() as $tabel){
                  echo "<option value=".$tabel->id.">".$tabel->nama."</option>";
                }
                ?>
              </select>
            </p>
            <p class="comment-form-rekening">
              <h3 class="ml-3 mt-5 text-white" for="account_number">No. Rekening<span class="required"></span></h3>
              <input id="account_number" name="account_number" type="text" class="form-control mt-4" value="1121212" size="30" />
            </p>

            <!-- Foto -->
            <!-- <p class="comment-form-foto"> -->
              <!-- <h3 class="ml-3 mt-5 text-white" for="foto">Foto Diri</h3>  -->
              <!-- <div class="upload-btn-wrapper"> -->
                <!-- <button class="btn-upload form-control">Unggah Foto Diri</button> -->
                <!-- <input type="file" name="foto_diri"   /> -->
                <!-- <p class="text-white mt-3">*) File Maksimal 2Mb</p> -->

                <!-- </div> -->
              <!-- </p> -->
                  <!-- <div class="form-group">
                    <h3 class="ml-3 mt-5 text-white" for="foto">Foto Diri</h3> 
                    <div class="col-md-10">
                      <div class="ml-4 mt-4">
                        <img id="user_img"
                        height="130"
                        width="130"
                        style="border:solid" />
                      </div>
                      <div>
                        <div class="upload-btn-wrapper">
                          <button class="btn-upload form-control">Unggah Foto Diri</button>
                          <input type="file" title="search image" id="file" name="file" onchange="show(this)" required />
                          <p class="text-white mt-3">*) File Maksimal 2Mb</p>
                        </div>
                      </div>
                    </div>                 -->
                    <button class="btn btn-light text-success nextBtn text-center mt-5" type="button" style="font-size: 20px;border: none;">
                      Selanjutnya
                      <i class="fa fa-arrow-right ml-5 pl-5 text-success " aria-hidden="true"></i>
                    </button>

                  </div>
                </div>
              </div>
              <!-- </div> -->
              <div class="container">
                <div class="row setup-content" id="step-4">
                  <div class="col-xs-6 offset-md-7">

                    <h1 class="text-white mb-5 mt-5 text-center">Informasi Usaha</h1>
                    <p class="comment-form-author">
                      <h3 class="ml-3 text-white mt-5" for="alasan">Seberapa Minat Anda Bergabung Menjadi Agen Sembako Paket Nasi ?<span class="required"></span></h3>
                      <textarea id="minat_gabung" name="interest" style="border: 1px solid transparent !important; width: 500px;height: 150px" class="mt-4 form-control" cols="75" rows="8" aria-required="true"></textarea>
                    </p>
                    <p class="comment-form-password">
                      <h3 class="ml-3 text-white mt-5" for="password">Kode Referal<span class="required"></span></h3>
                      <input id="referal" class="mt-4 form-control" name="referal" type="text" size="30" />
                    </p>
                    <h3 class="mt-5 text-white">Apakah Anda Bersedia dihubungi oleh Tim Paket Nasi Indonesia ?<span class="required"></span></h3>
                    <div class="form-inline mt-4">
                      <div class="form-group">
                        <input type="radio" class="form-control mr-3" name="contactable"   value="no" checked>
                        <h4 class="text-white" for="pwd">Tidak</h4>
                      </div>
                      <div class="form-group">
                        <input type="radio" class="form-control ml-5 mr-3" value="yes" name="contactable" >
                        <h4 class="text-white" for="pwd">Bersedia</h4>
                      </div>
                    </div>
                    <div class="form-inline ">
                      <div class="form-group">
                        <input type="checkbox" class="form-control mr-3" style="margin-bottom: 23px"  id="agreeToTerms" placeholder="Masukan Email" class="required">
                        <h2 class="text-white mt-5" for="pwd">
                          Dengan melakukan pendaftaran, saya setuju dengan <br><b>Kebijakan Privasi</b> dan <b>Syarat & Ketentuan </b> Paket Nasi <br> Indonesia</h6>
                        </h2>
                      </div>
                    </div>
                    <button class="btn btn-light text-success nextBtn text-center mt-5" type="submit" id="theButton" style="font-size: 20px;border: none;">
                      Daftar Sekarang
                      <!-- <i class="fa fa-arrow-right ml-5 pl-5 text-success " aria-hidden="true"></i> -->
                    </button>

                  </div>
                </div>
              </div>
            <!-- <div class="row setup-content" id="step-5">
              <div class="col-xs-12">
                <div class="col-md-11">
                  <h3> Step 5</h3>
                  <p>Periksa Kembali Data Anda</p>
                  <button class="btn btn-success pull-right" type="submit">Daftar Sekarang</button>
                </div>
              </div>
            </div> -->
          </form>
        </div>
      </form>
    </div>

  </body>
  </html>

  <link href="<?php echo site_url('assets/chains/css/select2.min.css'); ?>" rel="stylesheet" />
  <script src="<?php echo site_url('assets/chains/js/select2/select2.min.js'); ?>"></script>

  <!-- .. -->

  <script src="<?php echo site_url('assets/chains/js/chained/jquery.chained.js?v=1.0.0'); ?>" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo site_url('assets/chains/js/chained/jquery.chained.remote.js?v=1.0.0'); ?>" type="text/javascript" charset="utf-8"></script>

  <!-- WORK -->
  <!-- SHOW PASSWORD -->
  <script type="text/javascript">
    $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

<script type="text/javascript">
  function val()
  {
    if(frm.sel.selectedIndex == 0)

    {
      alert('please select');
      frm.province_id.focus();
      return false;
    }
    return true;
  }
</script>

<script>
 $(document).ready(function() {
   $('select').select2();
 });
   //
   // $("#kota").remoteChained({
   //    parents : "#propinsi",
   //    url : "<?php echo site_url('agensembako/get_kota'); ?>"
   // });

   // $("#kecamatan").remoteChained({
   //    parents : "#kota",
   //    url : "<?php echo site_url('agensembako/get_kecamatan'); ?>"
   // });

   // $("#desa").remoteChained({
   //    parents : "#kecamatan",
   //    url : "<?php echo site_url('agensembako/get_desa'); ?>"
   // }); 
   //

 </script>

 <script type="text/javascript">
  $(document).ready(function () {

      //validation
      $('input, select').tooltipster({
       trigger: 'custom',
       onlyOne: false,
       position: 'right',
       theme: 'tooltipster-light'
     });

      $("#form").validate({
        errorPlacement: function (error, element) {
          var lastError = $(element).data('lastError'),
          newError = $(error).text();

          $(element).data('lastError', newError);

          if(newError !== '' && newError !== lastError){
            $(element).tooltipster('content', newError);
            $(element).tooltipster('show');
          }
        },
        success: function (label, element) {
          $(element).tooltipster('hide');
        }
      });


    /* This code handles all of the navigation stuff.
    ** Probably leave it. Credit to https://bootsnipp.com/snippets/featured/form-wizard-and-validation
    */
    var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
      $item = $(this);

      if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        $('input, select').tooltipster("hide");
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
      }
    });

    /* Handles validating using jQuery validate.
    */
    allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input"),
      isValid = true;

        //Loop through all inputs in this form group and validate them.
        for(var i=0; i<curInputs.length; i++){
          if (!$(curInputs[i]).valid()){
            isValid = false;
          }
        }

        if (isValid){
            //Progress to the next page.
            nextStepWizard.removeClass('disabled').trigger('click');    
            // # # # AJAX REQUEST HERE # # # 
            
            /*
            Theoretically, in order to preserve the state of the form should the worst happen, we could use an ajax call that would look something like this:
            
            //Prepare the key-val pairs like a normal post request.
            var fields = {};
            for(var i= 0; i < curInputs.length; i++){
              fields[$(curInputs[i]).attr("name")] = $(curInputs[i]).attr("name").val();
            }
            
            $.post(
                "location.php",
                fields,
                function(data){
                  //Silent success handler.
                }                
            );
            
            //The FINAL button on last page should have its own logic to finalize the enrolment.
            */
          }
        });

    $('div.setup-panel div a.btn-primary').trigger('click');
    
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var $regexname=/^([a-zA-Z]{4,16})$/;
    $('.name').on('keypress keydown keyup',function(){
     if (!$(this).val().match($regexname)) {
              // there is a mismatch, hence show the error message
              $('.emsg').removeClass('hidden');
              $('.true').removeClass('true');
              $('.emsg').show();
                 // $('.true').show();
               }
               else{
                // else, do not display message
                $('.emsg').addClass('hidden');
                $('.true').addClass('true');
                $('.true').show();                   
                 // $('.true').show();

               }
             });
  });
</script>



<script type="text/javascript">
  $(document).ready(function(){
    // set initially button state hidden
    $("#btn").hide();
    // use keyup event on email field
    $("#email").keyup(function(){
      if(validateEmail()){
        // if the email is validated
        // set input email border green
        $("#email").css("border","2px solid green");
        // and set label 
        $("#emailMsg").html("<p class='text-success'>Format Email Benar</p>");
      }else{
        // if the email is not validated
        // set border red
        $("#email").css("border","2px solid red");
        $("#emailMsg").html("<p class='text-danger'>Format Email Tidak Dikenali</p>");
      }
      buttonState();
    });
    // use keyup event on password
    $("#pass").keyup(function(){
      // check
      if(validatePassword()){
        // set input password border green
        $("#pass").css("border","2px solid green");
        //set passMsg 
        $("#passMsg").html("<p class='text-success'>Password validated</p>");
      }else{
          // set input password border red
          $("#pass").css("border","2px solid red");
        //set passMsg 
        $("#passMsg").html("<p class='text-danger'>Password not valid</p>");
      }
      buttonState();
    });
  });

  function buttonState(){
    if(validateEmail() && validatePassword()){
      // if the both email and password are validate
      // then button should show visible
      $("#btn").show();
    }else{
      // if both email and pasword are not validated
      // button state should hidden
      $("#btn").hide();
    }
  }
  // function validateEmail(){
  //   // get value of input email
  //   var email=$("#email").val();
  //   // use reular expression
  //    var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
  //    if(reg.test(email)){
  //     return true;
  //    }else{
  //     return false;
  //    }

  // }
  // function validatePassword(){
  //   //get input password value
  //   var pass=$("#pass").val();
  //   // check it s length
  //   if(pass.length > 7){
  //     return true;
  //   }else{
  //     return false;
  //   }

  // }

  
  
</script>



<script type="text/javascript">
  $(document).ready(function(){ 
  //Comment form
  $('#formbaru').validate({
    errorElement: 'span',
    rules: {
      name: {
        minlength: 2,
        required: true
      },
      email: {
        required: true,
        email: true
      },
      comment: {
        minlength: 60,
        required: true
      },
      address: {
        minlength: 10,
        required: true
      },
      password: {
        minlength: 6,
        required: true
      },
      facebook: {
        minlength: 6,
        required: true
      },
      instagram: {
        minlength: 6,
        required: true
      },
      // gender:{
      //   required:true
      // },
      post_code: {
        maxlength: 5,
        required: true
      },
      province_id:{
        required:true
      },
      file: {
        required: true,
      //           extension: "jpg,jpeg",
      //           filesize: 5,
    },
    phone: {
      minlength: 11,
      maxlength:14,
      required: true
    },
    bank_name: {
      minlength: 5,
        // maxlength:14,
        required: true
      },
      bank:{

        required:true;
      }
      account_number: {
        minlength: 7,
        // maxlength:14,
        required: true
      },
      
      
    // },
  },
  messages: {
    bank: {
      required: "Bank"
    },
    name: {
      required: "Nama kurang lengkap",
      minlength: function () {
        return [
        'Teks Kurang ' + (2 - parseInt($('#nama').val().length)) +
        ' Karakter'];
      },
    },
    email: {
      required: "Masukan Email Anda",
      email: "Email harus berformat name@domain.com"
    },

    comment: {
      required: "Masukan Teks",
      minlength: function () {
        return [
        'Teks Minimal ' + (60 - parseInt($('#comment').val().length)) +
        ' Karakter.'];
      },
    },
    address: {
      required: "Masukan Alamat",
      minlength: function () {
        return [
        'Teks Minimal ' + (10 - parseInt($('#alamat').val().length)) +
        ' Karakter.'];
      },
    },
    password: {
      required: "Masukan Password",
      minlength: function () {
        return [
        'Teks Minimal ' + (6 - parseInt($('#password').val().length)) +
        ' Karakter.'];
      },
    },
    facebook: {
      required: "Masukan Nama Facebook",
      minlength: function () {
        return [
        'Teks Minimal ' + (6 - parseInt($('#facebook').val().length)) +
        ' Karakter.'];
      },
    },
    bank_name: {
      required: "Masukan Nama Rekening Anda",
      minlength: function () {
        return [
        'Teks Minimal ' + (5 - parseInt($('#bank_name').val().length)) +
        ' Karakter.'];
      },
    },
    account_number: {
      required: "Masukan Nomer Rekening Anda",
      minlength: function () {
        return [
        'Teks Minimal ' + (7 - parseInt($('#account_number').val().length)) +
        ' Karakter.'];
      },
    },
    file:{
      filesize:"File Terlalu Besar",
      accept:"Please upload .jpg or .png or .pdf file of notice.",
      required:"Upload Foto Diri Anda."
    },
    province_id:{
      required:"Pilih Provinsi"
    },
    gender:{
      required: "Pilih"
    },
    
    instagram: {
      required: "Masukan Nama Instagram Anda",
      minlength: function () {
        return [
        'Teks Minimal ' + (6 - parseInt($('#instagram').val().length)) +
        ' Karakter.'];
      },
    },
    post_code: {
      required: "Masukan Kode Pos Wilayah Anda",
      minlength: function () {
        return [
        'Teks Minimal ' + (5 - parseInt($('#kodepos').val().length)) +
        ' Karakter.'];
      },
      maxlength: function () {
        return [
        'Teks Maksimal ' + (5 - parseInt($('#kodepos').val().length)) +
        ' Karakter.'];
      },
    },
      // foto_diri: {
      //   required: "Masukan Foto Diri Anda"
      // },
      phone: {
        required: "Masukan Nomer Telepon Anda",
        minlength: function () {
          return [
          'Teks Minimal ' + (11 - parseInt($('#no_telp').val().length)) +
          ' Karakter.'];
        },
        maxlength: function () {
          return [
          'Teks Minimal ' + (14 + parseInt($('#no_telp').val().length)) +
          ' Karakter.'];
        },
      },
      
    },
    success: function(label) {
      // label.addClass("valid").css('2px solid white');
    },
  });
});


</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#btn").click(function()
  {
      var sports=$("#provinsi");
      if(sports.val() === "" ){
        document.getElementById("result").innerHTML = "Please Choose";
        document.getElementById("result".style.color="red");
      }
      else{
        document.getElementById("result".style.color="red");
      }
  });
});       
</script>



      <!-- Work -->
      <script type="text/javascript">
       window.addEventListener("load", function(){
        agreeToTerms.addEventListener("click", function(){
          if(agreeToTerms.checked){
            theButton.style.visibility ="visible";
          }else {
            theButton.style.visibility ="hidden";

          }
        },false)
      })
    </script>
    

    <!-- //WORK -->
    <script type="text/javascript">
      function show(input) {
        debugger;
        var validExtensions = ['jpg','png','jpeg']; //array of valid extensions
        var fileName = input.files[0].name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        if ($.inArray(fileNameExt, validExtensions) == -1) {
          input.type = ''
          input.type = 'file'
          $('#user_img').attr('src',"");
          alert("Only these file types are accepted : "+validExtensions.join(', '));
        }
        else
        {
          if (input.files && input.files[0]) {
            var filerdr = new FileReader();
            filerdr.onload = function (e) {
              $('#user_img').attr('src', e.target.result);
            }
            filerdr.readAsDataURL(input.files[0]);
          }
        }
      }
    </script>

      <!-- //work -->
      <script>
        $(document).ready(function(){
          $("#provinsi").change(function (){
            var url = "<?php echo site_url('agensembako/add_ajax_kab');?>/"+$(this).val();
            $('#kabupaten').load(url);
            return false;
          })

          $("#kabupaten").change(function (){
            var url = "<?php echo site_url('agensembako/add_ajax_kec');?>/"+$(this).val();
            $('#kecamatan').load(url);
            return false;
          })

          $("#kecamatan").change(function (){
            var url = "<?php echo site_url('agensembako/add_ajax_des');?>/"+$(this).val();
            $('#desa').load(url);
            return false;
          })
        });
      </script>