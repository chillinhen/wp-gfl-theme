
jQuery(document).ready(function($) {
    //alert('hallo');
    //remove all lead classes
    $('p').each(function(){
        if($(this).hasClass('lead')){
            $(this).removeClass('lead');
        }
    });
    
    //add float to img attachments
    $('div[id*="attachment_"]').each(function(){
        if($(this).hasClass('alignleft')){
            $(this).addClass('pull-left');
        }
        if($(this).hasClass('alignright')){
            $(this).addClass('pull-right');
        }
    });
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


    //place the brand
    var brandHeight = $('#brand').height();
    $('.row.brand [class*="col-"]').css('height',brandHeight);

    // elastic video 
    $('article.format-video iframe').wrap("<div class='elastic-video'></div>");
    
    // justify the main menu
    $('ul#menu-hauptmenu').removeClass('navbar-nav').addClass('nav-tabs').addClass('nav-justified');
    $('.current_page_item').parent('ul').parent('li').addClass('active');
    $('li.active').parent('ul').parent('li').addClass('active').parent('ul').parent('li').addClass('active');
    //show special navs
    $('a[title="call-to-action"]').each(function(){
        $(this).addClass('call-to-action');
    });
    // fix the main menu on top 
    $(window).scroll(function() {
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
    
    $('#caroufredsel img').each(function(){
	$(this).parent('a').wrap('<li></li>');
    });
    //Scrolled by user interaction
    $('#caroufredsel').carouFredSel({
	auto: false,
	prev: '#prev2',
	next: '#next2',
	pagination: "#pager2",
	mousewheel: true,
	swipe: {
	    onMouse: true,
	    onTouch: true
	}
    });
    
    //give active-class to first carousel item
    $('.carousel-inner').each(function() {
	$(this).children('.item:first-child').addClass('active');
    });
    $('.carousel-indicators').each(function() {
	$(this).children('li:first-child').addClass('active');
    });

var $container = $('#main-board');

	$container.imagesLoaded(function() {
	    $container.masonry({
		itemSelector: '#tiles li'
	    });
	});
    });
