(function ($) {
    "use strict";

    /* TOP Menu Stick */
    var s = $(window);
    var sticky_id = $("#sticker");
    s.on('scroll', function () {
        var scroll = s.scrollTop();
        if (scroll < 100) {
            sticky_id.removeClass("stick");
        } else {
            sticky_id.addClass("stick");
        }
    });

    /* Page Scroll */
    jQuery('a.page-scroll').on('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    /* preloader */
    $(window).on('load', function () {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut('slow', function () { $(this).remove(); });
    });

    /* scrollUp */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /* Parallax */
    var parallaxeffect = $(window);
    parallaxeffect.stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });

    /* contact-from */
/*     $("#contactForm").on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm() {
        // Initiate Variables With Form Content
        var name = $("#nameSuccess").val();
        var email = $("#emailSuccess").val();
        var msg_subject = $("#msg_subject").val();
        var message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "assets/contact.php",
            data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&message=" + message,
            success: function (text) {
                if (text == "success") {
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false, text);
                }
            }
        });
    }

    function formSuccess() {
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError() {
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h3 text-center tada animated text-success";
        } else {
            var msgClasses = "h3 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }*/

})(jQuery);
