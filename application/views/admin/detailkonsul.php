<div class="container" style="width: 2000px">
<div class="col-sm-10 right_col grid-margin stretch-card">
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
                      <a href="<?php echo base_url()?>ctrDataKonsul/detail/<?php echo $x->id_pasien ?>" class="btn btn-circle btn-success" style="color: black" data-placement="top" title="Kembali"><i class="fa fa-mail-reply"></i></a>
                      <a href="<?php echo base_url()?>ctrPdf/cetak/<?php echo $x->id_konsultasi ?>" class="btn btn-danger btn-circle" style="color: black" data-placement="top" title="Cetak Data"><i class="fa fa-file"></i></a>
                      <!-- <button class="btn btn-danger" type="Submit" name="tampil" value="download"><span class="glyphicon glyphicon-download-alt" title="cetak data"></span></button> -->
                    </div>
                  </center>
		
	</div>