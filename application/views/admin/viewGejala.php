<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Tabel Gejala</h4>
            <!-- <button><?php echo anchor('ctrGejala/tbhGejala','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button> -->
                    <table id="datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama Gejala </th>
                          <th> Label </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                  <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nama_gejala;?> </td>
                        <td><?php echo $row->label_gejala;?> </td>
                        <td>
                          <center>
                            <div>
                              <!-- <a data-toggle="modal" data-target="#modal-edit<?=$row->id_gejala;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a> -->
                              <!-- <a href="<?php echo site_url('ctrGejala/hapus/'.$row->id_gejala); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama_gejala;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a> -->
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
      <form action="<?php echo site_url('ctrGejala/tbhGejala'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-3'>Nama Gejala</label>
            <div class='col-md-9'><input type="text" name="nama_gejala" autocomplete="off" required placeholder="Masukkan Nama Gejala" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Label Gejala</label>
            <div class='col-md-9'><input type="text" name="label_gejala" autocomplete="off" required placeholder="Masukkan Label Gejala" class="form-control" ></div>
          </div>
          <br>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          </div>
        </form>
    </div>
</div>
</div>

<?php $no=0; foreach($all as $row): $no++; ?>
<div id="modal-edit<?=$row->id_gejala;?>" class="modal fade">
  <div class="modal-dialog">
    <form action="<?php echo site_url('ctrGejala/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_gejala;?>" name="id_gejala" class="form-control" >
          <div class="form-group">
            <label class='col-md-3'>Nama Gejala</label>
            <div class='col-md-9'><input type="text" name="nama_gejala" autocomplete="off" value="<?=$row->nama_gejala;?>" required placeholder="Masukkan Nama Gejala" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Label Gejala</label>
            <div class='col-md-9'><input type="text" name="label_gejala" autocomplete="off" value="<?=$row->label_gejala;?>" required placeholder="Masukkan Label Gejala" class="form-control" ></div>
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