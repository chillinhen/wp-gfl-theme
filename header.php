<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|', true, 'right'); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

    </head>

    <body <?php body_class(); ?>>

	<header role="banner" class="banner" id="header">
            
	    <div class="row banner">
                <div class="container">
		<div class="col-md-2">
		    <a class="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/img/Logo.jpg" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<div class="col-md-10">
		    <?php if (is_front_page()) : ?>
			<?php get_template_part('partials/carousel'); ?>
                    <?php elseif (is_search()) :
                        add_custom_background();?>


                    <?php elseif (is_page()) : ?>
                    
                        <?php get_template_part('partials/banner'); ?>
		    <?php endif; ?>
		</div>
                </div>
	    </div>
	    <div class="row brand">
                <div class="container">
		    <div class="col-md-3">
			    <a id="brand" href="<?php echo home_url(); ?>">
			    <?php bloginfo('name'); ?>
			    - <?php echo get_bloginfo('description'); ?>
			    </a>
		    </div>
		    <div class="col-md-9">
			<div id="meta-nav">
			    <?php //if(of_get_option('search_bar', '1')) {?>
			    <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
				<div class="form-group">
				    <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search', 'wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
				    <i class="fa fa-search fa-lg"></i>
				</div>
			    </form>
			    <?php wpGLF_meta_nav(); ?>
			    <?php //} ?>
			</div>
		    </div>
                </div>
	    </div>
	</header>
	<section role="content">
	    <nav id="main-nav" class="container">
		<div class="navbar navbar-default">
		    <div class="collapse navbar-collapse navbar-responsive-collapse">
			<a class="navbar-brand visible-xs-inline-block hidden-lg" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

		    </div>
		</div>
	    </nav>
	    <div id="breadcrumb" class="container">
		<div class="row">
		    <div class="col-md-12">
			
			<?php if(!(is_front_page() )) :
			    breadcrumb_trail(); 
			endif; ?>
		    </div>
		</div>
	    </div>
