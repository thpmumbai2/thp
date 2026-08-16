<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function homoeopath_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array( 'primary' => __( 'Primary Menu', 'the-homoeopath' ) ) );
}
add_action( 'after_setup_theme', 'homoeopath_setup' );

function homoeopath_assets() {
    wp_enqueue_style( 'homoeopath-fonts', 'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,600;1,9..144,400&family=Jost:wght@300;400;500&family=JetBrains+Mono:wght@400;500&display=swap', array(), null );
    wp_enqueue_style( 'homoeopath-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'homoeopath_assets' );

// Customizer: let the practice edit hero text, stats, email, hours without touching code
function homoeopath_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'homoeopath_options', array(
        'title'    => __( 'The Homoeopath — Content', 'the-homoeopath' ),
        'priority' => 30,
    ) );

    $fields = array(
        'hero_tagline'  => 'like cures like',
        'hero_sub'      => 'A quiet, thorough approach to homoeopathic consultation — treating the person behind the symptom, one carefully chosen remedy at a time.',
        'stat_1_num'    => '15+', 'stat_1_label' => 'Years in Practice',
        'stat_2_num'    => '1:1', 'stat_2_label' => 'Consultations',
        'stat_3_num'    => '3000+', 'stat_3_label' => 'Cases Studied',
        'contact_email' => 'hello@thehomoeopath.example',
        'contact_hours' => 'Mon–Sat · By Appointment',
    );

    foreach ( $fields as $key => $default ) {
        $wp_customize->add_setting( 'homoeopath_' . $key, array(
            'default'           => $default,
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'homoeopath_' . $key, array(
            'label'   => ucwords( str_replace( '_', ' ', $key ) ),
            'section' => 'homoeopath_options',
            'type'    => 'text',
        ) );
    }
}
add_action( 'customize_register', 'homoeopath_customize_register' );

function ho_opt( $key, $default = '' ) {
    return esc_html( get_theme_mod( 'homoeopath_' . $key, $default ) );
}
