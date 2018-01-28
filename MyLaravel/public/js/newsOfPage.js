
$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 55) {
      // $('.navbar').addClass('navbar-fixed');
      $('.navbar').addClass('navbar-fixed-zero');
      if ($(window).scrollTop() > 475){
        $('.infoUser').addClass('infoUser-fixed-zero');
      }
    }
    if ($(window).scrollTop() < 55) {
      $('.navbar').removeClass('navbar-fixed-zero');
    }
    if ($(window).scrollTop() < 475){
      $('.infoUser').removeClass('infoUser-fixed-zero');
    }
  });
});


function urlFace(){
  window.open('https://www.facebook.com/bi.diep.7');
}
function urlInsta(){
  window.open('https://www.instagram.com/diep.9/');
}
function urlGit(){
  window.open('https://gist.github.com/');
}

$(function () {
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".divNews-more:hidden").slice(0, 1).slideDown();
        if ($(".divNews-more:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
    });
});




