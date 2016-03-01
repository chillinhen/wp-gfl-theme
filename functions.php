<?php
require_once 'inc/custom-posts.php';

add_action('after_setup_theme', 'wpGFL_theme_setup');

function wpGFL_theme_setup() {
    
    add_image_size( 'wpbs-featured-carousel', 1024, 506, true);
    add_image_size( 'wpbs-page-float', 512, 300, true);
    
    add_theme_support( 'custom-header', $args);
    $args = array(
            'width'         => 1024,
            'height'        => 506,
            'default-image' => get_template_directory_uri() . '/library/img/default-header.jpg',
    );
    
    // Adding Translation Option
    load_theme_textdomain('wpGFL', get_stylesheet_directory_uri() . '/languages');

    //remove custom background temporarily - maybe we can use it later
    // remove_theme_support('custom-background');
    // deregister parent script
      add_action('wp_enqueue_scripts', 'register_modernizr');

    function register_modernizr() {
        wp_deregister_script('modernizr', get_template_directory_uri().'/library/js/modernizr.full.min.js');
        wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', array('jquery'), '1.2', true);
    }
    //init scripts
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {
                
                wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/library/js/custom.js', array('jquery'), '1.2', true);
                if ( wp_is_mobile() ) {
                    wp_enqueue_script('responsive', get_stylesheet_directory_uri() . '/library/js/responsive.js', array('custom', 'jquery'), '1.0', true);
                }
            }

        }
    }


    add_action('wp_enqueue_scripts', 'my_scripts');

    //init styles
    if (!function_exists("my_styles")) {
	if (!is_admin()) {

	    function my_styles() {
                //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style('gflStyle', get_stylesheet_directory_uri() . '/library/css/gflStyle.css', 'style', '1.0', 'screen');

		wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700,700italic,400italic|PT+Sans+Narrow|PT+Sans+Caption|Open+Sans:400,400italic,600,600italic,700,700italic|Open+Sans+Condensed:300|Lato:400,700,300', 'style', '1.0', 'screen');
		wp_enqueue_style('googleFonts');

		wp_register_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', '4.4.0', 'screen');
		wp_enqueue_style('fontawesome');
	    }

	}
    }
    add_action('wp_enqueue_scripts', 'my_styles');
    

function gfl_bootstrap_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu( 
    	array( 
    		'menu' => 'main_nav', /* menu name */
    		'menu_class' => 'nav navbar-nav',
    		'theme_location' => 'main_nav', /* where in the theme it's assigned */
    		'container' => 'false', /* container class */
    		'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
    		// 'depth' => '2',  suppress lower levels for now 
    		'walker' => new Bootstrap_walker()
    	)
    );
}


    function wpGLF_meta_nav() {
	wp_nav_menu(
		array(
		    'menu' => 'meta-menu',
		    'menu_class' => 'nav navbar-nav navbar-right',
		    'theme_location' => 'meta-menu',
		    'container' => 'false'
		)
	);
    }
        // additional menus
    if (!function_exists('my_menus')) :

	// Register wp_nav_menus
	function my_menus() {
	    register_nav_menus(
		    array(
			'meta-menu' => 'Meta Menu',
			//'breadcrumb' => 'Breadcrumb'
                        //'main_nav' => 'menu'
	    ));
	}

	add_action('init', 'my_menus');

    endif;
    

    //remove current sidebars
    function remove_sidebars() {
	#unregister_sidebar('footer1');
	#unregister_sidebar('footer2');
	unregister_sidebar('footer3');
	#unregister_sidebar('sidebar1');
	unregister_sidebar('sidebar2');
    }

    add_action('init', 'remove_sidebars');

    function add_new_sidebars() {
	 register_sidebar(array(
      'id' => 'footer1',
      'name' => 'Footer 1',
      'before_widget' => '<div id="%1$s" class="col-sm-6 widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));
    register_sidebar(array(
      'id' => 'footer2',
      'name' => 'Footer 2',
      'before_widget' => '<div id="%1$s" class="col-sm-6 widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));
    register_sidebar(array(
      'id' => 'footer3',
      'name' => 'Footer 3',
      'before_widget' => '<div id="%1$s" class="col-sm-12 widget %2$s text-center">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));

    }

    add_action('init', 'add_new_sidebars');
//customize more tag
    remove_filter('excerpt_more', 'wp_bootstrap_excerpt_more');

    function new_excerpt_more($more) {
	global $post;
	return '<p class="text-right clearfix"><a class="moretag btn btn-primary pull-right" href="' . get_permalink($post->ID) . '">' . __('weiterlesen', 'wpGFL') . '</a><p>';
    }

    add_filter('excerpt_more', 'new_excerpt_more');
}

//end theme setup
// Videos in WordPress Responsive einbetten
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
	return '<div class="elastic-video">' . $html . '</div>';
}

//enable excerpt
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'gfl_trim_excerpt');

function gfl_trim_excerpt($text) {
    $raw_excerpt = $text;
    if ('' == $text) {
	$text = get_the_content('');
	$text = strip_shortcodes($text);
	$text = apply_filters('the_content', $text);
	$text = str_replace(']]>', ']]&gt;', $text);
	$text = strip_tags($text, '<em><strong><i><b><a><p><li><ul><ol><td><tr><tbody><table><h5><h4><h3><h2><h1>');
	$excerpt_length = apply_filters('excerpt_length', 25);
	$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
	$words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
	if (count($words) > $excerpt_length) {
	    array_pop($words);
	    $text = implode(' ', $words);
	    $text = $text . $excerpt_more;
	} else {
	    $text = implode(' ', $words);
	}
    }
    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( '', 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}


?>