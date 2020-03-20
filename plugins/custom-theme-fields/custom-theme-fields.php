<?php
/*
    Plugin Name: Custom Theme Fields
    Description: This plugin will add extra fields to current theme
    Version: 1.0.0
    Author: Anton Carafizi
    Author URI: https://github.com/AntonCarafizi
    Text Domain: custom-theme-fields
    License: GPL-2.0+
    Domain Path: /languages
 */

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
            'label'      => __( 'Company Name', 'custom-theme-fields'),
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
            'label'      => __( 'Company Address', 'custom-theme-fields'),
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
            'label'      => __( 'Company City', 'custom-theme-fields'),
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
            'label'      => __( 'Company Email', 'custom-theme-fields'),
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
            'label'      => __( 'Company Phone Number', 'custom-theme-fields'),
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
            'label'      => __( 'Company Fax Number', 'custom-theme-fields'),
            'settings'   => 'company_fax_number',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

}
add_action( 'customize_register', 'my_register_additional_customizer_settings' );