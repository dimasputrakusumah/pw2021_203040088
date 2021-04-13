<?php 
function koneksi() {
	$conn = mysqli_connect("localhost","root","")or die ("koneksi ke DB gagal");
	mysqli_select_db($conn,"pw_tubes_203040088")or die ("Database salah!");

	return $conn;
}

function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

return $rows;
}
function tambah($data)
{
	$conn = koneksi();

	$name = htmlspecialchars($data['name']);
	$description = htmlspecialchars($data['description']);
	$price = htmlspecialchars($data['price']);
	$category = htmlspecialchars($data['category']);

	$query = "INSERT INTO outfit
					VALUES
					(null,'$picture','$name','$description','$price','$category')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>
