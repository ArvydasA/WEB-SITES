<?php
			
		//Live Preview code
		if (  (isset($_GET['wpsm_coming_soon_pro_preview']) && $_GET['wpsm_coming_soon_pro_preview'] == 'true') )
		{ 	
			$number  = $_GET['number'];
			$number =  $number[0];

			$file = plugin_dir_path( __FILE__ )."templates/template".$number."/index.php";
			include($file);
			exit();
		}
		
		function wpsm_coming_soon_redirect()
		{
			$wpsm_rcs_plugin_options_dashboard = unserialize(get_option('wpsm_rcs_plugin_options_dashboard'));
			$wpsm_csp_status = $wpsm_rcs_plugin_options_dashboard['wpsm_csp_status'];
			
			if($wpsm_csp_status=="1")
			{	
				// Exit if a custom login page
				if(preg_match("/login|admin|dashboard|account/i",$_SERVER['REQUEST_URI']) > 0 ){
					return false;
				}
				
				// Check if user is logged in.
				if (!is_user_logged_in())
				{
					$file = plugin_dir_path( __FILE__ )."templates/template1/index.php";
					include($file);
					exit();
				}
				else
				{
					//get logined in user role
					$wp_get_current_user =  wp_get_current_user();
					$LoggedInUserID = $wp_get_current_user->ID;
					$UserData = get_userdata( $LoggedInUserID );
					//if user role not 'administrator' then redirect page 
					if($UserData->roles[0] != "administrator")
					{
						$file = plugin_dir_path( __FILE__ )."templates/template1/index.php";
						include($file);
						exit();
					}
				}
			}
			
		}
		
		add_action( 'template_redirect', 'wpsm_coming_soon_redirect' );
		add_action('admin_bar_menu', 'wpsm_rcs_admin_bar_menu', 1000);
		function wpsm_rcs_admin_bar_menu()
		{
			
			global $wp_admin_bar;
			$wpsm_rcs_plugin_options_dashboard = unserialize(get_option('wpsm_rcs_plugin_options_dashboard'));
			$wpsm_csp_status = $wpsm_rcs_plugin_options_dashboard['wpsm_csp_status'];
			if($wpsm_csp_status=='0') return;
			$msg = __('Coming Soon Mode Active','');
			// Add Parent Menu
			$argsParent=array(
				'id' => 'myCustomMenu',
				'title' => $msg,
				'parent' => 'top-secondary',
				'href' => '?page=wpsm_responsive_coming_soon',
				'meta'   => array( 'class' => 'wpsm_cs_active' ),
			);
			$wp_admin_bar->add_menu($argsParent);
			?>
			<style>
				.wpsm_cs_active a{
					background: #31a3dd !important;
					color: #fff !important;
				}
				.wpsm_cs_active a:hover{
					background: #31a3dd !important;
					color: #fff !important;
				}

			</style>
			<?php
		   
		}

 ?>