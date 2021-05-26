<?php
    $conn = mysqli_connect("localhost", "root","") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_tubes_203040088") or die ("database salah");
    $result = mysqli_query($conn, "SELECT * FROM  outfit;") 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfit</title>
    <style>
        picture{
            width: 200px;
        }
    </style>
</head>
<body>
<div class="picture">
    <?php
        $i = 1;
    ?>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <td><h3>No</h3></td>
        <td><h3>Picture</h3></td>
        <td><h3>Name</h3></h3></td>
        <td><h3>Description</h3></h3></td>
        <td><h3>Price</h3></td>
        <td><h3>Category</h3></td>
    </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i;?></td>
                
                <td><img src="assets/img/<?=$row ["picture"]?>"></td>
                <td><?= $row ["name"]; ?></td>
                <td><?= $row ["description"]; ?></td>
                <td><?= $row ["price"]; ?></td>
                <td><?= $row ["category"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>
    </div>
</body>
</html>