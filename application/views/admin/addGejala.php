<?php echo validation_errors(); ?>
      <?php
        echo form_open_multipart('ctrGejala/tbhGejala', array('class'=>'needs-validation', 'novalidate'=>''));
       ?>

<div class="">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Gejala</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label>Kode Gejala</label>
              <input type="text" class="form-control" name="kode_gejala" value="<?php echo set_value('kode_gejala'); ?>" required>
          </div>
          <div class="form-group">
            <label>Nama Gejala</label>
              <input type="text" class="form-control" name="nama_gejala" value="<?php echo set_value('nama_gejala'); ?>" required>
          </div>
          <!-- <button id="submitBtn" type="submit" class="btn btn-gradient-primary mr-2" name="simpan">Tambah</button> -->
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </form>
    </div>
  </div>
</div>