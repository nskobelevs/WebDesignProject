

$(document).ready(function() {
    //Contact Page

    //Form validation and submission
    $("#contact-form").submit(function(event) {
        event.preventDefault();

        let name = $("#contact-form #name").val();
        let email = $("#contact-form #email").val();
        let message = $("#contact-form #message").val();
        let submit = $("#contact-form #submit").val();

        $(".form-message").load("php/mail.php", {
            name: name,
            email: email,
            message: message,
            submit: submit
        })
    })

    $("#sign-up-form").submit(function(event) {
        event.preventDefault();


    })

})