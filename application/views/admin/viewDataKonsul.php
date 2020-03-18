<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Data Konsultasi</h4>
            <!-- <button><?php echo anchor('ctrGejala/tbhGejala','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <table id="datatable" class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Id Konsultasi </th>
                          <th> Nama Pasien </th>
                          <th> Tanggal Konsultasi </th>
                          <th> Tekanan Darah Sistolic (mmHg)</th>
                          <th> Tekanan Darah Diastolic </th>
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
                      	<?php $no=1; foreach($all as $row): ?>
                  <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_konsultasi;?> </td>
                        <td><?php echo $row->id_pasien;?> </td>
                        <td><?php echo $row->tanggal_konsultasi; ?></td>
                        <td><?php echo $row->tdd; ?></td>
                        <td><?php echo $row->tds; ?></td>
                        <td><?php echo $row->kbb; ?></td>
                        <td><?php echo $row->uk; ?></td>
                        <td><?php echo $row->umur; ?></td>
                        <td><?php echo $row->edema; ?></td>
                        <td><?php echo $row->proteinuria; ?></td>
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