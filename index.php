<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Cuisine Catering | Home Page</title>
    <?php include_once("php/templates/head.php"); ?>
</head>

<body>
<?php include_once("php/templates/outdated_browser.php"); ?>
<?php include_once("php/templates/header.php"); ?>

<div id="showcase">
    <img class="small-screen" src="img/wok.jpg" alt="A wok on a hob">
    <video class="large-screen" oncontextmenu="return false;" autoplay loop>
        <source src="videos/cooking_vegetables.mp4" type="video/mp4">
    </video>
</div>

<span id="top-button" class="get-started-button">
      <a href="users/sign-up">Pick your cuisine</a>
</span>

<div class="parallax-container">
    <section class="container">
        <i class="fas fa-utensils fa-7x"></i>
        <section class="section-text">
            <h3 class="title-cards">Pick your cuisine</h3>
            <p>Pick your preferred cuisine from our wide variety of available choices</p>
        </section>
    </section>

    <div class="parallax" id="image1"></div>

    <section class="container">
        <i class="fas fa-users fa-7x"></i>
        <section class="section-text">
            <h3 class="title-cards">Pick your group size</h3>
            <p>We cater events from groups as low as 5 people, up to gatherings of 500</p>
        </section>
    </section>

    <div class="parallax" id="image2"></div>

    <section class="container">
        <i class="fas fa-couch fa-7x"></i>
        <section class="section-text">
            <h3 class="title-cards">Enjoy your food with no hassle</h3>
            <p>Once you place your order, you can rest and leave everything up to us!</p>
        </section>
    </section>
</div>

<?php include("php/templates/footer.php") ?>
<?php include_once("php/templates/scripts.php"); ?>
</body>

</html>
