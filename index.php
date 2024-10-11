
<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Xplore Indonesia Tanpa Batas| Home :: W3layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
  </head>
  <body id="home">

<?php
include "header.php";
?>
  <!-- /main-slider -->

  <?php
if(isset($_GET['home'])){
	$isi = $_GET['home'].".php";
	include $isi;
}else{
	include "home.php";
}

?>

<?php
include "footer.php";
?>





</body>

</html>
