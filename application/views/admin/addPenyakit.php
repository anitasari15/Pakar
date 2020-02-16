<?php echo validation_errors(); ?>
      <?php
        echo form_open_multipart('ctrPenyakit/tbhPenyakit', array('class'=>'needs-validation', 'novalidate'=>''));
       ?>

<div class="">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Penyakit</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label>Tipe Penyakit</label>
              <input type="text" class="form-control" name="tipe_penyakit" value="<?php echo set_value('tipe_penyakit'); ?>" required>
          </div>
          <div class="form-group">
            <label>Saran Penyakit</label>
              <input type="text" class="form-control" name="saran" value="<?php echo set_value('saran'); ?>" required>
          </div>
          <!-- <button id="submitBtn" type="submit" class="btn btn-gradient-primary mr-2" name="simpan">Tambah</button> -->
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </form>
    </div>
  </div>
</div>