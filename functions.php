<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URL', get_template_directory_uri() );

require_once 'classes/class-themer.php';

add_action( 'wp_enqueue_scripts', 'ThemerThemeClass::enqueue_scripts', 1000 );
add_action('after_setup_theme', 'ThemerThemeClass::themer_header_footer_support');
add_action('wp', 'ThemerThemeClass::themer_header_footer_render');
add_filter( 'fl_theme_builder_part_hooks', 'ThemerThemeClass::themer_register_part_hooks' );
add_action ('fl_builder_upgrade_url', 'ThemerThemeClass::themer_upgrade');