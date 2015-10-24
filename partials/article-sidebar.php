<?php
global $more;
$more = 0;

$children = get_pages('child_of=' . $post->ID);
        if (count($children) != 0) :
            $iconMore = '<i class="fa fa-chevron-right pull-right"></i>';
        endif;
?>
<?php $image = get_field('banner'); ?>
<?php
if (!empty($image)):
    $class = 'thumbnail-style';
else :
    $class = 'pure-style';
endif;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header class="<?php echo $class; ?>">
        <h3>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><?php echo $iconMore; ?></a>

        </h3>
    </header>
<?php if (!empty($image)): ?>
        <div class="article-thumbnail <?php echo $class; ?>">

            <div class="item">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>

        </div>
        <?php endif; ?>
    <footer>
<?php get_template_part('partials/edit', 'info'); ?>
    </footer>

    <!-- end article header -->

</article> <!-- end article -->