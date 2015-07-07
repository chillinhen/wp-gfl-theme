
<?php 

$image = get_field('banner');

if( !empty($image) ): ?>

	<div class="item"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>

<?php endif; ?>

