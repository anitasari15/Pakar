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
    <script src="<?php echo base_url() ?>assets/new/vendors/jquery/dist/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="<?php echo site_url() ?>/welcome" class="navbar-brand">
                    Sistem Pakar
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="<?php echo site_url() ?>/ctrLogin" class="btn btn-info btn-fill btn-lg ">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/ctrRegis" class="btn btn-info btn-fill btn-lg">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-grey">
            <div class="image"
                style="background-image: url('<?php echo base_url() ?>assets/assets/img/bg.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <!-- <p>Free Demo</p> -->
                        <h1 class="title-modern">Sistem Pakar</h1>
                        <h3>Deteksi Dini Preeklampsia Pada Ibu Hamil</h2>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="<?php echo site_url() ?>/ctrLogin" target="_blank" class="btn btn-white btn-fill btn-lg ">
                            Cek Kehamilanmu
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Artikel Kehamilan</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Penting untuk bunda dalam mencari informasi lengkap mengenai kehamilan untuk menjaga Si Kecil Lahir dengan selamat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <h3>Perkembangan Janin</h3>
                        <a href="https://www.nutriclub.co.id/kategori/kehamilan/kesehatan/perkembangan-janin-dalam-kandungan/" class="description">Dalam artikel ini, Tim Ahli Nutriclub, akan menjelaskan kepada Ibu tentang tahapan tumbuh kembang janin selama berada di dalam kandungan...</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="fa fa-cutlery"></i>
                        </div>
                        <h3>Nutrisi Ibu Hamil</h3>
                        <a href="https://bebeclub.co.id/artikel/detail/kehamilan/resep-nutrisi/nutrisi-ibu-hamil" class="description">Nutrisi Ibu Hamil adalah salah satu hal penting yang harus diperhatikan selama masa kehamilan. Ibu hamil membutuhkan banyak nutrisi untuk membantu tumbuh kembang janin...</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <h3>Manfaat Olahraga Bagi Ibu Hamil</h3>
                        <a href="https://www.nutriclub.co.id/kategori/kehamilan/aktivitas/berolahraga-saat-hamil-meningkatkan-perkembangan-otak-janin" class="description">Berolahraga saat hamil, meningkatkan perkembangan otak janin...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('<?php echo base_url() ?>assets/assets/img/bg1.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Perkenalkan</h2>
                            <div class="separator separator-danger">✻</div>
                            <!-- <p class="description">We promise you a new look and more importantly, a new attitude. We build that by getting to know you, your needs and creating the best looking clothes.</p> -->
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="<?php echo base_url() ?>assets/assets/img/faces/face_1.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Tina</h3>
                                                    <p class="small-text">CEO / Co-Founder</p>
                                                    <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-info">
                                                    <img alt="..." class="img-circle" src="<?php echo base_url() ?>assets/assets/img/logo.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Nama Bidan</h3>
                                                    <p class="small-text">Bidan</p>
                                                    <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="<?php echo base_url() ?>assets/assets/img/faces/face_3.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Michelle</h3>
                                                    <p class="small-text">Marketing Hacker</p>
                                                    <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
