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
        $("#dropDownHolder").removeClass('hoverActive');

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
        $(".top_menu").css('position',"relative");
        $(".pt-118px").css('padding-top','0px');
        $('.DownHolder').on("click",function () {
            $("#dropDownHolder").toggleClass('hoverActive');
        });
        $(".h2").css('background', '#378d38');
    } else {
        console.log("NO !! touch!!");
        $('#dropDownHolder').removeClass("hoverActive");

        var nav = $(".top_menu");
        var height =  nav.outerHeight();

        $(window).on('scroll',function () {
            if ($(this).scrollTop() > 10) {
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


        $("#phpner_close").click(function(){ $('#myModal-after').modal('hide');});
    });
    /*Открыть форму по href*/
    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });

    $(".form_callback input, .form_callback_choose input, .form_contact input").on('focus',function () {
        $(this).siblings('span').addClass('form-holder');
    });
    $(".form_callback input, .form_callback_choose input, .form_contact input").on('blur',function () {
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
                    $(form)[0].reset();
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
                error: function(res){
                    $(".sendForm").fadeOut(400);
                    $('#answers span').html("Что-то пошло не так! <br> Пропробуйте нам перезвонить");
                    $('#answers').fadeIn(400).delay(2000).fadeOut(1000);
                    console.log(res);
                }
            });
        }
    };

    $(".form_callback").validate(settingFprm);
    $(".form_contact").validate(settingFprm);
    $(".form_callback_choose").validate(settingFprm);


    /*Кнопка на верх*/
    $(window).scroll(function() {

        if($(this).scrollTop() > 350) {

            $('.scrollup').fadeIn();

        } else {
            $('.scrollup').fadeOut();
        }

    });

    $('.scrollup').click(function() {
        $('body,html').animate({scrollTop:0},1800);
    });

    /*Сайдер парнеры*/
    $(".slider_partner").slick({
        slidesToShow: 7,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 0,
        infinite: true,
        speed: 3000,
        pauseOnHover:false,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

    $(document).on('load','.tv-hot-tours',function(){
        console.log(this)
    });
  /*  $(document).on('DOMSubtreeModified',".TVModalContainer ",function () {
        console.log(this.scrollHeight);
        $('footer').css('bottom', +this.scrollHeight - 450)
    });*/

})
