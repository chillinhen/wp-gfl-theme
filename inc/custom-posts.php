<?php 
add_action( 'init', 'create_foerderer_types_taxonomy', 0 );

function create_foerderer_types_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'popular_items' => __( 'Popular Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'separate_items_with_commas' => __( 'Separate types with commas' ),
    'add_or_remove_items' => __( 'Add or remove types' ),
    'choose_from_most_used' => __( 'Choose from the most used types' ),
    'menu_name' => __( 'Types' ),
  );
  // Now register the non-hierarchical taxonomy like tag

  register_taxonomy('types','foerderer',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}

//Förderer
function my_custom_post_foerderer() {
    $labels = array(
        "name" => "Förderer",
        "singular_name" => "Förderer",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Fördererschnipsel mit Bild und Text, für interne und externe Verlinkungen ",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "foerderer", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("foerderer", $args);
}

add_action('init', 'my_custom_post_foerderer');
?>