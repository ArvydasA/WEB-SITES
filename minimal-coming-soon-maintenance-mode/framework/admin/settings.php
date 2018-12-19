<?php

/**
 * Settings page for the plugin
 *
 * @link       http://www.webfactoryltd.com
 * @since      0.1
 */

function csmm_admin_settings() {

	// Including the mailchimp class
	require_once 'include/classes/class-mailchimp.php';



	// List of Google fonts
	require_once 'include/fonts.php';

  if (!empty($_POST['save-license']) && 'save-license' == $_POST['save-license']) {
    $meta = csmm_get_meta();
    if (empty($_POST['license_key'])) {
        $options['license_type'] = '';
        $options['license_expires'] = '1900-01-01';
        $options['license_active'] = false;
        $options['license_key'] = '';
        set_transient('csmm_error_msg', '<div class="signals-alert signals-alert-info"><strong>License key saved.</strong><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 1);
      } else {
        $tmp = csmm_license::validate_license_key($_POST['license_key']);
        if ($tmp['success']) {
          $options['license_type'] = $tmp['license_type'];
          $options['license_expires'] = $tmp['license_expires'];
          $options['license_active'] = $tmp['license_active'];
          $options['license_key'] = $_POST['license_key'];
          if ($tmp['license_active']) {
            set_transient('csmm_error_msg', '<div class="signals-alert signals-alert-info"><strong>License key saved and activated!</strong><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 1);
            set_site_transient('update_plugins', null);
          } else {
            set_transient('csmm_error_msg', '<div class="signals-alert signals-alert-info"><strong>License not active. ' . $tmp['error'] . '</strong><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 1);
          }
        } else {
          set_transient('csmm_error_msg', '<div class="signals-alert signals-alert-info"><strong>Unable to contact licensing server. Please try again in a few moments.</strong><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 1);
        }
      }
      $meta = array_merge($meta, $options);
      update_option('signals_csmm_meta', $meta);
  } elseif ( isset( $_POST['signals_csmm_submit'] ) ) {
		// Checking whether the status option is checked or not
		if ( isset( $_POST['signals_csmm_status'] ) ) :
			$tmp_options['status'] = absint( $_POST['signals_csmm_status'] );
		else :
			$tmp_options['status'] = '2';
		endif;

    // Checking whether the love option is checked or not
    if ( isset( $_POST['signals_csmm_love'] ) ) :
      $tmp_options['love'] = absint( $_POST['signals_csmm_love'] );
    else :
      $tmp_options['love'] = '0';
    endif;


		// Checking whether the user logged in option is checked or not
		if ( isset( $_POST['signals_csmm_showlogged'] ) ) :
			$tmp_options['logged'] = absint( $_POST['signals_csmm_showlogged'] );
		else :
			$tmp_options['logged'] = '2';
		endif;


		// Checking whether the search engine exclusion option is checked or not
		if ( isset( $_POST['signals_csmm_excludese'] ) ) :
			$tmp_options['exclude_se'] = absint( $_POST['signals_csmm_excludese'] );
		else :
			$tmp_options['exclude_se'] = '2';
		endif;


		// For the MailChimp list ID
		if ( isset( $_POST['signals_csmm_list'] ) ) :
			$tmp_options['list'] = strip_tags( $_POST['signals_csmm_list'] );
		else :
			$tmp_options['list'] = '';
		endif;


		// For content overlay
		if ( isset( $_POST['signals_csmm_overlay'] ) ) :
			$tmp_options['overlay'] = absint( $_POST['signals_csmm_overlay'] );
		else :
			$tmp_options['overlay'] = '2';
		endif;


		// Checking whether the ignore form styles option is checked or not
		if ( isset( $_POST['signals_csmm_ignore_styles'] ) ) :
			$tmp_options['form_styles'] = absint( $_POST['signals_csmm_ignore_styles'] );
		else :
			$tmp_options['form_styles'] = '2';
		endif;


		// Checking whether the disable plugin option is checked or not
		if ( isset( $_POST['signals_csmm_disable'] ) ) :
			$tmp_options['disabled'] = absint( $_POST['signals_csmm_disable'] );
		else :
			$tmp_options['disabled'] = '2';
		endif;

    // Checking whether the disable status bar menu option is checked or not
    if ( isset( $_POST['signals_csmm_disable_adminbar'] ) ) :
      $tmp_options['disable_adminbar'] = '1';
    else :
      $tmp_options['disable_adminbar'] = '0';
    endif;


		// Saving the record to the database
		$update_options = array(
      'status'        => $tmp_options['status'],
			'love'				=> $tmp_options['love'],
      'title'         => strip_tags( $_POST['signals_csmm_title'] ),
			'description' 				=> strip_tags( $_POST['signals_csmm_description'] ),
			'header_text' 			=> strip_tags( $_POST['signals_csmm_header'] ),
			'secondary_text' 		=> strip_tags( $_POST['signals_csmm_secondary'], '<p><a><b><strong><i><br>' ),
			'antispam_text' 		=> strip_tags( $_POST['signals_csmm_antispam'] ),
			'custom_login_url' 		=> strip_tags( $_POST['signals_csmm_custom_login'] ),
			'show_logged_in' 		=> $tmp_options['logged'],
			'exclude_se'			=> $tmp_options['exclude_se'],
			'arrange' 				=> strip_tags( $_POST['signals_csmm_arrange'] ),
			'analytics' 			=> $_POST['signals_csmm_analytics'],

			'mail_system_to_use' => $_POST['mail_system_to_use'],
			'mailoptin_campaign' => @$_POST['signals_csmm_mailoptin_campaign'],

			'mailchimp_api'			=> strip_tags( $_POST['signals_csmm_api'] ),
			'mailchimp_list' 		=> $tmp_options['list'],
			'message_noemail' 		=> strip_tags( $_POST['signals_csmm_message_noemail'] ),
			'message_subscribed' 	=> strip_tags( $_POST['signals_csmm_message_subscribed'] ),
			'message_wrong' 		=> strip_tags( $_POST['signals_csmm_message_wrong'] ),
			'message_done' 			=> strip_tags( $_POST['signals_csmm_message_done'] ),

			'logo'					=> strip_tags( $_POST['signals_csmm_logo'] ),
			'favicon'				=> strip_tags( $_POST['signals_csmm_favicon'] ),
			'bg_cover' 				=> strip_tags( $_POST['signals_csmm_bg'] ),
			'content_overlay' 		=> $tmp_options['overlay'],
			'content_width'			=> absint( $_POST['signals_csmm_width'] ),
			'bg_color' 				=> strip_tags( $_POST['signals_csmm_color'] ),
			'content_position'		=> strip_tags( $_POST['signals_csmm_position'] ),
			'content_alignment'		=> strip_tags( $_POST['signals_csmm_alignment'] ),
			'header_font' 			=> strip_tags( $_POST['signals_csmm_header_font'] ),
			'secondary_font' 		=> strip_tags( $_POST['signals_csmm_secondary_font'] ),
			'header_font_size' 		=> strip_tags( $_POST['signals_csmm_header_size'] ),
			'secondary_font_size' 	=> strip_tags( $_POST['signals_csmm_secondary_size'] ),
			'header_font_color' 	=> strip_tags( $_POST['signals_csmm_header_color'] ),
			'secondary_font_color' 	=> strip_tags( $_POST['signals_csmm_secondary_color'] ),
			'antispam_font_size' 	=> strip_tags( $_POST['signals_csmm_antispam_size'] ),
			'antispam_font_color' 	=> strip_tags( $_POST['signals_csmm_antispam_color'] ),

			'input_text' 			=> strip_tags( $_POST['signals_csmm_input_text'] ),
      'button_text'       => strip_tags( $_POST['signals_csmm_button_text'] ),
			'gdpr_text' 			=> trim($_POST['signals_csmm_gdpr_text']),
			'gdpr_fail' 			=> trim($_POST['signals_csmm_gdpr_fail']),
			'ignore_form_styles' 	=> $tmp_options['form_styles'],
			'input_font_size'		=> strip_tags( $_POST['signals_csmm_input_size'] ),
			'button_font_size'		=> strip_tags( $_POST['signals_csmm_button_size'] ),
			'input_font_color'		=> strip_tags( $_POST['signals_csmm_input_color'] ),
			'button_font_color'		=> strip_tags( $_POST['signals_csmm_button_color'] ),
			'input_bg'				=> strip_tags( $_POST['signals_csmm_input_bg'] ),
			'button_bg'				=> strip_tags( $_POST['signals_csmm_button_bg'] ),
			'input_bg_hover'		=> strip_tags( $_POST['signals_csmm_input_bg_hover'] ),
			'button_bg_hover'		=> strip_tags( $_POST['signals_csmm_button_bg_hover'] ),
			'input_border'			=> strip_tags( $_POST['signals_csmm_input_border'] ),
			'button_border'			=> strip_tags( $_POST['signals_csmm_button_border'] ),
			'input_border_hover'	=> strip_tags( $_POST['signals_csmm_input_border_hover'] ),
			'button_border_hover'	=> strip_tags( $_POST['signals_csmm_button_border_hover'] ),
			'success_background'	=> strip_tags( $_POST['signals_csmm_success_bg'] ),
			'success_color'			=> strip_tags( $_POST['signals_csmm_success_color'] ),
			'error_background'		=> strip_tags( $_POST['signals_csmm_error_bg'] ),
			'error_color'			=> strip_tags( $_POST['signals_csmm_error_color'] ),
      'form_placeholder_color'      => strip_tags( $_POST['form_placeholder_color'] ),

      'disable_settings'     => $tmp_options['disabled'],
			'disable_adminbar' 		=> $tmp_options['disable_adminbar'],
			'custom_html'			=> $_POST['signals_csmm_html'], // Not sanitizing the HTML and CSS provided by the admin
			'custom_css'			=> $_POST['signals_csmm_css']  // Giving full freedom to them :)
		);

    $update_options = stripslashes_deep($update_options);

		// Updating the options in the database and showing message to the user
		update_option( 'signals_csmm_options', $update_options );
		$signals_csmm_err = '<div class="signals-alert signals-alert-info"><strong>Great!</strong> Options have been updated.<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';

    if (function_exists('w3tc_pgcache_flush')) {
      w3tc_pgcache_flush();
    }
    if (function_exists('wp_cache_clear_cache')) {
      wp_cache_clear_cache();
    }
    if (class_exists('Endurance_Page_Cache')) {
      $epc = new Endurance_Page_Cache;
      $epc->purge_all();
    }
    if (class_exists('SG_CachePress_Supercacher') && method_exists('SG_CachePress_Supercacher', 'purge_cache')) {
      SG_CachePress_Supercacher::purge_cache(true);
    }
    if (isset($GLOBALS['wp_fastest_cache']) && method_exists($GLOBALS['wp_fastest_cache'], 'deleteCache')) {
      $GLOBALS['wp_fastest_cache']->deleteCache(true);
    }
    if (is_callable(array('Swift_Performance_Cache', 'clear_all_cache'))) {
      Swift_Performance_Cache::clear_all_cache();
    }
	}


	// Grab options from the database
  $signals_csmm_options = csmm_get_options();
	$meta = csmm_get_meta();

	// View template for the settings panel
	require 'views/settings.php';
} // csmm_admin_settings


// AJAX request for user support
function csmm_ajax_support() {

	// We are going to store the response in the $response() array
	$response = array(
		'code' 		=> 'error',
		'response' 	=> __( 'Please fill in both the fields to create your support ticket.', 'signals' )
	);


	// Filtering and sanitizing the support issue
	if ( ! empty( $_POST['signals_support_email'] ) && ! empty( $_POST['signals_support_issue'] ) ) {
		$theme = wp_get_theme();
    $admin_email 	= sanitize_text_field( $_POST['signals_support_email'] );
		$issue 			= $_POST['signals_support_issue'];
    $options = get_option('signals_csmm_options');

		$subject 		= '[Maintenance Mode Ticket] by '. $admin_email;
		$body 			= "Email: $admin_email \r\nIssue: $issue";
		$headers 		= 'From: ' . $admin_email . "\r\n" . 'Reply-To: ' . $admin_email;

    $body .= "\r\n\r\nSite details:\r\n";
    $body .= '  WordPress version: ' . get_bloginfo('version') . "\r\n";
    $body .= '  MM version: ' . csmm_get_plugin_version() . "\r\n";
    $body .= '  PHP version: ' . PHP_VERSION . "\r\n";
    $body .= '  Site URL: ' . get_bloginfo('url') . "\r\n";
    $body .= '  WordPress URL: ' . get_bloginfo('wpurl') . "\r\n";
    $body .= '  Theme: ' . $theme->get('Name') . ' v' . $theme->get('Version') . "\r\n";
    $body .= '  Options: ' . "\r\n" . serialize($options) . "\r\n";


		// Sending the mail to the support email
		if ( true === wp_mail( 'support@webfactoryltd.com', $subject, $body, $headers ) ) {
			// Sending the success response
			$response = array(
				'code' 		=> 'success',
				'response' 	=> __( 'We have received your support ticket and  will get back to you shortly!', 'signals' )
			);
		} else {
			// Sending the failure response
			$response = array(
				'code' 		=> 'error',
				'response' 	=> __( 'There was an error creating the support ticket. You can try again later or send us an email directly to <strong>support@webfactoryltd.com</strong>', 'signals' )
			);
		}
	}


	// Sending proper headers and sending the response back in the JSON format
	header( "Content-Type: application/json" );
	echo json_encode( $response );


	// Exiting the AJAX function. This is always required
	exit();

}
add_action( 'wp_ajax_signals_csmm_support', 'csmm_ajax_support' );
add_action( 'wp_ajax_csmm_rate_hide', 'csmm_rate_hide' );
add_action( 'wp_ajax_csmm_welcome_hide', 'csmm_welcome_hide' );
add_action( 'wp_ajax_csmm_olduser_hide', 'csmm_olduser_hide' );
add_action( 'wp_ajax_csmm_dismiss_pointer', 'csmm_dismiss_pointer_ajax');

function csmm_rate_hide() {
  set_transient('csmm_rate_hide', true, DAY_IN_SECONDS * 700);

  wp_send_json_success();
} // csmm_rate_hide

function csmm_welcome_hide() {
  set_transient('csmm_welcome_hide', true, DAY_IN_SECONDS * 700);

  wp_send_json_success();
} // csmm_welcome_hide

function csmm_olduser_hide() {
  set_transient('csmm_olduser_hide', true, DAY_IN_SECONDS * 700);

  wp_send_json_success();
} // csmm_olduser_hide
