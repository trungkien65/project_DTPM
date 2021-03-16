    $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
    $('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
});
});

    /*toys.render();

    toys.cart.on('toys_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });*/

    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    });


    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 3000,
            autoPlay:true,
            autoPlaySpeed: 2000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems:2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 2
                }
            }
        });

    });


    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });

    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

    $(window).load(function () {
        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });

    $(function () {
    // Slideshow 4
    $("#slider4").responsiveSlides({
    auto: true,
    pager:false,
    nav:true ,
    speed: 900,
    namespace: "callbacks",
    before: function () {
    $('.events').append("<li>before event fired.</li>");
},
    after: function () {
    $('.events').append("<li>after event fired.</li>");
}
});

});


$('.add-to-cart').click(function () {
    var product_id = $(this).attr('data-id');
    console.log(product_id);
    $.ajax({
        method: 'GET',

        url: 'index.php?controller=cart&action=add',

        data: {
            product_id: product_id
        },

        success: function (data) {

            $('.ajax-message').html('Thêm vào giỏ hàng thành công');

            $('.ajax-message').addClass('ajax-message-active');

            setTimeout(function () {
                $('.ajax-message').removeClass('ajax-message-active');
            }, 3000);

            var cart_total = $('.cart-amount').text();
            cart_total++;
            $('.cart-amount').text(cart_total);
            $('.cart-amount-mobile').text(cart_total);
        }

    });


})
    $('.register2').click(function () {
        var product_id = $(this).attr('data-id');
        console.log(product_id);
        $.ajax({
            method: 'GET',

            url: 'index.php?controller=login&action=register',

            data: {
                users: users
            },

            success: function (data) {

                $('.ajax-message').html('Thêm vào giỏ hàng thành công');

                $('.ajax-message').addClass('ajax-message-active');

                setTimeout(function () {
                    $('.ajax-message').removeClass('ajax-message-active');
                }, 3000);

                var cart_total = $('.cart-amount').text();
                cart_total++;
                $('.cart-amount').text(cart_total);
                $('.cart-amount-mobile').text(cart_total);
            }

        });


    })