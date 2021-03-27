<?php 
$outfit = [
    [
        "picture" => "cargopants.png",
        "name" => "Cargo Pants",
        "description" => "Cargo pants are a type of trousers that have many pockets with pockets that stick out.",
        "price" => "Rp.180.000",
        "category" => "Pants",
    ],
    [
        "picture" => "chinopants.png",
        "name" => "Chino Pants",
        "description" => "are twill pants, 100% cotton. The origin of the word chino itself comes from the Chinese word, because at first these pants made of twill were produced in China.",
        "price" => "Rp.170.000",
        "category" => "Pants",
    ],
    [
        "picture" => "denimpants.png",
        "name" => "Denim Pants Black",
        "description" => "Jeans and Denim we can say are something different. Because Jeans are a product (pants), and Denim is a material. So Jeans are a product (pants) made from Denim.",
        "price" => "Rp.190.000",
        "category" => "Pants",
    ],
    [
        "picture" => "coachjacketred.png",
        "name" => "Coach Jacket Red",
        "description" => "is one type of jacket that is on the rise among children today, the cool name of this jacket is the windbreaker.
         Many windbreaker models have large pockets on the inside or outside that allow you to protect your items from the weather or rain",
        "price" => "Rp.150.000",
        "category" => "Jacket",
    ],
    [
        "picture" => "coachjacketblack.png",
        "name" => "Coach Jacket Black",
        "description" => "A coach jacket has a history of its own in sports. 
         A style that develops and gets the most followers when the jacket is worn by several famous athletes and sports coaches",
        "price" => "Rp.160.000",
        "category" => "Jacket",
    ],
    [
        "picture" => "jacketdenim.png",
        "name" => "jacket Denim",
        "description" => "Denim jacket is one of a number of clothing items that make it unnecessary for the wearer to bother bringing out the masculinity and macho elements.",
        "price" => "Rp.250.000",
        "category" => "Jacket",
    ],
    [
        "picture" => "crewneckgrey.png",
        "name" => "Crewneck Grey",
        "description" => "Round neck or crew neck is the type of shirt that is easiest to find and is widely used. The characteristic of this type of shirt is that it has a round collar.",
        "price" => "Rp.140.000",
        "category" => "Crewneck",
    ],
    [
        "picture" => "crewneckblack.png",
        "name" => "Crewneck Black",
        "description" => "Crew neck is a type of shirt or sweater that has a round neckline and no collar, often worn with another layer.",
        "price" => "Rp.140.000",
        "category" => "Crewneck",
    ],
    [
        "picture" => "hoodiered.png",
        "name" => "Hoodie Red",
        "description" => "A hoodie is a sweatshirt with a hood. Hoodies often include gloves sewn on the bottom front, and drawstring to match the hood opening",
        "price" => "Rp.170.000",
        "category" => "Hoodie",
    ],
    [
        "picture" => "hoodieblack.png",
        "name" => "Hoodie Black",
        "description" => "hoodie is a sweater that has a head cover. The word hoodie comes from English, which means hood or head cover.
         In general, hoodies are designed to have pockets on the front and use a strap as a head covering.",
        "price" => "Rp.170.000",
        "category" => "Hoodie",
]
]
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
    <title>Outfit Styles</title>
    </head>
    <body>
        <div class="container mt-1 mb-5 text-left">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($outfit as $n => $b) : ?>
        <tr>
            <td><?= $n+1; ?></td>
            <td>
                <img src="img/<?= $b["picture"]; ?>">
            </td>
            <td><?= $b["name"]; ?></td>
            <td><?= $b["description"]; ?></td>
            <td><?= $b["price"]; ?></td>
            <td><?= $b["category"]; ?></td>
        </tr>    
        <?php endforeach; ?>
    </tbody>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
</body>
</table>
</html>
