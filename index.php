<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <?php include_once("php/templates/head.php"); ?>
</head>

<body>
  <?php include_once("php/templates/outdated_browser.php"); ?>
  <?php include_once("php/templates/header.php"); ?>

  <div id="showcase">
    <img class="small-screen" src="img/wok.jpg" alt="A wok on a hob">
    <span id="get-started-button">
      <a href="users/sign-up">Pick your cuisine</a>
    </span>
    <video class="large-screen" oncontextmenu="return false;" autoplay loop>
      <source src="videos/cooking_vegetables.mp4" type="video/mp4">
    </video>
  </div>

  <?php include_once("php/templates/scripts.php"); ?>
</body>

</html>
