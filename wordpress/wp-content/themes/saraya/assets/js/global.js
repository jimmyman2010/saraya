/**
 * Created by MinhMan.Tran on 3/4/2016.
 */
var DKS = (function(){
    'use strict';
    var method = {
        showNoticePopup: function(){
            'use strict';
            $.magnificPopup.open({
                items: {
                    src: $('#noticePopup')
                },
                type: 'inline',

                fixedContentPos: true,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $(document).on('click', '.button--close', function (e) {
                e.preventDefault();
                $.magnificPopup.close();
            });
        },
        windowWidthHeight: function(){
            var heightWindow = document.documentElement.clientHeight;
            var widthWindow = document.documentElement.clientWidth;
            var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
            if (iOS) {
                var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
                heightWindow = window.innerHeight * zoomLevel;
                widthWindow = window.innerWidth * zoomLevel;
            }
            return {width: widthWindow, height: heightWindow};
        },
        menuToggle: function() {
            $('.lang_sel_sel, .toggle-main-menu, .panel-grid-cell .widget_nav_menu .widget-title').on('click', function(){
                $(this).toggleClass('open');
                return false;
            });

            $(window).on('resize', function(){
                $('.lang_sel_sel, .toggle-main-menu, .panel-grid-cell .widget_nav_menu .widget-title').removeClass('open');
            });
        },

        menuHover: function(){
            if(method.windowWidthHeight().width >= 1024) {
                $('.special-submenu').on('mouseover', function () {
                    $('.submenu.' + $(this).attr('id')).show();
                }).on('mouseleave', function () {
                    $('.submenu.' + $(this).attr('id')).hide();
                });

                $('.submenu').on('mouseover', function () {
                    $(this).show();
                }).on('mouseleave', function () {
                    $(this).hide();
                });
            }
        },

        fullImage: function(){
            var containerImg = $('.cover .sow-image-container');
            containerImg.each(function(){
                var that = $(this),
                    img = that.children('.so-widget-image');

                that.css({
                    'background-image': 'url("' + img.attr('src') + '")',
                    'background-size': "cover"
                });

                img.css({"visibility": "hidden"});
            });
            $(window).on('load resize', function(){
                containerImg.height('auto');
                if( method.windowWidthHeight().width >= 768) {
                    containerImg.each(function () {
                        var that = $(this);
                        that.height(that.parents('.panel-grid').height());
                        that.css({'opacity': 1});
                    });
                }
            });
        },
        backgroundTitle: function(){
            $('.has-background').each(function(){
                var src = $(this).find('.wp-post-image').attr('src');
                $(this).css('background-image', 'url("' + src + '")');
            });
        },
        historyTab: function(){
            var siteHistory = $('.site-history');
            if(siteHistory.length > 0){
                siteHistory.on('click', '.toggle', function(){
                    if(!$(this).parent().hasClass('active')) {
                        siteHistory.find('.active').removeClass('active');
                        $(this).parent().addClass('active');
                        $($(this).data('target')).addClass('active');

                        $('html, body').animate({
                            scrollTop: siteHistory.offset().top
                        }, 500);
                    }
                });

            }
        },
        init: function () {
            method.windowWidthHeight();
            method.fullImage();
            method.menuToggle();
            method.menuHover();
            method.historyTab();
            method.backgroundTitle();
        }
    };
    return {
        init: method.init,
        showNoticePopup: method.showNoticePopup
    }
})();


$(function(){
    'use strict';

    $('a[target="null"]').removeAttr('target');
    $(document).on('click', 'a', function(event){
        var url = $(this).attr('href');
        if(url && url[0] === '#') {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $(url).offset().top - 30
            }, 500);
        }
    });

    var sliderTestimonials = $('.slider-testimonials');
    if(sliderTestimonials.length > 0){
        sliderTestimonials.find('.body').show();
        sliderTestimonials.slick({
            autoplay: true,
            autoplaySpeed: 4000,
            dots: true,
            arrows: false
        });
    }

    DKS.init();
});