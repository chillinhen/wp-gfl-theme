<?php
/*
  Template Name: Homepage
 */
?>

<?php get_header(); ?>

<div class="container">
    
    <!--content -->
    <div id="main-board" class="col-md-12" role="pinboard">
        <ul id="tiles">
        <?php
        $teaser_intro = get_field('teaser_intro');
        if ($teaser_intro):
            ?>
            <li role="intro">
                <?php
                // override $post
                $post = $teaser_intro;
                setup_postdata($post);
                ?>

                <?php get_template_part('partials/panel', get_post_format()); ?>

            <?php wp_reset_postdata(); ?>
            </li>
        <?php endif; ?>

        <?php
        $teaser_01 = get_field('teaser_01');
        if ($teaser_01):
            ?>
            <li role="teaser" class="featured">
                
                <?php
                // override $post
                $post = $teaser_01;
                setup_postdata($post);
                ?>

                <?php get_template_part('partials/panel', get_post_format()); ?>

            <?php wp_reset_postdata(); ?>
            </li>
        <?php endif; ?>
            <!--- Sticky --->
                    <?php
        $post_args = array(
            	'posts_per_page' => 1,
                'post__in' => get_option('sticky_posts'),
                'ignore_sticky_posts' => 1,
);
        $stickyPost = new WP_Query($post_args);
        $stickyPost->set('post_type', 'post');
        ?>
            <?php if ($stickyPost->have_posts()) : ?>
            <li role="news" class="sticky">
                <?php while ($stickyPost->have_posts()) : $stickyPost->the_post(); ?>
                    <?php get_template_part('partials/panel', get_post_format()); ?>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </li>
    <?php endif; ?>
            <!--- Panels --->
    <?php
//$parent = $post->ID;
    $filter = array(
        'post_type' => 'page',
        'post_parent' => 357, //id from Page NR. 1 -> (ToDO find the ID from Page with nR 1)
        'posts_per_page' => 12,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    $panelLoop = new WP_Query($filter);
    ?>
        <?php if ($panelLoop->have_posts()) : ?>
                <?php while ($panelLoop->have_posts()) : $panelLoop->the_post(); ?> 
                <li class="parent-post">
                <?php get_template_part('partials/panel', get_post_format()); ?>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        <?php endif; ?>
        
</ul>
    </div><!--end mainboard -->
    <!--        <section role="gallery" class="row clearfix">
        <?php #get_template_part('partials/gallery', 'article_hor'); ?>
    </section>-->
</div>

<?php get_footer(); ?>