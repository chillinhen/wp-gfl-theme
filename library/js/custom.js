
jQuery(document).ready(function($) {
    //alert('hallo');

    // add some custom classes
    //$('#menu-hauptmenu').addClass('navbar-right');

    // elastic video 
    $('article.format-video iframe').wrap("<div class='elastic-video'></div>");



    $('#caroufredsel img').each(function(){
	$(this).parent('a').wrap('<li></li>');
    });


//	Scrolled by user interaction
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

});





