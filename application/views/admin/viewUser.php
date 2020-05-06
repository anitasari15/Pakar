<?php if($this->session->flashdata('notif_user_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_user_hapus').'</div>'; ?>
          <?php endif; ?>

<?php 
  $data=$this->session->flashdata('sukses');
  if($data!=""){ ?>
  <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
  <?php } ?>
 
  <?php 
  $data2=$this->session->flashdata('error');
  if($data2!=""){ ?>
  <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
  <?php } ?>

<div class="col-sm-10 right_col grid-margin stretch-card">
  <!-- <div class="row"> -->
	<!-- <div class="col-sm-12"> -->
		<div class="card-box table-responsive">
            <h4 class="card-title">User Table</h4>
            <!-- <button class="btn-sm"><?php echo anchor('ctrUser/tbhUser','Tambah Data', array('class' => 'btn btn-sm bts')); ?></button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama </th>
                          <th> Username </th>
                          <th> Password </th>
                          <th> Level </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                  <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nama;?> </td>
                        <td><?php echo $row->username ;?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->level; ?></td>
                        <td>
                          <center>
                            <div>
                              <a data-toggle="modal" data-target="#modal-edit<?=$row->id_user;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo site_url('ctrUser/delete/'.$row->id_user); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
      <form action="<?php echo site_url('ctrUser/tbhUser'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a class="modal-title">Tambah Data</a>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-9'>Nama</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama" class="form-control" ></div>
          </div>
          <br><!-- 
          <div class="form-group">
            <label class='col-md-9'>Tanggal Lahir</label>
            <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" required placeholder="Masukkan Tanggal Lahir" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Alamat</label>
            <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" required placeholder="Masukkan Alamat" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>No Telepon</label>
            <div class='col-md-9'><input type="text" name="no_telp" autocomplete="off" required placeholder="Masukkan No Telepon" class="form-control" ></div>
          </div> -->
          <br>
          <div class="form-group">
            <label class='col-md-9'>Username</label>
            <div class='col-md-9'><input type="text" name="username" autocomplete="off" required placeholder="Masukkan Username" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Password</label>
            <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control" ></div>
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

<?php $no=0; foreach($all as $row): $no++; ?>
<div id="modal-edit<?=$row->id_user;?>" class="modal fade">
  <div class="modal-dialog">
    <form action="<?php echo site_url('ctrUser/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_user;?>" name="id_user" class="form-control" >
          <div class="form-group">
            <label class='col-md-9'>Nama</label>
            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" value="<?=$row->nama;?>" required placeholder="Masukkan Nama" class="form-control" ></div>
          </div>
          <br><!-- 
          <div class="form-group">
            <label class='col-md-9'>Tanggal Lahir</label>
            <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" value="<?=$row->tgl_lahir;?>" required placeholder="Masukkan Tanggal Lahir" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Alamat</label>
            <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" value="<?=$row->alamat;?>" required placeholder="Masukkan Alamat" class="form-control" ></div>
          </div>
          <br> -->
          <!-- <div class="form-group">
            <label class='col-md-9'>Level</label>
            <div class='col-md-9'><input type="text" name="level" autocomplete="off" value="<?=$row->level;?>" required placeholder="Masukkan No Telephone" class="form-control" ></div>
          </div> -->
          <br>
          <div class="form-group">
            <label class='col-md-9'>Username</label>
            <div class='col-md-9'><input type="text" name="username" autocomplete="off" value="<?=$row->username;?>" required placeholder="Masukkan Username" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Password</label>
            <div class='col-md-9'><input type="password" name="password" autocomplete="off" value="" required placeholder="Masukkan Password" class="form-control" ></div>
          </div>
          <br>
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