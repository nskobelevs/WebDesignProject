<?php
error_reporting(E_ALL);

if(isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $nameIsEmpty = empty($name);
    $emailIsEmpty = empty($email);
    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    $messageIsShort = strlen($message) < 20;
    $messageTooLong = strlen($message) > 1000;

    if ($nameIsEmpty || $emailIsEmpty) {
        echo "<span class='form-error-message'>Please don't leave any fields blank</span>";
    } elseif (!$emailIsValid) {
        echo "<span class='form-error-message'>Please enter a valid e-mail address so we can get back to you</span>";
    } elseif ($messageIsShort) {
        echo "<span class='form-error-message'>Please add more info to your message</span>";
    } else {

        $success = true;

        include_once("config.php");

        $connection = new mysqli("localhost", $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

        if ($connection->connect_errno) {
            $success = false;
        }

        $query = "INSERT INTO " . $DB_TABLE_CONTACT . " (name, email, message) VALUES(?, ?, ?);";
        $stmt = $connection->prepare($query);

        $success = $stmt->bind_param("sss", $name, $email, $message);

        if ($success) {
            $success = $stmt->execute();
        }

        $connection->close();

        if ($success) {
            echo "<span class='form-success-message'>Form sent successfully!</span>";
        } else {
            echo "<span class='form-error-message'>Unfortunately there was an error on our server. Please try again later.</span>";
            die();
        }

    }
}
?>

<script>
    var fields = $("#name, #email, #message")
    fields.removeClass("invalid-input");

    var nameError = "<?php echo $nameIsEmpty; ?>";
    var emailError = "<?php echo ($emailIsEmpty || !$emailIsValid) ?>";
    var messageError = "<?php echo $messageIsShort ?>";

    var success = "<?php echo $success; ?>";

    if (nameError) {
        $("#name")[0].classList.add("invalid-input");
    }
    if (emailError) {
        $("#email")[0].classList.add("invalid-input");
    }
    if (messageError) {
        $("#message")[0].classList.add("invalid-input");
    }

    if (success) {
        fields.val("");
    }


</script>