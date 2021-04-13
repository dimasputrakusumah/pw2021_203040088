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
                <img src="assets/img/coachjacketred.png">
                <div class="caption center-align">
                  <h3>Coach Jacket Red</h3>
                  <h5 class="light grey-text text-lighten-3">is one type of jacket that is on the rise among children today, the cool name of this jacket is the </h5>
                </div>
              </li>
              <li>
                  <img src="assets/img/coachjacketblack.png">
                  <div class="caption left-align">
                    <h3>Coach Jacket Black</h3>
                    <h5 class="light grey-text text-lighten-3">A coach jacket has a history of its own in sports. A style that develops and gets the most followe</h5>
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