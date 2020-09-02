<?php
/**
 * init
 */

if ( ! isset( $content_width ) ) :
	$content_width = 1200;
endif;

$theme         = wp_get_theme();
$theme_version = $theme->get( 'Version' );
define( 'COMMON_PFIX', get_template_directory_uri() );

function readScript() {
	// wp_enqueue_style(  'reset', "https://meyerweb.com/eric/tools/css/reset/reset200802.css", array(), $theme_version );
	wp_enqueue_style(  'a-modern-css-reset', get_template_directory_uri() . "/css/reset.css", array(), $theme_version );
	wp_enqueue_style(  'googlefonts', "//fonts.googleapis.com/css2?family=Meie+Script&family=Vollkorn:ital,wght@0,400;0,600;1,400;1,600&display=swap", array(), $theme_version );
	wp_enqueue_style(  'modaal', get_template_directory_uri() . '/js/modaal/css/modaal.min.css', array(), '0.4.4' );
	wp_enqueue_style(  'df-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'infiniteslide', get_template_directory_uri() . '/js/infiniteslidev2.js', array( 'jquery' ), "2.0.1", true );
	wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/modaal/js/modaal.min.js', array( 'jquery' ), "0.4.4", true );
	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/js/bundle.js', array( 'jquery' ), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'readScript' );
