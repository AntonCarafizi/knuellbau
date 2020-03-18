<?php
require_once('inc/wp_bootstrap_navwalker.php');


function add_theme_scripts(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'4.1.3','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css-dist/style.min.css',false,'1.0.0','all');
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',false,'4.7.0','all');
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), '4.1.3', true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), '4.1.3', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function mytheme_register_nav_menu(){
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Knuellbau' )
	) );
}

add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

add_theme_support( 'custom-logo', array(
	'height'      => 240,
	'width'       => 240,
	'flex-height' => true,
) );


function my_register_additional_customizer_settings( $wp_customize ) {
    $wp_customize->add_setting(
        'company_name',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'company_name',
        array(
            'label'      => __( 'Company Name', 'textdomain' ),
            'settings'   => 'company_name',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

    $wp_customize->add_setting(
        'company_address',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'company_address',
        array(
            'label'      => __( 'Company Address', 'textdomain' ),
            'settings'   => 'company_address',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

    $wp_customize->add_setting(
        'company_city',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'company_city',
        array(
            'label'      => __( 'Company City', 'textdomain' ),
            'settings'   => 'company_city',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

    $wp_customize->add_setting(
        'company_email',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'company_email',
        array(
            'label'      => __( 'Company Email', 'textdomain' ),
            'settings'   => 'company_email',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

    $wp_customize->add_setting(
        'company_phone_number',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'company_phone_number',
        array(
            'label'      => __( 'Company Phone Number', 'textdomain' ),
            'settings'   => 'company_phone_number',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

    $wp_customize->add_setting(
        'company_fax_number',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'company_fax_number',
        array(
            'label'      => __( 'Company Fax Number', 'textdomain' ),
            'settings'   => 'company_fax_number',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

}
add_action( 'customize_register', 'my_register_additional_customizer_settings' );
