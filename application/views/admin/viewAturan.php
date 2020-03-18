<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Gejala Table</h4>
            <!-- <button><?php echo anchor('ctrGejala/tbhGejala','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <table id="datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Id Aturan </th>
                          <th> Id Kategori Aturan </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; foreach($all as $row): ?>
                  <tr>  
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_aturan;?> </td>
                        <td><?php echo $row->id_kategori_gejala;?> </td>
                        <td>
                          <center>
                            <div>
                              <a data-toggle="modal" data-target="#modal-edit<?=$row->id_detail_aturan;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo site_url('ctrGejala/hapus/'.$row->id_detail_aturan); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->id_aturan;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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