<?php

/**
 * Provide a admin header view for the plugin
 *
 * @link       http://www.webfactoryltd.com
 * @since      0.1
 */

?>

<div class="signals-cnt-fix">
	<div class="signals-fix-wp38">
		<div class="signals-header signals-clearfix">
			<img src="<?php echo CSMM_URL; ?>/framework/admin/img/mm-icon-dark.png" class="signals-logo">
			<p>
				<strong><?php _e( 'Minimal Coming Soon &amp; Maintenance Mode', 'signals' ); ?></strong>
				<span><?php _e( 'by', 'signals' ); ?> <a href="http://www.webfactoryltd.com/?utm_source=csmm-free&utm_medium=plugin&utm_content=header-link&utm_campaign=csmm-free-v<?php echo csmm_get_plugin_version(); ?>" target="_blank"><?php _e( 'Web Factory Ltd', 'signals' ); ?></a></span>
			</p>

<?php
  if ($signals_csmm_options['status']== '1') {
    $action_url = add_query_arg(array('action' => 'csmm_change_status', 'new_status' => 'disabled', 'redirect' => urlencode($_SERVER['REQUEST_URI'])), admin_url('admin.php'));
  } else {
    $action_url = add_query_arg(array('action' => 'csmm_change_status', 'new_status' => 'enabled', 'redirect' => urlencode($_SERVER['REQUEST_URI'])), admin_url('admin.php'));
  }

  /*

<div id="header-right">
        <div id="header-status" title="Click to change the Coming Soon status" data-action-url="<?php echo $action_url; ?>">
          <label for="">Coming Soon Status:</label> <div class="csmm-status-wrapper <?php echo ($signals_csmm_options['status'] != '1')? 'off': 'on'; ?>"><span class="csmm-status-btn csmm-status-off">OFF</span><span class="csmm-status-btn csmm-status-on">ON</span></div>
        </div>
      </div>

  */
?>
			<?php if ( isset( $signals_header_addon ) ) { echo $signals_header_addon; } ?>
		</div><!-- .signals-header -->
