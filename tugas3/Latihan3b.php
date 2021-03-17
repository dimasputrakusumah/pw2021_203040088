<?php 
$nama_pemain = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan3b</title>
</head>
<body>

	<?php echo "Daftar Pemain Bola Terkenal";?>
	<ol>
	<?php foreach ($nama_pemain as $pemain_bola) { ?>	
	<li><?php echo "$pemain_bola";?></li>	
	<?php } ?> 
	</ol>

	<?php echo "Daftar Pemain Bola Terkenal Baru";
	$nama_pemain[] = "Luca Modric";
	$nama_pemain[] = "Sadio Mane";

	sort($nama_pemain);?>
	<ol>
	<?php foreach ($nama_pemain as $pemain_bola) { ?>	
	    <li><?php echo "$pemain_bola";?></li>	
	<?php } 
    ?>
	</ol>

</body>
</html>
