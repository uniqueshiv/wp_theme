<?php

function spnin_admin_menus(){
  add_menu_page(
    'Spnin Theme Options',
    'Theme Options',
    'edit_theme_options',
    'spnin_theme_opts',
    'spnin_theme_opts_page');
}


?>
