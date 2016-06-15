$(document).ready(function() {
        $('.slider-recipes').slick({
            centerMode: true,
            centerPadding: '280px',
            slidesToShow: 1,
            slide: 'a',
            lazyLoad: 'ondemand',
            arrows: true,
            responsive: [
                {
                    breakpoint: 1199 - 15, //minus 15 for the scroll bar width
                    settings: {
                        centerPadding: '230px'
                    }
                },
                {
                    breakpoint: 979 - 15,
                    settings: {
                        centerPadding: '180px'
                    }
                },
                {
                    breakpoint: 767 - 15,
                    settings: {
                        centerMode: false,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerMode: false,
                        slidesToShow: 1
                    }
                }
            ]
        });

    $('.example-recipes-tab').on('shown.bs.tab', 'a[data-toggle="tab"]', function(event) {
        console.log(222);
        var target = $($(event.target).attr('href'));
        target.find(".slider-recipes").slick('slickGoTo', 0)
    });

    });



