<?php include"../koneksi.php"; ?>

<?php
  if(!empty($_SESSION['akses'])){
    header('location:'.$base_url.'/pages/dashboard');
  }else{}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-person form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="Login">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <?php
      if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $get_akun = mysqli_query($koneksi,"SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
        $r_akun = mysqli_fetch_array($get_akun);
        $cek_akun = mysqli_num_rows($get_akun);

        $akses = $r_akun['akses'];

        if($cek_akun > 0){
          header('location:'.$base_url.'/pages/dashboard');
          session_start();
          $_SESSION['akses'] = $akses;
        }else{
          header('location:'.$base_url.'/pages/login');
        }
      }
    ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo $base_url; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $base_url; ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo $base_url; ?>/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
