<?php $wpsm_rcs_plugin_options_newsletter = unserialize(get_option('wpsm_rcs_plugin_options_newsletter'));	
?>
<script>
	function select_newsletter(){
		var active_nl = jQuery("#rcsp_newsletter_dropdown").val();
		jQuery(".rcsp_newsletter").hide(500);
		jQuery("#"+active_nl).show(500);
	}
</script>	
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Select Your Newsletter Here ','WPSM_RCS_TEXT_DOMAIN'); ?>
							</div>
						   
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<form method="post" id="wpsm_rcs_plugin_options_newsletter" >
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Select Newsletter Option','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Select your newsletter option here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<?php $rcsp_newsletter_dropdown = $wpsm_rcs_plugin_options_newsletter['wpsm_rcs_newsletter_dropdown']; ?>
							
							<select id="rcsp_newsletter_dropdown" onchange="select_newsletter()" class="standard-dropdown" name="wpsm_rcs_newsletter_dropdown" >
								<option value="0" <?php if($rcsp_newsletter_dropdown == "0") { echo "selected"; } ?> ><?php _e('Do not display sign up field','')?></option>
								<option value="wpmail" <?php if($rcsp_newsletter_dropdown == "wpmail") { echo "selected"; } ?>><?php _e('Wp Mail','')?></option>
								<option disabled  ><?php _e('Db database Available in pro','')?></option>
								<option disabled  ><?php _e('Constant Contact Available in pro','')?></option>
								<option disabled  ><?php _e('Campaign Monitor  Available in pro','')?></option>
								<option disabled  ><?php _e('Mailchimp  Available in pro','')?></option>
								<option disabled  ><?php _e('Madmimi Background Available in pro','')?></option>
								<option disabled  ><?php _e('GetResponse Video Background Available in pro','')?></option>
								<option disabled  ><?php _e('iContact Video Background Available in pro','')?></option>
								
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		
		
		
		
		<div id="wpmail" class="rcsp_newsletter " <?php if($rcsp_newsletter_dropdown!="wpmail"){ ?> style="display:none;" <?php } ?>>
			<div style="margin-bottom: 10px;">
				<img src="<?php echo WPSM_RCS_PLUGIN_URL.'/images/wpmail.png'; ?>" class="img-responsive" style="margin-right: auto;" alt="" >
			</div>
			
			
			
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Confirmation Mail For Subscriber After Subscribe','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><?php _e('Subject','WPSM_RCS_TEXT_DOMAIN'); ?></p>
								<input type="text" class="pro_text" id="to_subs_mail_sub" name="to_subs_mail_sub" placeholder="<?php _e('Enter subject Here For After Subscriber Confirmation Mail','WPSM_RCS_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_rcs_plugin_options_newsletter['to_subs_mail_sub']; ?>" />
							</td>
						</tr>
						<tr class="" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><?php _e('Message Body','WPSM_RCS_TEXT_DOMAIN'); ?></p>
								<textarea rows="6"  class="pro_text" id="to_subs_mail_msg" name="to_subs_mail_msg" placeholder="<?php _e('Enter Your Message Here For After Subscriber Confirmation Mail','WPSM_RCS_TEXT_DOMAIN'); ?>"><?php echo $wpsm_rcs_plugin_options_newsletter['to_subs_mail_msg']; ?></textarea>
							</td>
						</tr>
						
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Notification Mail To Admin After Subscribe By User','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><?php _e('Subject','WPSM_RCS_TEXT_DOMAIN'); ?></p>
								<input type="text" class="pro_text" id="to_admin_mail_sub" name="to_admin_mail_sub" placeholder="<?php _e('Enter subject for notification mail','WPSM_RCS_TEXT_DOMAIN')?>" size="56" value="<?php echo $wpsm_rcs_plugin_options_newsletter['to_admin_mail_sub']; ?>" />
							</td>
						</tr>
						<tr class="" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><?php _e('Message Body','WPSM_RCS_TEXT_DOMAIN'); ?></p>
								<textarea rows="6"  class="pro_text" id="to_admin_mail_msg" name="to_admin_mail_msg" placeholder="<?php _e('Enter your message for notification mail','WPSM_RCS_TEXT_DOMAIN')?>"><?php echo $wpsm_rcs_plugin_options_newsletter['to_admin_mail_msg']; ?></textarea>
							</td>
						</tr>
						
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Email Address for Get Notification Mail','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><?php _e('Email Address	','WPSM_RCS_TEXT_DOMAIN'); ?></p>
								<input type="text" class="pro_text" id="email_add_of_admin" name="email_add_of_admin" placeholder="<?php _e('Enter Your Email Address Here','WPSM_RCS_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_rcs_plugin_options_newsletter['email_add_of_admin']; ?>" />
							</td>
						</tr>
						
						
					</table>
				</div>
			</div>
		</div>
	</form>		
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('newsletter')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('newsletter')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
							
</div>