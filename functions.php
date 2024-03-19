<?php
/**
* @author Nerd Intelligence Agency
* @copyright 2019
**/

if (!defined('ABSPATH')) die();

//enque divi theme
function agencykit_ct_enqueue_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'agencykit_ct_enqueue_parent' );

//set pwa display
add_filter( 'web_app_manifest', function( $manifest ) {
  $manifest['display'] = 'fullscreen';
  return $manifest;
} );
