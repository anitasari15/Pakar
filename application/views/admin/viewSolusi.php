<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Tabel Solusi</h4>
            <!-- <button><?php echo anchor('ctrPasien/tbhPasien','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <table id="datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Status </th>
                          <th> Solusi </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                      <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->status;?> </td>
                        <td><?php echo $row->solusi;?> </td>
                        <td>
                          <center>
                            <div>
                              <a data-toggle="modal" data-target="#modal-edit<?=$row->id_solusi;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo site_url('ctrPasien/hapus/'.$row->id_solusi); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->solusi;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
      <form action="<?php echo site_url('ctrSolusi/tambah'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
              <label class='col-md-9'>Status</label>
              <div class='col-md-9'>
                  <select id="search" class="form-control" name="status" placeholder="Pilih Status" required>
                      <?php 
                        $query = $this->db->query("SELECT * FROM tb_solusi;");
                      ?>
                      <?php 
                          foreach ($query->result() as $pasien) {
                        ?>
                        <!-- <option value="">Pilih Nama Pasien</option> -->
                        <option value="<?php echo $pasien->id_solusi ?>"><?php echo $pasien->status ?></option>
                      <?php } ?>
                  </select>
                </div>
            </div>
          <br>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Saran</label>
            <div class='col-md-9'><input type="text" name="solusi" autocomplete="off" required placeholder="Masukkan Saran" class="form-control" ></div>
          </div>
          <br>
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
<div id="modal-edit<?=$row->id_solusi;?>" class="modal fade">
  <div class="modal-dialog">
    <form action="<?php echo site_url('ctrSolusi/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_solusi;?>" name="id_solusi" class="form-control" >
          <div class="form-group">
            <label class='col-md-3'>Solusi</label>
            <div class='col-md-9'><input type="text" name="solusi" autocomplete="off" value="<?=$row->solusi;?>" required placeholder="Masukkan solusi" class="form-control" ></div>
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