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
                <table class="table table-sm table-striped table-bordered" id="table1">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>FeedBack Aplikasi</th>
                            <th>Saran Aplikasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        ?>
                        <?php foreach ($dt->result() as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->kelas ?></td>
                                <td><?= $data->feedback ?></td>
                                <td><?= $data->saran ?></td>
                                <td class="text-center" width="160px" class="d-inline">
                                    <form style="display:inline;" action="<?= site_url('FeedBack/hapus/'. $data->id)?>" method="post">
                                        <input type="hidden" name="id" value="<?= $data->id?>">
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
        </div>
    </section>
</div>