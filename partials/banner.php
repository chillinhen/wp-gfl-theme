<?php $image = get_field('banner'); ?>
<?php if (!empty($image)): ?>
    <div class="item">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>

<?php else : ?>
  <div class="item">
                            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                        </div>
<?php endif; ?>

