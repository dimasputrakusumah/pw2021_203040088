<?php 
// $mahasiswa = [
// 	["Dimas", "203040088", "dimas@gmail.com", "Teknik Informatika"],
// 	["putra", "203040030", "putra@gmail.com", "Teknik Informatika"]];

// array associative
// definisnya sama seperti array numerik kecuali
// keynya adalah string yang kita buat sendiri

$mahasiswa = [["gambar" => "2.png",
			  "nama" => "dimas",
			  "nrp" => "203040088",
			  "email" => "dimas@gmail.com",
			  "jurusan" => "Teknik Informatika"],

			  ["gambar" => "1.png",
			  "nama" => "dimas",
			  "nrp" => "203040088",
			  "email" => "dimas@gmail.com",
			  "jurusan" => "Teknik Informatika"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Daftar mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs) { ?>
		<ul>
			<li>
				<img src="img/<?php echo $mhs["gambar"];?>" alt="">
			</li>	
			<li>Nama : <?php echo $mhs["nama"];?></li>	
			<li>NRP : <?php echo $mhs["nrp"];?></li>	
			<li>Email : <?php echo $mhs["email"];?></li>	
			<li>Jurusan : <?php echo $mhs["jurusan"];?></li>	
		</ul>
	<?php } ?>
	
</body>
</html>