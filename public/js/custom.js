



function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    }

   

    $('li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });




$('li.collapse').hover(function() {
$(this).find('.collapse.menu').stop(true, true).delay(200).fadeOut(500);
}, function() {
$(this).find('.collapse.menu').stop(true, true).delay(200).fadeIn(500);
});




// $(function(){
// $('[data-toggle="collapse"]').tooltip();
// $(".side-nav .collapse").on("hide.bs.collapse.menu", function() {                   
//     $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
// });
// $('.side-nav .collapse').on("show.bs.collapse.menu", function() {                        
//     $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
// });
// }) 


$(document).ready(function() {
var banner_height = $("#navscroll").height();
var lastScrollTop = 0;
$(window).scroll(function() {
var scroll = $(window).scrollTop();
var currScrollTop = $(this).scrollTop();
if (scroll >= banner_height && currScrollTop > lastScrollTop) {
  $("#navheader").hide();
} else {
  $("#navheader").show();
}
lastScrollTop = currScrollTop;

});

});



$('li.dropdown').hover(function() {

$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);

}, function() {

$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

});