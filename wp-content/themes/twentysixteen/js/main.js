function menuBehaviour(){
  var lastScrollTop = 0;
  $(window).scroll(function(event){
     var st = $(this).scrollTop();
     if (st > lastScrollTop && st > 500){
       $("header").addClass("hide");
     } else {
       $("header").removeClass("hide");
     }

     if(st > 220)
     {
       $("header").addClass("notTransp");
     } else{
       $("header").removeClass("notTransp");
     }

     lastScrollTop = st;
  });
}

function manuHamburger(){
  $(".ham_icon").click(function(){
      $(".ham_menu").slideToggle();
  });
}

function carousel(){
    $('.carousel').carousel({
    interval: 3000
  });
}

$(document).ready(function(){
  menuBehaviour();
  carousel();
  manuHamburger();
});
