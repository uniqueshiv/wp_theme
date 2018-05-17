<?php
//set up
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );


//includes
require_once(dirname(__FILE__).'/includes/front/enqueue.php');
require_once(dirname(__FILE__).'/includes/setup.php');
require_once(dirname(__FILE__).'/includes/widget.php');
require_once(dirname(__FILE__).'/includes/activate.php');

//admin includes
require_once(dirname(__FILE__).'/includes/admin/menus.php');
require_once(dirname(__FILE__).'/includes/admin/options-page.php');
require_once(dirname(__FILE__).'/includes/admin/init.php');
require_once(dirname(__FILE__).'/process/save-options.php');



// Actions & filters
add_action('wp_enqueue_scripts','spnin_enqueue');
add_action('after_setup_theme','spnin_setup_theme');
add_action('widgets_init','spnin_widget');
add_action('after_switch_theme','spnin_activate');
//admin actions
add_action('admin_menu','spnin_admin_menus');
add_action('admin_init','spnin_admin_init');
//shortcode
