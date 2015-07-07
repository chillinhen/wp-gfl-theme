<?php
global $more;
$more = 0;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>
        <div class="article-header">
            
            <h3>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> <i class="pull-right fa fa-caret-right"></i></a>
                
            </h3>
            <?php get_template_part('partials/banner'); ?>
        </div>
        <footer>
            <?php get_template_part('partials/edit','info');?>
        </footer>

    </header> <!-- end article header -->

</article> <!-- end article -->