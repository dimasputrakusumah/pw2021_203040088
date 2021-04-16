<?php 
require 'functions.php';

if (isset($_POST["register"])){
	if (registrasi($_POST) >0) {
		echo "<script>
				alert('Registrasi Berhasil');
				document.location.href = 'login.php';
				</script>";
	}else{
		echo "<script>
				alert('Registrasi gagal');
				</script>";
	}
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
	background-color: grey;
}
      </style>
</head>
<body>
	<form action="" method="post" id="page-wrap">
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username">
          <label for="username"></label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">security</i>
          <input id="icon_telephone" type="password" class="validate" name="password">
          <label for="password"></label>
        </div>
      </div>
  </div>

	<button class="btn waves-effect waves-light" type="submit" name="register" style="background-color: blue;">REGISTRASI
    <i class="material-icons right">send</i>
  </button>
	
</form>

</body>
</html>