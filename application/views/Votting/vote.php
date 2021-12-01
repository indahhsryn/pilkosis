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
        <div class="row">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-body">
                        <div class="px-2 bg-light">
                            <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                                <h3> <b> PILIHLAH PEMIMPIN SESUAI HATI NURANI ANDA </b></h3>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mt-6">
                <?php foreach ($datacalon as $dtcln) : ?>
                    <div class="col-md-6"><br><br>
                        <div class="card">
                            <div class="card-body">
                                <img src="<?= base_url('foto/calon/' . $dtcln->foto) ?>" style="width: 100%;" alt="...">
                                <h4 style="margin: 0"> <b> <?= $dtcln->nama_paslon ?></b></h4>
                                <p class=""><?= $dtcln->calon_ketua ?></p>
                                <p class=""><?= $dtcln->calon_wakil ?></p><br>
                                <a href="<?= base_url('/Votting/vote/' . $dtcln->no) ?>" class="btn btn-success btn-flat ">
                                    <i class="fa  fa-check"> Vote </i> </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>
</div>