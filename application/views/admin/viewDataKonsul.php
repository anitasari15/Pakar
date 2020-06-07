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

            <table id="datatable" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Id Konsultasi </th>
                  <th> Nama Pasien </th>
                  <th> Tanggal Konsultasi </th>
<!--                   <th> Tekanan Darah Sistolic (mmHg)</th>
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
              <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">  
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_konsultasi;?> </td>
                <td><?php echo $row->nama;?> </td>
                <td><?php echo $row->tanggal_konsultasi; ?></td>
                <td><?php echo $row->hasil_konsultasi; ?></td>
                <td><?php echo $row->persentase; ?></td>
                <td><?php echo $row->solusi; ?></td>
                <td>
                  <center>
                    <div>
                      <a data-toggle="modal" data-target="#modal-edit<?=$row->id_konsultasi;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                      <a href="<?php echo site_url('ctrGejala/hapus/'.$row->id_konsultasi); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->id_konsultasi;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-file-pdf-o"></i></a>
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

<?php $no=0; foreach($all as $row): $no++; ?>
  <div id="modal-edit<?=$row->id_konsultasi;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('ctrDataKonsul/edit'); ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" arial-label="close">
              <span area-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

              <input type="hidden" readonly value="<?=$row->id_konsultasi;?>" name="id_konsultasi" class="form-control" >
              <div class="form-group">
                <label class='col-md-9'>Solusi</label>
                <div class='col-md-9'>
                  <textarea name="solusi" autocomplete="off" value="<?=$row->solusi;?>" required placeholder="Masukkan Solusi Pasien" class="form-control">
                  </textarea>
                </div>
              </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
        </div>
      </div>
      
    </form>
  </div>
</div>
<?php endforeach; ?>