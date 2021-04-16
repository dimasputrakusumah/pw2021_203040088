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
                      <li><a href="php/login.php" style="text-decoration: none; color: white;">Masuk sebagai admin</a></li>
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
                <img src="assets/img/jacketdenim.png">
                <div class="caption center-align">
                  <h3>Jacket Denim</h3>
                  <h5 class="light grey-text text-lighten-3">Denim jacket is one of a number of clothing items</h5>
                </div>
              </li>
              <li>
                  <img src="assets/img/denimpants.png">
                  <div class="caption left-align">
                    <h3>Denim Pants</h3>
                    <h5 class="light grey-text text-lighten-3">Jeans and Denim we can say are something different. Because Jeans are a product (pants), and Denim </h5>
                  </div>
                </li>
                <li>
                    <img src="assets/img/hoodiered.png">
                    <div class="caption right-align">
                      <h3>Hoodie Red</h3>
                      <h5 class="light grey-text text-lighten-3">A hoodie is a sweatshirt with a hood. Hoodies often include gloves sewn on the bottom front, and dra</h5>
                    </div>
                  </li>
                  <li>
                      <img src="assets/img/hoodieblack.png">
                      <div class="caption center-align">
                        <h3>Hoodie Black</h3>
                        <h5 class="light grey-text text-lighten-3">hoodie is a sweater that has a head cover. The word hoodie comes from English, which means hood or h</h5>
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
        <p class="name"><div class="row">
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