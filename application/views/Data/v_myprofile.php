<section class="content">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $judul; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?= $judul; ?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section><br>
        <section class="content">
            <div class="container-fluid">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="icon fas fa-check"></i> <?= $this->session->flashdata('success'); ?>
                </div>
                <div class="col-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/gambar/' . $profile['foto']) ?>" width="100px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $profile['nama']; ?></h5>
                                    <p class="card-text"><?= $profile['kelas']; ?></p>
                                    <p class="card-text"><small class="text-muted">PILKOSIS SMK N 1 KEBUMEN</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat"><i class="fas fa-cog"> <a href="<?= site_url('Login/setting') ?>" style="color: white;">Change Profile</a> </i></button>
                    <button type="Reset" class="btn btn-danger btn-flat"><i class="fas fa-key"> <a href="<?= site_url('Login/password') ?>" style="color: white;">Change Password</a></i></button>
                </div>
            </div>

        </section>
    </div>