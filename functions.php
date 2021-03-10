<?php

/**
 * Functions and definitions
 *
 * @package twentytwentyonechild
 */

 //Enqueue child styles and scripts
add_action( 'wp_enqueue_scripts', 'spm_enqueue_styles' );
function spm_enqueue_styles() {
    wp_enqueue_style( 'spm-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
