<?php
    require 'php/functions.php';

    $outfit = query("SELECT * FROM outfit")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Outfit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="page-wrap">
<div class="picture">
    <h1>Outfit</h1>
    <?php
        $i = 1;
    ?>
<table border="2" cellspacing="1" cellpadding="20">
    <tr>
        <td><h3>No</h3></td>
        <td><h3>Picture</h3></td>
        <td><h3>Name</h3></h3></td>
        <td><h3>Description</h3></h3></td>
        <td><h3>Price</h3></td>
        <td><h3>Category</h3></td>
    </tr>

        <?php foreach ($outfit as $oft) : ?>
            <tr>
                <td><?= $i;?></td>
                
                <td class="kotak"><img src="assets/img/<?=$oft ["picture"]?>"></td>
                <td><?= $oft ["name"]; ?></td>
                <td><?= $oft ["description"]; ?></td>
                <td><?= $oft ["price"]; ?></td>
                <td><?= $oft ["category"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>
    </div>
</div>
</body>
</html>