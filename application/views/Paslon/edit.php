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
                    <h3 class="pull-right"><a href="<?= site_url('/Paslon'); ?> " class="btn btn-warning">
                            <i class="fa fa-undo">Back</i>
                        </a></h3>
                </div>
                <div class="card-body">
                    <div class="col-8 ">
                        <form role="form" action="<?= site_url('/Paslon/update_data') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="no" class="col-sm-2 col-form-label">No</label>
                                <div class="col-sm-10">
                                    <input type="number" name="no" value="<?= $no; ?>" class="form-control" id="no" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Paslon</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" value="<?= $nama_paslon; ?>" class="form-control" id="nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ketua" class="col-sm-2 col-form-label">Ketua</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ketua" value="<?= $calon_ketua ?>" class="form-control" id="ketua" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="wakil" class="col-sm-2 col-form-label">Wakil Ketua</label>
                                <div class="col-sm-10">
                                    <input type="text" name="wakil" value="<?= $calon_wakil ?>" class="form-control" id="wakil" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="visi" class="col-sm-2 col-form-label">Visi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="visi" value="<?= $visi ?>" class="form-control" id="visi" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="misi" class="col-sm-2 col-form-label">Misi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="misi" value="<?= $misi ?>" class="form-control" id="misi" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="proker" class="col-sm-2 col-form-label">Proram Kerja</label>
                                <div class="col-sm-10">
                                    <input type="text" name="proker" value="<?= $proker ?>" class="form-control" id="proker" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"><b>Picture</b> </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <?php if ($dt->foto != null) { ?>
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('foto/calon/' . $dt->foto) ?>" class="img-thumbnail">
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