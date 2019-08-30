/**
 * Created by hailemanh on 5/24/17.
 */
/*==============[]==============*/
$(document).ready(function () {
    console.log("ready!");
    $('.carousel').carousel({
        pause: true,
        interval: false
    });
    $('#header').affix({
        offset: {
            top: 5
        }
    });
    $('#header .bottom').animate({
        marginTop: "-"+ $('#header .bottom').outerHeight() +"px",
        opacity: "0"
    },0);
    $('#header').hover(function () {
        $('#header .bottom').animate({
            marginTop: "0px",
            opacity: "1"
        },0);
    });
    $('#menu_main .dropdown').hover(function() {
        if($(this).find('.dropdown-menu')){
            $(this).addClass('open');
        }
    }, function() {
        $(this).removeClass('open');
    });

    $('.droplist .form-control').click(function (e) {
        $('.droplist .dropdown-menu').animate({
            display: "none",
            opacity: "0"
        },"fast");
        e.stopPropagation();
        $('.droplist').removeClass('open');
        $(this).parents('.droplist').addClass('open');
        $('.droplist.open .dropdown-menu').animate({
            display: "block",
            opacity: "1"
        },"fast");
    });
    $('body').click(function () {
        $('.droplist').removeClass('open');
        $('.droplist .dropdown-menu').animate({
            display: "none",
            opacity: "0"
        },"fast");
    });

    $('.box5 .form-control').click(function () {
        $('.box5').removeClass('focus');
        $(this).parents('.box5').addClass('focus');
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});
/*==============[]==============*/
$(window).load(function () {
    console.log("ready!");
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    if($(window).width() >= 992){
        $('.sidebar').affix({
            offset: {
                top: 82,
                bottom: function () {
                    return (this.bottom = $('#footer').outerHeight(true) + $('#block1').outerHeight() +  15)
                }
            }
        });
        $('.sidebar').css('width', $('.sidebar_1').outerWidth() - 30);
    }
});
/*==============[]==============*/
$(window).resize(function () {
    console.log("ready!");
});
/*==============[]==============*/
var lastScrollTop = 5;
$(window).bind('scroll', function () {
    console.log("ready!");
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
        //downscroll code
        $('#header.affix .bottom').animate({
            marginTop: "-"+ $('#header .bottom').outerHeight() +"px",
            opacity: "0"
        },0);
    } else {
        //upscroll code
    }
    lastScrollTop = st;
});