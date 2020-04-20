<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cuisine Catering | Sign Up</title>
    <?php include("php/templates/head.php"); ?>

</head>
<body id="sign-up">
<?php include("php/templates/header.php"); ?>

<section id="header-section">
    <h1>Create an account</h1>
</section>

<div class="container">

    <form id="sign-up-form">
        <div>
            <div>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name">
            </div>
            <div>
                <label for="second-name">Second Name</label>
                <input type="text" id="second-name">
            </div>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email">
            <label for="email-confirm">Confirm Email</label>
            <input type="email" id="email-confirm">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password">
            <label for="password">Confirm Password</label>
            <input type="password" id="password-confirm">
        </div>

        <div id="tos">
            <input type="checkbox" id="tosAccept">
            <label for="tosAccept">I accept the <a href="https://youtu.be/dQw4w9WgXcQ">terms and conditions</a></label>
        </div>

        <input type="submit" value="Join">
        <p class="form-message"></p>

    </form>

</div>

<?php include("php/templates/footer.php"); ?>
<?php include("php/templates/scripts.php"); ?>

</body>
</html>