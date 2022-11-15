<?php

function add_files()
{
    wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), null, '', true);
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/js/bootstrap.bundle.min.js'), null, '', true);
    wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('custom_google_font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('style_1', get_theme_file_uri( '/build/index.css' ));
    wp_enqueue_style('style_2', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
}
add_action('wp_enqueue_scripts', 'add_files');

function Payam_Avaran(){
    register_nav_menu('headerMenuLocation' , 'Header Menu Location');
    add_theme_support( 'title-tag');
}
add_action('after_setup_theme', 'Payam_Avaran');
?>