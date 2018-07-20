$(function(){
    console.log('ПРивект');
    $('.dropdown-toggle-my').hover(function() {
        $(this).find('.dropdown-menu-my').delay(200).fadeIn(500);
    }, function() {

    });

   /* $('.dropdown-menu-my').hover(function(){
        console.log('jk');
        $(this).delay(200).fadeIn(500);
    }, function() {
        $(this).delay(200).fadeOut(500);
    });*/
});