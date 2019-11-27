/* Startup Slider */
function caseStudies() {
    jQuery('#testimonialsWrapper').slick({
        // accessibility: false,
        arrows: false,
        // fade: true,
        draggable: false,
    });

    jQuery('.testimonial-banners').slick({
        arrows: false,
        fade: true,
        draggable: false,
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
        currentSlide = nextSlide;
        jQuery( '#testimonialsWrapper' ).slick( 'slickGoTo', currentSlide, true );
    });

    jQuery('#testimonialsController').slick({
        asNavFor: '.testimonial-banners',
        slidesToShow: 3,
        // slidesToScroll: 1,
        dots: false,
        draggable: false,
        // fade: true,
        // centerMode: true,
        focusOnSelect: true,
        arrows: false,
        // infinite: false,

        responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
    });
}