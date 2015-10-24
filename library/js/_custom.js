
jQuery(document).ready(function($) {
    alert('hallo');

    
    
    //Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scroll-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

    


    
    // fix the main menu on top 
    if (window.matchMedia('(min-width: 769px)').matches) {
        // justify the main menu
        $('nav .navbar-default > .navbar-collapse > ul').removeClass('navbar-nav').addClass('nav-tabs').addClass('nav-justified');
//    $('.current_page_item').parent('ul').parent('li').addClass('active');
//    $('li.active').parent('ul').parent('li').addClass('active').parent('ul').parent('li').addClass('active');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 450) {
                $('.navbar')
                        .addClass('navbar-fixed-top');
                $('.navbar-brand').removeClass('hidden-lg');

            } else {
                $('.navbar')
                        .removeClass('navbar-fixed-top');
                $('.navbar-brand').addClass('hidden-lg');
            }
        });
    }
    

    
    
    
    

    });


 
