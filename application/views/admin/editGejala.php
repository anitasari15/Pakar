<?php foreach ($gejala as $key): ?>
	<?php echo form_open('ctrGejala/edit/'.$key->id_gejala, array('enctype'=>'multipart/form-data')); ?>

<div class="">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Gejala</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label>Kode Gejala</label>
              <input type="text" class="form-control" name="kode_gejala" value="<?php echo $key->kode_gejala; ?>" required>
          </div>
          <div class="form-group">
            <label>Nama Gejala</label>
              <input type="text" class="form-control" name="nama_gejala" value="<?php echo $key->nama_gejala; ?>" required>
          </div>
          <input id="submitBtn" type="submit" name="edit" value="Edit" class="btn btn-primary">
        </form>
        <?php endforeach;?>
    </div>
  </div>
</div>


