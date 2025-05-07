<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url('assets')?>/logo_pemkomedan.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Administrator</title>
    <meta name="author" content="">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/dist/css/AdminLTE.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/iCheck/square/blue.css">
    <style media="screen">
      .loginform
      {
        border-radius: 20px;
      }
    </style>
  </head>
  <body class="hold-transition login-page" style="background-image: url('<?php echo base_url('assets/panel/')?>assets/img/bg3.jpg');">
    <div class="login-box" style="margin-left:auto;margin-right:auto;">
      <div class="login-box-body loginform">
        <center><img width="300px" style="text-align:center" class="img-thumbnail" src="<?php echo base_url('assets/')?>logo.png"></center><br>
        <center>
          <!-- <?php foreach ($data_desa as $key): ?>
            <?php $nama_desa = $key->nama; ?>
            <marquee directori="left">Selamat datang di Desa <?php echo "".$key->nama.", Kecamatan ".$key->kecamatan.", Kabupaten ".$key->kabupaten.""; ?> Tahun <?php echo date("Y"); ?></marquee>
          <?php endforeach; ?> -->
        </center>
        <?php echo $this->session->flashdata('notif'); ?>
         <form class="" action="<?php echo base_url('panel/auth/login')?>" method="post">
            <div class="form-group has-feedback">
               <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus autocomplete="off">
            </div>
            <div class="form-group has-feedback">
               <input type="password" name="password"  id="password" class="form-control" placeholder="Password"  autocomplete="off">
            </div>
         <button type="submit" name="submit" class="btn btn-success btn-block btn-lg" >Login</button>
         </form>
        <h6 class="text-center"><b>Powered by DPMPTSP Kota Medan</b></h6>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </body>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/panel/')?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/panel/')?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/panel/')?>assets/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
