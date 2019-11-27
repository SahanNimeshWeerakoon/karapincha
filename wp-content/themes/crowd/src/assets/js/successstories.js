/* Startup Slider */
function successStories() {
    jQuery('.testimonial-items').slick({
        // // accessibility: true,
        // adaptiveHeight: true,
        // // appendArrows: $(element),
        // // appendDots: $(element),
        // arrows: true,
        // // asNavFor: null,
        nextArrow: '.testimonial-controls .next',
        prevArrow: '.testimonial-controls .prev',
        // // autoplay: true,
        // // autoplaySpeed: 3000,
        // centerMode: false,
        // // centerPadding: '200px',
        // // cssEase: 'ease',
        // // customPaging: function(slider, i) {
        // //     return $('<button type="button" />').text(i + 1);
        // // },
        // // dots: false,
        // // dotsClass: 'slick-dots',
        // // draggable: false,
        // // easing: 'linear',
        // // edgeFriction: 0.35,
        // fade: false,
        // focusOnSelect: true,
        // focusOnChange: true,
        // infinite: false,
        // // initialSlide: 0,
        // // lazyLoad: 'ondemand',
        // // mobileFirst: false,
        // // pauseOnHover: true,
        // // pauseOnFocus: true,
        // // pauseOnDotsHover: false,
        // // respondTo: 'window',
        // // responsive: null,
        // // rows: 1,
        // // rtl: false,
        // // slide: '',
        // // slidesPerRow: 1,
        // slidesToShow: 1,
        // // slidesToScroll: 4,
        // // speed: 500,
        // // swipe: true,
        // // swipeToSlide: false,
        // // touchMove: true,
        // // touchThreshold: 5,
        // // useCSS: true,
        // // useTransform: true,
        // // variableWidth: true,
        // // vertical: false,
        // // verticalSwiping: false,
        // // waitForAnimate: true,
        // // zIndex: 1000
        // asNavFor: '.blokk-testimonials-a-bullets .list'
    }).on('afterChange', function(event, slick, currentSlide, nextSlide){
        currentSlide = currentSlide;
        jQuery( '.blokk-testimonials-a-bullets .list' ).slick( 'slickGoTo', currentSlide, true );
        // jQuery('.blokk-testimonials-a-bullets .slick-list .slick-slide').removeClass('active');
        // jQuery('.blokk-testimonials-a-bullets .slick-list .slide-'+currentSlide).addClass('active');
        // $('.blokk-testimonials-a-bullets .slick-list .slick-slide-'+currentSlide).addClass('active');
    });

    jQuery('.blokk-testimonials-a-bullets .list').slick({
        asNavFor: '.testimonial-items',
        slidesToShow: 5,
        // slidesToScroll: 1,
        dots: false,
        // centerMode: true,
        focusOnSelect: true,
        arrows: false,
        // infinite: false,
        draggable: false,

        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
    });
}