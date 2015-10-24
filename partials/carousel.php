<?php
$argsCarousel = array(
    'post_type' => 'carousel-item',
    'orderby' => 'random');

$newCarousel = new WP_Query($argsCarousel);
?>
<?php if ($newCarousel->have_posts()) : ?>
    <div id="carousel-top-fold" class="carousel slide carousel-fade" data-wrap="true">
        <div class="carousel-inner" role="listbox">
<!-- Wrapper for slides -->
        <?php while ($newCarousel->have_posts()) : $newCarousel->the_post(); ?>
            <?php get_template_part('partials/carousel', 'item'); ?>
        <?php endwhile; ?>
    </div>

        <!-- Indicators -->
                <ol class="carousel-indicators">
                <?php $counter = 0; ?>
                <?php while ($newCarousel->have_posts()) : $newCarousel->the_post(); ?>
                    <li data-target="#carousel-top-fold" data-slide-to="<?php echo $counter; ?>"><?php echo $counter; ?> </li>
                    <?php $counter++; ?>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            </ol>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-top-fold" role="button" data-slide="prev">
            <i class="fa fa-chevron-circle-left fa-lg"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-top-fold" role="button" data-slide="next">
            <i class="fa fa-chevron-circle-right fa-lg"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>