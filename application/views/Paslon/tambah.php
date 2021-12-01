
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
                    <div class="col-10">
                    <form role="form" action="<?= site_url('/Paslon/simpan') ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">No Paslon</label>
                                <input type="number" name="no" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Paslon</label>
                                <input type="text" name="nama" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="ketua">Calon Ketua</label>
                                <input type="text" name="ketua" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="wakil">Calon Wakil Ketua</label>
                                <input type="text" name="wakil" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea name="visi" id="visi" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea name="misi" id="misi" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="proker">Program Kerja</label>
                                <textarea name="proker" id="proker" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foro">Upload Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" required>
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