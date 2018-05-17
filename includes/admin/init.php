<?php
function spnin_admin_init(){
  include('enqueue.php');
    add_action('admin_enqueue_scripts','spnin_admin_enqueue');
    add_action('admin_post_spnin_save_options','spnin_save_options');
}
