<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 	
<?php $wpsm_rcs_plugin_options_templates = unserialize(get_option('wpsm_rcs_plugin_options_templates'));	
?>

<style>
.templates_btn{
	font-size: 22px;
}
#TB_window {
width:100% important;
}
.demoftr {
	background: transparent;
	
}
.ftr_img{
	background:transparent
}

.wpsm_ribbon {
	position: absolute;
    right:58px;
    top: -5px;
    z-index: 1;
    overflow: hidden;
    width: 170px;
    height: 170px;
    text-align: right;
}
.wpsm_ribbon span {
 font-size: 16px;
  
    font-weight: 800;
    color: #FFF;
    text-transform: none;
    text-align: center;
    line-height: 36px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    width: 170px;
    display: block;
    background: #79A70A;
     background: linear-gradient(rgba(239,39,126,0.9) 0%, rgba(239,39,126,0.9) 100%);
    box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
    position: absolute;
    top: 36px;
    right: -37px;
    
}
.wpsm_ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid rgba(239,39,126,0.9);
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid rgba(239,39,126,0.9);
}
.wpsm_ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid rgba(239,39,126,0.9);
  border-bottom: 3px solid transparent;
  border-top: 3px solid rgba(239,39,126,0.9);
}
.demo-csp-btn{
	display: inline-block;
    float: right;
    margin-top: 20px;
    margin-bottom: 10px;
    background: #1e73be;
    color: #fff !important;
    width: 100px;
    height: 25px;
    text-align: center;
    padding: 4px 2px;
	margin-right:10px;
	margin-bottom:10px;
}

.demo-csp-btn2{
	display: inline-block;
    float: right;
    margin-top: 20px;
    margin-bottom: 10px;
    background: #e83f33;
    color: #fff !important;
    width: 100px;
    height: 25px;
    text-align: center;
    padding: 4px 2px;
	margin-right:10px;
	margin-bottom:10px;
}
@media screen and ( max-width: 1200px ) {
.wpsm_ribbon{
	right:32px; 1important
}

}
</style>
<?php add_thickbox(); ?>

<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Coming Soon Templates','WPSM_RCS_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  $templates = $wpsm_rcs_plugin_options_templates['templates']; ?>
		<form method="post" id="wpsm_rcs_plugin_options_templates">
			<div  style="padding:10px;">
			<?php 
				for($i=1; $i<=8; $i++)
				{
				?>
				<div class="col-md-6  demoftr "> 
					<div class="">
						<div class="wpsme_home_portfolio_showcase">
							<?php if($i==1) { ?>
							<div class="wpsm_ribbon"><span>Selected</span></div>
							<?php } else{ ?>
								<div class="wpsm_ribbon"><a target="_blank" href="http://wpshopmart.com/plugins/coming-soon-pro/"><span>Availabe In pro</span></a></div>
							
							<?php	
							}?>	
							<img class="wpsme_img_responsive ftr_img"  src="<?php echo  WPSM_RCS_PLUGIN_URL.'images/demo/demo-'.$i.'.png'; ?>">
							
						</div>
					</div>
					<div style="padding:13px;overflow:hidden;">
						<div style="display:block;overflow:hidden">
						<h3  style="display:inline-block;float:left">Template <?php echo $i; ?></h3>
						<a  href="http://wpshopmart.com/coming-soon-pro-demo-page/#csp-<?php echo $i; ?>" target="_blank" class="demo-csp-btn" >View Demo </a>
						<?php if($i!=1) { ?>
						<a  href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank" class="demo-csp-btn2" >Upgrade Now </a>
						<?php } ?>
						</div>
					</div>			
				</div>
				<?php 
				}
				?>
				
			</div>
			
		</form>
	   
	</div>
	
	
	
	
							
</div>