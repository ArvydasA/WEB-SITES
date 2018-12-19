<!-- Text And Color Settings panel content --- >
<!----------------------------------------> 
<?php $wpsm_rcs_plugin_options_text_and_color = unserialize(get_option('wpsm_rcs_plugin_options_text_and_color'));	
	?>
<Script>
	// Title Font Size Slider	
	jQuery(function() {
		jQuery( "#button-size-slider" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 80,
			min:20,
			slide: function( event, ui ) {
			jQuery( "#headline_ft_size" ).val( ui.value );
			}
		});
			
		jQuery( "#button-size-slider" ).slider("value",<?php echo $wpsm_rcs_plugin_options_text_and_color['headline_ft_size']; ?>  );
		jQuery( "#headline_ft_size" ).val( jQuery( "#button-size-slider" ).slider( "value") );

	});
</script>


<Script>
	//Description Fonts Size Slider
	jQuery(function() {
		jQuery( "#button-size-slider3" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 40,
			min:10,
			slide: function( event, ui ) {
			jQuery( "#desc_ft_size" ).val( ui.value );
			}
		});

	jQuery( "#button-size-slider3" ).slider("value",<?php echo $wpsm_rcs_plugin_options_text_and_color['desc_ft_size']; ?> );
	jQuery( "#desc_ft_size" ).val( jQuery( "#button-size-slider3" ).slider( "value") );

	});
</script>
<style>
	.text-and-color-panel .ui-state-default, .text-and-color-panel  .ui-widget-content .ui-state-default{
		background-color: #fff;
		border: 0px solid #c5dbec;
		border-radius: 100%;
		cursor: move;
		height: 30px;
		left: 0;
		top: -9px;
		position: absolute;
		width: 30px;
		-webkit-box-shadow: 1px 1px 11px rgba(0, 0, 0, 0.5);
		box-shadow: 1px 1px 11px rgba(0, 0, 0, 0.5);
	}
	
	.text-and-color-panel  .ui-state-default, .ui-widget-header .ui-state-default {
		border: 1px solid #c5dbec;
		background: transparent;
		font-weight: bold;
		color: #2e6e9e;
	}
	.ui-slider-horizontal {
		height: .8em;
	}
	.ui-widget-content {
		border: 0px solid #a6c9e2; 
		background: #a9acb1;
		color: #222222;
	}
   	.ui-widget-header {
		border: 0px solid #4297d7;
		background: #ef4238;
		color: #ffffff;
		font-weight: bold;
	}
	 .slider-text{
		background-color: #f7fcff !important;
		border-radius: 5px !important; 
		font-size: 0.9em !important;
		height: 29px !important;
		padding-top: 4px !important;
		text-align: center !important;
		width: 55px !important;
		margin-left: 25px !important;
		border-color: #ffffff !important !important;
		margin-right: 5px !important;
		-webkit-box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15);
		box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15) !important;
	}
	.slider-text-span{
		font-size:17px;
		font-weight:700;
	}
</style>	
<div class="row" class="">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								 <?php _e('Text And Color Settings','WPSM_RCS_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<form method="post" id="wpsm_rcs_plugin_options_text_and_color" >
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Headline Font Colour','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your coming soon page all headlines font/text color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="headeline_ft_clr" name="headeline_ft_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['headeline_ft_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Description Font Colour','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your coming soon page all descriptions font/text color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="desc_ft_clr" name="desc_ft_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['desc_ft_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Subscribe Button Font Colour','WPSM_RCS_TEXT_DOMAIN');?></th>
						<td style="text-align:right;" >
							<i title="update your subscribe button font/text color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="sb_btn_ft_clr" name="sb_btn_ft_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['sb_btn_ft_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Subscribe Button background Colour','WPSM_RCS_TEXT_DOMAIN');?></th>
						<td style="text-align:right;" >
							<i title="update your subscribe button background color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="sb_btn_bg_clr" name="sb_btn_bg_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['sb_btn_bg_clr']; ?>" class="my-color-field" data-default-color="#16c9d0" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
	
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Countdown Timer Colour','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your countdown timer color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="cnd_timer_clr" name="cnd_timer_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['cnd_timer_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Social Icon Font Colour','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your social icon Font/text color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="social_icon_clr" name="social_icon_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['social_icon_clr']; ?>" class="my-color-field" data-default-color="#333333" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Social Icon Background Colour','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your social icon background color here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="social_icon_bg_clr" name="social_icon_bg_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['social_icon_bg_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
	
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Other Buttons Font Color','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your Other Buttons Font Color here, like about us button ,contact us button etc " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="ext_ft_clr" name="ext_ft_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['ext_ft_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
			<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Other Buttons Background Color','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your Other Buttons background Color here, like about us button ,contact us button etc " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input id="ext_bg_clr" name="ext_bg_clr" type="text" value="<?php echo $wpsm_rcs_plugin_options_text_and_color['ext_bg_clr']; ?>" class="my-color-field" data-default-color="#16c9d0" />
			   
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('All Headlines Font size','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your headlines font/text size here  " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td class="text-and-color-panel">
							<div id="button-size-slider" class="size-slider" style="width: 25%;display:inline-block"></div>
							<input type="text" class="slider-text" id="headline_ft_size" name="headline_ft_size"  readonly="readonly">
							<span class="slider-text-span">Px</span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('All Description Font Size','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update  your Description font/text size here  " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr  style="border-bottom:none;">
						<td class="text-and-color-panel">
							<div id="button-size-slider3" class="size-slider" style="width: 25%;display:inline-block"></div>
								<input type="text" class="slider-text" id="desc_ft_size" name="desc_ft_size"  readonly="readonly">
								<span class="slider-text-span">Px</span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('All Headlines Font Style','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your All headlines  Font Style/family here  " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<?php $headlines_ft_stl =  $wpsm_rcs_plugin_options_text_and_color['headlines_ft_stl']; ?>
					<tr class="" style="border-bottom:none;">
						<td>
							<select id="headlines_ft_stl" class="standard-dropdown" name="headlines_ft_stl"  >
								<optgroup label="Default Fonts">
									<option value="Arial"           <?php if($headlines_ft_stl == 'Arial' ) { echo "selected"; } ?>>Arial</option>
									<option value="Arial Black"    <?php if($headlines_ft_stl == 'Arial Black' ) { echo "selected"; } ?>>Arial Black</option>
									<option value="Courier New"     <?php if($headlines_ft_stl == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
									<option value="Georgia"         <?php if($headlines_ft_stl == 'Georgia' ) { echo "selected"; } ?>>Georgia</option>
									<option value="Grande"          <?php if($headlines_ft_stl == 'Grande' ) { echo "selected"; } ?>>Grande</option>
									<option value="Helvetica" 	<?php if($headlines_ft_stl == 'Helvetica' ) { echo "selected"; } ?>>Helvetica Neue</option>
									<option value="Impact"         <?php if($headlines_ft_stl == 'Impact' ) { echo "selected"; } ?>>Impact</option>
									<option value="Lucida"         <?php if($headlines_ft_stl == 'Lucida' ) { echo "selected"; } ?>>Lucida</option>
									<option value="Lucida Grande"         <?php if($headlines_ft_stl == 'Lucida Grande' ) { echo "selected"; } ?>>Lucida Grande</option>
									<option value="Open Sans"   <?php if($headlines_ft_stl == 'Open Sans' ) { echo "selected"; } ?>>Open Sans</option>
									<option value="OpenSansBold"   <?php if($headlines_ft_stl == 'OpenSansBold' ) { echo "selected"; } ?>>OpenSansBold</option>
									<option value="Palatino Linotype"       <?php if($headlines_ft_stl == 'Palatino Linotype' ) { echo "selected"; } ?>>Palatino</option>
									<option value="Sans"           <?php if($headlines_ft_stl == 'Sans' ) { echo "selected"; } ?>>Sans</option>
									<option value="sans-serif"           <?php if($headlines_ft_stl == 'sans-serif' ) { echo "selected"; } ?>>Sans-Serif</option>
									<option value="Tahoma"         <?php if($headlines_ft_stl == 'Tahoma' ) { echo "selected"; } ?>>Tahoma</option>
									<option value="Times New Roman"          <?php if($headlines_ft_stl == 'Times New Roman' ) { echo "selected"; } ?>>Times New Roman</option>
									<option value="Trebuchet"      <?php if($headlines_ft_stl == 'Trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
									<option value="Verdana"        <?php if($headlines_ft_stl == 'Verdana' ) { echo "selected"; } ?>>Verdana</option>
								</optgroup>
							</select>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td >
							<h4>Unlock More 500+ Google Fonts In pro version <a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Buy Now</a></h4>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('All Description Font Style','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your All descriptions  Font Style/family here  " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<?php $desc_ft_stl = $wpsm_rcs_plugin_options_text_and_color['desc_ft_stl']; ?>
					<tr class="" style="border-bottom:none;">
						<td>
							<select id="desc_ft_stl" class="standard-dropdown" name="desc_ft_stl"  >
								<optgroup label="Default Fonts">
									<option value="Arial"           <?php if($desc_ft_stl == 'Arial' ) { echo "selected"; } ?>>Arial</option>
									<option value="Arial Black"    <?php if($desc_ft_stl == 'Arial Black' ) { echo "selected"; } ?>>Arial Black</option>
									<option value="Courier New"     <?php if($desc_ft_stl == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
									<option value="Georgia"         <?php if($desc_ft_stl == 'Georgia' ) { echo "selected"; } ?>>Georgia</option>
									<option value="Grande"          <?php if($desc_ft_stl == 'Grande' ) { echo "selected"; } ?>>Grande</option>
									<option value="Helvetica" 	<?php if($desc_ft_stl == 'Helvetica' ) { echo "selected"; } ?>>Helvetica Neue</option>
									<option value="Impact"         <?php if($desc_ft_stl == 'Impact' ) { echo "selected"; } ?>>Impact</option>
									<option value="Lucida"         <?php if($desc_ft_stl == 'Lucida' ) { echo "selected"; } ?>>Lucida</option>
									<option value="Lucida Grande"         <?php if($desc_ft_stl == 'Lucida Grande' ) { echo "selected"; } ?>>Lucida Grande</option>
									<option value="Open Sans"   <?php if($desc_ft_stl == 'Open Sans' ) { echo "selected"; } ?>>Open Sans</option>
									<option value="OpenSansBold"   <?php if($desc_ft_stl == 'OpenSansBold' ) { echo "selected"; } ?>>OpenSansBold</option>
									<option value="Palatino Linotype"       <?php if($desc_ft_stl == 'Palatino Linotype' ) { echo "selected"; } ?>>Palatino</option>
									<option value="Sans"           <?php if($desc_ft_stl == 'Sans' ) { echo "selected"; } ?>>Sans</option>
									<option value="sans-serif"           <?php if($desc_ft_stl == 'sans-serif' ) { echo "selected"; } ?>>Sans-Serif</option>
									<option value="Tahoma"         <?php if($desc_ft_stl == 'Tahoma' ) { echo "selected"; } ?>>Tahoma</option>
									<option value="Times New Roman"          <?php if($desc_ft_stl == 'Times New Roman' ) { echo "selected"; } ?>>Times New Roman</option>
									<option value="Trebuchet"      <?php if($desc_ft_stl == 'Trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
									<option value="Verdana"        <?php if($desc_ft_stl == 'Verdana' ) { echo "selected"; } ?>>Verdana</option>
								</optgroup>
							</select>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td >
							<h4>Unlock More 500+ Google Fonts In pro version <a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Buy Now</a></h4>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Other Text Font Style','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="update your Other text Font Style/family here  " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<?php $other_ft_stl = $wpsm_rcs_plugin_options_text_and_color['other_ft_stl']; ?>
					<tr class="" style="border-bottom:none;">
						<td>
							<select id="other_ft_stl" class="standard-dropdown" name="other_ft_stl"  >
								
								<optgroup label="Default Fonts">
									<option value="Arial"           <?php if($other_ft_stl == 'Arial' ) { echo "selected"; } ?>>Arial</option>
									<option value="Arial Black"    <?php if($other_ft_stl == 'Arial Black' ) { echo "selected"; } ?>>Arial Black</option>
									<option value="Courier New"     <?php if($other_ft_stl == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
									<option value="Georgia"         <?php if($other_ft_stl == 'Georgia' ) { echo "selected"; } ?>>Georgia</option>
									<option value="Grande"          <?php if($other_ft_stl == 'Grande' ) { echo "selected"; } ?>>Grande</option>
									<option value="Helvetica" 	<?php if($other_ft_stl == 'Helvetica' ) { echo "selected"; } ?>>Helvetica Neue</option>
									<option value="Impact"         <?php if($other_ft_stl == 'Impact' ) { echo "selected"; } ?>>Impact</option>
									<option value="Lucida"         <?php if($other_ft_stl == 'Lucida' ) { echo "selected"; } ?>>Lucida</option>
									<option value="Lucida Grande"         <?php if($other_ft_stl == 'Lucida Grande' ) { echo "selected"; } ?>>Lucida Grande</option>
									<option value="Open Sans"   <?php if($other_ft_stl == 'Open Sans' ) { echo "selected"; } ?>>Open Sans</option>
									<option value="OpenSansBold"   <?php if($other_ft_stl == 'OpenSansBold' ) { echo "selected"; } ?>>OpenSansBold</option>
									<option value="Palatino Linotype"       <?php if($other_ft_stl == 'Palatino Linotype' ) { echo "selected"; } ?>>Palatino</option>
									<option value="Sans"           <?php if($other_ft_stl == 'Sans' ) { echo "selected"; } ?>>Sans</option>
									<option value="sans-serif"           <?php if($other_ft_stl == 'sans-serif' ) { echo "selected"; } ?>>Sans-Serif</option>
									<option value="Tahoma"         <?php if($other_ft_stl == 'Tahoma' ) { echo "selected"; } ?>>Tahoma</option>
									<option value="Times New Roman"          <?php if($other_ft_stl == 'Times New Roman' ) { echo "selected"; } ?>>Times New Roman</option>
									<option value="Trebuchet"      <?php if($other_ft_stl == 'Trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
									<option value="Verdana"        <?php if($other_ft_stl == 'Verdana' ) { echo "selected"; } ?>>Verdana</option>
								</optgroup>
							
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</form>	
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_rcs_option_data_save('text_and_color')"><?php _e('Save Changes','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_rcs_option_data_reset('text_and_color')"><?php _e('Reset Default','WPSM_RCS_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
							
</div>