<?php 

  wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/dist/main.min.css' );
  wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/dist/bundle.min.js' , null , null , true );

?>