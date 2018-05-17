<?php

function spnin_enqueue(){
  wp_register_style('spnin_default',get_template_directory_uri().'/assets/css/style.default.css');
  wp_register_style('spnin_custom',get_template_directory_uri().'/assets/css/custom.css');
  wp_register_style('spnin_bootstrap',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
  wp_register_style('spnin_fawesome',get_template_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.min.css');
  wp_register_style('spnin_fantastic',get_template_directory_uri().'/assets/css/fontastic.css');
  wp_register_style('spnin_fancybox',get_template_directory_uri().'/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.css');


  wp_enqueue_style('spnin_bootstrap');
  wp_enqueue_style('spnin_default');
  wp_enqueue_style('spnin_custom');
  wp_enqueue_style('spnin_fawesome');
  wp_enqueue_style('spnin_fantastic');
  wp_enqueue_style('spnin_fancybox');

  //wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);


  wp_register_script('spnin_pooper',get_template_directory_uri().'/assets/vendor/popper.js/umd/popper.min.js');
  wp_register_script('spnin_bootstrap',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js');
  wp_register_script('spnin_cookie',get_template_directory_uri().'/assets/vendor/jquery.cookie/jquery.cookie.js');
  wp_register_script('spnin_fancybox',get_template_directory_uri().'/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.js');
  wp_register_script('spnin_script',get_template_directory_uri().'/assets/js/front.js');

  wp_enqueue_script('spnin_pooper');
  wp_enqueue_script('spnin_bootstrap');
  wp_enqueue_script('spnin_cookie');
  wp_enqueue_script('spnin_fancybox');
  wp_enqueue_script('spnin_script');
  wp_enqueue_script('jquery');

}
