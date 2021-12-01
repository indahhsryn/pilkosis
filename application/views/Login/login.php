<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Login</title>

  </head>

  <?

  site_url('Login/style')

  ?>

  <body>

   <div class="container">

    <div class="row content">

        <div class="col-md-6">

            <img src="<?= base_url(); ?>assets/gambar/Logo2.png" width="300px"  class="img img-responsive">

        </div>

        <div class="col-md-6">

            <h3 class="signin-text mb-3 session">Form Log In</h3>

            <form action="<?= site_url('Login/login ') ?>" method="post">

                <div class="form-group">

                    <label for="username">Username</label>

                    <input type="text" name="username"  id="username" class="form-control" required>

                </div>

                <div class="form-group">

                    <label for="password">Password</label>

                    <input type="password" name="password" id="password" class="form-control" required>

                </div>

                <div>

                    <button type="submit" name="login" class="btn btn-class" value="">LOGIN</button>

                </div>

            </form>

        </div>

    </div>

   </div>

   

  </body>

</html>