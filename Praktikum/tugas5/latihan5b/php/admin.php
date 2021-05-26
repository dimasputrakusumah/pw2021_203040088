<?php 
require 'functions.php'; 

$outfit = query("SELECT * FROM outfit");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
	<div id="page-wrap">
		<div class="add">
			<a href="tambah.php"><button>Tambah Data</button></a>
		</div>
	<table border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Option</th>
			<th>Picture</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Category</th>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ($outfit as $oft) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href=""><button>Ubah</button></a>
					<a href="hapus.php?id=<? $oft['id']?>" onclick="return confirm('Hapus Data??')" class="hapus">Hapus</a>
				</td>
				<td class="kotak"><img src="../assets/img/<?= $oft['picture'];?>" alt=""></td>
				<td><?= $oft['name']; ?></td>
				<td><?= $oft['description']; ?></td>
				<td><?= $oft['price']; ?></td>
				<td><?= $oft['category']; ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
	</table>
	</div>
</body>
</html>