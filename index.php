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
    <span id="get-started-button">
      <a href="users/sign-up">Pick your cuisine</a>
    </span>
    <video class="large-screen" oncontextmenu="return false;" autoplay loop>
        <source src="videos/cooking_vegetables.mp4" type="video/mp4">
    </video>
</div>

<div class="container">
    <section>
        <i class="fas fa-utensils fa-7x"></i>
        <section class="footer-text">
            <h5>Pick you're cuisine</h5>
            <p>Pick you're preferred cuisine from our wide variety of choice availabe</p>
        </section>
    </section>
    <section>
        <i class="fas fa-users fa-7x"></i>
        <section class="footer-text">
            <h5>Pick you're group size</h5>
            <p>We cater events from groups as low as 5 people to 500</p>
        </section>
    </section>
    <section>
        <i class="fas fa-couch fa-7x"></i>
        <section class="footer-text">
            <h5>Enjoy your food with no hassle</h5>
            <p>Once you place your order, you can rest and leave everything up to us!</p>
        </section>
    </section>
</div>

<?php include("php/templates/footer.php") ?>
<?php include_once("php/templates/scripts.php"); ?>
</body>

</html>
