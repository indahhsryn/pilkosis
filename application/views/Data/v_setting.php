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
                    <h3 class="pull-right"><a href="<?= site_url('/Login/profile'); ?> " class="btn btn-warning">
                            <i class="fa fa-undo">Back</i>
                        </a></h3>
                </div>
                <div class="card-body">
                    <div class="col-10 ">
                        <form action="<?= site_url('/Login/change') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" value="<?= $nama; ?>" class="form-control" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" value="<?= $username; ?>" class="form-control" id="username" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nis" class="col-sm-2 col-form-label">Nis</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nis" value="<?= $nis; ?>" class="form-control" id="nis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelas" class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kelas" value="<?= $kelas; ?>" class="form-control" id="kelas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"><b>Picture</b> </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/gambar/' . $dt['foto']) ?>" class="img-thumbnail">
                                        </div>
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
                                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane">Submit</i></button>
                                <button type="Reset" class="btn btn-danger btn-flat"><i class="fa fa-undo">Reset</i></button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>