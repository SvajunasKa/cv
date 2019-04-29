$(document).ready(function () {
    var id = '#dialog';
    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    //Set heigth and width to mask to fill up the whole screen
    $('#mask').css({'width': maskWidth, 'height': maskHeight});

    //transition effect		
    $('#mask').fadeIn(500);
    $('#mask').fadeTo("slow", 0.9);

    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();

    //Set the popup window to center
    $(id).css('top', winH / 2 - $(id).height() / 2);
    $(id).css('left', winW / 2 - $(id).width() / 2);

    //transition effect
    $(id).fadeIn(2000);

    //if button is clicked

    $('#text').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();
        $('#mask').fadeTo("slow", 0);
        $('#mask').hide("slow");
        $('.window').hide("slow");
    });

    $('#namePop').keypress(function (e) {
        if (e.which === 13) {
            $('#text').click();
            $('#mask').fadeTo("slow", 0);
            $('#mask').hide("slow");
            $('.window').hide("slow");
            return false;
        }

    });


    /*---------------------- get name from input---------------------------*/

    $('#text').click(function (e) {
        e.preventDefault();
        var nm = $('#namePop').val();
        $('#showName').html("O, " + nm.charAt(0).toUpperCase() + nm.slice(1) + " !");
    });

    /* ---------------------------- button animation----------------------------- */

    $('#text').mouseenter(function () {
        $('#text').css({"box-shadow": "3px 3px 3px 4px #888888", "transition": "1s ease-in-out"});
    });
    $('#text').mouseleave(function () {
        $(this).css({"box-shadow": "none", "transition": "1s ease-in-out"});
    });

    /* ---------------------------- email form --------------------------------- */

    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
                .done(function (response) {
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');

                    // Set the message text.
                    $(formMessages).text(response);


                    // Clear the form.
                    $('#name').val('');
                    $('#email').val('');
                    $('#message').val('');

                })
                .fail(function (data) {
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Atsiprašome, labai stengėmės, bet jūsų žinutės neišsiuntėme!');
                    }
                });
    });
    /* -----------------------Slide to top------------------------*/
    $('.bgimg-4').click(function () {
        $('html, body').animate({scrollTop: 0}, "slow");
        return false;
    });
});
