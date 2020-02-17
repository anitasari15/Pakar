<?php echo validation_errors(); ?>
      <?php
        echo form_open_multipart('ctrUser/tbhUser', array('class'=>'needs-validation', 'novalidate'=>''));
       ?>

<div class="">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah User</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat'); ?>" required>
          </div>
          <div class="form-group">
            <label>No Telephone</label>
              <input type="text" class="form-control" name="no_telp" value="<?php echo set_value('no_telp'); ?>" required>
          </div>
          <div class="form-group">
            <label>Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" required>
          </div>
          <div class="form-group">
            <label>Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" required>
          </div>
          <!-- <div class="form-group">
            <label>Level</label>
              <input type="text" class="form-control" name="level" value="<?php echo set_value('level'); ?>" required>
          </div> -->
          <!-- <button id="submitBtn" type="submit" class="btn btn-gradient-primary mr-2" name="simpan">Tambah</button> -->
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </form>
    </div>
  </div>
</div>