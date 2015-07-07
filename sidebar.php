    <?php #get_template_part('partials/post-thumbnail');?>
    <?php if (is_active_sidebar('sidebar1')) : ?>

        <?php dynamic_sidebar('sidebar1'); ?>
<?php if (function_exists (VSslideshow_slideshow)) VSslideshow_slideshow(); ?>

    <?php endif; ?>