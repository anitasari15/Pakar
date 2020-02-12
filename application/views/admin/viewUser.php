<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">User Table</h4>
            <button class="btn-sm"><?php echo anchor('ctrUser/tbhUser','Tambah Data', array('class' => 'btn btn-sm bts')); ?></button>
                    <table id="myTable" class="table table-bordered"s>
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
                        foreach($user as $i):
                              $id_user=$i['id_user'];
                              $nama=$i['nama'];
                              $tgl_lahir=$i['tgl_lahir'];
                              $alamat=$i['alamat'];
                              $no_telp=$i['no_telp'];
                              $username=$i['username'];
                              $password=$i['password'];
                        ?>
                        <tr>
                        <td><?php echo $id_user;?> </td>
                        <td><?php echo $nama;?> </td>
                        <td><?php echo $tgl_lahir ;?> </td>
                        <td><?php echo $alamat;?> </td>
                        <td><?php echo $no_telp;?> </td>
                        <td><?php echo $username;?> </td>
                        <td><?php echo $password;?> </td>
                        <td>
                          <a href='<?php echo base_url() ?>ctrUser/edit<?php echo $id_user ?>' class='btn btn-sm btn-info'>Update</a>
                          <a href='<?php echo base_url() ?>ctrUser/delete/<?php echo $id_user; ?>' class='btn btn-sm btn-danger'>Delete</a>
                        </td>
                  </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
        </div>
    </div>
</div>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>