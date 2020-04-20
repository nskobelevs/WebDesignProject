<?php

var_dump($_POST);


if (isset($_POST["submit"])) {

    var_dump($_POST);


    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $email = $_POST["email"];
    $email_confirm = $_POST["email_confirm"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password"];
    $tosAccept = $_POST["tosAccept"];

}

