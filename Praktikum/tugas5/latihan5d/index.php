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
      <div class="slider">
            <ul class="slides">
              <li>
                <img src="assets/img/hoodiered.png">
                <div class="caption center-align">
                  <h3>Hoodie Red</h3>
                  <h5 class="light grey-text text-lighten-3">A hoodie is a sweatshirt with a hood. Hoodies often include gloves sewn on the bottom front, and dra</h5>
                </div>
              </li>
              <li>
                  <img src="assets/img/hoodieblack.png">
                  <div class="caption left-align">
                    <h3>Hoodie Black</h3>
                    <h5 class="light grey-text text-lighten-3">hoodie is a sweater that has a head cover. The word hoodie comes from English, which means hood or h</h5>
                  </div>
                </li>
                <li>
                    <img src="assets/img/crewneckgrey.png">
                    <div class="caption right-align">
                      <h3>Crewneck Grey</h3>
                      <h5 class="light grey-text text-lighten-3">Round neck or crew neck is the type of shirt that is easiest to find and is widely used. The charact</h5>
                    </div>
                  </li>
                  <li>
                      <img src="assets/img/crewneckblack.png">
                      <div class="caption center-align">
                        <h3>Crewneck Black</h3>
                        <h5 class="light grey-text text-lighten-3">Crew neck is a type of shirt or sweater that has a round neckline and no collar, often worn with ano</h5>
                      </div>
                    </li>
            </ul>
        </div>
  <h1>List Outfit</h1>
    <?php foreach ($outfit as $oft) : ?>
        <p class="nama"><div class="row">
    <div class="col s10 m5">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/<?= $oft['picture'];?>" alt="">
        </div>
        <div class="card-action">
          <a href="php/detail.php?id=<?= $oft['id'] ?>">
                <?= $oft["name"] ?>
            </a>
        </div>
      </div>
    </div>
  </div>
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