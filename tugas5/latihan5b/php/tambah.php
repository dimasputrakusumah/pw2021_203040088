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
	<h3>Add Data Form Outfit</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for="name">Name Outfit :</label><br>
			<input type="text" name="nama" id="nama" required><br><br>
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
			<label for="category">Category:</label><br>
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