<?php get_header(); ?>
<main class="content_box">
<div class="container">
<div class="jumbotron w-100 bg-light text-center">
  <h1 class="display-4"><?php _e( 'Page not found' ); ?></h1>
  <p class="lead">
    <a class="btn btn-primary btn-lg red" href="<?php echo home_url(); ?>" role="button"><?php _e( 'Homepage' ); ?></a>
  </p>
</div>
</div>
</main>
<?php get_footer(); ?>
