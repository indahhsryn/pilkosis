<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilkosis | <?= $judul; ?></title>
    <link href="<?= base_url('assets/gambar/Logo.png')?>" rel="icon" type="image/png">
</head>

<body>
    <?php
     $dataa = $this->db->get('tb_calon')->result();
    ?>
    <div>
        <li>
            <div class="content">
                <h3> <?= $dt['nama_paslon'] ?></h3>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <div class="row content1">
                        <div class="col-lg-5 col-md-4 col-sm-3">
                            <img src=<?= base_url('foto/calon/' . $dt['foto']) ?> width="50%"  alt="">
                        </div>
                        <br><br>
                        <ul>
                            <li>
                                <div class="row content">
                                    <div class="col-lg-6 content2">
                                        <h2>Visi</h2>
                                        <h4> <?= $dt['visi'] ?></h4>
                                        <h4></h4>
                                        <h4></h4>
                                        <h4></h4>
                                    </div>
                                    <div class="col-lg-6 content2">
                                        <h2>Misi</h2>
                                        <h4> <?= $dt['misi'] ?></h4>
                                        <h4></h4>
                                        <h4></h4>
                                        <h4></h4>
                                    </div>
                                </div>
                                <div class="content2">
                                    <h2>Proker</h2>
                                    <h4>  <?= $dt['proker'] ?></h4>
                                    <h4></h4>
                                    <h4></h4>
                                    <h4></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    </div>
</body>
</html>