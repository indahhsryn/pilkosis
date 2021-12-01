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
        <div class="card direct-chat direct-chat-primary">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title"> <b>Chat</b> </h3><br><br>
                <?php
                $pesan = $this->db->get('tb_chat');
                // $this->load->model('M_Chat');
                // $pesan = $this->M_Chat->chat();
                ?>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <?php foreach ($pesan->result() as $psn) : ?>
                            <div class="">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left"><?= $psn->nama; ?></span>
                                    <span class="direct-chat-timestamp float-right"><?= $psn->waktu; ?></span>
                                </div>
                                <div class="direct-chat-text bg-blue">
                                    <?= $psn->message; ?>
                                </div>
                            </div>
                        <?php
                        endforeach; ?>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="<?= site_url('/Chat/simpan') ?>" method="post">
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Your Name..." class="form-control">
                            <input type="text" name="message" placeholder="Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" name="send" class="btn btn-primary">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
    </section>
</div>