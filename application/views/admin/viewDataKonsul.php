<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Data Konsultasi</h4>
            <!-- <button><?php echo anchor('ctrGejala/tbhGejala','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->

<!-- <form action="<?php echo site_url('ctrDataKonsul/laporan');?>" method="post">
  <select style="margin-left: 100px; width: 100px; height: 30px" name="bulan" required>
    <option selected="selected" value="">Bulan</option>
    <?php
    $bulan=array("name","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    $jlh_bln=count($bulan);
    for($c=1; $c<$jlh_bln; $c++){
      echo"<option value=$c> $bulan[$c] </option>";
    }
    ?>
  </select>

  <select style=" width: 100px; height: 30px" name="tahun" required>
    <?php
    $now=date('Y');
  // echo "<select name='tahun'>";
    for ($a=2012;$a<=$now;$a++)
    {
     echo "<option value='$a'>$a</option>";
   }
   echo "</select>";
   ?>

   <button class="btn btn-primary" type="Submit" name="tampil" value="tampilkan">Submit</button>
   <button class="btn btn-danger" type="Submit" name="tampil" value="download"><span class="glyphicon glyphicon-download-alt"> Download</span></button>
 </form> -->

            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button> -->
                    <table id="datatable" class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Id Konsultasi </th>
                          <th> Nama Pasien </th>
                          <th> Tanggal Konsultasi </th>
                          <!-- <th> Tekanan Darah Sistolic (mmHg)</th>
                          <th> Tekanan Darah Diastolic </th>
                          <th> Kenaikan Berat Badan </th>
                          <th> Usia Kehamilan </th>
                          <th> Usia Ibu </th>
                          <th> Edema </th>
                          <th> Proteinuria </th> -->
                          <th> Hasil Konsultasi </th>
                          <th> Presentase </th>
                          <th> Solusi </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                  <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_konsultasi;?> </td>
                        <td><?php echo $row->nama;?> </td>
                        <td><?php echo $row->tanggal_konsultasi; ?></td>
                        <!-- <td><?php echo $row->tdd; ?></td>
                        <td><?php echo $row->tds; ?></td>
                        <td><?php echo $row->kbb; ?></td>
                        <td><?php echo $row->uk; ?></td>
                        <td><?php echo $row->umur; ?></td>
                        <td><?php echo $row->edema; ?></td>
                        <td><?php echo $row->proteinuria; ?></td> -->
                        <td><?php echo $row->hasil_konsultasi; ?></td>
                        <td><?php echo $row->persentase; ?></td>
                        <td><?php echo $row->solusi; ?></td>
                        <td>
                          <center>
                            <div>
                              <a data-toggle="modal" data-target="#modal-edit<?=$row->id_konsultasi;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo site_url('ctrGejala/hapus/'.$row->id_konsultasi); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->id_konsultasi;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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

<div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('ctrDataKonsul/tbhKonsul'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <!-- <div class="form-group">
            <label class='col-md-3'>Nama Pasien</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama Pasien" class="form-control" ></div>
          </div> -->
          <div class="form-group">
            <label class='col-md-9'>Nama Pasien</label>
              <select class="form-control" name="id_pasien" placeholder="Pilih Nama Pasien" required>
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
          <br>
          <div class="form-group">
            <label class="col-md-9">Hasil</label>
              <div class="col-md-9">
                <select name="hasil_konsultasi" class="form-control form-control-line">
                  <option value="">Masukkan Hasil</option>
                  <option value="Normal">Normal</option>
                  <option value="Sedang">Sedang</option>
                  <option value="Tinggi">Tinggi</option>
                </select>
              </div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Presentase</label>
            <div class='col-md-9'><input type="text" name="persentase" autocomplete="off" required placeholder="Masukkan Presentase" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Solusi</label>
            <div class='col-md-9'><input type="text" name="solusi" autocomplete="off" required placeholder="Masukkan solusi" class="form-control" ></div>
          </div>
          <div class="form-group">
            <label class='col-md-9'>Tekanan Darah Diastolic (mmHg)</label>
            <div class='col-md-9'><input type="text" name="tdd" autocomplete="off" required placeholder="Masukkan Tekanan Darah Diastolic" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Tekanan Darah Sistolic (mmHg)</label>
            <div class='col-md-9'><input type="text" name="tds" autocomplete="off" required placeholder="Masukkan Tekanan Darah Sistolic" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Kenaikan Berat Badan (kg)</label>
            <div class='col-md-9'><input type="text" name="kbb" autocomplete="off" required placeholder="Masukkan Kenaikan Berat Badan" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Usia Kehamilan (minggu)</label>
            <div class='col-md-9'><input type="text" name="uk" autocomplete="off" required placeholder="Masukkan Usia Kehamilan" class="form-control" ></div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Usia Ibu (Tahun) </label>
            <div class='col-md-9'><input type="text" name="ui" autocomplete="off" required placeholder="Masukkan Usia Ibu" class="form-control" ></div>
          </div>
          <div class="form-group">
            <label class="col-md-9">Edema</label>
              <div class="col-md-9">
                <select name="edema" class="form-control form-control-line">
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
                <select name="proteinuria" class="form-control form-control-line">
                  <option value="">Masukkan Proteinuria</option>
                  <option value="Normal">Normal</option>
                  <option value="Tinggi">Tinggi</option>
                  <option value="SangatTinggi">Sangat Tinggi</option>
                </select>
              </div>
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$row->id_pasien;?>">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$row->id_pasien;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label class='col-md-3'>Nama Pasien</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" value="<?=$row->nama;?>" required placeholder="Masukkan Nama Pasien" class="form-control" readonly></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>