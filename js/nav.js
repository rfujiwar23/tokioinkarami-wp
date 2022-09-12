(function($){
    $(document).ready(function(){
        $(window).scroll(function () {
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 500);
        });
    });
})(jQuery);