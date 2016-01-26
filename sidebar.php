<?php if (is_active_sidebar('sidebar1')) : ?>

    <?php dynamic_sidebar('sidebar1'); ?>
<?php endif; ?>

<!-- is there a vertical gallery ??? -->
<?php $post_object = get_field('gallery-vertical'); ?>
<?php
if ($post_object):
    // override $post
    $post = $post_object;
    setup_postdata($post);
    ?>
    <div class="gallery-vertical">
        <?php get_template_part('partials/article', 'list_carousel'); ?>
    </div>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>
<!-- end gallery -->