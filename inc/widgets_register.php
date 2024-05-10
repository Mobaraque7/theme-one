<?php
// Sidebar Register Function
function theme_one_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area', 'themeone'),
        'id'   => 'sideber-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'themeone'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1', 'themeone'),
        'id'   => 'footer-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'themeone'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'themeone'),
        'id'   => 'footer-2',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'themeone'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
        ));
    register_sidebar(array(
        'name' => __('Footer 3', 'themeone'),
        'id'   => 'footer-3',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'themeone'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Homepage Wedget', 'themeone'),
        'id'   => 'home-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'themeone'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
        ));

}
add_action('widgets_init', 'theme_one_widgets_register');