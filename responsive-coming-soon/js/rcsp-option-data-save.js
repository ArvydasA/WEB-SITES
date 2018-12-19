/*Admin options panel data value*/
function wpsm_rcs_option_data_save(name) { 	

	
	

	var wpsm_rcs_plugin_options = "#wpsm_rcs_plugin_options_"+name;
	jQuery("#wpsm_loding_general_image").show();
	jQuery.ajax({
		type: "POST",
		url: location.href,
		data : 'action_rcs=action_rcs_page_setting_save_post' + '&hook=' + name +'&' + jQuery(wpsm_rcs_plugin_options).serialize(),
		success : function(data){
			jQuery("#wpsm_loding_general_image").fadeOut();
		   jQuery(".dialog-button").click();
		   
		   if(name=="dashboard"){
				 location.href='?page=wpsm_responsive_coming_soon';
				
			}
	   }			
	});
}
/*Admin options panel data value*/
function wpsm_rcs_option_data_reset(name) 
{ 	
	if (confirm('Are you sure you want to reste this setting?')) {
    
} else {
   return;
}
	
	
	var wpsm_rcs_plugin_options = "#wpsm_rcs_plugin_options_"+name;
	jQuery("#wpsm_loding_general_image").show();
	jQuery.ajax({
		type: "POST",
		url: location.href,
		data : 'action_rcs_reset=action_rcs_page_setting_reset_post' + '&hook=' + name ,
		success : function(data){
			jQuery("#wpsm_loding_general_image").fadeOut();
		   jQuery(".dialog-button").click();
		location.href='?page=wpsm_responsive_coming_soon';
		 
		
	
	   }			
	});
	

}

	
	
	