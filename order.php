<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cuisine Catering | Chose your cuisine</title>
    <?php include("php/templates/head.php"); ?>

</head>
<body id="order">
<?php include("php/templates/header.php"); ?>
<main>
    <section id="header-section">
        <h1>Order</h1>
    </section>
    <section class="progress">
            <span id="number-1" class="current fa-stack number-icon">
                <span class="fa fa-circle-o fa-stack-2x"></span>
                <strong class="fa-stack-1x">1</strong>
            </span>
        <div class="line"></div>
        <span id="number-2" class="fa-stack number-icon">
                <span class="fa fa-circle-o fa-stack-2x"></span>
                <strong class="fa-stack-1x">2</strong>
            </span>
        <div class="line"></div>
        <span id="number-3" class="fa-stack number-icon">
                <span class="fa fa-circle-o fa-stack-2x"></span>
                <strong class="fa-stack-1x">3</strong>
            </span>
    </section>
    <section class="tabs">
        <section id="tab-1" class="tab current-tab">
            <h2>Pick your cuisine</h2>
            <div class="tab-content">
                <div id="american-cuisine" class="cuisine-image">
                    <h3>American</h3>
                    <i class="hidden fas fa-check"></i>
                </div>
                <div id="chinese-cuisine" class="cuisine-image">
                    <h3>Chinese</h3>
                    <i class="hidden fas fa-check"></i>
                </div>
                <div id="italian-cuisine" class="cuisine-image">
                    <h3>Italian</h3>
                    <i class="hidden fas fa-check"></i>
                </div>
                <div id="japanese-cuisine" class="cuisine-image">
                    <h3>Japanese</h3>
                    <i class="hidden fas fa-check"></i>
                </div>
            </div>
        </section>
        <section id="tab-2" class="tab">
            <h2>Pick your group size</h2>
            <div class="tab-contents">
                <form>
                    <label for="capacity">Number of people</label>
                    <input id="capacity" type="number" min="10" max="500"/>
                </form>
            </div>
        </section>
        <section id="tab-3" class="tab">
            <h2>Confirmation</h2>
            <p>Thank you for your order!</p>
        </section>
    </section>
    <span id="next-button" class="button">Next</span>
</main>

<?php include("php/templates/footer.php"); ?>
<?php include("php/templates/scripts.php"); ?>
</body>
</html>