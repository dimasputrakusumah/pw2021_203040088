<?php  
$nama_pemain = ["Cristiano Ronaldo" => "Juventus",
		        "Lionel Messi" => "Barcelona",
		        "Luca Modric" => "Real Madrid",
		        "Mohammad Salah" => "Liverpool",
		        "Neymar Jr" => "Paris Saint Germain",
		        "Sadio Mane" => "Liverpool",
		        "Zlatan Ibrahimovic" => "Ac Milan"];
?>

<!DOCTYPE html>

<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan3c</title>
    </head>
<body>

	<?php echo "Daftar pemain bola terkenal dan clubnya"; ?>
	<table>
	<?php foreach ($nama_pemain as $pemain_bola => $tim_bola) { ?>
		<tr>
		<td><?php echo "$pemain_bola "; ?></td>
		<td><?php echo ": $tim_bola"; ?></td>
		</tr>
	<?php } ?>
    
	</table>
</body>
</html>