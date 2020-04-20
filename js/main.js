$(document).ready(() => {
    //Contact Page

    //Form validation and submission
    $("#contact-form").submit(function(event) {

        //Prevent page reload.
        event.preventDefault();

        $(".form-message").load("php/message.php", {
            name: $("#contact-form #name").val(),
            email: $("#contact-form #email").val(),
            message: $("#contact-form #message").val(),
            submit: $("#contact-form #submit").val()
        })
    });


    //Order Page

    //Selecting cuisine

    let cuisine_choice = "";

    $(".cuisine-image").on("click", (event) => {

        /* Click event to all elements of a class
        Source: https://stackoverflow.com/a/37866287
         */
       event.stopPropagation();
       event.stopImmediatePropagation();
       /* End snippet */

        //The clickable divs have id's of "<cuisine name>-cuisine"
        //Extracting the name of the chosen cuisine

        $(".cuisine-image i").addClass("hidden");

        let id = event.currentTarget.id;
        let object = $("#" + id);
        object.find("i").removeClass("hidden");

        cuisine_choice = id.split("-")[0];
    });

    //Next button
    $("#next-button").on("click", (event) => {
        if (cuisine_choice === "") {
            return;
        }

        let current_tab = $(".current-tab")[0];
        let id = current_tab.id;
        let tabNum = parseInt(id.split("-")[1]);
        if (tabNum !== 3) {
            tabNum = tabNum + 1;
            let newId = "tab-" + tabNum;
            $(".tab").removeClass("current-tab");
            $("#" + newId).addClass("current-tab");
            $(".number-icon").removeClass("current");
            $("#number-" + tabNum).addClass("current");
        }
    });

    $(".number-icon").on("click", function (event) {
        $(".number-icon").removeClass("current");

        $(this).addClass("current");
        console.log($(this));

        let n = $(this)[0].id.split("-")[1];
        $(".tab").removeClass("current-tab");
        $("#tab-" + n).addClass("current-tab");
    });



});