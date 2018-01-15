<?php

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit;

final class ThemerThemeClass {

    /**
	 * Enqueues scripts and styles.
	 *
     * @return void
     */
    static public function enqueue_scripts()    {	    
        wp_enqueue_style( 'normalize', THEME_URL . '/assets/css/normalize.css' );
        wp_enqueue_style( 'theme', THEME_URL . '/style.css' );
    }

    static public function themer_header_footer_support() {
        add_theme_support( 'fl-theme-builder-headers' );
        add_theme_support( 'fl-theme-builder-footers' );
        add_theme_support( 'fl-theme-builder-parts' );
    }

    static public function themer_header_footer_render() {

        // Get the header ID.
        $header_ids = FLThemeBuilderLayoutData::get_current_page_header_ids();
        
        // If we have a header, remove the theme header and hook in Theme Builder's.
        if ( ! empty( $header_ids ) ) {
            remove_action( 'themer_header', 'themer_do_header' );
            add_action( 'themer_header', 'FLThemeBuilderLayoutRenderer::render_header' );
        }
        
        // Get the footer ID.
        $footer_ids = FLThemeBuilderLayoutData::get_current_page_footer_ids();
        
        // If we have a footer, remove the theme footer and hook in Theme Builder's.
        if ( ! empty( $footer_ids ) ) {
            remove_action( 'themer_footer', 'themer_do_footer' );
            add_action( 'themer_footer', 'FLThemeBuilderLayoutRenderer::render_footer' );
        }
    }

    static public function themer_register_part_hooks() {
	
        return array(
            array(
                'label' => 'Header',
                'hooks' => array(
                    'themer_before_header' => 'Before Header',
                    'themer_after_header'  => 'After Header',
                )
            ),
            array(
                'label' => 'Content',
                'hooks' => array(
                    'themer_before_content' => 'Before Content',
                    'themer_after_content'  => 'After Content',
                )
            ),
            array(
                'label' => 'Footer',
                'hooks' => array(
                    'themer_before_footer' => 'Before Footer',
                    'themer_after_footer'  => 'After Footer',
                )
            )
        );
    }

    static public function themer_upgrade() {
		return 'https://www.wpbeaverbuilder.com/?fla=283';
	}

}