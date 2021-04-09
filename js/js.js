// $(function() {
//     $nav = $('.fixed-box1');
//     $nav.css('width', $nav.outerWidth());
//     $window = $(window);
//     $h = $nav.offset().top;
//     $window.scroll(function() {
//         if ($window.scrollTop() > $h && $(window).width() >= 994) {
//             $nav.addClass('fixed');
//         } else {
//             $nav.removeClass('fixed');
//         }
//     });
// });


// $("#techical-tab" || "#nav-advantages-tab" || "#nav-using-tab").on("click", function() {
//     $(".cliked").slideDown("slow");
// });


// // Mouse over
// $('body').on('mouseover', '.dropdown', function(e) {
//     $(this).children('.dropdown-toggle').dropdown('show');
// });

// // Mouse leave
// $('body').on('mouseleave', '.dropdown', function(e) {
//     $(this).children('.dropdown-toggle').dropdown('hide');
// });

<

$(document).ready(function() {
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});