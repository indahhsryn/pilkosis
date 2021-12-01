<section class="content">
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
                    <h3 class="pull-right"><a href="<?= site_url('/Login/profile'); ?> " class="btn btn-warning">
                            <i class="fa fa-undo">Back</i>
                        </a></h3>
                </div>
                <div class="card-body">
                    <div class="col-10 ">
                        <form action="<?= site_url('/Login/update_password') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" value="<?= $password ?>" class="form-control" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="newpasswrd">New Password</label>
                                    <input type="password" name="newpassword" id="newpassword" value="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="repeatpassword">Confirm New Password</label>
                                    <input type="password" name="repeatpassword" id="repeatpassword" value="" class="form-control" required>
                                </div> -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane">Submit</i></button>
                                    <button type="Reset" class="btn btn-danger btn-flat"><i class="fa fa-undo">Reset</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>