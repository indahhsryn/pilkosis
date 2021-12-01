
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $judul;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul;?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h3 id="time" class="pull-right"></h3>
                <div class="px-2 bg-light">
                  <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                    <h3> <b> Selamat Datang <?= $nama['nama'];?> Di Pemilihan ketua dan wakil ketua osis SMK N 1 KEBUMEN</b></h3>
                  </marquee>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-bullhorn"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"> <b><?=$this->session->userdata('status');?></b> </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas  fa-vote-yea"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>Total Pemilih</b></span>
                <span class="account-logout">
                <?= $jumlah_pemilih;?> / <?= $total_pemilih; ?>
                </span>
              </div>
            </div>
          </div>

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"> <b> Kandidat</b></span>
                <span class="info-box-number"><?= $kandidat;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-chart-bar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"> <b>Hasil Suara </b> </span>
                <span class="info-box-number">100%</span>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <div class="card card-primary card-outline">
        <div class="card-body">
          <h4 style="text-align: center;"> <b>Pemilihan Ketua Osis Dan Wakil Ketua Osis Akan Dilaksanakan Pada <br>
            <?= $dt['tanggal_mulai'] ?> dan Berakhir Pada <?= $dt['tanggal_akhir'];?> </h4></b>
          <!-- <h3 style="text-align:center;" id="text"> -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>