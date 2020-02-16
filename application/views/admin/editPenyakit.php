 <?php foreach ($penyakit as $key): ?>
	<?php echo form_open('ctrPenyakit/edit/'.$key->id_penyakit, array('enctype'=>'multipart/form-data')); ?>

<div class="">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit penyakit</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label>Tipe Penyakit</label>
              <input type="text" class="form-control" name="tipe_penyakit" value="<?php echo $key->tipe_penyakit; ?>" required>
          </div>
          <div class="form-group">
            <label>Saran</label>
              <input type="text" class="form-control" name="saran" value="<?php echo $key->saran; ?>" required>
          </div>
          <input id="submitBtn" type="submit" name="edit" value="Edit" class="btn btn-primary">
        </form>
        <?php endforeach;?>
    </div>
  </div>
</div>


