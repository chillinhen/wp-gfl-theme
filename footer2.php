<div id="footer2" class="col-md-6" role="complementary">
    <nav class="clearfix">
	<?php wpGLF_meta_nav(); ?>
    </nav>
    <?php if (is_active_sidebar('footer2')) : ?>

	<?php dynamic_sidebar('footer2'); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->

        <div class="alert alert-message">

    	<p><?php _e("Please activate some Widgets", "wpbootstrap"); ?>.</p>

        </div>

    <?php endif; ?>

</div>