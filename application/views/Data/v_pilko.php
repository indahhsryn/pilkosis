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
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-ban"><?= $this->session->flashdata('warning'); ?></i>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Mulai Pilkosis</th>
                        <th>Tanggal Berakhir Pilkosis</th>
                        <th>Acttion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tampil = $this->db->get('tb_pilkosis');
                    $no = 1;
                    ?>
                    <?php foreach ($tampil->result() as $tmpl) : ?>
                        <tr>
                            <td><?= $no++ ?> </td>
                            <td><?= $tmpl->tanggal_mulai ?> </td>
                            <td><?= $tmpl->tanggal_akhir ?> </td>
                            <td>
                                <form style="display:inline;" action="<?= site_url('/Pilkosis/delet/' . $tmpl->id); ?>" method="post">
                                <input type="hidden" name="id" value="<?= $tmpl->id ?>">
                                    <button onclick="return confirm('Apakah yakin data akan dihapus?')" class="btn btn-flat btn-danger">
                                        <i class="fa fa-trash"> Delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="<?= site_url('Pilkosis/setting') ?>" method="post">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="buka">Tanggal Mulai Pilkosis</label>
                                <div class="input-group date">
                                    <input type="date" name="tglmulai" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="buka">Tanggal Berakhir Pilkosis</label>
                                <div class="input-group date">
                                    <input type="date" name="tgltutup" class="form-control">
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
    </section>
</div>