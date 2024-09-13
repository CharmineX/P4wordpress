<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      
     )
   );
 }
add_action( 'init', 'register_my_menus' );


add_action('wp_enqueue_scripts', 
function(){
	wp_enqueue_script('[js/timer.js]');
});

header("Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure");

?>