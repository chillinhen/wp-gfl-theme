jQuery(document).ready(function ($) {

    //remove all lead classes
    $('p').each(function () {
        if ($(this).hasClass('lead')) {
            $(this).removeClass('lead');
        }
    });

    //add float to img attachments
    $('div[id*="attachment_"]').each(function () {
        if ($(this).hasClass('alignleft')) {
            $(this).addClass('pull-left');
        }
        if ($(this).hasClass('alignright')) {
            $(this).addClass('pull-right');
        }
    });

    // elastic video 
    $('article.format-video iframe').wrap("<div class='elastic-video'></div>");

    //show special navs
    $('a[title="call-to-action"]').each(function () {
        $(this).addClass('call-to-action');
    });

    // fix the main menu on top 
    if (window.matchMedia('(min-width: 768px)').matches) {
        // justify the main menu
        $('nav .navbar-default > .navbar-collapse > ul').removeClass('navbar-nav').addClass('nav-tabs').addClass('nav-justified');
//    $('.current_page_item').parent('ul').parent('li').addClass('active');
//    $('li.active').parent('ul').parent('li').addClass('active').parent('ul').parent('li').addClass('active');


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
        
        $(window).scroll(function () {
            if ($(this).scrollTop() > 450) {
                $('.navbar')
                        .addClass('navbar-fixed-top');
                $('.navbar-brand').removeClass('hidden-lg');

            } else {
                $('.navbar')
                        .removeClass('navbar-fixed-top');
                $('.navbar-brand').removeClass('hidden-lg');
            }
        });
    }
    
     
    //give active-class to first carousel item
    $('.carousel-inner').each(function () {
        $(this).children('.item:first-child').addClass('active');
    });
    $('.carousel-indicators').each(function () {
        $(this).children('li:first-child').addClass('active');
    });
  
  
    //detect broken images and remove them
    // Replace source
//        $('img').error(function(){
//                $(this).attr('src', 'missing.png');
//        });

        // Or, hide them
        $("img").error(function(){
                $(this).hide();
        });
        
        //disable carousel controls if there is only one item
        $('.carousel').each(function () {
            //
            if ($(this).children('.carousel-inner').children('.item').length === 1) {
                $(this).children('.carousel-indicators').remove();
                $(this).children('.carousel-control').remove();
            }
        });

    
});