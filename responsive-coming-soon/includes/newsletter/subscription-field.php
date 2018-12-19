<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
	<?php $wpsm_rcs_plugin_options_subscription_field = unserialize(get_option('wpsm_rcs_plugin_options_subscription_field'));	
	?>	
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item heading-item">
				<div class="panel panel-default heading-item-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								<div class="textbox text-white   margin-bottom settings-title">
									<?php _e('Subscription Field Settings','WPSM_RCS_TEXT_DOMAIN'); ?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	<form method="post" id="wpsm_rcs_plugin_options_subscription_field" >
		
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Subscription Field Section Link Button Label','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Update Subscription Field Section Button text here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="subscription_field_link_button_label" name="subscription_field_link_button_label"  size="56" value="<?php echo $wpsm_rcs_plugin_options_subscription_field['subscription_field_link_button_label'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Subscription Field Section Title','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Update Subscription Field Section title here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="subscription_field_section_title" name="subscription_field_section_title"  size="56" value="<?php echo $wpsm_rcs_plugin_options_subscription_field['subscription_field_section_title'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		
	    <div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Update Email Field Place holder text ','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="email_field_pl_hold_text" name="email_field_pl_hold_text"  size="56" value="<?php echo $wpsm_rcs_plugin_options_subscription_field['email_field_pl_hold_text'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Subscribe Me Button Label ','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="subs_me_button_label" name="subs_me_button_label"  size="56" value="<?php echo $wpsm_rcs_plugin_options_subscription_field['subs_me_button_label'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('After Success Subscription Notification Text','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="success_subs_notification_text" name="success_subs_notification_text"  size="56" value="<?php echo $wpsm_rcs_plugin_options_subscription_field['success_subs_notification_text'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Invalid Email Notification Text','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="invalid_email_notification_text" name="invalid_email_notification_text"  size="56" value="<?php echo $wpsm_rcs_plugin_options_subscription_field['invalid_email_notification_text'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</form>		
		
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('subscription_field')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
				</div>
				<div class="pull-right">
					<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('subscription_field')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
				</div>
			</div>
		</div>
								
							

	</div>
	<!-- /row -->