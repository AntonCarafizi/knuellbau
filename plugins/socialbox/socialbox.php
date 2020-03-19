<?php
/*
Plugin Name: Social Media Share Box
Description: This plugin will add Social Media share buttons to the header of your website
 */

function socialbox_shortcode($attrs = [], $content = null){ ?>
    <div class="socialbox text-right w-100">
        <a class="share-button"
           title="<?php _e('Share on Facebook'); ?>"
           href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_html(site_url()); ?>&t=<?php echo esc_html($attrs['name']); ?> - <?php echo esc_html($attrs['description']); ?>"
           target="_blank">
            <i class="fa fa-facebook-square fa-2x text-white m-2"></i>
        </a>
        <a class="share-button"
           title="<?php _e('Share on Twitter'); ?>"
           href="http://twitter.com/share?url=<?php echo esc_html(site_url()); ?>&text=<?php echo esc_html($attrs['name']); ?> - <?php echo esc_html($attrs['description']); ?>"
           target="_blank">
            <i class="fa fa-twitter fa-2x text-white m-2" aria-hidden="true"></i>
        </a>
        <a class="share-button"
           title="<?php _e('Share on Pinterest'); ?>"
           href="http://pinterest.com/pin/create/button/?url=<?php echo esc_html(site_url()); ?>&description=<?php echo esc_html($attrs['name']); ?> - <?php echo esc_html($attrs['description']); ?>"
           target="_blank">
            <i class="fa fa-pinterest fa-2x text-white m-2" aria-hidden="true"></i>
        </a>
        <a class="share-button"
           title="<?php _e('Share on Linkedin'); ?>"
           href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_html(site_url()); ?>&title=<?php echo esc_html($attrs['name']); ?> - <?php echo esc_html($attrs['description']); ?>"
           target="_blank">
            <i class="fa fa-linkedin fa-2x text-white m-2" aria-hidden="true"></i>
        </a>
    </div>
    <?php }

function socialbox_shortcode_init(){
    add_shortcode('socialbox', 'socialbox_shortcode');
}

function add_plugin_scripts(){
    wp_enqueue_script('socialbox', plugin_dir_url(__FILE__) . 'js/socialbox.js', array ( 'jquery' ), '4.1.3', true);
}

add_action('init', 'socialbox_shortcode_init');
add_action('wp_enqueue_scripts', 'add_plugin_scripts');

