<?php foreach ($user as $key): ?>
	<?php echo form_open('ctrUser/edit/'.$key->id_user, array('enctype'=>'multipart/form-data')); ?>

<div class="">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah User</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $key->nama; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $key->tgl_lahir; ?>" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo $key->alamat; ?>" required>
          </div>
          <div class="form-group">
            <label>No Telephone</label>
              <input type="text" class="form-control" name="no_telp" value="<?php echo $key->no_telp; ?>" required>
          </div>
          <div class="form-group">
            <label>Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $key->username; ?>" required>
          <input id="submitBtn" type="submit" name="edit" value="Edit" class="btn btn-primary">
        </form>
        <?php endforeach;?>
    </div>
  </div>
</div>


