<?php 
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];

$outfit = query("SELECT * FROM outfit WHERE id = $id")[0];
 ?>	
 <!DOCTYPE html>
 <html>
 <head>
 	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
      	#page-wrap{
	width: 900px;
	margin-top: 0px;
	margin-bottom: 0px;
	margin-left: auto;
	margin-right: auto;
	padding-top: 20px;
	padding-right: 20px;
	padding-left: 350px;
	padding-bottom: 20px;
	background-color: grey;
	border-radius: 50px;
	color: white;
}
.picture img {
	border: 1px solid #fff;
	position: relative;
	transition: all .3s ease;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
}
.picture:hover img {
	border: 5px solid #fff;
	box-shadow: 0 0 100px rgba(0, 0, 0, .5);
	-webkit-box-shadow: 0 0 100px rgba(0, 0, 0, .5);
	-moz-box-shadow: 0 0 100px rgba(0, 0, 0, .5);
	-ms-box-shadow: 0 0 100px rgba(0, 0, 0, .5);
	-o-box-shadow: 0 0 100px rgba(0, 0, 0, .5);
	z-index: 9999;
	transform: scale(1.3);
	-webkit-transform: scale(1.3);
	-moz-transform: scale(1.3);
	-ms-transform: scale(1.3);
	-o-transform: scale(1.3);
	filter: saturate(200%);	
}
      </style>
 	<title>Detail</title>
 </head>
 <body>
 	<div id="page-wrap">
 		<div class="picture">
 			<img src="../assets/img/<?= $outfit["picture"]; ?>" alt="">
 		</div>
 		<div class="keterangan">
 			<p><?= $outfit["name"]; ?></p>
 			<p><?= $outfit["description"]; ?></p>
 			<p><?= $outfit["price"]; ?></p>
 			<p><?= $outfit["category"]; ?></p>
 		</div>
 		<a class="waves-effect waves-light btn" href="../index.php">Kembali</a></a>
 	</div>
 </body>
 </html>