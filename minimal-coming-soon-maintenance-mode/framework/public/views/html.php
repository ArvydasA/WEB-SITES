<?php

/**
 * Renders the html template for the plugin.
 *
 * @link       http://www.webfactoryltd.com
 * @since      1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo stripslashes( $options['description'] ); ?>">
<meta name="generator" content="Free Coming Soon & Maintenance Mode plugin for WordPress">
<title><?php echo stripslashes( $options['title'] ); ?></title>
<?php if ( isset( $options['favicon'] ) && ! empty( $options['favicon'] ) ) : ?>
<link rel="shortcut icon" href="<?php echo esc_url_raw( $options['favicon'] ); ?>" />
<?php endif; ?>
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo CSMM_URL; ?>/framework/public/css/public.css" />
<script src='//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js'></script>
<script>
	WebFont.load( {
		google: {
			families: ['<?php echo $options["header_font"]; ?>', '<?php echo $options["secondary_font"]; ?>']
		}
	} );
</script>
<?php require_once CSMM_PATH . '/framework/public/include/styles.php'; ?>

<?php

if(csmm_is_mailoptin_active() && $options['mailoptin_campaign']>0 && isset($options['mail_system_to_use']) && $options['mail_system_to_use'] == 'mo'){
	echo '<script src="'.includes_url('/js/jquery/jquery.js').'"></script>';
	echo '<script type="text/javascript">
				var mailoptin_globals = {
					"admin_url":"' . admin_url().'",
					"public_js":"' . MAILOPTIN_ASSETS_URL . 'js/src",
					"nonce":"'.wp_create_nonce('mailoptin-admin-nonce').'",
					"mailoptin_ajaxurl":"'.MailOptin\Core\AjaxHandler::get_endpoint().'",
					"ajaxurl":"'.admin_url('admin-ajax.php').'",
					"split_test_start_label":"Start Test",
					"split_test_pause_label":"Pause Test",
					"is_customize_preview":"false",
					"disable_impression_tracking":"false",
					"chosen_search_placeholder":"Type to search",
					"js_confirm_text":"Are you sure you want to do this?",
					"js_clear_stat_text":"Are you sure you want to do this? Clicking OK will delete all your optin analytics records."};
			</script>';
	echo '<script src="'.MAILOPTIN_ASSETS_URL.'/js/mailoptin.min.js"></script>';
}

// analytics
  if (csmm_convert_ga($options['analytics'])) {
    echo "<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '" . csmm_convert_ga($options['analytics']) . "', 'auto');
        ga('send', 'pageview');
      </script>";
  }
?>
</head>
<body class="signals-plugin">
	<div class="maintenance-mode">
		<div class="s-container">
			<div class="content">
				<?php

					// Logo
					if ( ! empty( $options['logo'] ) ) {
						$signals_arrange['logo'] = '<div class="logo-container">' . "\r\n";
						$signals_arrange['logo'] .= '<img title= "' . get_bloginfo('name') . '" alt= "' . get_bloginfo('name') . '" src="' . $options['logo'] . '" class="logo" />' . "\r\n";
						$signals_arrange['logo'] .= '</div>' . "\r\n";
					}

					// Header text
					if ( ! empty( $options['header_text'] ) ) {
						$signals_arrange['header'] = '<h1 class="header-text">' . stripslashes( nl2br( $options['header_text'] ) ) . '</h1>' . "\r\n";
					}

					// Secondary text
					if ( ! empty( $options['secondary_text'] ) ) {
						$signals_arrange['secondary'] = '<p class="secondary-text">' . stripslashes( nl2br( $options['secondary_text'] ) ) . '</p>' . "\r\n";
					}

					// Form

					if ( ! empty( $options['mailchimp_api'] ) && ! empty( $options['mailchimp_list'] ) && isset($options['mail_system_to_use']) && $options['mail_system_to_use'] == 'mc' ) {
						// Checking if the form is submitted or not
						if ( isset( $_POST['signals_email'] ) ) {
							// Processing begins
							$signals_email = strip_tags( $_POST['signals_email'] );

							if ( '' === $signals_email ) {
								$code 		= 'danger';
								$response 	= $options['message_noemail'];
              } elseif (!empty($options['gdpr_text']) && empty($_POST['gdpr_consent'])) {
                $code     = 'danger';
                $response = $options['gdpr_fail'];
							} else {
								$signals_email = filter_var( strtolower( trim( $signals_email ) ), FILTER_SANITIZE_EMAIL );

								if ( strpos( $signals_email, '@' ) ) {
									require_once CSMM_PATH . '/framework/admin/include/classes/class-mailchimp.php';

									$signals_connect 	= new Signals_MailChimp( $options['mailchimp_api'] );
									$signals_response 	= $signals_connect->call( 'lists/subscribe', array(
										'id'            => $options['mailchimp_list'],
										'email'         => array( 'email' => $signals_email ),
										'send_welcome'  => true
									) );


									// Showing message as per the response from the mailchimp server
									if ( isset( $signals_response['code'] ) && 214 !== $signals_response['code'] ) {
										$code 		= 'danger';
										$response 	= $options['message_wrong'];
									} elseif ( isset( $signals_response['code'] ) && 214 === $signals_response['code'] ) {
										$code 		= 'success';
										$response 	= $options['message_subscribed'];
									} else {
										$code 		= 'success';
										$response 	= $options['message_done'];
									}
								} else {
									$code 			= 'danger';
									$response 		= $options['message_noemail'];
								}
							}
						} // signals_email




						// Subscription form
						// Displaying errors as well if they are set
						$signals_arrange['form'] = '<div class="subscription">';

						if ( isset( $code ) && isset( $response ) ) {
							$signals_arrange['form'] .= '<div class="signals-alert signals-alert-' . $code . '">' . $response . '</div>';
						}

						$signals_arrange['form'] .= '<form role="form" method="post">
							<input value="' . strip_tags( @$_POST['signals_email'] ) . '" type="text" name="signals_email" placeholder="' . esc_attr( $options['input_text'] ) . '">';
						if ($options['gdpr_text']) {
							$signals_arrange['form'] .= '<div class="gdpr_consent"><input type="checkbox" value="1" name="gdpr_consent" id="gdpr_consent"> <label for="gdpr_consent">' . $options['gdpr_text'] . '</label></div>';
						}
						$signals_arrange['form'] .= '<input type="submit" name="submit" value="' . esc_attr( $options['button_text'] ) . '">
						</form>';

						// antispam text
						if ( ! empty( $options['antispam_text'] ) ) {
							// The best part, we don't do spam!
							$signals_arrange['form'] .= '<p class="anti-spam">' . stripslashes( $options['antispam_text'] ) . '</p>';
						}

						$signals_arrange['form'] .= '</div>';


          } // mailchimp_api && mailchimp_list

          if(csmm_is_mailoptin_active() && $options['mailoptin_campaign']>0 && isset($options['mail_system_to_use']) && $options['mail_system_to_use'] == 'mo'){
						$signals_arrange['form'] = MailOptin\Core\Admin\Customizer\OptinForm\OptinFormFactory::build($options['mailoptin_campaign']);
          }

					// Custom HTML
					$signals_arrange['html'] = stripslashes( $options['custom_html'] );

					// Let's show the sections now!
					if (!empty($options['arrange'])) {
						$signals_sections = explode( ',', $options['arrange'] );
					} else {
						$signals_sections = array( 'logo', 'header', 'secondary', 'form', 'html' );
					}

					foreach ( $signals_sections as $signals_section ) {
						if ( isset( $signals_arrange[$signals_section] ) ) {
							echo $signals_arrange[$signals_section];
						}
					}

				?>
			</div><!-- .content -->
      <?php echo csmm_linkback(); ?>
		</div><!-- .s-container -->
	</div><!-- .maintenance-mode -->
</body>
</html>
