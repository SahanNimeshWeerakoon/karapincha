console.log('Hello World!');

// IIFE - Immediately Invoked Function Expression
(function($, window, document) {
    "use strict";
    
    /* Global Init */
    function init() {
        // animateValue("value", 72999990, 73000000, 2000);
        // sampleFunction();
        startupSlider();
        successStories();
        startupsform();
        investorsform();
        // caseStudies();
        // navClose();
    }

    // Listen for the jQuery ready event on the document
    $(function() {
        
        init();

        $('.sidebar-toggle, .navigation-menu .overlay').on("click", function(e){
            e.preventDefault();
            e.stopPropagation();
            if ($('.sidebar-toggle').hasClass('active')) {
                $('.menu-ham,.sidebar-toggle').removeClass( 'active');
                $("body").removeClass("slided");
                $("body").addClass("notSlided");
                $(".navigation-menu .overlay").css({"visibility":"hidden","opacity":"0"});
                $(".navigation-menu").fadeOut('fast');
                $("nav.nav").removeClass("sidebar-opened");
                $("nav.nav").addClass("fixed");
            } else {
                $(this).addClass('active');
                $('.menu-ham').addClass( 'active');
                $(".navigation-menu").fadeIn('fast');
                $(".navigation-menu .overlay").css({"visibility":"visible","opacity":"1"});
                $("body").removeClass("no-animation");
                $("body").removeClass("notSlided");
                $("body").addClass("slided");
                $("nav.nav").addClass("sidebar-opened");
                $("nav.nav").removeClass("fixed");
            }
        });

        $('.modal-activate').on("click", function(e){
            e.preventDefault();
            var el = $(this).data('id');

            $('#'+el +'.blokk-modal').fadeIn('fast');
            $('#'+el +'.blokk-modal .overlay').css({"visibility":"visible","opacity":"1"});

            $('body').removeClass("no-animation");
            $('body').removeClass("notSlided");
            $('body').addClass("slided");
            $('body').css("overflow","hidden");

            $('.nav-toggle').hide();
            $('.modal-toggle').show();
            $('.modal-toggle .menu-ham').addClass( 'active');
        });

        $('.modal-toggle, .blokk-modal .overlay').on("click", function(e){
            $('.modal-toggle .menu-ham').removeClass( 'active');

            $("body").removeClass("slided");
            $("body").addClass("notSlided");
            $('body').css("overflow","auto");

            $(".blokk-modal .overlay").css({"visibility":"hidden","opacity":"0"});
            $(".blokk-modal").fadeOut('fast', function(){
                $('.nav-toggle').show();
                $('.modal-toggle').hide();
            });
        });

        

        // $('.modal-toggle, .blokk-modal .overlay').on("click", function(e){
        //     e.stopPropagation();
        //     if ($(this).hasClass('active')) {
        //         $('.menu-ham,.modal-activate').removeClass( 'active');
        //         $('.nav-toggle').removeClass( 'active modal-toggle');
        //         $('body').removeClass("slided");
        //         $('body').addClass("notSlided");
        //         $('.blokk-modal .overlay').css({"visibility":"hidden","opacity":"0"});
        //         $('.blokk-modal').fadeOut(100);
        //         // $("nav.nav").removeClass("sidebar-opened");
        //         // $("nav.nav").addClass("fixed");
        //     } else {
        //         $(this).addClass('active');
        //         $('.nav-toggle').addClass( 'active modal-toggle');
        //         $('.menu-ham').addClass( 'active');
        //         $('.blokk-modal').fadeIn('fast');
        //         $('.blokk-modal .overlay').css({"visibility":"visible","opacity":"1"});
        //         $('body').removeClass("no-animation");
        //         $('body').removeClass("notSlided");
        //         $('body').addClass("slided");
        //         $('body').css("overflow","hidden");
        //         // $("nav.nav").addClass("sidebar-opened");
        //         // $("nav.nav").removeClass("fixed");
        //     }
        // });

        $('.gallery').slick({
            nextArrow: '.gallery-control .next',
            prevArrow: '.gallery-control .prev',
        });

        $(window).scroll(function() {

            var footerHeight = $('footer').height();

            if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
                console.log('Near footer');
                $('.investment-widget').removeClass('fixed');
            } else {
                $('.investment-widget').addClass('fixed');
            }
        });

        // var fixmeTop = $('.article-tabs .nav-tabs').offset().top;

        // $(window).scroll(function(e){ 
        //     if($(window).scrollTop() > 400) {
        //         console.log('Scrolled');
        //         // $('.investment-widget').removeClass('fixed');
        //     } else {
        //         // $('.investment-widget').addClass('fixed');
        //     }
        // });


        /* Fixed Header on Scroll */
        $(window).scroll(function(){
          var sticky = $('.navigation'),
              scroll = $(window).scrollTop();

          if (scroll > 0) sticky.addClass('fixed');
          else sticky.removeClass('fixed');
        });
    });


    // The rest of the code goes here!

    $(window).on('load', function() {
        // loadingSpinner(); // Animate loader off screen
    });

}(window.jQuery, window, document));
// The global jQuery object is passed as a parameter