<?php
/*
   Plugin Name: Print in the Console Current Template URI
   Plugin URI: http://wordpress.org/extend/plugins/print-console-tempalte-uri/
   Version: 1.0.0
   Author: Tiia Leppänen
   Author URI: http://tiialle.com
   Description: Prints in Console which template is used if user is logged in.
   Text Domain: print-console-tempalte-uri
   License: GPL2
  */

// If called direct, refuse
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

function show_template() {
  global $template;
  $siteURL = getcwd();
  $templateClear = str_replace($siteURL, "", $template);
  if( is_user_logged_in() ) :
         echo '<script type="text/javascript">console.log("Page template: '.$templateClear.'");</script>';
  endif;
}

add_action( 'wp_footer', 'show_template' );

?>