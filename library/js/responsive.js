jQuery(document).ready(function ($) {
    //alert('ich bin mobile');
    $('.navbar-toggle').click(function () {
        //$('#header').toggleClass('move-up');
    });
    
    var navButton = $('.navbar-responsive-collapse a');
    
    var tapped=false;
    navButton.on("touchstart", function (e) {
        if (!tapped) { //if tap is not set, set up single tap
            tapped = setTimeout(function () {
                e.preventDefault();
                //insert things you want to do when single tapped
            }, 100);   //wait 300ms then run single click code
        } else {    //tapped within 300ms of last tap. double tap
            clearTimeout(tapped); //stop single tap callback
            window.location.href = $(this).attr('href');
            //insert things you want to do when double tapped
        }
        e.preventDefault()
    });
    
     navButton.bind('touchstart hover', function() {
        $(this).parent('li.dropdown').toggleClass('open');
    });

});

