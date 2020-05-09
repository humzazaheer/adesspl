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

});

// scrollTop

$(function () {

    var $btn = $('#btnTop');
    var $home = $('#top');
    var startpoint = $home.scrollTop() + $home.height() / 2;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > startpoint) {
            $btn.fadeIn();
        } else {
            $btn.fadeOut();
        }
    });
});
