<?php
/*
Plugin Name: Social Media Share Box
Description: This plugin will add Social Media share buttons to the header of your website
 */

function socialbox_shortcode($atts = [], $content = null){ ?>
    <div class="socialbox text-right w-100">
        <a class="share-button"
           title="<?php _e('Share on Facebook'); ?>"
           href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_html(site_url()); ?>&t=<?php echo esc_html($atts['name']); ?> - <?php echo esc_html($atts['description']); ?>"
           onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
           target="_blank">
            <i class="fa fa-facebook-square fa-2x text-white m-2"></i>
        </a>
        <a class="share-button"
           title="<?php _e('Share on Twitter'); ?>" class="twitter-share-button"
           href="http://twitter.com/share?url=<?php echo esc_html(site_url()); ?>&text=<?php echo esc_html($atts['name']); ?> - <?php echo esc_html($atts['description']); ?>"
           onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
           target="_blank">
            <i class="fa fa-twitter fa-2x text-white m-2" aria-hidden="true"></i>
        </a>
        <a class="share-button"
           title="<?php _e('Share on Pinterest'); ?>" class="twitter-share-button"
           href="http://pinterest.com/pin/create/button/?url=<?php echo esc_html(site_url()); ?>&description=<?php echo esc_html($atts['name']); ?> - <?php echo esc_html($atts['description']); ?>"
           onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
           target="_blank">
            <i class="fa fa-pinterest fa-2x text-white m-2" aria-hidden="true"></i>
        </a>
        <a class="share-button"
           title="<?php _e('Share on Linkedin'); ?>"
           href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_html(site_url()); ?>&title=<?php echo esc_html($atts['name']); ?> - <?php echo esc_html($atts['description']); ?>"
           onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
           target="_blank">
            <i class="fa fa-linkedin fa-2x text-white m-2" aria-hidden="true"></i>
        </a>
    </div>
    <?php }

function shortcode_init(){
    add_shortcode('socialbox', 'socialbox_shortcode');
}

add_action('init', 'shortcode_init');