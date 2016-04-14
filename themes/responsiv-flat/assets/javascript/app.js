/*
 * Application
 *
 */

(function($) {
    var $body = $('body').eq(0);
    var isTouch = ('ontouchstart' in document.documentElement);
    $body.toggleClass( 'no-touch', !isTouch );

    $(document).tooltip({
        selector: "[data-toggle=tooltip]"
    });

    // $body.toggleClass( 'cover-layout', $body.height() < $(document).height() );

    // Focus state for append/prepend inputs
        $('.input-group').on('focus', '.form-control', function () {
            $(this).closest('.input-group, .form-group').addClass('focus');
        }).on('blur', '.form-control', function () {
            $(this).closest('.input-group, .form-group').removeClass('focus');
        });

    //menu
        $(document).on('click', '#main-nav-trigger', function(e) {
            $(this).toggleClass('collapsed')
            $('.navbar-main-collapse').eq(0).toggleClass('open');
            
            return false;
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

    var imgCoverFunc = function(imgs) {
        imgs.each(function() {
            var $this = $(this);
            var wrapper = $this.parent();
            var src = $this.attr('data-src');
            if ( src != '' ) {
                var img = new Image;
                img.onerror = function() {
                }
                img.onload = function() {
                    wrapper.css({
                        'background-image': 'url(' + src +')',
                        'background-repeat': 'no-repeat',
                        'background-position': 'center center',
                        'background-size': 'cover'
                    });
                }
                img.src = src;
            }
        });
    }

    //photo gallery
        var galleryList = $('#gallery-list');
        var galleryItems;
        var pswpElement = $('#gallery-popup').get(0);
        var videoPopup = $('#video-popup');
        var videoPopupContent = $('#video-popup-content');
        var videoCounter = $('#video-counter');
        var videoCurrentIndex;
        var openGallery = function( index ) {
            try {
                var options = {
                    index: parseInt(index)
                };
                var galleryPswp = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, galleryItems, options );
                galleryPswp.init();
                galleryPswp.listen('destroy', function() {});
            } catch (exp) {
                console.log(exp)
            }
        }
        var videoPlayer = function( index, video ) {
            videoCurrentIndex = index;
            videoPopup.removeClass('hidden');
            videoPopupContent.html( video );
            videoCounter.text( index + ' / ' + galleryList.find('.gallery-item__video').length );
        }
        $(document).on('click', '.gallery-item__exploring--fullscreen', function(e) {
            openGallery( $(this).attr('data-key') );
            return false;
        });
        $(document).on('click', '.gallery-item__video', function(e) {
            var data = $(this).data();
            videoPlayer( data.index, data.href );
            return false;
        });
        $(document).on('click', '.video-popup-close', function(e) {
            videoPopup.addClass('hidden');
            videoPopupContent.empty();
            return false;
        });
        $(document).on('click', '.video-popup-prev', function(e) {
            var index = videoCurrentIndex - 1;
            if ( index < 1 ) {
                index = $('.gallery-item__video').length;
            }
            videoPlayer( index, $('.gallery-item__video').eq( index - 1 ).attr('data-href') );
            return false;
        });
        $(document).on('click', '.video-popup-next', function(e) {
            var index = videoCurrentIndex + 1;
            if ( index > $('.gallery-item__video').length ) {
                index = 1;
            }
            videoPlayer( index, $('.gallery-item__video').eq( index - 1 ).attr('data-href') );
            return false;
        });
        var buildGallery = function(cb) {
            var errors = 0;
            galleryItems = [];
            var items = $('.gallery-item__exploring--fullscreen');
            items.each(function() {
                var img = new Image();
                img.onload = function() {
                    galleryItems[ $(this).attr('data-key') ] = {
                        src: img.src,
                        w: img.width,
                        h: img.height
                    };
                    if ( items.length == galleryItems.length + errors ) {
                        if ( cb !== undefined ) { cb(); }
                    }
                }.bind(this);
                img.onerror = function() {
                    errors++;
                }
                img.src = $(this).attr('href');
            });
            imgCoverFunc( galleryList.find('.gallery-img') );
        }
        buildGallery();
})(jQuery);