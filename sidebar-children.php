<?php
$parent = $post->ID;
$filter = array(
    'post_type' => 'page',
    'post_parent' => $parent,
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$childLoop = new WP_Query($filter);
?>
<?php
if ($childLoop->have_posts()) :
    while ($childLoop->have_posts()) : $childLoop->the_post();
        get_template_part('partials/article-sidebar', get_post_format());
    endwhile;
    wp_reset_query();
else :
    get_sidebar('articles');
endif;
?>