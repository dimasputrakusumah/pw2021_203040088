<?php 
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];

$oft = query("SELECT * FROM outfit WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('Data berhasil diubah!');
					document.location.href = 'admin.php';
					</script>";
	}else{
		echo "<script>
				alert('Data Gagal diubah!');
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
	<input type="hidden" name="id" id="id" value="<?= $oft['id'];?>">
	<ul>
		<li>
			<label for="picture">Picture :</label><br>
			<input type="text" name="picture" required value="<?= $oft['picture'];?>"><br><br>
		</li>
		<li>
			<label for="name">Name :</label><br>
			<input type="text" name="name" id="name" required value="<?= $oft['name'];?>"><br><br>
		</li>
		<li>
			<label for="description">Description :</label><br>
			<input type="text" name="description" id="description" required value="<?= $oft['description'];?>"><br><br>
		</li>
		<li>
			<label for="price">Price :</label><br>
			<input type="text" name="price" id="price" required value="<?= $oft['price'];?>"><br><br>
		</li>
		<li>
			<label for="category">Category :</label><br>
			<input type="text" name="category" id="category" required value="<?= $oft['category'];?>"><br><br>
		</li>
<br>
<button type="submit" name="ubah">Ubah Data!</button>
<button type="submit">
	<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>
</form>

</body>
</html>