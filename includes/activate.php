<?php
//this function check wp version
function spnin_activate(){
  if(version_compare(get_bloginfo('version'),'4.2','<')){
    wp_die(__('you must have a minimum version of 4.2 use this theme'));
  }else{
    echo "called the spnin_activate function ";
  }

$theme_opts           =         get_option('spnin_opts');
if(!$theme_opts){
  $opts               = array(
    'facebook'        =>'',
    'twitter'         =>'',
    'youtube'         =>'',
    'logotype'        =>1,
    'logo_img'        =>'',
    'footer'          =>''
  );

  add_option('spnin_opts',$opts);

}

}
