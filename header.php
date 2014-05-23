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



	<header role="banner">
	    <div class="row top-nav">
		<div class="col-md-12">
		    <?php wpGLF_meta_nav(); ?>
		</div>
	    </div>
	    <div class="container">
		
		<div class="row">
		    <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/img/Logo.jpg" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<div class="row">
		    <div class="col-md-12">
			<hgroup>
			    <h1>
				<?php bloginfo('name'); ?>
			    
			    <span>
				<?php echo get_bloginfo('description'); ?>
			    </span>
				</h1>
			</hgroup>
		    </div>
		</div>


		    
		</div>
	    </div>

	</div>
    </header>
    <section role="navigation">
	<div class="container">

	    <div class="navbar navbar-default">
		<div class="navbar-header">
		    <!-- responsive button -->
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>


		</div>
		<div class="collapse navbar-collapse navbar-responsive-collapse">

		    <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

		</div>

	    </div>
	</div>
    </section>

    


