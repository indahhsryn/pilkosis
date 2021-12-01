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
        <?php
        $tampil = $this->db->get('tb_alamat');
        ?>
        <?php foreach ($tampil->result() as $tmpl) : ?>
            <h4>Alamat:</h4>
            <h5><?= $tmpl->alamat ?>, <?= $tmpl->kode_pos ?></h5>
            <h5>Telepon:  <?= $tmpl->telepon ?> </h5>
        <?php
        endforeach; ?>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2727448924893!2d109.66123031468628!3d-7.65379459448189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ab5e2a04f051f%3A0xa5f5fbab3f3ee77b!2sSMK%20Negeri%201%20Kebumen!5e0!3m2!1sid!2sid!4v1635047515612!5m2!1sid!2sid" width="795" height="485" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</div>