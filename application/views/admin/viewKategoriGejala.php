<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
  <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
<?php endif; ?>

<div class="col-sm-10 right_col grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
      <h4 class="card-title"> Tabel Kategori Gejala</h4>
      <!-- <button><?php echo anchor('ctrKategori/tbhKategori','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button> -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
      <table id="datatable" class="table table-bordered">
        <thead>
          <tr>
            <th> No </th>
            <!-- <th> Id Kategori </th> -->
            <th> Nama Gejala </th>
            <th> Kategori Gejala </th>
            <!-- <th> Nilai Gejala </th>
            <th> Label </th> -->
            <!-- <th> CF Gejala </th>
            <th> Tingkat Gejala </th>
            <th> Aksi </th> -->
          </tr>
        </thead>
        <tbody>
         <?php $no=1; foreach($all as $row): ?>
         <tr>  
          <td><?php echo $no++; ?></td>
          <!-- <td><?php echo $row->id_kategori_gejala;?> </td> -->
          <td><?php echo $row->nama_gejala;?> </td>
          <td><?php echo $row->kategori_gejala;?> </td>
          <!-- <td><?php echo $row->nilai_gejala;?> </td>
          <td><?php echo $row->label_gejala;?></td> -->
          <!-- <td><?php echo $row->cf_gejala;?> </td>
          <td><?php echo $row->gejala;?> </td>
          <td>
            <center>
              <div>
                <a data-toggle="modal" data-target="#modal-edit<?=$row->id_kategori_gejala;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                <a href="<?php echo site_url('ctrKategori/hapus/'.$row->id_kategori_gejala); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->kategori_gejala;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
              </div>
            </center>
          </td> -->
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
      <<div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" arial-label="close">
            <span area-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label class='col-md-9'>Nama Gejala</label>
              <select id="nama_gejala" class="form-control" name="id_gejala" placeholder="Pilih Gejala Kecanduan" required>
                <?php 
                $query = $this->db->query("SELECT * FROM tb_gejala;");
                ?>
                <option>Pilih Gejala</option>
                <?php 
                foreach ($query->result() as $gejala) {?>
                  <option value="<?php echo $gejala->id_gejala ?>"><?php echo $gejala->nama_gejala ?></option>
                <?php } ?>
              </select>
            </div>
            <br>

            <div class="form-group">
              <label class="col-md-9">Kategori</label>
              <div class="col-md-9">
                <select name="kategori_gejala" id="kategori_gejala" class="form-control form-control-line" readonly>
                  <option disabled selected>Pilih nama gejala</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label class='col-md-9'>Nilai Gejala</label>
              <div class='col-md-9'>
                <input name="nilai_gejala" id="nilai_gejala" class="form-control" readonly="true" placeholder="Pilih kategori" />
              </div>
            </div>
            <br>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" arial-label="close">
              <span area-hidden="true">&times;</span></button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">

  jQuery(document).ready(() => {

    // macam variabel di javascript ada 3 yaitu var, const, dan let
    // var adalah variabel lama, bisa diubah valuenya
    // const adlah variable tetap atau konstanta
    // let adalah variabel yg bisa diubah valuenya

    // ambil data dari controller
    const gejala = <?php echo $gejalas; ?>;

    // ambil element
    const selectNamaGjl = $('#nama_gejala');
    const selectKategoriGjl = $('#kategori_gejala');
    const inputNilaiGjl = $('#nilai_gejala');

    selectNamaGjl.change(()=>{
      const selected_id_gejala = selectNamaGjl.val();

      // ambil nama gejala yg terpilih
      const terpilih = gejala.find((o) => { 
        return o['id_gejala'] === selected_id_gejala 
      })

      // remove option lama
      selectKategoriGjl.empty();
      inputNilaiGjl.empty(); 

      if (terpilih) {
        selectKategoriGjl.attr("readonly", false);
        const kategori = terpilih['kategori'].split(',');
        const nilai = terpilih['nilai'].split(',');

        for (var i = 0; i < kategori.length; i++) {
          // set pilihan kategori gejala 
          selectKategoriGjl.append($("<option></option>").attr("value", kategori[i]).text(kategori[i]));

          // set value nilai gejala 
          inputNilaiGjl.val(nilai[i]);
        }

        selectKategoriGjl.change(()=>{
          // ambil index kagetori terpilih
          const index = selectKategoriGjl.prop('selectedIndex');

          // set nilai gejala berdasarkan kategori
          inputNilaiGjl.val(nilai[index]);
        });
      } else {
        selectKategoriGjl.attr("readonly", true);
        const disabled_option = $("<option></option>");
        disabled_option.attr("value", "").text("Pilih nama gejala");
        selectKategoriGjl.append(disabled_option);
        inputNilaiGjl.val("Pilih kategori");

      }

    });

  });
  

</script>


