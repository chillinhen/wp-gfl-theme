<?php

/*
  Plugin Name: my Customs Posts
  Description: seitenspezifische Custom Posts
 */

//create custom posts

//Medienbeiträge
add_action('init', 'my_custom_post_medienbeitrage');
function my_custom_post_medienbeitrage() {
register_post_type('medienbeitrage', array(
'label' => 'Medienbeiträge',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'medienbeitrage', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','thumbnail','author','page-attributes','post-formats'),
'taxonomies' => array('category','post_tag'),
'labels' => array (
  'name' => 'Medienbeiträge',
  'singular_name' => 'Medienbeitrag',
  'menu_name' => 'Medienbeiträge',
  'add_new' => 'Add Medienbeitrag',
  'add_new_item' => 'Add New Medienbeitrag',
  'edit' => 'Edit',
  'edit_item' => 'Edit Medienbeitrag',
  'new_item' => 'New Medienbeitrag',
  'view' => 'View Medienbeitrag',
  'view_item' => 'View Medienbeitrag',
  'search_items' => 'Search Medienbeiträge',
  'not_found' => 'No Medienbeiträge Found',
  'not_found_in_trash' => 'No Medienbeiträge Found in Trash',
  'parent' => 'Parent Medienbeitrag',
)
) ); }

//Presse
add_action('init', 'my_custom_post_presse');
function my_custom_post_presse() {
register_post_type('presse', array(
'label' => 'Presse',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'presse', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'taxonomies' => array('category','post_tag'),
'labels' => array (
  'name' => 'Presse',
  'singular_name' => 'Presseartikel',
  'menu_name' => 'Presse',
  'add_new' => 'Add Presseartikel',
  'add_new_item' => 'Add New Presseartikel',
  'edit' => 'Edit',
  'edit_item' => 'Edit Presseartikel',
  'new_item' => 'New Presseartikel',
  'view' => 'View Presseartikel',
  'view_item' => 'View Presseartikel',
  'search_items' => 'Search Presse',
  'not_found' => 'No Presse Found',
  'not_found_in_trash' => 'No Presse Found in Trash',
  'parent' => 'Parent Presseartikel',
)
) ); 
}

//Pressefilter
add_action('init', 'my_custom_tax_pressefilter');
function my_custom_tax_pressefilter() {
register_taxonomy( 'pressefilter',array (
  0 => 'presse',
),
array( 'hierarchical' => false,
	'label' => 'Pressefilter',
	'show_ui' => true,
	'query_var' => true,
	'show_admin_column' => true,
	'labels' => array (
  'search_items' => 'Filter',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}

//Sponsoren
add_action('init', 'my_custom_post_sponsoren');
function my_custom_post_sponsoren() {
register_post_type('sponsoren', array(
'label' => 'Sponsoren',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'sponsoren', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Sponsoren',
  'singular_name' => 'Sponsor',
  'menu_name' => 'Sponsoren',
  'add_new' => 'Add Sponsor',
  'add_new_item' => 'Add New Sponsor',
  'edit' => 'Edit',
  'edit_item' => 'Edit Sponsor',
  'new_item' => 'New Sponsor',
  'view' => 'View Sponsor',
  'view_item' => 'View Sponsor',
  'search_items' => 'Search Sponsoren',
  'not_found' => 'No Sponsoren Found',
  'not_found_in_trash' => 'No Sponsoren Found in Trash',
  'parent' => 'Parent Sponsor',
)
) ); }

//Sponsorenfilter
add_action('init', 'my_custom_tax_sponsoren_filter');
function my_custom_tax_sponsoren_filter() {
register_taxonomy( 'sponsoren-filter',array (
  0 => 'sponsoren',
),
array( 'hierarchical' => true,
	'label' => 'Sponsoren-Filter',
	'show_ui' => true,
	'query_var' => true,
	'show_admin_column' => true,
	'labels' => array (
  'search_items' => '',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}

//Carousel
add_action('init', 'my_custom_post_carousel_item');
function my_custom_post_carousel_item() {
register_post_type('carousel-item', array(
'label' => 'Carousel',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'carousel-item', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','custom-fields','comments','revisions','thumbnail','author'),
'taxonomies' => array('category','post_tag'),
'labels' => array (
  'name' => 'Carousel',
  'singular_name' => 'Carousel Item',
  'menu_name' => 'Carousel',
  'add_new' => 'Add Carousel Item',
  'add_new_item' => 'Add New Carousel Item',
  'edit' => 'Edit',
  'edit_item' => 'Edit Carousel Item',
  'new_item' => 'New Carousel Item',
  'view' => 'View Carousel Item',
  'view_item' => 'View Carousel Item',
  'search_items' => 'Search Carousel',
  'not_found' => 'No Carousel Found',
  'not_found_in_trash' => 'No Carousel Found in Trash',
  'parent' => 'Parent Carousel Item',
)
) ); }

//Banner
add_action('init', 'my_custom_post_banner_item');
function my_custom_post_banner_item() {
register_post_type('banner-item', array(
'label' => 'Banner',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'banner-item', 'with_front' => true),
'query_var' => true,
'supports' => array('title','revisions','thumbnail','author'),
'taxonomies' => array('category','post_tag'),
'labels' => array (
  'name' => 'Banner',
  'singular_name' => 'Banner Item',
  'menu_name' => 'Banner',
  'add_new' => 'Add Banner Item',
  'add_new_item' => 'Add New Banner Item',
  'edit' => 'Edit',
  'edit_item' => 'Edit Banner Item',
  'new_item' => 'New Banner Item',
  'view' => 'View Banner Item',
  'view_item' => 'View Banner Item',
  'search_items' => 'Search Banner',
  'not_found' => 'No Banner Found',
  'not_found_in_trash' => 'No Banner Found in Trash',
  'parent' => 'Parent Banner Item',
)
) );
flush_rewrite_rules();

}

?>
