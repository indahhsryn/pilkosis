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
    </section>
    <section class="content">
        <div class="card-body">
            <div class="col-8 ">
             
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="<?= site_url('Landing/update_data') ?>" method="post">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="alamat">Alamat Sekolah</label>
                                <div class="input-group date">
                                    <input type="text" name="alamat" value="<?=$alamat->alamat;?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kdPos">Kode Pos</label>
                                <div class="input-group date">
                                    <input type="number" name="kdPos" value="<?=$alamat->kode_pos;?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <div class="input-group date">
                                    <input type="number" name="telepon"  value="<?=$alamat->telepon;?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"></i></div>
                                    </div>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-danger float-right ">Reset</button>
                            <button type="submit" class="btn btn-success float-right mx-3">Simpan</button>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </section>
</div>