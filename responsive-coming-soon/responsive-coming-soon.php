<?php
/**
 * Plugin Name: Responsive Coming Soon
 * Version: 1.7.3
 * Description: Responsive Coming Soon plugin is Modern and responsive Coming Soon page with full-sized background image slideshow, countdown timer and unlimited color scheme.
 * Author: wpshopmart
 * Author URI: https://wpshopmart.com/
 * Plugin URI: https://wpshopmart.com/plugins/coming-soon-pro/
 */
 
define("WPSM_RCS_TEXT_DOMAIN","wpsm_rcs_lang" );
define("WPSM_RCS_PLUGIN_URL", plugin_dir_url(__FILE__));

/**
 * Get Ready Plugin Translation
 */
add_action('plugins_loaded', 'wpsm_rcs_language_translation');
function wpsm_rcs_language_translation() {
	load_plugin_textdomain( WPSM_RCS_TEXT_DOMAIN, FALSE, dirname( plugin_basename(__FILE__)).'/language/' );
}

/*
* default script run on plugin activation
*/
register_activation_hook( __FILE__, 'wpsm_rcs_default_data' );
function wpsm_rcs_default_data()
{
	include('functions/default-data.php');
}

/*
* Responisve coming soon plugin menu add
*/
add_action('admin_menu','wpsm_responsive_coming_soon_menu');

function wpsm_responsive_coming_soon_menu()
{
    //plugin menu name for coming soon plugin
    $menu = add_menu_page('Responsive Coming Soon', 'Responsive Coming Soon','administrator', 'wpsm_responsive_coming_soon','wpsm_responsive_oming_soon_content','dashicons-welcome-view-site');

    //add hook to add styles and scripts for coming soon admin page
    add_action( 'admin_print_styles-' . $menu, 'wpsm_responsive_coming_soon_plugin_js_css' );
}
require_once('functions/script.php');

function wpsm_responsive_oming_soon_content()
{  
	require_once('includes/content.php');
}

require_once('functions/data-save-post.php');
require_once('functions/data-reset-post.php');
require_once('redirect.php');

// Add settings link on plugin page
function wpsm_rcs_settings_link($links) { 
  $settings_link = '<a href="?page=wpsm_responsive_coming_soon">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
// Admin plugin install menu links 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'wpsm_rcs_settings_link' );
?>