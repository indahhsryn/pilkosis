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
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"> </div> -->
        <div class="card">
            <div class="card-header" style="text-align: right;">
                <h3 class="pull-right"><a href="<?= site_url('/Paslon/tambah'); ?> " class="btn btn-primary btn-flat">
                        <i class="fa fa-users">Add Data</i>
                    </a></h3>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered" id="table1">
                    <thead>
                        <tr>
                            <th>No Paslon</th>
                            <th>Nama Paslon</th>
                            <th>Visi</th>
                            <th> Misi</th>
                            <th>Progam kerja</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($row->result() as $data) : ?>
                            <tr>
                                <td><?= $data->no ?></td>
                                <td><?= $data->nama_paslon ?></td>
                                <td><?= $data->visi ?></td>
                                <td><?= $data->misi ?></td>
                                <td><?= $data->proker ?></td>
                                <td>
                                    <?php if ($data->foto != null) { ?>
                                        <img src="<?= base_url('foto/calon/' . $data->foto) ?>" style="width:100px">
                                    <?php } ?>
                                </td>
                                <td class="text-center" width="160px" class="d-inline">
                                    <form style="display:inline;" action="<?= site_url('/Paslon/delet/' . $data->id); ?>" method="post">
                                        <a href="<?= site_url('/Paslon/edit/' . $data->id); ?> " class="btn btn-primary btn-xs">
                                            <i class="fas fa-edit">Update</i>
                                        </a>
                                        <input type="hidden" name="no" value="<?= $data->no; ?>">
                                        <input type="hidden" name="img_paslon" value="<?= $data->foto ?>">
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