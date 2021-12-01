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
                <h3 class="pull-right"><a href=" " class="btn btn-primary btn-flat "  data-toggle="modal" data-target="#tbh-user">
                        <i class="fa fa-users">Add Data</i>
                    </a></h3>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $no = 1; ?>
                       <?php foreach ($user->result() as $dt) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dt->nama ?></td>
                                <td><?= $dt->username ?></td>
                                <td class="text-center" width="160px" class="d-inline">
                                    <form style="display:inline;" action="<?= site_url('User/hapus/'. $dt->id)?>" method="post">
                                        <a href="<?= site_url('User/edit/'. $dt->id)?> " class="btn btn-primary btn-xs">
                                            <i class="fas fa-edit">Update</i>
                                        </a>
                                        <input type="hidden" name="" value="<?= $dt->id ?>">
                                        <input type="hidden" name="id" value="<?= $dt->id?>">
                                        <button onclick="return confirm('Apakah yakin data akan dihapus?')" class="btn btn-flat btn-danger btn-xs">
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
    </section>
</div>



<!-- Modal -->
<div class="modal fade" id="tbh-user" tabindex="-1" role="dialog" aria-labelledby="tbh-adminLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tbh-adminLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('User/simpan') ?>
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" name="nis" id="nis" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" id="kelas" class="form-control">
        </div>
        <div class="form-group">
          <label for="foto">Foto</label>
          <input type="file" name="foto" id="foto" class="form-control">
        </div>
        <div class="form-group">
          <label for="is_active">Level</label>
          <select name="is_active" id="is_active" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>