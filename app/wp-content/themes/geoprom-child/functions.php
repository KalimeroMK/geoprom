<?php
function moller_child_enqueue_styles() {

    $parent_style = 'moller-style'; // This is 'moller-style' for the moller theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'moller_child_enqueue_styles' );
?>