<?php
function thame_one_add_theme_page(){
  // add_menu_page( 
  //   'Theme Option for Admin', // $page_title:string, 
  //   'Theme Option', // $menu_title:string, 
  //   'manage_options', // $capability:string, 
  //   'theme_one_theme_option', // $menu_slug:string, 
  //   'theme_one_theme_create_page', // $callback:callable, 
  //   'dashicons-visibility', // $icon_url:string, 
  //   101,// $position:integer|float|null 
  // );
  add_menu_page('Theme Option for Admin', 'Theme Option', 'manage_options', 'theme_one_theme_option', 'theme_one_theme_create_page', get_template_directory_uri(). '/img/mini-logo.png', 101);
  add_submenu_page( 'theme_one_theme_option', 'Theme Option', 'General', 'manage_options', 'theme_one_theme_option', 'theme_one_theme_create_page', );
  add_submenu_page( 'theme_one_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'theme_one_custom_css', 'theme_one_theme_custom_css_page', );
  add_submenu_page( 'theme_one_theme_option', 'Theme Custom JavaScript', 'Custom JS', 'manage_options', 'theme_one_custom_js', 'theme_one_theme_custom_js_page', );
}
add_action( 'admin_menu', 'thame_one_add_theme_page');

function theme_one_theme_create_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/inc/theme-option/general.php');
  bloginfo( 'name' );
}

function theme_one_theme_custom_css_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/inc/theme-option/custom_css.php');
}

function theme_one_theme_custom_js_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/inc/theme-option/custom_js.php');
}

