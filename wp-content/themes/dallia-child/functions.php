<?php 
function ts_child_register_scripts() {
    $parent_style = 'ts-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array('ts-reset') );
    wp_enqueue_style( 'ts-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'ts_child_register_scripts' );
?>