/*
 * Application
 *
 */

(function($) {

    $(document).tooltip({
        selector: "[data-toggle=tooltip]"
    })

    // Focus state for append/prepend inputs
    $('.input-group').on('focus', '.form-control', function () {
        $(this).closest('.input-group, .form-group').addClass('focus');
    }).on('blur', '.form-control', function () {
        $(this).closest('.input-group, .form-group').removeClass('focus');
    });

    if ( $.fn.owlCarousel !== undefined ) {
        var homeSlider = $('#home-slider').owlCarousel({
            items : 1,
            itemScale: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 500,

            //video
            video: true,

            //nav
            nav: true,

            //responsive 
            responsive: [],
            responsiveRefreshRate : 200,
            responsiveBaseWidth: window,

            onInitialized: function() {
                this.$element.find('.home-slider__item img.banner-img').each(function() {
                    $(this).parent().css({
                        'background-image': 'url(' + this.src + ')'
                    });
                });
            }
        });
        $(document).on('click', '.owl-video-play-icon', function(e) {
            homeSlider.trigger('stop.owl.autoplay');
        });
    }

})(jQuery);