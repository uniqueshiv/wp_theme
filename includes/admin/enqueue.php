<?php

function spnin_admin_enqueue(){

  if(!isset($_GET['page']) || $_GET['page']!="spnin_theme_opts"){
    return ;
  }
      wp_register_style('spnin_bootstrap',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
      wp_enqueue_style('spnin_bootstrap');

      wp_register_script('spnin_options',get_template_directory_uri().'/assets/js/options.js');
      wp_enqueue_script('spnin_options');
}
