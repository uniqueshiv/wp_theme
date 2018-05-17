<?php
function spnin_save_options(){
// echo "<pre>";
// print_r($_POST);
// die();

if(!current_user_can('edit_theme_options')){
  wp_die(__('You are now allow to be on this page.'));
}
check_admin_referer('spnin_options_verify');

$opts               = get_option('spnin_opts');
$opts['twitter']    = sanitize_text_field($_POST['spnin_inputtwitter']);
$opts['facebook']    = sanitize_text_field($_POST['spnin_inputfacebook']);
$opts['youtube']    = sanitize_text_field($_POST['spnin_inputyoutube']);
$opts['logo_type']    = sanitize_text_field($_POST['spnin_inputlogotype']);
$opts['footer']    = sanitize_text_field($_POST['spnin_inputfooter']);

update_option('spnin_opts',$opts);
wp_redirect(admin_url('admin.php?page=spnin_theme_opts&status=1'));
}
