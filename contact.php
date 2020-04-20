<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <?php include_once("php/templates/head.php"); ?>
    <style>
        #header-section {
            background: url("img/burger.jpg") no-repeat center;
            background-size: 100%;
        }
    </style>
</head>
<body id="contact">
<?php include_once("php/templates/outdated_browser.php"); ?>
<?php include_once("php/templates/header.php"); ?>
<main>
    <section id="header-section">
        <h1>Contact</h1>
    </section>
    <div class="container">
        <form id="contact-form" action="php/message.php" method="post">
            <div>
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="John Doe">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="John.Doe@gmail.com">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" rows="10" placeholder="Hi, I was wondering if...."></textarea>
            </div>
            <input type="submit" id="submit" value="Send message">
            <p class="form-message"></p>
        </form>
    </div>
</main>

<?php include_once("php/templates/footer.php"); ?>
<?php include_once("php/templates/scripts.php"); ?>
</body>
</html>