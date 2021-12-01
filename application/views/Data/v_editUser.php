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
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header" style="text-align: right;">
                    <h3 class="pull-right"><a href="<?= site_url('/User'); ?> " class="btn btn-warning">
                            <i class="fa fa-undo">Back</i>
                        </a></h3>
                </div>
                <div class="card-body">
                    <div class="col-8 ">
                        <form role="form" action="<?= site_url('/User/update')?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="no" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" name="id" value="<?= $id ?>" class="form-control" id="id" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" value="<?= $nama?>" class="form-control" id="nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" value="<?= $username; ?>" class="form-control" id="username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ketua" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" name="password" value="<?= $password?>" class="form-control" id="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="wakil" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nis" value="<?= $nis ?>" class="form-control" id="nis" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="visi" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kelas" value="<?= $kelas ?>" class="form-control" id="kelas" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="proker" class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <input type="text" name="is_active" value="<?= $is_active ?>" class="form-control" id="is_active" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"><b>Foto</b> </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <?php if ($dt->foto != null) { ?>
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/gambar/' . $dt->foto) ?>" class="img-thumbnail">
                                                <small>Biarkan kosong jika tidak diganti</small>
                                            </div>
                                        <?php
                                        } ?>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-10">
                                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane">Submit</i></button>
                                    <button type="Reset" class="btn btn-danger btn-flat"><i class="fa fa-undo">Reset</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>