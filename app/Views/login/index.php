<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= WEBTITLE . " - Halaman Login"; ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary shadow">
      <div class="card-header text-center">
        <p class="h1">Halaman Login</p>
      </div>
      <div class="card-body">
        <div class="text-start">
          <?= view('Myth\Auth\Views\_message_block') ?>
        </div>
        <p class="login-box-msg">Silahkan login terlebih dauhulu</p>

        <form role="form" action="<?= url_to('login') ?>" method="POST">
          <?= csrf_field() ?>
          <div class="input-group mb-3">
            <input required placeholder="Masukan Username" value="<?= old('login'); ?>" name="login" type="text" id="username" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input required placeholder="Masukan Password" name="password" type="password" id="password" class="py-3 form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
</body>

</html>