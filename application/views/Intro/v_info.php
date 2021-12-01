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
    <div class="card-body">
            <table class="table table-sm table-striped table-bordered" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Alamat Sekolah</th>
                        <th>Kode Pos</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $tampil = $this->db->get('tb_alamat');
                    $no = 1;
                    ?>
                    <?php foreach ($tampil->result() as $tmpl) : ?>
                        <tr>
                            <td><?= $no++ ?> </td>
                            <td><?= $tmpl->alamat ?> </td>
                            <td><?= $tmpl->kode_pos ?> </td>
                            <td><?= $tmpl->telepon ?> </td>
                            <td>
                                <form style="display:inline;" action="<?= site_url('/Landing/delet/' . $tmpl->id); ?>" method="post">
                                <input type="hidden" name="id" value="<?= $tmpl->id ?>">
                                    <button onclick="return confirm('Apakah yakin data akan dihapus?')" class="btn btn-flat btn-danger btn-xs">
                                        <i class="fa fa-trash"> Delete</i>
                                    </button>
                                    <a href="<?= site_url('/Landing/edit/' . $tmpl->id); ?> " class="btn btn-primary btn-xs">
                                            <i class="fas fa-edit">Update</i>
                                        </a>
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
                <form action="<?= site_url('Landing/save') ?>" method="post">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="alamat">Alamat Sekolah</label>
                                <div class="input-group date">
                                    <input type="text" name="alamat" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kdPos">Kode Pos</label>
                                <div class="input-group date">
                                    <input type="number" name="kdPos" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <div class="input-group date">
                                    <input type="number" name="telepon" class="form-control">
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