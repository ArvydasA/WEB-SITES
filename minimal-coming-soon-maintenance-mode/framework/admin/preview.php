<?php

/**
 * Preview maintenance mode.
 *
 * @link       http://www.webfactoryltd.com
 * @since      0.1
 */

// Load WordPress
$tmp = explode( "wp-content" , __FILE__ );
if (empty($tmp[0])) {
  die('Unable to load WP core. Please preview Maintenance Mode by opening the site home page.');
} else {
  require_once( $tmp[0] . "wp-load.php" );  
}

// Include important files
require_once '../public/include/functions.php';


// Plugin options from the database
$signals_csmm_options = csmm_get_options();


// Getting custom login URL for the admin
$signals_login_url = wp_login_url();


// Checking for the server protocol status
if ( isset( $_SERVER['HTTPS'] ) === true ) {
	$signals_protocol = 'https';
} else {
	$signals_protocol = 'http';
}


// This is the server address of the current page
$signals_server_url = $signals_protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


// Checking for the custom_login_url value
if ( empty( $signals_csmm_options['custom_login_url'] ) ) {
	$signals_csmm_options['custom_login_url'] = NULL;
}


// Render the maintenance mode template
csmm_render_template( $signals_csmm_options );
