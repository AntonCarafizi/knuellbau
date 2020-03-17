<?php get_header(); ?>
<main class="content_box">
<div class="container">
<div class="jumbotron w-100 bg-light text-center">
  <h1 class="display-4"><?php _e( 'Page not found' ); ?></h1>
  <p class="lead">
    <a class="btn btn-primary btn-lg red" href="<?php echo home_url(); ?>" role="button" title="<?php _e( 'Go to Homepage' ); ?>"><?php _e( 'Go to Homepage' ); ?></a>
  </p>
</div>
</div>
</main>
<?php get_footer(); ?>
