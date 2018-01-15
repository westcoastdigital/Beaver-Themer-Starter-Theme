<?php
if ( !function_exists( 'themer_do_footer' ) {
    function themer_do_footer() {
        
        $copyright = '<div id="copyright">';
        $copyright .= sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'translate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'translate' ), '<a href="https://github.com/WestCoastDigital">Jon Mather</a>' );
        $copyright .= '</div>';

    }
    add_action( 'themer_footer', 'themer_do_footer' );
}