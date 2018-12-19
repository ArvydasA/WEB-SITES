<?php 
function wpsm_responsive_coming_soon_plugin_js_css()
{

    //enqueue scripts page for coming soon plugin admin panel
	wp_enqueue_script('theme-preview');
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('wpsm_rcs-bootstrap_css', WPSM_RCS_PLUGIN_URL.'css/bootstrap.css');
	wp_enqueue_style('wpsm_rcs-smartech_css', WPSM_RCS_PLUGIN_URL.'css/smartech.css');

	wp_enqueue_style('wpsm_rcs-font-awesome_min', WPSM_RCS_PLUGIN_URL.'css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('wpsm_rcs-font-awesome-picker', WPSM_RCS_PLUGIN_URL.'css/fontawesome-iconpicker.css');
	
	//dailog pop css
	wp_enqueue_style('wpsm_rcs-dialog', WPSM_RCS_PLUGIN_URL.'css/dialog/dialog.css');
	wp_enqueue_style('wpsm_rcs-dialog-box-style', WPSM_RCS_PLUGIN_URL.'css/dialog/dialog-box-style.css');
	wp_enqueue_style('wpsm_rcs-dialog-wilma', WPSM_RCS_PLUGIN_URL.'css/dialog/dialog-jamie.css');
	
	wp_enqueue_style('wpsm_rcs-fv', WPSM_RCS_PLUGIN_URL.'css/fv.css');
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	
	// Media Upload Js
	wp_enqueue_script('wpsm_rcs-media-uploads',WPSM_RCS_PLUGIN_URL.'js/media-upload-script.js',array('media-upload','thickbox','jquery'));
    // Date Picker Js
	wp_enqueue_script('wpsm_rcs-time-picker', WPSM_RCS_PLUGIN_URL.'js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	// Colour Picker Js
	wp_enqueue_script('wpsm_rcs-my-color-picker-script', WPSM_RCS_PLUGIN_URL.'js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	// Bootstrap Js
	wp_enqueue_script('wpsm_rcs-bootstrap_min_js',WPSM_RCS_PLUGIN_URL.'js/bootstrap.min.js');
	// Admin Settings Dashboard Js
	wp_enqueue_script('wpsm_rcs-metisMenu',WPSM_RCS_PLUGIN_URL.'js/plugins/metisMenu/metisMenu.min.js');
	wp_enqueue_script('wpsm_rcs-smartech',WPSM_RCS_PLUGIN_URL.'js/smartech.js',array('jquery'));
	wp_enqueue_script('wpsm_rcs-sidebar_nav',WPSM_RCS_PLUGIN_URL.'js/rcsp_sidebar_nav.js');
	// Font Awesome Icon Picker Js
	wp_enqueue_script('wpsm_rcs-font-icon-picker-js',WPSM_RCS_PLUGIN_URL.'js/fontawesome-iconpicker.js',array('jquery'));
	wp_enqueue_script('wpsm_rcs-call-icon-picker-js',WPSM_RCS_PLUGIN_URL.'js/call-icon-picker.js',array('jquery'), false, true);
	
	// Multi select Dropdown Js
	wp_enqueue_script('wpsm_rcs-bootstrap-multiselect-js',WPSM_RCS_PLUGIN_URL.'js/chosen.jquery.js');
	// Data Save Js
	wp_enqueue_script('wpsm_rcs-rcsp-option-data-save-js',WPSM_RCS_PLUGIN_URL.'js/rcsp-option-data-save.js');
	// Data Field Validator Js
	wp_enqueue_script('wpsm_rcs-rcsp-validator-js',WPSM_RCS_PLUGIN_URL.'js/validator.js');
	
	wp_enqueue_style('wpsm_rcs-jquery-ui-css', WPSM_RCS_PLUGIN_URL.'css/rcsp_jquery-ui.css');
	
	//dailog pop js
	wp_enqueue_script('wpsm_rcs-snap-svg-min',WPSM_RCS_PLUGIN_URL.'js/dialog/snap.svg-min.js');
	wp_enqueue_script('wpsm_rcs-modernizr-custom',WPSM_RCS_PLUGIN_URL.'js/dialog/modernizr.custom.js');
	wp_enqueue_script('wpsm_rcs-classie',WPSM_RCS_PLUGIN_URL.'js/dialog/classie.js');
	wp_enqueue_script('wpsm_rcs-dialogFx',WPSM_RCS_PLUGIN_URL.'js/dialog/dialogFx.js'); 
		
}
add_action( 'admin_notices', 'wpsm_rcs_review' );
function wpsm_rcs_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'wpsm_rcs_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('wpsm_rcs_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible wpsm-rcs-review-notice">
		<div style="float:left;margin-right:10px ;margin-bottom:10px;">
			<img style="width: 120px;height: auto;" src="<?php echo WPSM_RCS_PLUGIN_URL.'images/icon-show.png'; ?>" />
		</div>
		<p style="font-size:16px;">'Hi! We saw you have been using <strong>Responsive Coming Soon plugin</strong> for a few days and wanted to ask for your help to <strong>make the plugin better</strong>.We just need a minute of your time to rate the plugin. Thank you!</p>
		<p style="font-size:16px;"><strong><?php _e( '~ wpshopmart', '' ); ?></strong></p>
		<p style="font-size:17px;"> 
			<a style="color: #fff;background: #ef4238;padding: 5px 7px 4px 6px;border-radius: 4px;" href="https://wordpress.org/support/plugin/responsive-coming-soon/reviews/?filter=5" class="wpsm-rcs-dismiss-review-notice wpsm-rcs-review-out" target="_blank" rel="noopener">Rate the plugin</a>&nbsp; &nbsp;
			<a style="color: #fff;background: #27d63c;padding: 5px 7px 4px 6px;border-radius: 4px;" href="#"  class="wpsm-rcs-dismiss-review-notice wpsm-rate-later" target="_self" rel="noopener"><?php _e( 'Nope, maybe later', '' ); ?></a>&nbsp; &nbsp;
			<a style="color: #fff;background: #31a3dd;padding: 5px 7px 4px 6px;border-radius: 4px;" href="#" class="wpsm-rcs-dismiss-review-notice wpsm-rated" target="_self" rel="noopener"><?php _e( 'I already did', '' ); ?></a>
		</p>
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.wpsm-rcs-dismiss-review-notice', function( event ) {
				if ( $(this).hasClass('wpsm-rcs-review-out') ) {
					var wpsm_rate_data_val = "1";
				}
				if ( $(this).hasClass('wpsm-rate-later') ) {
					var wpsm_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('wpsm-rated') ) {
					var wpsm_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'wpsm_rcs_dismiss_review',
					wpsm_rate_data_uc : wpsm_rate_data_val
				});
				
				$('.wpsm-rcs-review-notice').hide();
				//location.reload();
			});
			$(document).on('click', ' .wpsm-rcs-line-review-notice .notice-dismiss', function( event ) {
			//alert("hello");
				var wpsm_rate_data_val = "2";

				$.post( ajaxurl, {
					action: 'wpsm_rcs_dismiss_review',
					wpsm_rate_data_uc : wpsm_rate_data_val
				});
				
				$('.wpsm-siteoff-line-review-notice').hide();
				//location.reload();
			});
			
		});
	</script>
	<?php
}

add_action( 'wp_ajax_wpsm_rcs_dismiss_review', 'wpsm_rcs_dismiss_review' );
function wpsm_rcs_dismiss_review() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['wpsm_rate_data_uc']=="1"){
		
	}
	if($_POST['wpsm_rate_data_uc']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		update_option( 'wpsm_rcs_review', $review );
	}
	if($_POST['wpsm_rate_data_uc']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		update_option( 'wpsm_rcs_review', $review );
	}
	die;
}
?>