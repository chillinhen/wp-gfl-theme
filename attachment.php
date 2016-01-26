
<?php get_header(); ?>
<div id="content" class="row">
    <div class="container">

        <?php if (have_posts()) : ?>
            <div class="page-header"><?php the_title(); ?></div>
            
                <div id="main-board" class="col-md-12" role="pinboard">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                        <?php get_template_part('partials/article', '404'); ?>
                <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>