jQuery(document).ready(function ($) {
    var navButton = $('.navbar-responsive-collapse >ul >li >a');
   navButton.bind('touchstart', function(e) {
        e.preventDefault();
    });
   navButton.bind('touchend', function(e) {
       window.location.href = $(this).attr('href'); 
    });
    navButton.bind('touchstart hover', function() {
        $(this).parent('li.dropdown').toggleClass('open');
    });
    
    $('.navbar-toggle').click(function(){
        //alert('hallo');
        $('#main').toggleClass('move-to-top');
    });
    
    //Gallery
    $('.gallery-item').bind('touchstart hover',function(){
    $(this).toggleClass('hover');
});

$('.gallery-item a').bind('touchstart click',function(e){
   e.preventDefault();
});

});

