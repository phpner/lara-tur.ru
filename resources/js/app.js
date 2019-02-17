$(document).ready(function () {
    $('.click-in').click(function () {

        $("#nav-icon").toggleClass('open');
        //$('#wrapper').toggleClass('over');
        $("#menu ul").toggleClass('opener');

    });

    $(window).resize(function () {
        if(window.outerWidth >= 768){
            $("#menu ul").removeClass('opener');
            $("#nav-icon").attr('class','');
        }
    });
})
