<h1>horizontale Gallery</h1>
<?php
$post_object_hor = get_field('gallerie-horizontal');

/** Abfrage nach horizontaler Gallery** */
if ($post_object_hor):

    // override $post
    $post = $post_object_hor;
    setup_postdata($post);
    ?>
    <div class="col-sm-12 gallery-horizontal">
        <?php get_template_part('partials/article', 'list_carousel'); ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>