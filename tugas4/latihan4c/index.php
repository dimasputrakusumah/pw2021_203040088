<?php
    require 'php/functions.php';

    $outfit = query("SELECT * FROM outfit")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">
    <title>Outfit</title>
    
</head>
<body>
<div class="container">
    <h1>List Outfit</h1>
      <div class="slider">
            <ul class="slides">
              <li>
                <img src="assets/img/cargopants.png">
                <div class="caption center-align">
                  <h3>Cargo Pants</h3>
                  <h5 class="light grey-text text-lighten-3">Cargo pants are a type of trousers that have many pockets with pockets that stick out.</h5>
                </div>
              </li>
              <li>
                  <img src="assets/img/chinopants.png">
                  <div class="caption left-align">
                    <h3>Chino Pants</h3>
                    <h5 class="light grey-text text-lighten-3">are twill pants, 100% cotton. The origin of the word chino itself comes from the Chinese word, becau</h5>
                  </div>
                </li>
                <li>
                    <img src="assets/img/denimpants.png">
                    <div class="caption right-align">
                      <h3>Denim Pants</h3>
                      <h5 class="light grey-text text-lighten-3">Jeans and Denim we can say are something different. Because Jeans are a product (pants), and Denim i</h5>
                    </div>
                  </li>
                  <li>
                      <img src="assets/img/coachjackketred.png">
                      <div class="caption center-align">
                        <h3>Coach Jacket Red</h3>
                        <h5 class="light grey-text text-lighten-3">is one type of jacket that is on the rise among children today, the cool name of this jacket is the </h5>
                      </div>
                    </li>
            </ul>
        </div>
    <?php foreach ($outfit as $oft) : ?>
        <p class="name">
            <a href="php/detail.php?id=<?= $oft['id'] ?>">
                <?= $oft["name"] ?>
            </a>
        </p>
    <?php endforeach; ?>
</div>
 <script type="text/javascript" src="assets/js/materialize.min.js"></script>
 <script type="text/javascript">
     const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators : false,
          height : 500,
          transition : 600,
          interval : 3000
          
        })
 </script>

</body>
</html>