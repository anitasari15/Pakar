<?php if($this->session->flashdata('notif_user_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_user_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">User Table</h4>
            <button class="btn-sm"><?php echo anchor('ctrUser/tbhUser','Tambah Data', array('class' => 'btn btn-sm bts')); ?></button>
                    <table id="myTable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Id User </th>
                          <th> Nama </th>
                          <th> Tanggal Lahir </th>
                          <th> Alamat </th>
                          <th> No Telephone </th>
                          <th> Username </th>
                          <th> Password </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
                        $b = 1;
                        foreach($user as $i):
                        ?>
                  <tr>  
                        <td><?php echo $b++; ?></td>
                        <td><?php echo $i->nama;?> </td>
                        <td><?php echo $i->tgl_lahir;?> </td>
                        <td><?php echo $i->alamat;?></td>
                        <td><?php echo $i->no_telp ;?></td>
                        <td><?php echo $i->username ;?></td>
                        <td><?php echo $i->password; ?></td>
                        <td>
                          <?php echo anchor('ctrUser/edit/'.$i->id_user,'Edit Data', array('class' => 'btn btn-sm btn-info')); ?>
                          <!-- <?php echo anchor('ctrUser/delete/'.$i->id_user,'Hapus Data', array('class' => 'btn btn-sm btn-danger')); ?> -->
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
            if (confirm("Hapus User?"))
                 location.href='ctrUser/delete/<?php echo $i->id_user?>';
            else
                 location.href='ctrUser';
      }
</script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>