<?php get_header(); ?>
<main role="main">
    <div class="container p-0 p-md-5 p-lg-5 p-xl-5 bg-transparent">
        <div class="container p-3 p-md-5 p-lg-5 p-xl-5 bg-white">
            <div class="jumbotron w-100 bg-light text-center">
                <h1 class="display-3"><?php _e('Error'); ?> 404</h1>
                <h2 class="display-4"><?php _e('Page not found'); ?></h2>
                <p class="lead">
                    <a class="btn btn-primary btn-lg red" href="<?php echo home_url(); ?>" role="button"
                       title="<?php _e('Go to Homepage'); ?>"><?php _e('Go to Homepage'); ?></a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
