</section>
<footer>
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer1')) : ?>

                <?php dynamic_sidebar('footer1'); ?>

            <?php endif; ?>
            <?php if (is_active_sidebar('footer2')) : ?>

                <?php dynamic_sidebar('footer2'); ?>

            <?php endif; ?>
            <?php if (is_active_sidebar('footer3')) : ?>

                <?php dynamic_sidebar('footer3'); ?>

            <?php endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); // js scripts are inserted using this function ?>


</body>

</html>