<?php
/*
  Template Name: Für Förderer
 */
?>
<?php get_header(); ?>
<div id="content" class="row">
    <div class="container">

                <?php
                $filter = get_post_type($post_id);
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
            $wp_query->query('showposts=9&post_type=foerderer&paged=' . $paged);
                ?>
            <?php wp_tag_cloud('orderby=name&taxonomy=sponsoren-filter&separator= | &flat&echo=true&topic_count_text_callback=default_topic_count_text'); ?>
            <div id="main-board" class="col-md-12" role="pinboard">
                	
                <ul id="tiles">
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                        ?>

                        <li> <?php get_template_part('partials/panel-article', get_post_format()); ?>

<?php endwhile; ?></li>
                </ul>
            </div>
            <div id="paging" class="col-md-offset-5 col-md-2">

                <nav>
                    <span class="pull-left"><?php previous_posts_link('<i class="fa fa-caret-left"></i> Newer') ?></span>
                    <span class="pull-right"><?php next_posts_link('Older <i class="fa fa-caret-right"></i>') ?></span>
                </nav>
            </div>

            <?php
            $wp_query = null;
            $wp_query = $temp;  // Reset
            ?>
    </div>
</div>
</div>
<?php get_footer(); ?>