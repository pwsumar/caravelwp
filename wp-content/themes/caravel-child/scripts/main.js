(function(window, document, $) {
    'use strict';
    var D = $(document),
        W = $(window);

    D.ready(function() {
        var nav = $('.navbar-home');
        var body = $('body');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 62) {
                body.addClass("body-fixed-nav");
                nav.addClass("navbar-fixed-top");
            } else {
                body.removeClass("body-fixed-nav");
                nav.removeClass("navbar-fixed-top");
            }
        });

        // $(".navbar-menu-toggle").click(function() {
        //     $(this).toggleClass("active");
        //     $('body').toggleClass("cbp-spmenu-push-toleft");
        //     $('.mobile-nav').toggleClass("cbp-spmenu-open");
        // });

        // $(".close-menu").click(function() {
        //     $('.navbar-menu-toggle').removeClass("active");
        //     $('body').removeClass("cbp-spmenu-push-toleft");
        //     $('.mobile-nav').removeClass("cbp-spmenu-open");
        // });

        $(document).on("click", "#application-choose-file", function(e){
            e.preventDefault();
            $("#input-file").click();
            $(this).closest('div[class="form-group"]').addClass('focus-input');
        });

        $("#input-file").change(function(){
            var filename = $(this).val().split('\\').pop();
            $("#file-name").text(filename);
        });

        $(".form-personal-holder .form-control").focus(function(){
            $(this).closest('div[class="form-group"]').addClass('focus-input');
        });

        // $(document).on("click", '#app-progress', function(e){
        $(document).on("click", 'li[role="presentation"]', function(e){
            e.preventDefault();

            $(this).removeClass('visited').addClass('active');

            $(this).prevAll('li').addClass('visited');
            $(this).nextAll('li').removeClass('visited');
        });


    });


    W.load(function() { // makes sure the whole site is loaded
        $('body').addClass('is__in');
    });

})(window, document, jQuery);

//HEIGHT SAME
    equalheight = function(container){
        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
        $(container).each(function() {

            $el = $(this);
            $($el).height('auto')
            topPostion = $el.position().top;

            if (currentRowStart != topPostion) {
                for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
    }

    $(window).load(function() {
        equalheight('.form--personal-holder .form-group');
    });

    $(window).resize(function(){
        equalheight('.form--personal-holder .form-group');
    });