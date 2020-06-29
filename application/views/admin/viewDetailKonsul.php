<!-- <div style="max-width: 3000px"> -->
<div class="container" style="width: 2000px">
<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
      <h2>Data Konsultasi (<?php echo $pasien->nama; ?>)</h2>
      <!-- <?php foreach($data as $row): ?>
        <?php echo $row->nama;?>
      <?php endforeach ?> -->
      <!-- <?php echo $this->db->where('nama') ;?> -->
      <!-- <?php echo $this->db->from('id_pasien') ;?> -->
			<table id="datatable" class="table table-bordered">
              <thead>
                <tr>
                  <th> No </th>
                  <!-- <th> Id Konsultasi </th> -->
                  <th> Nama Pasien </th>
                  <th> Tanggal Konsultasi </th>
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
                <td><?php echo $row->hasil_konsultasi; ?></td>
                <td><?php echo sprintf("%.2f%%", $row->persentase); ?></td>
                <td><?php echo $row->solusi; ?></td>
                <td>
                  <center>
                    <div>
                      <a href="<?php echo base_url() ?>ctrDataKonsul/viewdetail/<?php echo $row->id_konsultasi ?>" class="btn btn-info btn-success" data-placement="top" title="Lihat Data"><i class="fa fa-eye"></i></a>
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

<!-- <?php $no=0; foreach($data as $row): $no++; ?>
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
<?php endforeach; ?> -->