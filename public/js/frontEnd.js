(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a[href*="#"]:not([href="#"])').click(function() {
        console.log(this);
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    //fade in on page load
    $(document).ready(function () {
    $('div.hidden').fadeIn(2000).removeClass('hidden');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 148
    });


    // Closes responsive menu when a link is clicked
    // $('.navbar-collapse>ul>li>a').click(function() {
    //     $('.navbar-collapse').collapse('hide');
    // });

    // Collapse the navbar when page is scrolled
    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 80) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    });

    // Bumb right when hovering
    // $('ul').find('li').hover(function() {
    // $(this).animate({
    //     'padding-left':'3px'
    // },100);
    // }, function() {
    // $(this).animate({
    //     'padding-left':'0px'
    // },100);
    // });

    // Scroll down button motion
    $('.ScrollDown').hover(function() {
    $(this).stop().animate({
        top: 15
    }, 900, "easeOutBounce");
    }, function() {
    $(this).stop().animate({
        top: 0
    }, 900, "easeOutBounce");
    });

    // Scroll reveal calls
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 500,
        scale: 0.5,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 700,
        scale: 0.9,
        distance: '10px'
    }, 300);

    // Rotates the chevron drop text
    $(".rotate").click(function(){
    $(this).toggleClass("down"); 
    })

    // Rotates all chevron when .allItemsClick is clicked
    $(".allItemsClick").click(function(){
    $(".rotate").toggleClass("down"); 
    })

})(jQuery); // End of use strict
    