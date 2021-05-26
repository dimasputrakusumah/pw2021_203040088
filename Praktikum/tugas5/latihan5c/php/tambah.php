<?php 
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
</head>
<body>
	<h3>Add data Form Outfit</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for="img">picture :</label><br>
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
<button type="submit" name="tambah">Tambah Data!</button>
<button type="submit">
	<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>
</form>

</body>
</html>