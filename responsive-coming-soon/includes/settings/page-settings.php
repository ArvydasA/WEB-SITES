<!-- PageSettings panel content --- >
<!----------------------------------------> 
<?php $wpsm_rcs_plugin_options_general= unserialize(get_option('wpsm_rcs_plugin_options_general'));	
?>	
<Script>
	//button font-size slider
	jQuery(function() {
		jQuery( "#logo_width_slider" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 300,
			min:50,
			slide: function( event, ui ) {
			jQuery( "#logo_width" ).val( ui.value );
			}
		});
			
		jQuery( "#logo_width_slider" ).slider("value",<?php echo $wpsm_rcs_plugin_options_general['logo_width']; ?>  );
		jQuery( "#logo_width" ).val( jQuery( "#logo_width_slider" ).slider( "value") );

	});
</script>
<Script>
	//button font-size slider
	  jQuery(function() {
		jQuery( "#logo_height_slider" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 300,
			min:50,
			slide: function( event, ui ) {
			jQuery( "#logo_height" ).val( ui.value );
			}
		});
			
	    jQuery( "#logo_height_slider" ).slider("value",<?php echo $wpsm_rcs_plugin_options_general['logo_height']; ?>   );
	    jQuery( "#logo_height" ).val( jQuery( "#logo_height_slider" ).slider( "value") );
		
	 });
</script>
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item heading-item">
				<div class="panel panel-default heading-item-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								
								<div class="textbox text-white   margin-bottom settings-title">
									<?php _e('Page Settings','WPSM_RCS_TEXT_DOMAIN'); ?>
								</div>
							   
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		<form method="post" id="wpsm_rcs_plugin_options_general" >
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Logo','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Add and customize your Coming Soon page Logo from here, you can customize logo width and height from here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>								
								<div class="col-md-6">
									<div class="rcsp-image-entry" >
										<img src="<?php if($wpsm_rcs_plugin_options_general['rcsp_logo_url']!=''){ echo $wpsm_rcs_plugin_options_general['rcsp_logo_url']; } ?>" />
										<input type="button" id="upload-background" name="upload-background" value="Upload Image Here" class="button-primary rcsp_media_upload"  />
										<input type="text" id="rcsp_logo_url" name="rcsp_logo_url" class="rcsp_label_text"  value="<?php echo $wpsm_rcs_plugin_options_general['rcsp_logo_url']; ?>"  readonly="readonly" placeholder="No Media Selected" />
									</div>
								</div>
							</td>
						</tr>
						
						<tr>
							<th scope="row" ><?php _e('Logo Width','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td></td>
						</tr>
						<tr  style="border-bottom:none;">
							<td class="text-and-color-panel">
								<div id="logo_width_slider" class="size-slider" style="width: 25%;display:inline-block"></div>
								<input type="text" class="slider-text" id="logo_width" name="logo_width"  readonly="readonly">
								<span class="slider-text-span">px</span>
							</td>
						</tr>
						<tr>
							<th scope="row" ><?php _e('Logo Height','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td></td>
						</tr>
						<tr  style="border-bottom:none;">
							<td class="text-and-color-panel">
								<div id="logo_height_slider" class="size-slider" style="width: 25%;display:inline-block"></div>
								<input type="text" class="slider-text" id="logo_height" name="logo_height"  readonly="readonly">
								<span class="slider-text-span">px</span>
							</td>
						</tr>
						<tr>
							<th scope="row" ><?php _e('Display Logo','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td></td>
						</tr>
						<tr>
							<td>
								<?php $logo_enable = $wpsm_rcs_plugin_options_general['logo_enable']; ?>
								<div class="switch">
									<input type="radio" class="switch-input" name="logo_enable" value="on" id="enable_logo"  <?php if($logo_enable == "on") { echo "checked"; } ?>  >
									<label for="enable_logo" class="switch-label switch-label-off"><?php _e('Yes','WPSM_RCS_TEXT_DOMAIN'); ?></label>
									<input type="radio" class="switch-input" name="logo_enable" value="off" id="disable_logo" <?php if($logo_enable == "off") { echo "checked"; } ?> >
									<label for="disable_logo" class="switch-label switch-label-on"><?php _e('No','WPSM_RCS_TEXT_DOMAIN'); ?></label>
									<span class="switch-selection"></span>
							    </div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Headline','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Add your Coming Soon Home page Title/Headline here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<input type="text" class="pro_text" id="rcsp_headline" name="rcsp_headline" placeholder="<?php _e('Site coming soon!','WPSM_RCS_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_rcs_plugin_options_general['rcsp_headline']; ?>" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Description','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Enter your Coming Soon Home Page description" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<textarea rows="6"  class="pro_text" id="rcsp_description" name="rcsp_description" placeholder="<?php _e('Enter Your Coming Soon Description Here...','WPSM_RCS_TEXT_DOMAIN'); ?>"><?php echo $wpsm_rcs_plugin_options_general['rcsp_description']; ?></textarea>
							
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Coming Soon Home Page Section Link Button Text','WPSM_RCS_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Update your Coming Soon Menu Home page text here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<input type="text" class="pro_text" id="home_sec_link_txt" name="home_sec_link_txt" size="56" value="<?php echo $wpsm_rcs_plugin_options_general['home_sec_link_txt']; ?>" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			
		</form>
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('general')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
				</div>
				<div class="pull-right">
					<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('general')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
				</div>
			</div>
		</div>							
							

	</div>
	<!-- /row -->