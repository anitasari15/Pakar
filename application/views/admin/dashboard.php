<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row" style="display: inline-block;" >
    <div class="tile_count">
      <div class="col-md-6 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Pasien</span>
        <?php 
        $query = $this->db->query('SELECT count(nama) as total from tb_pasien')->row();
        $tot = $query->total;
        ?>
        <div class="count">
          <?php 
          echo $tot;
          ?>
        </div>
      </div>
      <!-- <div class="col-md-5 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Kategori Gejala</span>
        <?php 
        $query = $this->db->query('SELECT count(id_gejala) as total from tb_kategori_gejala')->row();
        $tot = $query->total;
        ?>
        <div class="count">
          <?php 
          echo $tot;
          ?>
        </div>
      </div> -->
      <div class="col-md-6 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Rekam Medis</span>
        <?php 
        $query = $this->db->query('SELECT count(id_konsultasi) as total from tb_konsultasi')->row();
        $tot = $query->total;
        ?>
        <div class="count">
          <?php 
          echo $tot;
          ?>
        </div>
      </div>
      <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
        <div class="count">4,567</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
      </div> -->
      <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
        <div class="count">2,315</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div> -->
      <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div> -->
    </div>
  </div>
  <!-- /top tiles -->
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="dashboard_graph">
        <div class="row x_title">
          <div class="col-md-6">
            <h3>Grafik Konsultasi</h3>
          </div>
          <div class="col-md-6">
            <div  class="pull-right" style="background: #fff; padding: 5px 10px; border: 1px solid #ccc">
              <label>Tahun</label>
              <select onchange="change_year(this)">
                <option>Semua</option>
                <?php foreach ($year as $key => $value) { ?>
                  <option value="<?php echo($value); ?>" <?php if ($selected_year==$value) { echo 'selected'; } ?> ><?php echo $value; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 ">
          <canvas id="konsul_chart" width="300" height="100"></canvas>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <br />
</div>
<script src="<?php echo base_url() ?>assets/new/vendors/Chart.js/dist/Chart.min.js"></script>

<script>
  var ctx = document.getElementById('konsul_chart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Normal', 'Sedang', 'Tinggi',],
      datasets: [{
        label: 'Jumlah',
        data: <?php echo (isset($data) ? $data : '[]'); ?>,
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        ],
        borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            suggestedMax: 50
          }
        }]
      }
    }
  });


</script>
<script type="text/javascript">
  function change_year(e) {
    window.location.href = "<?php echo(base_url('welcome/dashboard/')) ?>" + e.options[e.selectedIndex].value;
  }
</script>