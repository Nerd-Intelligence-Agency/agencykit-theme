<?php
/**
* @author Nerd Intelligence Agency
* @copyright 2019
**/

if (!defined('ABSPATH')) die();

//enque divi theme
function ideakit_ct_enqueue_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'agencykit_ct_enqueue_parent' );

//Check for theme updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/Nerd-Intelligence-Agency/Agency-Theme',
  __FILE__,
  'AgencyKit-Theme'
);

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');
