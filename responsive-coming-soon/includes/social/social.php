<!-- Dashboard Settings panel content --- >
<!---------------------------------------->
	<?php $wpsm_rcs_plugin_options_social = unserialize(get_option('wpsm_rcs_plugin_options_social'));	
	?>	
	<style>
		#rpgg_gallery_thumbssds { list-style-type: none; }
		#rpgg_gallery_thumbssds li span { position: absolute;  }
		.ui-state-highlight { height: 1.5em; line-height: 1.2em; }
	  
		.rcp_social_profile_admin .slider-text{
			background-color: #31a3dd !important;
			border-radius: 5px;
			font-size: 0.9em;
			height: 29px;
			padding-top: 2px;
			text-align: center;
			width: auto !important;
			margin-left: 0px;
			color:#fff !important;
			border-color: #ffffff !important;
			margin-right: 5px;
			-webkit-box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15);
			box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15) !important;
		}
		
		
		.placeholder {
			border:2px dotted  #f2f2f2 !important;
			visibility: visible;
			padding: 20px;
		
		}
	</style>
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item heading-item">
				<div class="panel panel-default heading-item-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								<div class="textbox text-white   margin-bottom settings-title">
									<?php _e('Social Settings','WPSM_RCS_TEXT_DOMAIN'); ?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		   
		</div>
		<form method="post" id="wpsm_rcs_plugin_options_social" >
			
			
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Social Profiles','WPSM_RCS_TEXT_DOMAIN')?></th>
							<td style="text-align:right;" >
								<i title="Add your social network profile url here, please  enter correct url" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
							<?php 
							$Social_Icon = $wpsm_rcs_plugin_options_social['social_icon']; 
							$Social_Name = $wpsm_rcs_plugin_options_social['social_name'];
							$social = $wpsm_rcs_plugin_options_social['social']; ?>
								<!-- using for-->
								<ul class="rcp_social_profile_admin" id="rpgg_gallery_thumbssds">
								<?php	for($i = 0; $i<=5; $i++) { ?>
									<li>
										<i class="fa <?php echo $Social_Icon[$i]; ?>"></i>
										<input type="text" class="pro_text" id="social[]" name="social[]" placeholder="<?php _e('Enter '.$Social_Name[$i].' url','')?>" size="56" value="<?php echo $social[$i]; ?>" /> 
										<input type="hidden" class="pro_text"  id="social_icon[]" name="social_icon[]" value="<?php echo $Social_Icon[$i]; ?>" />
										<input type="hidden" class="pro_text"  id="social_name[]" name="social_name[]" value="<?php echo $Social_Name[$i]; ?>" />
										<span style="display:inline-block;background-color: #31a3dd !important;margin-top: 6px;
											border-radius: 5px;
											font-size: 0.9em;
											height: 29px;
											padding-top: 2px;
											text-align: center;
											width: auto !important;
											margin-left: 0px;
											color: #fff !important;
											border-color: #ffffff !important;
											margin-right: 5px;
											-webkit-box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15);
											box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15) !important;
											width: 10% !important;
											line-height: 2.1;"><?php echo ucfirst($Social_Name[$i]); ?></span>
									</li>
								<?php } ?>
								</ul>
								<a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank"><img src="<?php echo WPSM_RCS_PLUGIN_URL.'images/icon.jpg'; ?>" style="padding-right: 30px;" class="img-responsive" /></a>
						
							</td>
						</tr>
							<tr class="radio-span" style="border-bottom:none;">
								<td >
									<h4><a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Unlock More 10+ Social Profiles with Drag And Drop Position Feature In pro version Buy Now</a></h4>
								</td>
							</tr>
						
					</table>
				</div>
			</div>
			
			
			
		</form>
		
		
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('social')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
				</div>
				<div class="pull-right">
					<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('social')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
				</div>
			</div>
		</div>
				
							

	</div>
	<!-- /row -->