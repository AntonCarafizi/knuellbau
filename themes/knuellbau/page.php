<?php get_header(); ?>
<main role="main">
    <div class="container p-0 p-md-5 p-lg-5 p-xl-5 bg-transparent">
        <div class="container p-3 p-md-5 p-lg-5 p-xl-5 bg-white">
            <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <div class="clear"></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
