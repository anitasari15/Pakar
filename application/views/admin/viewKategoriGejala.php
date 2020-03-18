<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Gejala Table</h4>
            <!-- <button><?php echo anchor('ctrKategori/tbhKategori','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <table id="datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Id Kategori </th>
                          <th> Nama Gejala </th>
                          <th> Kategori Gejala </th>
                          <th> Nilai Gejala </th>
                          <th> CF Gejala </th>
                          <th> Tingkat Gejala </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                  <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_kategori_gejala;?> </td>
                        <td><?php echo $row->nama_gejala;?> </td>
                        <td><?php echo $row->kategori_gejala;?> </td>
                        <td><?php echo $row->nilai_gejala;?> </td>
                        <td><?php echo $row->cf_gejala;?> </td>
                        <td><?php echo $row->gejala;?> </td>
                        <td>
                          <center>
                            <div>
                              <a data-toggle="modal" data-target="#modal-edit<?=$row->id_kategori_gejala;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo site_url('ctrKategori/hapus/'.$row->id_kategori_gejala); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->kategori_gejala;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
      <form action="<?php echo site_url('ctrKategori/tbhKategori'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a class="modal-title">Tambah Data</a>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-9'>Nama Gejala</label>
              <select class="form-control" name="id_gejala" placeholder="Pilih Gejala Kecanduan" required>
                    <?php 
                    $query = $this->db->query("SELECT * FROM tb_gejala;");
                    ?>
                    <?php 
                      foreach ($query->result() as $gejala) {
                        ?>
                        <option value="<?php echo $gejala->id_gejala ?>"><?php echo $gejala->nama_gejala ?></option>
                      <?php } ?>
              </select>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Kategori Gejala</label>
            <div class='col-md-9'><input type="text" name="kategori_gejala" autocomplete="off" required placeholder="Masukkan Kategori Gejala" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-9'>Nilai Gejala</label>
            <div class='col-md-9'><input type="text" name="nilai_gejala" autocomplete="off" required placeholder="Masukkan Nilai Gejala" class="form-control" ></div>
          </div>
          <br>
          <!-- <div class="form-group">
            <label class='col-md-9'>CF Gejala</label>
            <div class='col-md-9'><input type="text" name="cf_gejala" autocomplete="off" required placeholder="Masukkan CF Gejala" class="form-control" ></div>
          </div> -->
          <div class="form-group">
            <label class="col-md-9">Nilai CF</label>
              <div class="col-md-9">
                <select name="cf_gejala" class="form-control form-control-line">
                  <option value=0.4>Sedikit Yakin</option>
                  <option value=0.6>Cukup Yakin</option>
                  <option value=0.8>Yakin</option>
                </select>
              </div>
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
<div id="modal-edit<?=$row->id_kategori_gejala;?>" class="modal fade">
  <div class="modal-dialog">
    <form action="<?php echo site_url('ctrKategori/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_kategori_gejala;?>" name="id_kategori_gejala" class="form-control" >
          <div class="form-group">
            <label class='col-md-9'>Nama Gejala</label>
            <select class="form-control" name="id_gejala" placeholder="Pilih Nama Gejala" required>
              <?php 
                $query = $this->db->query("SELECT * FROM tb_gejala;");
              ?>
              <?php 
                foreach ($query->result() as $gejala) {
              ?>
              <option value="<?php echo $gejala->id_gejala; ?>" <?php echo ($gejala->nama_gejala == $row->nama_gejala ? 'selected="selected"' : ''); ?>><?php echo $gejala->nama_gejala ?></option>

              <?php } ?>
            </select>
          <br>
        </div>
          <div class="form-group">
            <label class='col-md-9'>Kategori Gejala</label>
            <div class='col-md-9'><input type="text" name="kategori_gejala" autocomplete="off" value="<?=$row->kategori_gejala;?>" required placeholder="Masukkan Kategori Gejala" class="form-control" ></div>
          </div>
        <br>
          <div class="form-group">
            <label class='col-md-9'>Nilai Gejala</label>
            <div class='col-md-9'><input type="text" name="nilai_gejala" autocomplete="off" value="<?=$row->nilai_gejala;?>" required placeholder="Masukkan Nilai Gejala" class="form-control" ></div>
          </div>
        <br>
          <!-- <div class="form-group">
            <label class='col-md-9'>Nilai CF Gejala</label>
            <div class='col-md-9'><input type="text" name="cf_gejala" autocomplete="off" value="<?=$row->cf_gejala;?>" required placeholder="Masukkan Nilai CF Gejala" class="form-control" ></div>
          </div> -->
          <?php if ($row->cf_gejala != '') {  ?>
          <div class="form-group">
            <label class='col-md-9'>Nilai CF</label>
                <select class="form-control" name="cf_gejala" placeholder="Isi Nilai CF" required>
                  <option value="">Nilai CF</option>
                  <option value=0.4 <?php echo ($row->cf_gejala == 0.4 ? 'selected' : '');?>>Sedikit Yakin</option>
                  <option value=0.6 <?php echo ($row->cf_gejala == 0.6 ? 'selected' : '');?>>Cukup Yakin</option>
                  <option value=0.8 <?php echo ($row->cf_gejala == 0.8 ? 'selected' : '');?>>Yakin</option>
                      </select>
                  </div>
                <?php } ?>
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