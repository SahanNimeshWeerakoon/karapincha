function navOpen() {
    jQuery('.toggle-button').on('click', function(){
        jQuery('#overlay-nav').css('width','100%');
    });
}

function navClose() {
    jQuery('.closebtn').on('click', function(){
        jQuery('#overlay-nav').css('width','0%');
    });
}