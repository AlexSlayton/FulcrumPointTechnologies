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

    // Hero text bumps up on page load
    $(document).ready(function() {
        $('.bumpUp').animate({
            top: - 50   
        }, 1000);
    });
    

    // Quick Link scrolling
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 70)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    //fade in on page load
    $(document).ready(function () {
    $('div.hidden').fadeIn(1000).removeClass('hidden');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 148
    });

    $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
});

    // mobile back to top button
    $(window).scroll(function() {
    if (document.body.scrollTop > 130 || document.documentElement.scrollTop > 130) {
        $('div.backToTop').fadeIn(500);
        document.getElementById("topPage").style.display = "block";

    } else {
        // document.getElementById("topPage").style.display = "none";
        $('div.backToTop').fadeOut(500);
    }

});

    // Collapse the navbar when page is scrolled
    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 50) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    });

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
    // sr.reveal('.bumpLeft', {
    //     duration: 2000,
    //     scale: 0,
    //     distance: '100px'
    // }, 700);

    // Rotates the chevron drop text
    $(".rotate").click(function(){
    $(this).toggleClass("down"); 
    })

    // Rotates all chevron when .allItemsClick is clicked
    $(".allItemsClick").click(function(){
    $(".rotate").toggleClass("down"); 
    })

})(jQuery); // End of use strict
    