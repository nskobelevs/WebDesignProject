

$(document).ready(function() {
    //Contact Page

    //Form validation and submission
    $("#contact-form").submit(function(event) {
        event.preventDefault();

        let name = $("#contact-form #name").val();
        let email = $("#contact-form #email").val();
        let message = $("#contact-form #message").val();
        let submit = $("#contact-form #submit").val();

        $(".form-message").load("php/message.php", {
            name: name,
            email: email,
            message: message,
            submit: submit
        })
    });

    $("#sign-up-form").submit(function(event) {
        event.preventDefault();

        let firstName = $("#sign-up-form #first-name").val();
        let secondName = $("#sign-up-form #second-name").val();
        let email = $("#sign-up-form #email").val();
        let email_confirm = $("#sign-up-form #email-confirm").val();
        let password = $("#sign-up-form #password").val();
        let passwordConfirm = $("#sign-up-form #password-confirm").val();
        let tosAccept = $("#sign-up-form #tosCheck").val();
        let submit = $("#sign-up-form #submit").val();

        $.post("php/register.php", {
            firstName: firstName,
            secondName: secondName,
            email: email,
            email_confirm: email_confirm,
            password: password,
            password_confirm: passwordConfirm,
            tosAccept: tosAccept,
            submit: submit
        }, (response) => {
            console.log(response);
        })


    })

})