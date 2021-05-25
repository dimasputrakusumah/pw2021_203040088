<?php 
session_start();
require 'functions.php';
// cek cookie
if (isset($_COOKIE['username'])&&isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];

	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);

	if ($hash === hash ('sha256', $row['id'], false)) {
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
		exit;
	}
}

if (isset($_SESSION['username'])){
	header("Location: admin.php");
	exit;
}

// untuk Login

if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(),"SELECT * FROM user WHERE username = '$username'");

	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);
			// kalau remember dicentang
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time()+ 60 * 60 *24);
				$hash =hash('sha256', $row['id']);
				setcookie('hash', $hash, time() + 60 * 60 * 24);
			}
		}
		if (hash('sha256', $row['id']) == $_SESSION['hash']) {
			header("Location: admin.php");
			die;
		}
		header("Location: ../index.php");
		die;
	}
	$error = true;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
      	#page-wrap{
	width: 900px;
	margin-top: 0px;
	margin-bottom: 0px;
	margin-left: auto;
	margin-right: auto;
	padding-top: 20px;
	padding-right: 20px;
	padding-left: 20px;
	padding-bottom: 20px;
	background-color: #fff;
	border-radius: 50px;
}
body{
	background-color: white;
}
      </style>
</head>
<body>
	<form action="" method="post" id="page-wrap">
	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username atau Password salah</p>
	<?php endif; ?>
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input id="icon_prefix" type="text" class="validate" name="username">
          <label for="username"></label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input  id="icon_prefix" type="password"  name="password">
          <label for="password"></label>
        </div>
      </div>
  </div>

	<div class="remember">
		 <label for="remember">
        <input type="checkbox" class="filled-in" name="remember" />
        <span>Remember me</span>
      </label>
	</div>
	<br><br>
	<button class="btn waves-effect waves-light" type="submit" name="submit" style="background-color: blue;">Login
    <i class="material-icons right">send</i>
  </button>

  <div class="registrasi">
  	<p>Belum Punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
  </div>
	
</form>

</body>
</html>

