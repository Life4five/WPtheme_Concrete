console.log("script.js is loading...");


$(document).on('ready', function() {
    $(".regular").slick({
        prevArrow:
        '<button class="slide-arrow prev-arrow"><svg width="66" height="10" viewBox="0 0 66 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M65 1H1C5.97778 1.66667 16 4 25 9" stroke="black" stroke-linecap="round"/></svg></button>',
        nextArrow:
        '<button class="slide-arrow next-arrow"><svg width="66" height="10" viewBox="0 0 66 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 9H65C60.0222 8.33333 50 6 41 1" stroke="black" stroke-linecap="round"/></svg></button>',
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    dotsClass:'center-dots',
                }
            }
        ]
    });


	$('input.bot_handler').removeAttr('checked');
    $('.wpcf7-submit').removeAttr('disabled');
    
});

$("#show-nav-menu").click(function() {
    $(".nav-window").css('display', 'flex');
    $(".nav-window").css('overflow-x', 'hidden');
    $("body").css('overflow', 'hidden');
});
$("#nav-close, .ul-ss").click(function() {
    $(".nav-window").hide();
    $(".nav-window").css('overflow', 'visible');
    $("body").css('overflow', 'visible');
});
$(".header-btn,.table-btn,.intro-btns .btn-inv,.slabs-btns .btn-inv").click(function() {
    $(".popup-blackout,.popup-offer").show();
    $("body").css('overflow', 'hidden');
});
$(".popup-blackout").click(function() {
    $(".popup-blackout,.popup-offer,.popup-review").hide();
    $("body").css('overflow', 'visible');
});

$(".reviews-btn").click(function() {
    $(".popup-blackout,.popup-review").show();
    $("body").css('overflow', 'hidden');
});



$(".marka-select:first").addClass('marka-active');
$(".marka-select:not(:first)").hide();

$("#product1").change(function() {
    console.log("changing the marka..."); //
    $('.marka-select').prop("disabled",false);
    id = $(this).find(':selected').data('id');
    $('.marka-select').hide().removeClass('marka-active');
    $('#'+id).show().addClass('marka-active');
});

$("#product1,.marka-select,#calc-amount").change(function() {
    console.log("Calculating the price...")
    price = $(".marka-active").find("option:selected").data('price');
    amount = $("#calc-amount").val();
    cost = price * amount;
    console.log(price+' * '+amount+' = '+cost) //

    if (!isNaN(cost)) {
        $("#offer-cost").text(cost+'₽');
        $("#cost").val(cost);
        $("#marka").val($(".marka-active").val());
        $("#amount").val($("#calc-amount").val());
        $("#product").val($("#product1").find("option:selected").val());
    } else {
        $("#offer-cost").text('0₽')
    }
});


$('.prices-btn input').click(function() {

        console.log($(".marka-active").find("option:selected").data('price'));

});



$(window).on("scroll touchmove", function() {
    var windowsize = $(window).width();

    $(window).resize(function() {
      var windowsize = $(window).width();
    });

    if (windowsize <= 1024) {
        if ($(document).scrollTop() > 0) {
            $('.header').css('background', '#D7E4F7');
        } else {
            $('.header').css('background', 'none');
        }
    }

  
});


console.log("script.js has been loaded.");