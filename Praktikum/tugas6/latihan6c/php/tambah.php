<?php 
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';
if (isset($_POST['tambah'])){
	if (tambah($_POST) > 0){
		echo "<script>
					alert('Data berhasil ditambahkan!');
					document.location.href = 'admin.php';
					</script>";
	}else{
		echo "<script>
				alert('Data Gagal ditambahkan!');
				document.location.href = 'admin.php';
				</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
      	h3{
      		text-align: center;
      		color: white;
      	}
      	body{
      		background-image: url(../assets/img/background.png);
      	}
      	label{
      		color: white;
      	}
      </style>
</head>
<body>
	<h3>Add Data Form Outfit</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for="picture">Picture :</label><br>
			<input type="text" name="picture" required=""><br><br>
		</li>
		<li>
			<label for="name">Name :</label><br>
			<input type="text" name="name" id="name" required><br><br>
		</li>
		<li>
			<label for="description">Description :</label><br>
			<input type="text" name="description" id="description" required><br><br>
		</li>
		<li>
			<label for="price">Price :</label><br>
			<input type="text" name="price" id="price" required><br><br>
		</li>
		<li>
			<label for="category">Category :</label><br>
			<input type="text" name="category" id="category" required><br><br>
		</li>
<br>

<button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah Data!</button>
<button class="waves-effect waves-light btn" type="submit">
	<a href="../index.php" style="text-decoration: none; color: white;">Kembali</a>
</button>
	</ul>
</form>

</body>
</html>
