<html lang="en">
<head>
  <title>Pagination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Modal</h1>
      </div>
  </div>
 
  <?php 
  $data=$this->session->flashdata('sukses');
  if($data!=""){ ?>
  <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
  <?php } ?>
 
  <?php 
  $data2=$this->session->flashdata('error');
  if($data2!=""){ ?>
  <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
  <?php } ?>
 
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
 
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
 
          <hr>
 
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Modal
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode Gejala</th>
                              <th>Nama Gejala</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1; foreach($all as $row): ?>
                          <tr class="odd gradeX">
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $row->kode_gejala; ?></td>
                              <td><?php echo $row->nama_gejala; ?></td>
                              <td>
                                  <center>
                                    <div>
                                      <a data-toggle="modal" data-target="#modal-edit<?=$row->id_gejala;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                      <a href="<?php echo site_url('Modal/hapus/'.$row->id_gejala); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->kode_gejala;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                    </div>
                                  </center>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
 
 
<div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Modal/add'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-3'>Kode Gejala</label>
            <div class='col-md-9'><input type="text" name="kode_gejala" autocomplete="off" required placeholder="Masukkan Kode Gejala" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>nama Gejala</label>
            <div class='col-md-9'><input type="text" name="nama_gejala" autocomplete="off" required placeholder="Masukkan nama Gejala" class="form-control" ></div>
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
<!-- /#page-wrapper -->
 
<?php $no=0; foreach($all as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->id_gejala;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Modal/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_gejala;?>" name="id_gejala" class="form-control" >
 
          <div class="form-group">
            <label class='col-md-3'>Kode Gejala</label>
            <div class='col-md-9'><input type="text" name="kode_gejala" autocomplete="off" value="<?=$row->kode_gejala;?>" required placeholder="Masukkan Modal" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Nama Gejala</label>
            <div class='col-md-9'><input type="text" name="nama_gejala" autocomplete="off" value="<?=$row->nama_gejala;?>" required placeholder="Masukkan Modal" class="form-control" ></div>
          </div>
          <br>
        </div>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
          </div>
        </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</html>