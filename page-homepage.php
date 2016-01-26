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
            <li role="teaser" class="sticky">
                
                <?php
                // override $post
                $post = $teaser_01;
                setup_postdata($post);
                ?>

                <?php get_template_part('partials/panel', get_post_format()); ?>

            <?php wp_reset_postdata(); ?>
            </li>
        <?php endif; ?>
            <!--- Bildungsklick --->
 
            <li role="news" class="featured" >
                <article id="ticker" class='clearfix' role="article">

                    <header>
                        <hgroup class="teaser-header">
                            <h2 class="single-title" itemprop="headline">
                                <i class="fa fa-star"></i>
                                <a>Bildungsklick</a>
                            </h2>
                        </hgroup>
                    </header>
                    <section>
                        <script type="text/javascript">// <![CDATA[
          BILDUNGSKLICK_COLOR_BORDER = '#ffffff';
          BILDUNGSKLICK_COLOR_BG = '#ffffff';
          BILDUNGSKLICK_COLOR_LINK = '#6196CA';
          BILDUNGSKLICK_FONT_SIZE = '16';
          BILDUNGSKLICK_ANZAHL_MELDUNGEN = '4';
          BILDUNGSKLICK_TOPIC_NAME = 'gewalt-in-der-schule';
          BILDUNGSKLICK_WIDTH = '320';
        // ]]></script>
                        <script src="http://rss.bildungsklick.de/ticker/bildungsnachrichten.js" type="text/javascript">// <![CDATA[

                        // ]]></script>
                        <div id="bildungsklick_fuss"><a href="http://bildungsklick.de" target="_blank">
                                bildungsklick.de</a></div>
                    </section>
                </article>
            </li>

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