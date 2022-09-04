AOS.init();
function sidebar_active(){
   
    $('.responsive_menu').css("display","block");
    $('#menu_icon').css("display","none");
    $('#menu_close_icon').css("display","block");
    $('header').css("background-color","#100E0E");
   
  
    

}
function sidebar_inactive(){
    $('.responsive_menu').css("display","none")
    $('#menu_icon').css("display","block");
    $('#menu_close_icon').css("display","none");
    $('header').css("background-color","transparent");
    
}
function sidebar_inactive_responsive(){
    $('.responsive_menu').css("display","none")
    $('#menu_icon').css("display","none");
    $('#menu_close_icon').css("display","none");
    $('header').css("background-color","transparent");
}

function myFunction(x) {
if (x.matches) { // If media query matches
sidebar_inactive_responsive();

}else{
sidebar_inactive();
} 
}

var x = window.matchMedia("(min-width: 769px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes