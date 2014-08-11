<?php

register_nav_menus( array('primary' => 'Menus') );
register_sidebar( array('name' => 'Info / Contact') );
register_sidebar( array('name' => 'Menus') );

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

?>