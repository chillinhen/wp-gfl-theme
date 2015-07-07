<?php
$parent = $post->ID;
$filter = array(
    'post_type' => 'page',
    'post_parent' => $parent,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$childLoop = new WP_Query($filter);
?>
<?php
if ($childLoop->have_posts()) :
    if (has_post_thumbnail()) :
        ?>
        <div class="thumbnail">
            <?php get_template_part('partials/post-thumbnail'); ?>
        </div>
    <?php
    endif;

    while ($childLoop->have_posts()) : $childLoop->the_post();
        get_template_part('partials/article-sidebar', get_post_format());
    endwhile;
    wp_reset_postdata();
else :
    get_sidebar('articles');
endif;
?>