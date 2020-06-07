<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<center><h4>Halaman Konsultasi</h4></center>
		</div>

		<div>
			<!-- <form method="POST"  action="<?php echo site_url('ctrkonsul/hitung'); ?>"> -->
      <form method="POST"  action="<?php echo site_url('test'); ?>">
          <input type="text" value="<?php echo (int)$terakhir->id_konsultasi+1; ?>" name="id_konsultasi" hidden>
            <div class="form-group">
            	<label class='col-md-9'>Nama Pasien</label>
            	<div class='col-md-9'>
              		<select id="search" class="form-control" name="id_pasien" placeholder="Pilih Nama Pasien" required>
                    	<?php 
                    		$query = $this->db->query("SELECT * FROM tb_pasien;");
                    	?>
                    	<?php 
                      		foreach ($query->result() as $pasien) {
                        ?>
                        <!-- <option value="">Pilih Nama Pasien</option> -->
                        <option value="<?php echo $pasien->id_pasien ?>"><?php echo $pasien->nama ?></option>
                      <?php } ?>
              		</select>
              	</div>
          	</div>
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
                  <option value="SangatTinggi">Sangat Tinggi</option>
                </select>
              </div>
          </div>
          <br>
          <div class="form-group">
          	<div class="col-md-4">
            	<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
        	</div>
          </div>
		</form>
		</div>
	</div>
</div>

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