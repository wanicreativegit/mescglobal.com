(function ($, root, undefined) {


    $(function () {

        'use strict';


        $(function () {
            $('.equal-item').matchHeight();
        });



        $('.magic-click').click(function () {

            var url = $(this).data('url');

            window.location = url;
        });


        $('.fade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 2000
        });

        $('.experience').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 2000
        });


        $('.home_slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 2000
        });


        $('.header-slider').each(function (index) {

            $(this).slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: true,
                pauseOnHover: false,
                pauseOnFocus: false,
                arrows: false,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 4000,
                draggable: false
            });

        });


        /**
         * Menu
         */

        $('.menu-item').on('click', function () {

            var href = $("a", this).attr('href');
            window.location.href = href;

        });


        /**
         * header filter
         */


        $('.filter-select').click(function (e) {

            e.preventDefault();

            var name = $(this).data('name');
            $(".selection").not($('#' + name)).removeClass('active');

            $('.' + name).toggleClass('active');


        });

        $('.ch').on('click', function () {

            var name = $(this).parent().attr('id');
            var cont = $(this).html();

            $('.span-' + name).html(cont);
        });

        /**
         * Header menu
         */

        $('.menu').on('click', function () {

            $(this).toggleClass('active');
            $('#main_menu').toggleClass('active');

        });

        /**
         * file upload
         */

        $('#file-upload').change(function () {
            var filepath = this.value;
            var m = filepath.match(/([^\/\\]+)$/);
            var filename = m[1];
            $('#filename').html(filename);

        });


        var twitterShare = document.querySelector('[data-js="twitter-share"]');

        twitterShare.onclick = function (e) {
            e.preventDefault();
            var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
            if (twitterWindow.focus) {
                twitterWindow.focus();
            }
            return false;
        }

        var facebookShare = document.querySelector('[data-js="facebook-share"]');

        facebookShare.onclick = function (e) {
            e.preventDefault();
            var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
            if (facebookWindow.focus) {
                facebookWindow.focus();
            }
            return false;
        };


    });

})(jQuery, this);
