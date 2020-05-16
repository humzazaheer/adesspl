$(document).ready(function () {

    // $("#clientSlider").lightSlider({
    //     loop: true,
    // });

    var autoplaySlider = $('#lightSlider,#nat-clients,#internat-clients').lightSlider({
        auto: true,
        loop: true,
        item: 4,
        thumbMargin: 3,
        pauseOnHover: true,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        },

        responsive: [
            {
                breakpoint: 800,
                settings: {
                    item: 3,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 2,
                    slideMove: 1
                }
            }
        ]
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());

    $('#btnTop').click(function () {

        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > $('#top').height()+200) {
            $('#btnTop').fadeIn();
        }
        else {
            $('#btnTop').fadeOut();
        }
    });

});
