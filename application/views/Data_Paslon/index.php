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
            <i class="icon fas fa-ban"><?= $this->session->flashdata('message'); ?></i>
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
                            <!-- <a id="detail" class="btn btn-primary " data-toggle="modal" data-target="#modal-detail" data-no=<?= $dtcln->no; ?> data-nama_paslon=<?= $dtcln->nama_paslon; ?> data-visi=<?= $dtcln->visi; ?> data-misi=<?= $dtcln->misi; ?> data-proker=<?= $dtcln->proker; ?>>
                                <i class="fa fa-eye"> Lihat Detail</i> </a> -->
                            <a href="<?= base_url('/Data_Paslon/detail/'  . $dtcln->no) ?>" class="btn btn-success btn-flat ">
                                <i class="fa  fa-eye"> Lihat Detail </i> </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
<div class="modal fade" id="modal-detail" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th>Foto</th>
                            <td><span id="foto"> <img src="<?= base_url('foto/calon/' . $dtcln->foto) ?>" width="250x"> </span></td>
                        </tr>
                        <tr>
                            <th>No Paslon</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Nama Paslon</th>
                            <td><?= $dtcln->nama_paslon; ?></td>
                        </tr>
                        <tr>
                            <th>Visi</th>
                            <td><?= $dtcln->visi; ?></td>
                        </tr>
                        <tr>
                            <th>Misi</th>
                            <td><?= $dtcln->misi; ?></td>
                        </tr>
                        <tr>
                            <th>Proker</th>
                            <td><?= $dtcln->proker ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', '#detail', function() {
            var no = $(this).data('no');
            var nama_paslon = $(this).data('nama_paslon');
            var visi = $(this).data('visi');
            var misi = $(this).data('misi');
            var proker = $(this).data('proker');
            $('#no').text(no);
            $('#nama_paslon').text(nama_paslon);
            $('#visi').text(visi);
            $('#misi').text(misi);
            $('#proker').text(proker);
        })
    })
</script>