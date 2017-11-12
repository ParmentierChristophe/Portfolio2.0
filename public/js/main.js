if ($('#back-to-top').length) {
    var scrollTrigger = 250, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}


$(document).ready(function () {
    $('.nav-icon2').click(function () {
        $('.navigation').toggleClass('isOpen');
        $(this).toggleClass('open');
    });

    function closeMessage(el) {
        el.addClass('is-hidden');
    }

    $('.js-messageClose').on('click', function (e) {
        closeMessage($(this).closest('.Message'));
    });
});


$(function () {
    $(".pp").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".pp:hidden").slice(0, 4).slideDown();
        if ($(".pp:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});


/*
 // transitions page
 $(document).ready(function() {
 $("body").css("display", "none");
 $("body").fadeIn(600);
 });


 $(document).ready(function() {
 $("body").css("display", "none");

 $("body").fadeIn(600);

 $("a.transition").click(function(event){
 event.preventDefault();
 linkLocation = this.href;
 $("body").fadeOut(300, redirectPage);
 });

 function redirectPage() {
 window.location = linkLocation;
 }
 });
 */
