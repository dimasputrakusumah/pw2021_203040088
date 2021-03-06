<?php
    require 'php/functions.php';



    if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $outfit = query ("SELECT * FROM outfit WHERE
            name LIKE '$keyword' OR
            description LIKE '$keyword' OR
            price LIKE '$keyword' OR
            category LIKE '$keyword' ");
} else {
  $outfit = query("SELECT * FROM outfit");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style2.css">
    <title>Outfit</title>
    
</head>
<body>
  <div class="navbar-fixed">
          <nav class="grey darken-3">
            <div class="container">
              <div class="nav-wrapper">
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="php/admin.php" style="text-decoration: none; color: white;">Masuk sebagai admin</a></li>
                    </ul>
                  </div>
                </div>
              </div> 
            </nav>
        </div>
<div id="page-wrap">
<form action="" method="get">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari</button>
      <br><br>
    </form>
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
                    <img src="assets/img/cargopants.png">
                    <div class="caption right-align">
                      <h3>Cargo Pants</h3>
                      <h5 class="light grey-text text-lighten-3">Cargo pants are a type of trousers that have many pockets with pockets that stick out.</h5>
                    </div>
                  </li>
                  <li>
                      <img src="assets/img/chinopants.png">
                      <div class="caption center-align">
                        <h3>Chino Pants</h3>
                        <h5 class="light grey-text text-lighten-3">are twill pants, 100% cotton. The origin of the word chino itself comes from the Chinese word, becau</h5>
                      </div>
                    </li>
            </ul>
        </div>
  <h1>List Outfit</h1>
  <?php if (empty($outfit)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
        <?php else : ?>
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
    <?php endif; ?>
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