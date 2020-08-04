
$(document).ready(function() {

    //scrolltop

    $('#btnTop').click(function() {

        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() > $('#top').height() + 200) {
            $('#btnTop').fadeIn();
        } else {
            $('#btnTop').fadeOut();
        }
    });

    // end scrolltop

    $('.mdb-select').materialSelect();

    // admin navbar

    $('aside').hide();
    $('.body-overlay').hide();
    $('.navbar-toggler').click(function() {
        $('.body-overlay').fadeIn(500);
        $('aside').removeClass('animate__fadeOutLeft');
        $('aside').addClass('animate__fadeInLeft').show();
    });
    $('.body-overlay').click(function() {
        $('aside').removeClass('animate__fadeInLeft');
        $('aside').addClass('animate__fadeOutLeft');
        $('.body-overlay').fadeOut(500);
    });

    // end admin navbar


    // MDB Lightbox Inintialize
    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    // End MDB Lightbox Inintialize

    // lightslider

    var autoplaySlider = $('#client_slider').lightSlider({
        controls:false,
        pager:false,
        auto: true,
        loop: true,
        item: 4,
        thumbMargin: 3,
        pauseOnHover: true,
        onBeforeSlide: function(el) {
            $('#current').text(el.getCurrentSlideCount());
        },

        responsive: [{
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

    // end lightslider






});


function preview_images() {
    $('#image-preview').empty();
    var total_file = document.getElementById("gallery_images").files.length;
    for (var i = 0; i < total_file; i++) {
        $('#image-preview').append("<div class='col-md-3 col-sm-4 w-50'><img class='img-fluid mx-auto my-3' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
    }
}
// Wow.js Initialization



new WOW().init();

// $(this).bind("contextmenu", function(e) {
//     e.preventDefault();
//     alert('Restricted content...!');
// });
$(function() {
    var selectedClass = "";
    $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});

    $('[data-toggle="tooltip"]').tooltip();

