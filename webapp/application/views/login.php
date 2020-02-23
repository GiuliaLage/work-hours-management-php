<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?= base_url('/assets/style/login.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello by - Controle de Horas</title>
</head>
<body>
  <div class="container">
    <div class="d-flex justify-content-center">
      <div class="card">
        <div class="d-flex justify-content-center">
          <h5 class="card-title">Bem Vindo ao HelloBye!</h5>
        </div>
        <div class="d-flex justify-content-center">
          <img class="logoe" src="<?= base_url('/assets/img/homem-de-negocios.png')?>">
        </div>
        <div class="d-flex justify-content-center">
          <span id="error" class="error-block"></i></span>
        </div>
        <div class="d-flex justify-content-center">
          <span id="loading" class="loading-block"></i></span>
        </div>
        <div class="d-flex justify-content-center form-box">
          <form id="login-formulario" action="<?= base_url('login/get_user')?>" method="post">
            <div class="form-group">
              <label for="emailinput">Email</label>
              <input name="email" type="email" class="form-control" id="emailinput" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-center">
              <div class="form-group">
                <button type="submit" class="btn button-login">Login</button>
              </div>
            </div>
            <div class="d-flex justify-content-center">
            <a class="btn button-cadastro" href="<?= base_url('cadastro/index')?>" role="button">Cadastre-se</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
<script src="<?= base_url('/assets/js/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('/assets/js/util.js') ?>"></script>
<script src="<?= base_url('/assets/js/login.js') ?>"></script>
</html>