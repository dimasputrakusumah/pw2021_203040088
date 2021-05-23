<?php 
// variabel scope / lingkup variabel
// $x = 10;

// function tampilX() {
// 	global $x;
// 	echo $x;
// }
// tampilX();
// echo "<br>";
// echo $x;

// superglobal
// variabel global milih php
// merupakan array associative
// $_GET["nama"] = "Dimas Putra";
// $_GET["nrp"] = "203040088";
// var_dump($_GET);

$mahasiswa = [["gambar" => "Dimas.jpg",
			  "nama" => "Dimas Putra",
			  "nrp" => "203040088",
			  "email" => "dimas@gmail.com",
			  "jurusan" => "Teknik Informatika"],

			  ["gambar" => "Putra.jpg",
			  "nama" => "Putra Kusumah",
			  "nrp" => "203040087",
			  "email" => "putra@gmail.com",
			  "jurusan" => "Teknik Informatika"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach ($mahasiswa as $mhs) { ?>
		<li><a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&nrp=<?php echo $mhs["nrp"]; ?>&email=<?php echo $mhs["email"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"];?></a>
		</li>
	<?php } ?>
	</ul>
</body>
</html>