<?php 
if(isset($_POST['action_rcs']) == "action_rcs_page_setting_save_post")
	{

	$hook = $_POST['hook'];
	$hook = 'wpsm_rcs_plugin_options_'.$hook;
	print_r($_POST);
	update_option($hook, serialize($_POST));
}
?>