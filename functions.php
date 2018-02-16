<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
/* fjerner hvilken versionen man bruger, for at gøre det svære for hackere */
remove_action('wp_head', 'wp_generator'); 

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>