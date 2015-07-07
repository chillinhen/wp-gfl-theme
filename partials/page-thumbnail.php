<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (has_post_thumbnail()) : ?>
<div class="item">
    <?php the_post_thumbnail('wpbs-featured-carousel'); ?>
    </div>
<?php endif; ?>

<?php endwhile; endif; ?>