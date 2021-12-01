<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('/Help'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?= site_url('/Help'); ?>"><?= $judul; ?></a></li>
        </ol>
        <!-- <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    </section>
    <br>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <?php foreach ($chat as $pesan) {
                        echo " 
                    <span> <b>$pesan->nama</b>  </span>
                    <span> $pesan->pesan </span>
                    ";
                    } ?>
                    <div id="chat"></div>
                    <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="your name" required>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="pesan" id="pesan" class="form-control" placeholder="your message" required>
                    </div><br>
                    <div class="form-group">
                        <input type="button" value="Send" class="btn btn-primary btn-block">
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilkosis | <?= $judul; ?></title>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <?php foreach ($chat as $pesan) {
                    echo " 
                    <span> <b>$pesan->nama</b>  </span>
                    <span> $pesan->pesan </span>
                    ";
                } ?>
                <div id="chat"></div>
                <div class="form-group">
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="your name" required>
                </div><br>
                <div class="form-group">
                    <input type="text" name="pesan" id="pesan" class="form-control" placeholder="your message" required>
                </div><br>
                <div class="form-group">
                    <input type="button" value="Send" class="btn btn-primary btn-block">
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->