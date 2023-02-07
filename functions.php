<?php

function theme_links(){

    wp_register_style("gf", "https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Source+Serif+Pro:ital@0;1&display=swap", array(), false, 'all');

    wp_register_script("fa-script", 'https://kit.fontawesome.com/7264c8c889.js',array(),false,true);

    wp_enqueue_style( 'myStyles', get_template_directory_uri()."/assets-results/css/style.css", array('gf'));
    wp_enqueue_script( 'script', get_template_directory_uri()."/assets-results/js/custom.js", array('fa-script'),false,true);


}

add_action("wp_enqueue_scripts", "theme_links");


function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo',
        [
            'width' => 200,
            'height'=> 107,
            'flex-width' => true,
            'flex-height' => true
        ]);    
    

    register_nav_menus(
        [
            'main-menu' => 'Main Menu',
            'left-menu' => 'Left Menu',
            'right-menu'=> 'Right Menu'
        ]
    );

}

add_action( 'after_setup_theme', 'init_template');