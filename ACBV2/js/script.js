$(function () {
    $("#contact-form").submit(function (e) {
        e.preventDefault();
        $(".comments").empty();
        var postdata = $("#contact-form").serialize();

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function (result) {
                if (result.isSuccess) {

                    $("#contact-form").append("<p class='thank-you' >Votre message a bien été envoyé, merci de m'avoir contacté</p>");
                    $("#contact-form")[0].reset();
                }
                else{
                    $("#firstname + .comments").html(result.firstnameError);
                    $("#nom + .comments").html(result.nomError);
                    $("#telephone + .comments").html(result.telephoneError);
                    $("#email + .comments").html(result.emailError);
                    $("#message + .comments").html(result.messageError);
                }



                
            }



        });


    });
})


document.addEventListener('click', function(event) {
    var navbar = document.getElementById('navbarText');
    var isClickInside = navbar.contains(event.target);

    if (!isClickInside) {
        var navbarToggler = document.querySelector('.navbar-toggler');
        if (navbarToggler.getAttribute('aria-expanded') === 'true') {
            navbarToggler.click();
        }
    }
});
