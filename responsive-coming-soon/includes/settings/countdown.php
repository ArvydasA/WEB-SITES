<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
<?php $wpsm_rcs_plugin_options_countdown = unserialize(get_option('wpsm_rcs_plugin_options_countdown'));	
?>	
<script>
	jQuery.noConflict();
	jQuery(document).ready(function() {
		
		jQuery('#countdown_date').datepicker({dateFormat: 'yy/mm/dd',minDate: '0'});
		jQuery('#countdown_time').timepicker();
	
	});
	
	function cnt_enable(status){
	
		if(status.value=='on')
		{
			jQuery(".countdown-section").show(500);
		}
	   else
		{
		  jQuery(".countdown-section").hide(500);
		}
	}

</script>
<style>
	.ui-timepicker-title {
		border-bottom-right-radius: 0px !important;
		border-bottom-left-radius: 0px !important;
		border-top-right-radius: 0px !important;
		border-top-left-radius: 0px !important;
		padding: 5px;
	}
	.periods{
		padding:5px !important;
		color:#ffffff  !important;
	}
	.ui-timepicker-table{
		border-bottom-right-radius: 0px !important;
		border-bottom-left-radius: 0px !important;
	}
	<?php if($wpsm_rcs_plugin_options_countdown['countdown_enable']!="on") {?>	
		.countdown-section{
			display:none;
		}
	<?php } ?>	
</style>
	
	
<div class="row" >
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								 <?php _e('Countdown Timer Settings','WPSM_RCS_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<form method="post" id="wpsm_rcs_plugin_options_countdown" >
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Enable Countdown','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Hide/display your countdown section here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<?php $cnt_enable = $wpsm_rcs_plugin_options_countdown['countdown_enable']; ?>
							<div class="switch">
								<input type="radio" class="switch-input" name="countdown_enable" value="on" id="enable_cnt"  <?php if($cnt_enable == "on") { echo "checked"; } ?>  onclick="cnt_enable(this);">
								<label for="enable_cnt" class="switch-label switch-label-off"><?php _e('Yes','WPSM_RCS_TEXT_DOMAIN'); ?></label>
								<input type="radio" class="switch-input" name="countdown_enable" value="off" id="disable_cnt" <?php if($cnt_enable == "off") { echo "checked"; } ?> onclick="cnt_enable(this);">
								<label for="disable_cnt" class="switch-label switch-label-on"><?php _e('No','WPSM_RCS_TEXT_DOMAIN'); ?></label>
								<span class="switch-selection"></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel countdown-section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('End Date','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add your website launch date here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="countdown_date" name="countdown_date" readonly placeholder="<?php _e('Select Your Countdown Start date','WPSM_RCS_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_rcs_plugin_options_countdown['countdown_date']; ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel countdown-section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('End Time','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add your website launch time here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td >
							<input type="text" class="pro_text" id="countdown_time" name="countdown_time" readonly  size="56" placeholder="<?php _e('Select Your Countdown Start Time','WPSM_RCS_TEXT_DOMAIN'); ?>" value="<?php echo $wpsm_rcs_plugin_options_countdown['countdown_time']; ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel countdown-section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Language Strings','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update here your countdown language string in your language" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<p class="rcsp_p_admin"><?php _e('Days','WPSM_RCS_TEXT_DOMAIN'); ?></p>
							<input type="text" class="pro_text" id="days" name="days"  size="56" value="<?php echo $wpsm_rcs_plugin_options_countdown['days']; ?>" />
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<p class="rcsp_p_admin"><?php _e('Hours','WPSM_RCS_TEXT_DOMAIN'); ?></p>
							<input type="text" class="pro_text" id="hours" name="hours"  size="56" value="<?php echo $wpsm_rcs_plugin_options_countdown['hours']; ?>" />
						</td>
					</tr>
					
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<p class="rcsp_p_admin"><?php _e('Minutes','WPSM_RCS_TEXT_DOMAIN'); ?></p>
							<input type="text" class="pro_text" id="minutes" name="minutes"  size="56" value="<?php echo $wpsm_rcs_plugin_options_countdown['minutes']; ?>" />
						</td>
					</tr>
					
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<p class="rcsp_p_admin"><?php _e('Seconds','WPSM_RCS_TEXT_DOMAIN'); ?></p>
							<input type="text" class="pro_text" id="seconds" name="seconds"  size="56" value="<?php echo $wpsm_rcs_plugin_options_countdown['seconds']; ?>" />
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		<div class="panel panel-primary panel-default content-panel countdown-section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Auto Launch','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td >
							<h4>Avalable In pro version <a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Buy Now</a></h4>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</form>
	
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('countdown')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('countdown')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>	
							

</div>
