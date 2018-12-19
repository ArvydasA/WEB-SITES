<!-- Dashboard Settings panel content --- >
<!---------------------------------------->
	<?php $wpsm_rcs_plugin_options_custom_css= unserialize(get_option('wpsm_rcs_plugin_options_custom_css'));	
	?>	
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								 <?php _e('Custom Codes','WPSM_RCS_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<form method="post" id="wpsm_rcs_plugin_options_custom_css" >
	
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Custom Css','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add your coming page custom css here, please add your css without <style></style> tag " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<textarea rows="15"  class="pro_text " id="custom_css" name="custom_css" placeholder=""><?php echo $wpsm_rcs_plugin_options_custom_css['custom_css']; ?></textarea>
							<div class="description"><strong><?php _e('Note :','WPSM_RCS_TEXT_DOMAIN'); ?></strong><?php _e('Please enter custom css without "style" tag.','WPSM_RCS_TEXT_DOMAIN'); ?> </div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('custom_css')"> <?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('custom_css')"> <?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
		
</div>