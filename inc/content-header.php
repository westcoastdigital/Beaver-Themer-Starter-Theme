<?php
if ( !function_exists( 'themer_do_header' ) {
    function themer_do_header() {

    }
    add_action( 'themer_header', 'themer_do_header' );
}