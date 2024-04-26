<?php
session_start();
$koneksi=new mysqli("localhost" , "root" , "" , "adi");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Daftar Akun</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
<BODY STYLE="BACKGROUND-IMAGE:URL(sg.JPG)">
<div class="login-box">
  <div class="login-logo">
    <a href="amdin/login.php"><font face ="times new roman"><b><h4>Eunoia SHOP</h4></b></font></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Daftarkan Username dan Password Anda</p>

	<form role="form" action="prosesdaftar.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="user">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Nama" name="nama">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
        </div>
		<br>
			Level : <select class="form-control" name="level" required>
			<option value="" > Pilih Level </option>
			<option value="admin" > Admin </option>
			<option value="super admin"> Super Admin </option>
			</select>
		</br>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Daftar</button>
        </div>
		<h5>Sudah punya akun? <span><a href="login.php"> Login disini </span> </h5>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
</body>
</html>
