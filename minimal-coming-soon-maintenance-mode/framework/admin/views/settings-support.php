<?php

/**
 * Support view for the plugin
 *
 * @link       http://www.webfactoryltd.com
 * @since      1.0
 */

?>

<div class="signals-tile" id="support">
	<div class="signals-tile-body">
		<div class="signals-tile-title"><?php _e( 'SUPPORT', 'signals' ); ?></div>
		<p><?php _e( 'Report issues using the form below and we will get back to you ASAP. If the support form is not working, please send us an email at ', 'signals' ); ?><a href="mailto:support@webfactoryltd.com">support@webfactoryltd.com</a><?php _e( ' explaining the issue you are having.', 'signals' ); ?> If our support did a great job please <a target="_blank" href="https://wordpress.org/support/plugin/minimal-coming-soon-maintenance-mode/reviews/?filter=5#new-post" title="Let others know how you like the plugin">rate the plugin ★★★★★</a>. Thank you!</p>

		<div class="signals-section-content signals-support-form">
			<div class="signals-ajax-response"></div>

<?php
if (csmm_chat_available()) {
?>            
            <a title="Chat with our support agents" style="margin: 0 0 0 15px;" href="#" class="signals-btn csmm-open-chat"><span style="font-size: 19px;" class="dashicons dashicons-format-chat"></span>  <strong>Live Chat Support</strong></a><br><br>
<?php
}
?>

			<div class="signals-double-group signals-clearfix" style="border-bottom: none; padding-bottom: 0;">
      <div class="signals-form-group">
        <label for="signals_support_email" class="signals-strong"><?php _e( 'Email Address', 'signals' ); ?></label>
        <input type="text" name="signals_support_email" id="signals_support_email" value="" placeholder="<?php _e( 'Your best email address', 'signals' ); ?>" class="signals-form-control skip-save">

        <p class="signals-form-help-block"><?php _e( 'You will receive support response on this email address.', 'signals' ); ?></p>
      </div>

      <div class="signals-form-group" style="border-bottom: none; padding-bottom: 0;">
        <label for="email_urgency" class="signals-strong"><?php _e( 'Priority', 'signals' ); ?></label>
        <select class="skip-save pro-option" id="email_urgency" name="email_urgency">
          <?php
          $email_options = array(
            array( 'val'=> 'low', 'label' => __('Low', 'signals' ) ),
            array( 'val'=> '-1', 'label' => __('Normal', 'signals' ) ),
            array( 'val'=> '-1', 'label' => __('Urgent - my site is down', 'signals' ) ),
          );
          csmm_create_select_options($email_options, 'low' );  ?>
        </select>

        <p class="signals-form-help-block"><?php _e( 'We reply to all tickets as fast as possible. However, <a href="#pro" class="csmm-change-tab">PRO users</a> get to jump the queue.', 'signals' ); ?></p>
      </div>
      </div>

			<div class="signals-form-group" style="border-bottom: none; padding-bottom: 0">
				<label for="signals_support_issue" class="signals-strong"><?php _e( 'Issue / Feedback', 'signals' ); ?></label>
				<textarea name="signals_support_issue" id="signals_support_issue" class="signals-block skip-save" rows="10" placeholder="<?php _e( 'Please explain the issue you are facing with the plugin. Provide as much detail as possible.', 'signals' ); ?>"></textarea>

				<p class="signals-form-help-block"><?php _e( 'Please explain the issue you are facing with the plugin. Provide as much detail as possible.', 'signals' ); ?></p>
			</div>

      <div class="signals-form-group" style="border-bottom: none; padding-bottom: 0;">
        <label for="" class="signals-strong">Additional data</label>
<?php
    $theme = wp_get_theme();
    echo '<p>WordPress version: <code>' . get_bloginfo('version') . '</code><br>';
    echo 'MM Version: <code>' . csmm_get_plugin_version() . '</code><br>';
    echo 'PHP Version: <code>' . PHP_VERSION . '</code><br>';
    echo 'Site URL: <code>' . get_bloginfo('url') . '</code><br>';
    echo 'WordPress URL: <code>' . get_bloginfo('wpurl') . '</code><br>';
    echo 'Theme: <code>' . $theme->get('Name') . ' v' . $theme->get('Version') . '</code><br>';
    echo 'MM Options: <i>all option values will be sent to support to ease debugging</i>';
    echo '</p>';
?>
    <p class="signals-form-help-block">Our support agents need this info to provide faster &amp; better support. The data above will be added to your message.</p>
      </div>

			<button class="signals-btn signals-create-ticket"><strong><?php _e( 'Send Support Message', 'signals' ); ?></strong></button>
		</div>
	</div>
</div><!-- #support -->
