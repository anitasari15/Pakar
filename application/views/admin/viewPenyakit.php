<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Penyakit Table</h4>
            <button><?php echo anchor('ctrPenyakit/tbhPenyakit','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button>
                    <table id="myTable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Tipe Penyakit </th>
                          <th> Saran </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
                        $b = 1;
                        foreach($penyakit as $i):
                        ?>
                  <tr>  
                        <td><?php echo $b++; ?></td>
                        <td><?php echo $i->tipe_penyakit;?> </td>
                        <td><?php echo $i->saran;?> </td>
                        <td>
                          <?php echo anchor('ctrPenyakit/edit/'.$i->id_penyakit,'Edit Data', array('class' => 'btn btn-sm btn-info')); ?>
                          <!-- <?php echo anchor('ctrPenyakit/hapus/'.$i->id_penyakit,'Hapus Data', array('class' => 'btn btn-sm btn-danger')); ?> -->
                          <button location.href="" class='btn btn-sm btn-danger' onClick='ConfirmDelete()'>Delete</button>
                        </td>
                  </tr>
                  <?php endforeach;?>
                      </tbody>
                    </table>
        </div>
    </div>
</div>
<script>
function ConfirmDelete()
      {
            if (confirm("Hapus Penyakit?"))
                 location.href='ctrPenyakit/hapus/<?php echo $i->id_penyakit?>';
            else
                 location.href='ctrPenyakit';
      }
</script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>