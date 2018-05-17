<?php
function spnin_widget(){
  register_sidebar(array(
      'name'          => __('My First Theme Sidebar','spnin'),
      'id'            => 'spnin_sidebar',
      'description'   => __('Sidebar this is testing'),
      'class'         =>'widget Tags',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<header><h3 class="h6">',
    	'after_title'   => '</h3></header>'

  ));
}

?>
