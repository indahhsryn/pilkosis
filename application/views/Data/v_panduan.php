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
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row fs-5">
                        <div class="col-md-5">
                            <h3>Cara Mengikuti Votting</h3><br>
                            <h6>
                                Tunggu Informasi Resmi dari Osis untuk menyesuaikan Jadwal Pemilihan Ketua Osis
                            </h6><br>
                            <h6 class="fas fa-check"> Login</h6>
                            <h6 class="fas fa-check"> Melakukan Votting Di Waktu Yang Telah Ditentukan </h6>
                            <h6 class="fas fa-check"> Baca Dan Cermati Data Tiap Kandidat <a href="<?= site_url('/Data_Paslon') ?>">disini</a> </h6>
                            <h6 class="fas fa-check"> Silahkan Melakukan Votting<a href="<?= site_url('/Votting/pilih') ?>"> disini</a> </h6>
                            <h6 class="fas fa-check"> Jika Sudah Melakukan Votting , Silahkan Berikan FeedBack Aplikasi Ini </h6>
                            <h6 class="fas fa-check"> Pastikan Anda memilih Sesuai Dengan Pilihan Anda </h6>
                            <h6 class="fas fa-check"> Jika Ada Yang Ditanyakan Silahkan <a href="<?= site_url('Help/chat') ?>"> Chat </a> Admin </h6>
                            <h6 class="fas fa-check"> Anda Dapat Menikmati fitur fitur lain di aplikasi pilkosis ini </h6>
                            <h6 class="fas fa-check"> Selesai </h6>
                        </div>
                        <div class="col-md-6">
                            <img src="<?= base_url() ?>/assets/gambar/vote.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>