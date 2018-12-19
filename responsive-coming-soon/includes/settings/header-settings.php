<!-- Header Settings panel content --- >
<!----------------------------------------> 
<?php $wpsm_rcs_plugin_options_header = unserialize(get_option('wpsm_rcs_plugin_options_header'));	
?>	
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default  heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							
							<div class="textbox text-white   margin-bottom settings-title">
							<?php _e('Coming Soon Page Header Settings ','WPSM_RCS_TEXT_DOMAIN'); ?>
							</div>
						   
						</div>
					</div>
				</div>
				
			</div>
		</div>				   
	</div>
	
	<form method="post" id="wpsm_rcs_plugin_options_header" >
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Favicon','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add your Page favicon image here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<div class="col-md-6">
								<div class="rcsp-image-entry" >
									<img src="<?php if($wpsm_rcs_plugin_options_header['favicon']!=''){ echo $wpsm_rcs_plugin_options_header['favicon']; } ?>" />
									<input type="button" id="upload-background" name="upload-background" value="Upload Image Here" class="button-primary rcsp_media_upload"  />
									<input type="text" id="favicon" name="favicon" class="rcsp_label_text"  value="<?php echo $wpsm_rcs_plugin_options_header['favicon']; ?>"  readonly="readonly" placeholder="<?php _e('No Media Selected ','WPSM_RCS_TEXT_DOMAIN'); ?>" />
								</div>
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
						<th scope="row" ><?php _e('SEO Meta Title','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add here your Coming Soon Page Seo title " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="meta_title" name="meta_title" placeholder="<?php _e('Enter Your Site Meta Title !','WPSM_RCS_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_rcs_plugin_options_header['meta_title']; ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('SEO Meta Description','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add here your Coming Soon Page Seo Description " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<textarea rows="6"  class="pro_text" id="meta_desc" name="meta_desc" placeholder="<?php _e('Enter Your Seo Meta Description Here...','WPSM_RCS_TEXT_DOMAIN'); ?>"><?php echo $wpsm_rcs_plugin_options_header['meta_desc']; ?></textarea>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Google Analytics Code','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add here your site google analytics script" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<textarea rows="6"  class="pro_text" id="google_al" name="google_al" placeholder="<?php _e('Enter Your Google Analytics Here......','WPSM_RCS_TEXT_DOMAIN'); ?>"><?php echo $wpsm_rcs_plugin_options_header['google_al']; ?></textarea>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('header')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('header')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
							
						

</div>