<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="<?php echo get_permalink(); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>"/>
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"/>
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?></title>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="top_headbar">
        <svg class="right position-absolute">
            <polygon class="right position-absolute" points="300 0, 1200 0,1200 275" />
        </svg>
        <div class="socialbox text-right">
            <a class="share-button"
               title="<?php _e('Share on'); ?> Facebook"
               href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_html(site_url()); ?>&t=<?php echo esc_html(get_bloginfo('description')); ?>"
               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
               target="_blank">
                <i class="fa fa-facebook-square fa-2x text-white mx-2 my-1"></i>
            </a>
            <a class="share-button"
               title="<?php _e('Share on'); ?> Twitter" class="twitter-share-button"
               href="http://twitter.com/share?text=<?php echo esc_html(get_bloginfo('name')); ?>&url=<?php echo esc_html(site_url()); ?>"
               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
               target="_blank">
                <i class="fa fa-twitter fa-2x text-white mx-2 my-1" aria-hidden="true"></i>
            </a>
            <a class="share-button"
               title="<?php _e('Share on'); ?> Pinterest" class="twitter-share-button"
               href="http://pinterest.com/pin/create/button/?url=<?php echo esc_html(site_url()); ?>&description=<?php echo esc_html(get_bloginfo('name')); ?>"
               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
               target="_blank">
                <i class="fa fa-pinterest fa-2x text-white mx-2 my-1" aria-hidden="true"></i>
            </a>
            <a class="share-button"
               title="<?php _e('Share on'); ?> Linkedin"
               href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_html(site_url()); ?>&title=<?php echo esc_html(get_bloginfo('name')); ?>"
               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
               target="_blank">
                <i class="fa fa-linkedin fa-2x text-white mx-2 my-1" aria-hidden="true"></i>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container py-2">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 text-center my-2"><?php the_custom_logo(); ?></div>
            <div class="col-sm-4 col-md-3 col-lg-3 text-center my-3 d-none d-md-flex align-items-end justify-content-center">
                <a title="<?php _e('Show on map'); ?>" href="<?php echo get_permalink(get_post(683)); ?>#maps"
                   class="header-link text-left d-flex">
                    <i class="fa fa-map-marker fa-2x mr-2 align-self-center"></i>
                    <div>
                        <address>
                            <span class="bold"><?php echo get_option('company_address'); ?></span><br>
                            <span class="bold"><?php echo get_option('company_city'); ?></span>
                        </address>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 text-center my-4 d-none d-md-flex align-items-end justify-content-center">
                <a title="<?php _e('Write Email'); ?>" href="mailto:info@knuell-bau.de"
                   class="header-link text-center d-flex">
                    <i class="fa fa-envelope fa-2x mr-2 align-self-center"></i>
                    <span class="bold align-self-center"><?php echo get_option('company_email'); ?></span></a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 text-center my-3 d-none d-md-flex align-items-end justify-content-center">
                <a title="<?php _e('Call'); ?>" href="tel:01739346186" class="header-link text-left d-flex">
                    <i class="fa fa-phone fa-2x mr-2 align-self-center"></i>
                    <div>
                        <span class="bold">Tel: <?php echo get_option('company_phone_number'); ?></span><br>
                        <span class="bold">Fax: <?php echo get_option('company_fax_number'); ?></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAddress"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-map-marker fa-2x align-self-center"></i>
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEmail"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-envelope fa-2x align-self-center"></i>
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPhone"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-phone fa-2x align-self-center"></i>
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars fa-2x"></i>
    </button>

    <div id="navbarAddress" class="collapse w-100 text-center">
        <address>
            <a href="<?php echo get_permalink(get_post(683)); ?>#maps">
                <span class="bold text-light btn btn-light red mt-2"><?php echo get_option('company_address'); ?>, <?php echo get_option('company_city'); ?></span>
            </a>
        </address>
    </div>
    <div id="navbarEmail" class="collapse w-100 text-center">
        <a title="<?php _e('Write Email'); ?>" href="mailto:<?php echo get_option('company_email'); ?>">
            <span class="bold text-light btn btn-light red mt-2 align-self-center"><?php echo get_option('company_email'); ?></span>
        </a>
    </div>
    <div id="navbarPhone" class="collapse w-100 text-center">
        <a title="<?php _e('Call'); ?>" href="tel:<?php echo get_option('company_phone_number'); ?>">
            <span class="bold text-light btn btn-light red mt-2">Tel: <?php echo get_option('company_phone_number'); ?></span>
        </a>
        <a title="<?php _e('Call'); ?>" href="tel:<?php echo get_option('company_fax_number'); ?>">
            <span class="bold text-light btn btn-light red mt-2">Fax: <?php echo get_option('company_fax_number'); ?></span>
        </a>
    </div>

    <?php
    wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse justify-content-md-center',
            'container_id' => 'navbarCollapse',
            'menu_class' => 'nav navbar-nav',
            'walker' => new wp_bootstrap_navwalker())
    );
    ?>
</nav>
