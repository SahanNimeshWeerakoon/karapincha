/* Startup Slider */
function startupSlider() {
    jQuery('#our-startups-slider').slick({
        accessibility: false,
        // adaptiveHeight: false,
        // appendArrows: $(element),
        // appendDots: $(element),
        arrows: true,
        // asNavFor: null,
        prevArrow: '.blokk-slider-a-controller .prev',
        nextArrow: '.blokk-slider-a-controller .next',
        // autoplay: false,
        // autoplaySpeed: 3000,
        centerMode: true,
        // centerPadding: '55px',
        // cssEase: 'ease',
        // customPaging: function(slider, i) {
        //     return $('<button type="button" />').text(i + 1);
        // },
        // dots: false,
        // dotsClass: 'slick-dots',
        draggable: false,
        // easing: 'linear',
        // edgeFriction: 0.35,
        // fade: false,
        // focusOnSelect: false,
        // focusOnChange: false,
        infinite: true,
        // initialSlide: 0,
        // lazyLoad: 'ondemand',
        // mobileFirst: false,
        // pauseOnHover: true,
        // pauseOnFocus: true,
        // pauseOnDotsHover: false,
        // respondTo: 'window',
        // responsive: null,
        // rows: 1,
        // rtl: false,
        // slide: '',
        // slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 3,
        // speed: 500,
        // swipe: true,
        // swipeToSlide: false,
        // touchMove: true,
        // touchThreshold: 5,
        // useCSS: true,
        // useTransform: true,
        variableWidth: true,
        // vertical: false,
        // verticalSwiping: false,
        // waitForAnimate: true,
        // zIndex: 1000,
        responsive: [
            {
              breakpoint: 767,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 1,
                variableWidth: false,
              }
            }
          ]
    });
}