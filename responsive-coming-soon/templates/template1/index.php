<!DOCTYPE html>
<html lang="en">
<?php
require_once('assets/php/data-var.php');	
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $wpsm_rcs_plugin_options_header['meta_desc']; ?>">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title><?php echo $wpsm_rcs_plugin_options_header['meta_title']; ?></title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/css/bootstrap.min.css'; ?>" /><!-- bootstrap -->
	<!-- template style -->
	<link rel="stylesheet" href="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/css/style.css'; ?>" />
	<!-- template color -->
	<link rel="stylesheet" href="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/css/color.css'; ?>" />
	<!-- custom style -->
	<link rel="stylesheet" href="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/css/custom.css'; ?>" />
	<link rel="icon" href="<?php echo $wpsm_rcs_plugin_options_header['favicon']; ?>">
	
	<style>
		<?php $background_color_overlay = $wpsm_rcs_plugin_options_background['background_color_overlay']; ?>
	  <?php if($wpsm_rcs_plugin_options_background['select_background']=="bg_color"){ ?>
		body{ 
			background: <?php echo $wpsm_rcs_plugin_options_background['background_color']; ?> <?php if($wpsm_rcs_plugin_options_background['bg_effect']=="on") { ?> url('<?php echo WPSM_RCS_PLUGIN_URL."img/overlay/overlay-$background_color_overlay.png"; ?>') repeat <?php } ?>;
		}
		#overlay{
			opacity:0.1;
		}
	  <?php } ?>
	  
	    .color{
		  color:<?php echo $wpsm_rcs_plugin_options_text_and_color['headeline_ft_clr']; ?>;
		  font-size: <?php echo $wpsm_rcs_plugin_options_text_and_color['headline_ft_size']; ?>px;
		  font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['headlines_ft_stl']; ?>";
		}
		.letter{
		   color:<?php echo $wpsm_rcs_plugin_options_text_and_color['headeline_ft_clr']; ?>;
		}
		.sec-desc p{
			
			font-size:<?php echo $wpsm_rcs_plugin_options_text_and_color['desc_ft_size']; ?>px;
			font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['desc_ft_stl']; ?>";
		}
		
		.sec-desc, .contact-info{
			color:<?php echo $wpsm_rcs_plugin_options_text_and_color['desc_ft_clr']; ?>;
			font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['desc_ft_stl']; ?>";
		}
		#subscribe-form .input-group-btn > .btn {
		  border-color: #c7c8c9;
		  background-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['sb_btn_bg_clr']; ?>;
		  color:<?php echo $wpsm_rcs_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
		}
		#subscribe-form .input-group-btn > .btn:hover,
		#subscribe-form .input-group-btn > .btn:focus {
		 background-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['sb_btn_bg_clr']; ?>;
		  color:<?php echo $wpsm_rcs_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
		}
		.unit, .time{			
			color : <?php echo $wpsm_rcs_plugin_options_text_and_color['cnd_timer_clr']; ?>;
			font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		
		.social-list a {
		  color: <?php echo $wpsm_rcs_plugin_options_text_and_color['social_icon_clr']; ?>;
		  background-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['social_icon_bg_clr']; ?>;
		 
		}
		.social-list a:hover {
		  background-color: transparent;
		  color: <?php echo $wpsm_rcs_plugin_options_text_and_color['social_icon_bg_clr']; ?>;
		}
		.btn-theme , .btn-default {
		  color: <?php echo $wpsm_rcs_plugin_options_text_and_color['ext_ft_clr']; ?>;
		  background-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['ext_bg_clr']; ?>;
		  border-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['ext_bg_clr']; ?>;
		  font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['other_ft_stl']; ?>";
		}

		.btn-default:hover, .btn-theme:hover, 
		.btn-default:focus, .btn-theme:focus,
		.btn-default.focus, .btn-theme:focus,
		.btn-default:active, .btn-theme:active,
		.btn-default.active, .btn-theme.active{
		  color: <?php echo $wpsm_rcs_plugin_options_text_and_color['ext_ft_clr']; ?>;
		  background-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['ext_bg_clr']; ?>;
		  border-color: <?php echo $wpsm_rcs_plugin_options_text_and_color['ext_bg_clr']; ?>;
		}
		.form-heading {
			font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		#menu a{			
			font-family:"<?php echo $wpsm_rcs_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		@media (min-width: 991px) {		
			.logo {
				width:<?php echo $wpsm_rcs_plugin_options_general['logo_width']; ?>px;
				height: <?php echo $wpsm_rcs_plugin_options_general['logo_height']; ?>px;
			}
		}
		@media (max-width: 786px) {		
			.color {
				font-size: 0.8em !important;
			}
		}
		
		<?php echo $wpsm_rcs_plugin_options_custom_css['custom_css']; ?>
	</style>
	<?php echo $wpsm_rcs_plugin_options_header['google_al']; ?>
</head>
<body>

  <!-- preloader -->
  <div id="preloader">
    <img id="preloader-img" src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/img/preloader.gif'; ?>" alt="preloader">
  </div>
  <!-- /preloader -->

  <div id="bg"></div> <!-- background image container -->
  <div id="video"></div> <!-- video container -->
  <div id="overlay"></div> <!-- overlay container -->

  <!-- navbar -->
  <header id="site-header" class="navbar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if($wpsm_rcs_plugin_options_general['logo_enable']=="on"){ ?>
		  <img src="<?php echo $wpsm_rcs_plugin_options_general['rcsp_logo_url']; ?>" alt="logo" class="logo"> 
		  <?php } ?>
          <i class="icons fa fa-bars menu-toggle"></i> <!-- menu toggle -->
        </div>
      </div>
    </div>
  </header>
  <!-- /navbar -->

  <!-- menu -->
  <nav id="menu-wrap">
    <ul id="menu">
      <!-- data-link-to for the link section id -->
      <li><a href="#" data-link-to="#intro"><?php echo $wpsm_rcs_plugin_options_general['home_sec_link_txt']; ?></a></li>
	   <?php if($wpsm_rcs_plugin_options_about_us['about_us_enable']=="on") { ?>
		<li><a href="#" data-link-to="#about"><?php echo $wpsm_rcs_plugin_options_about_us['about_btn_label']; ?></a></li>
	  <?php } ?>
	  <?php if($wpsm_rcs_plugin_options_contact_us['contact_us_enable']=="on") { ?>
		<li><a href="#" data-link-to="#contact"><?php echo $wpsm_rcs_plugin_options_contact_us['contact_us_section_btn_label']; ?></a></li>
	  <?php } ?>
    </ul>
  </nav>
  <!-- /menu -->

  <!-- intro section -->
  <section id="intro" class="active">
    <div class="tb">
      <div class="tb-cell">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 tc"> <!-- section wrap -->
                <div class="section-heading">
                  <h1 class="section-title">
                    <span class="letter"></span><span class="color"><?php echo $wpsm_rcs_plugin_options_general['rcsp_headline']; ?></span> <!-- letter and title-->
                  </h1>
                  </div>
				 <div class="section-content sec-desc">
                  <p><?php echo $wpsm_rcs_plugin_options_general['rcsp_description']; ?></p>
                </div>
            <?php if($wpsm_rcs_plugin_options_countdown['countdown_enable']=="on") {?>
				
				<div class="section-content row">
                   
				  <ul id="countdown" ></ul>
                </div>
			<?php } ?>	
                <div class="section-footer">
				<?php if($wpsm_rcs_plugin_options_newsletter['wpsm_rcs_newsletter_dropdown']=="wpmail"){ ?>
                  <a href="#subscribe-form-popup" id="pop-with-subscribe-form" class="btn btn-default btn-lg shadow"><?php echo $wpsm_rcs_plugin_options_subscription_field['subscription_field_link_button_label'];  ?></a> <!-- subscribe button -->
				<?php } ?>
				<?php if($wpsm_rcs_plugin_options_about_us['about_us_enable']=="on") { ?>
				  <a href="#" class="btn btn-theme btn-lg shadow" data-link-to="#about"><?php echo $wpsm_rcs_plugin_options_about_us['about_btn_label']; ?></a> <!-- link button -->
				<?php } ?>	
				<?php if($wpsm_rcs_plugin_options_newsletter['wpsm_rcs_newsletter_dropdown']=="wpmail"){ ?>		
				<!-- subscribe form-->
                  <div id="subscribe-form-popup" class="mfp-hide white-popup-block">
                    <form id="subscribe-form" class="border-form">
                      <h3 class="form-heading"><?php echo $wpsm_rcs_plugin_options_subscription_field['subscription_field_section_title'];  ?></h3>
                      <div class="form-group">
                        <div class="input-group">
                          <input type="email" name="email" placeholder="<?php echo $wpsm_rcs_plugin_options_subscription_field['email_field_pl_hold_text'];  ?>" id="subscribe-email" class="form-control input-lg">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-theme btn-lg">
                              <?php echo $wpsm_rcs_plugin_options_subscription_field['subs_me_button_label'];  ?>
                            </button>
                          </span>
                        </div>
                      </div>
                      <label class="subscribe-notice" for="subscribe-email"></label>
                   <div class="text-center load_msg" style="display:none" > <img src="<?php echo WPSM_RCS_PLUGIN_URL.'images/loading2.gif'; ?>" /></div>
					</form>
                  </div>
                  <!-- /subscribe form-->
				<?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /intro section -->
  
  

  <?php if($wpsm_rcs_plugin_options_about_us['about_us_enable']=="on") { ?>
  
  <!-- about section -->
  <section id="about">
    <div class="tb">
      <div class="tb-cell">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center"> <!-- section wrap -->
                <div class="section-heading">
                  <h2 class="section-title">
                    <span class="letter"><?php echo $wpsm_rcs_plugin_options_about_us['about_section_title'][0]; ?></span><span class="color"><?php echo $wpsm_rcs_plugin_options_about_us['about_section_title']; ?></span> <!-- letter and title-->
                  </h2>
                </div>
                <div class="section-content sec-desc">
                  <p><?php echo $wpsm_rcs_plugin_options_about_us['about_section_desc']; ?></p>
                </div>
				<?php if($wpsm_rcs_plugin_options_contact_us['contact_us_enable']=="on") { ?>
					<div class="section-footer">
					  <a href="#" class="btn btn-theme btn-lg shadow" data-link-to="#contact"><?php echo $wpsm_rcs_plugin_options_contact_us['contact_us_section_btn_label']; ?></a>
					</div>
				<?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /about section -->
  
   <?php } ?>

  
<?php if($wpsm_rcs_plugin_options_contact_us['contact_us_enable']=="on") { ?>
  <!-- contact section -->
  <section id="contact" >
    <div class="tb">
      <div class="tb-cell">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 tc"> <!-- section wrap -->
                <div class="section-heading">
                  <h2 class="section-title">
                    <span class="letter"><?php echo $wpsm_rcs_plugin_options_contact_us['contact_us_section_title'][0]; ?></span><span class="color"><?php echo $wpsm_rcs_plugin_options_contact_us['contact_us_section_title']; ?></span> <!-- letter and title-->
                  </h2>
                  </div>
				 <div class="section-content sec-desc">
                  <p><?php echo $wpsm_rcs_plugin_options_contact_us['contact_us_section_title_desc']; ?></p>
                </div>
                <div class="row section-content">
                  <div class="col-md-12 col-contact">
                    <!-- contact info -->
                    <?php if($wpsm_rcs_plugin_options_contact_us['contact_info_number']!=""){ ?>
						<address>
						  <div class="contact-info">
							<span><i class="fa fa-phone"> </i> : <?php echo $wpsm_rcs_plugin_options_contact_us['contact_info_number']; ?></span>
						  </div>
						</address>
					<?php } ?>
					<?php if($wpsm_rcs_plugin_options_contact_us['contact_info_address']!=""){ ?>
                    <address>
                      <div class="contact-info">
                        <span><i class="fa fa-map-marker"></i> : <?php echo $wpsm_rcs_plugin_options_contact_us['contact_info_address']; ?></span>
                      </div>
                    </address>
					<?php } ?>
					<?php if($wpsm_rcs_plugin_options_contact_us['contact_info_email_address']!=""){ ?>
                    <address>
                      <div class="contact-info">
                        <span><i class="fa fa-envelope-o"></i> : <?php echo $wpsm_rcs_plugin_options_contact_us['contact_info_email_address']; ?></span>
                      </div>
                    </address>
					<?php } ?>
                    <!-- /contact info -->
                    
					<!-- social -->
                    
						<?php 
						$Social_Icon = $wpsm_rcs_plugin_options_social['social_icon']; 
						$Social_Name = $wpsm_rcs_plugin_options_social['social_name'];
						$social = $wpsm_rcs_plugin_options_social['social']; ?>
						<!-- using for-->
						<ul class="social-list">
							<?php	for($i = 0; $i<=5; $i++) { ?>
							<?php if($social[$i]!="") { ?>
							<li>
								<a href="<?php echo $social[$i]; ?>" title="<?php echo $Social_Name[$i]; ?>" target="_blank"> <!-- social link, title -->
								  <i class="icons fa <?php echo $Social_Icon[$i]; ?>"></i> <!-- social icon -->
								</a>
							</li>
							<?php } ?>
						 <?php } ?>
						</ul>
					
					 <!-- /social -->
					
					
                  </div>
                
                </div>
                <div class="section-footer">
                  <a href="#" class="btn btn-theme btn-lg shadow" data-link-to="#intro"><?php echo $wpsm_rcs_plugin_options_general['home_sec_link_txt']; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact section -->
<?php } ?> 
  

  <!-- script start -->
  <script src='<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/vendor/jquery-1.11.3.min.js'; ?>'></script>
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/vendor/bootstrap.min.js'; ?>"></script>
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/vendor/plugin.js'; ?>"></script>
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/vendor/magnific.popup.js'; ?>"></script>
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/vendor/backstretch.js'; ?>"></script>
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/vendor/jquery.countdown.js'; ?>"></script>
  <!--[if lt IE 10]>
  <script src='assets/js/vendor/ie/jquery.placeholder.min.js'></script>
  <![endif]-->
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/variable.js'; ?>"></script>
  <?php require_once('assets/js/main.php'); ?>
  <script src="<?php echo WPSM_RCS_PLUGIN_URL.'templates/template1/assets/js/custom.js'; ?>"></script>

  <!-- script end -->

</body>
</html>