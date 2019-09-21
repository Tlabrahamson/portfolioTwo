$(document).ready(function(){
    console.log("rdy");
    $('.downArrow').click(() => {
        $('html, body').animate({
            scrollTop: $('#whatIdo').offset().top
        }, 300);
    });
    
});