
<?php get_header(); ?>
<div id="content" class="row">
    <div class="container">

        <?php if (have_posts()) : ?>
            <div class="page-header">
                        <?php if (is_category()) { ?>
                           <h2>
                                <?php single_cat_title(); ?>
                            </h2>
                        <?php } elseif (is_tag()) { ?> 
                           <h2>
                                <?php single_tag_title(); ?>
                            </h2>
                        <?php } elseif (is_author()) { ?>
                           <h2>
                                <?php _e('Beiträge von: ')?><?php the_author_meta('display_name'); ?>
                            </h2>
                        <?php } elseif (is_day()) { ?>
                           <h2>
                                <?php the_time('l, F j, Y'); ?>
                            </h2>
                        <?php } elseif (is_month()) { ?>
                           <h2>
                                <?php the_time('F Y'); ?>
                            </h2>
                        <?php } elseif (is_year()) { ?>
                           <h2>
                                <?php the_time('Y'); ?>
                            </h2>
                        <?php } ?>
                    </div>
            <?php if (is_category() || is_tag()) : ?>
                <div id="main-board" class="col-md-12" role="pinboard">
                    
            <!-- <h2><?php #echo $post_type->labels->singular_name;  ?></h2> ToDo: proof later-->
                    <ul id="tiles">
                        <?php while (have_posts()) : the_post(); ?>
                            <li class="box"><?php get_template_part('partials/presse-article', get_post_format()); ?></li>
                            <?php endwhile; ?>
                    </ul>
                    <?php get_template_part('partials/paging'); ?>

                <?php elseif (is_author()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>