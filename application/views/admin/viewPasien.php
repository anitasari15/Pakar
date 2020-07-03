<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Tabel Pasien</h4>
            <!-- <button><?php echo anchor('ctrPasien/tbhPasien','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <table id="datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> NIK </th>
                          <th> Nama Pasien </th>
                          <th> Alamat Pasien </th>
                          <th> Tanggal Lahir </th>
                          <th> Tanggal Daftar </th>
                          <th> Username </th>
                          <!-- <th> Password </th> -->
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                      <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nik; ?></td>
                        <td><?php echo $row->nama;?> </td>
                        <td><?php echo $row->alamat;?> </td>
                        <td><?php echo $row->tgl_lahir;?> </td>
                        <td><?php echo $row->tgl_daftar;?> </td>
                        <td><?php echo $row->username;?></td>
                        <!-- <td><?php echo $row->password;?></td> -->
                        <td>
                          <center>
                            <div>
                              <!-- <a href='<?php echo site_url('ctrPasien/edit/'.$row->id_pasien) ?>' class='btn btn-sm btn-info'>Update</a> -->
                              <a href="<?php echo site_url('ctrPasien/edit/'.$row->id_pasien.'/'.$row->nik); ?>" onclick="return confirm('Apakah Anda Ingin Mereset Password <?=$row->nama;?> ?');" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Reset Password"><i class="fa fa-refresh"></i></a>
                              <a data-toggle="modal" data-target="#modal-edit<?=$row->id_pasien;?>" class="btn btn-info btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo site_url('ctrPasien/hapus/'.$row->id_pasien); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
      <form action="<?php echo site_url('ctrPasien/tbhPasien'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-3'>NIK Pasien</label>
            <div class='col-md-9'><input type="text" name="nik" autocomplete="off" required placeholder="Masukkan NIK Pasien" class="form-control" ></div>
          </div><div class="form-group">
            <label class='col-md-3'>Nama Pasien</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama Pasien" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Alamat Pasien</label>
            <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" required placeholder="Masukkan Alamat Pasien" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Tanggal Lahir</label>
            <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" required placeholder="Masukkan Tanggal Lahir" class="form-control" ></div>
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
<div id="modal-edit<?=$row->id_pasien;?>" class="modal fade">
  <div class="modal-dialog">
    <form action="<?php echo site_url('ctrPasien/ubah'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class='col-md-3'>Username</label>
            <div class='col-md-9'><input type="text" name="tgl_lahir" autocomplete="off" value="<?=$row->username;?>" required placeholder="Masukkan Tanggal Lahir" class="form-control" readonly></div>
          </div>
          <input type="hidden" readonly value="<?=$row->id_pasien;?>" name="id_pasien" class="form-control" >
          <div class="form-group">
            <label class='col-md-3'>Nama Pasien</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" value="<?=$row->nama;?>" required placeholder="Masukkan Nama Pasien" class="form-control"></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Alamat Pasien</label>
            <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" value="<?=$row->alamat;?>" required placeholder="Masukkan Alamat Pasien" class="form-control"></div>
          </div>
          <br>
         <div class="form-group">
            <label class='col-md-3'>Tanggal Lahir</label>
            <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" value="<?=$row->tgl_lahir;?>" required placeholder="Masukkan Tanggal Lahir" class="form-control" ></div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i>Edit</button>
      </div>
      </div>
      
    </form>
  </div>
</div>
<?php endforeach; ?>