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
        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('/FeedBack/simpan'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Komentar Tentang Aplikasi Pilkosis </label>
                        <textarea name="feedback" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="saran">Saran Perkembangan Aplikasi Pilkosis</label>
                        <textarea name="saran" class="form-control" required></textarea>
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