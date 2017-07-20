<?php
add_action( 'wp_enqueue_scripts', 'my_assets' );
function my_assets() {
    wp_enqueue_style( 'wptest theme II', get_stylesheet_uri() );
}