<footer class="footer">
    <div class="container p-3 d-flex justify-content-between">
        <span>&copy; <?php echo get_option('company_name'); ?> <?php echo date('Y'); ?></span>
        <a href="<?php echo get_permalink(get_post(411)); ?>" class="bold">
            <?php echo get_the_title(get_post(411)); ?>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
