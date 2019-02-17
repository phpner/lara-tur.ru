$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.click-in').click(function () {

        $("#nav-icon").toggleClass('open');
        //$('#wrapper').toggleClass('over');
        $("header ul.menu").toggleClass('opener');

    });

    $(window).resize(function () {
        if(window.outerWidth >= 768){
            $("#menu > ul").removeClass('opener');
            $("#nav-icon").attr('class','');
        }
    });

    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });


    if (Modernizr.touchevents){
        $('.DownHolder').on("click",function () {
            $("#dropDownHolder").toggleClass('hoverActive');
        });
    } else {
        console.log("NO !! touch!!");
        $('#dropDownHolder').removeClass("hoverActive");

        var nav = $(".top_menu");
        var height =  nav.outerHeight();

        $(window).on('scroll',function () {
            if ($(this).scrollTop() > 100) {
                nav.addClass("f-nav");

            } else {
                nav.removeClass("f-nav");
            }
        });
    }


    $("#phpner_button-wrapper").on("click",function(){
    $.magnificPopup.open({
            type: 'inline',


            items :{
                src: "#callback"
            },
            overflowY: 'hidden',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $("#phpner_close").click(function(){ $('#myModal-after').modal('hide');})
        console.log( this);
    });

    $(".form_callback input").on('focus',function () {
        $(this).siblings('span').addClass('form-holder');
    });
    $(".form_callback input").on('blur',function () {
        if(this.value == ''){
            $(this).siblings('span').removeClass('form-holder')
        }else {
            $(this).siblings('span').addClass('form-holder');
        }
    });

    var settingFprm = {
        success: "valid",
        rules: {
            name: {
                minlength: 3,
                required: true,
            },
            email: {
                required: true,
                minlength: 5,
                email: true
            },
        },
        messages: {
            name: "",
            email: ""
        },
        submitHandler: function(form) {
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                beforeSend: function() {
                    $(".mfp-close").trigger("click");
                    $(".sendForm").fadeIn(400);
                    $(".form_callback")[0].reset();
                    $(".controll_input span").removeClass('form-holder')
                    $(".controll_input input").removeClass('valid')
                },
                success: function(response) {
                  var text =  response === 'ok' ? "Спасибо. Заявка принята. <br> Мы скоро перезвоним!" :'Ошибка отправки!';

                    $('#answers span').html(text);

                    $(".sendForm").fadeOut(400);
                    $('#answers').fadeIn(400).delay(2000).fadeOut(1000);
                    console.log(response);
                },
                error: function(){
                    $(".sendForm").fadeOut(400);
                    $('#answers span').html("Что-то пошло не так! <br> Пропробуйте нам перезвонить");
                    $('#answers').fadeIn(400).delay(2000).fadeOut(1000);
                }
            });
        }
    };

    $(".form_callback").validate(settingFprm);


  /*  $(document).on('DOMSubtreeModified',".TVModalContainer ",function () {
        console.log(this.scrollHeight);
        $('footer').css('bottom', +this.scrollHeight - 450)
    });*/

})
