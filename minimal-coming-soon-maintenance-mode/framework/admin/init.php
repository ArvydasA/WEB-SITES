<?php

/**
 * WordPress management panel.
 *
 * @link       http://www.webfactoryltd.com
 * @since      0.1
 * @package    Signals_Maintenance_Mode
 */

function csmm_add_menu() {
	if(current_user_can('manage_options')) {
		// Adding to the plugin panel link to the settings menu
		$signals_csmm_menu = add_options_page (
			__( 'Minimal Coming Soon & Maintenance Mode', 'signals' ),
			__( 'Maintenance Mode', 'signals' ),
			'manage_options',
			'maintenance_mode_options',
			'csmm_admin_settings'
		);

		// Loading the JS conditionally
    add_action( 'load-' . $signals_csmm_menu, 'csmm_load_scripts' );
    add_action( 'admin_action_csmm_install_mailoptin', 'csmm_install_mailoptin' );
	}

}
add_action( 'admin_menu', 'csmm_add_menu' );

  function csmm_featured_plugins_tab($args) {
    add_filter('plugins_api_result', 'csmm_plugins_api_result', 10, 3);

    return $args;
  } // featured_plugins_tab

  function csmm_add_plugin_favs($plugin_slug, $res) {
    if (is_array($res->plugins)) {
      foreach ($res->plugins as $plugin) {
        if ($plugin->slug == $plugin_slug) {
          return $res;
        }
      } // foreach
    }

    if ($plugin_info = get_transient('wf-plugin-info-' . $plugin_slug)) {
      $res->plugins[] = $plugin_info;
    } else {
      $plugin_info = plugins_api('plugin_information', array(
        'slug'   => $plugin_slug,
        'is_ssl' => is_ssl(),
        'fields' => array(
            'banners'           => true,
            'reviews'           => true,
            'downloaded'        => true,
            'active_installs'   => true,
            'icons'             => true,
            'short_description' => true,
        )
      ));
      if (!is_wp_error($plugin_info)) {
        $res->plugins[] = $plugin_info;
        set_transient('wf-plugin-info-' . $plugin_slug, $plugin_info, DAY_IN_SECONDS * 7);
      }
    }

    return $res;
  } // csmm_add_plugins_favs


  // add our plugins to recommended list
  function csmm_plugins_api_result($res, $action, $args) {
    remove_filter('plugins_api_result', 'csmm_plugins_api_result', 10, 3);

    $res = csmm_add_plugin_favs('mailoptin', $res);
    $res = csmm_add_plugin_favs('security-ninja', $res);

    return $res;
  } // plugins_api_result


// disabled till further notice
function csmm_chat_available() {
  if (0 && date('Y-m-d') >= '2018-10-01' && date('Y-m-d') <= '2018-10-14') {
    return true;
  } else {
    return false;
  }
} // csmm_chat_available

// enqueue JS and CSS files
function csmm_admin_scripts() {

	wp_register_style( 'csmm-admin-base', CSMM_URL . '/framework/admin/css/admin.css', false, csmm_get_plugin_version() );

	wp_register_script('csmm-webfonts', '//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', false );
	wp_register_script('csmm-admin-editor', CSMM_URL . '/framework/admin/js/editor/ace.js', false, csmm_get_plugin_version(), true );
	wp_register_script('csmm-admin-color', CSMM_URL . '/framework/admin/js/colorpicker/jscolor.js', false, csmm_get_plugin_version(), true );
  wp_register_script('csmm-admin-plugins', CSMM_URL . '/framework/admin/js/plugins.js', 'jquery', csmm_get_plugin_version(), true);
	wp_register_script('csmm-admin-base', CSMM_URL . '/framework/admin/js/admin.js', 'jquery', csmm_get_plugin_version(), true);

  $mm_js_vars = array(
    'mm_url' => 'https://assets.comingsoonwp.com/free-backgrounds/',
    'mm_base_url' => CSMM_URL,
    'mm_mo_title' => '<img alt="' . __('MailOptin', 'signals') . '" title="' . __('MailOptin', 'signals') . '" src="' . CSMM_URL . '/framework/admin/img/mailoptin-logo-white.png' . '">',
    'mm_mo_install_url' => add_query_arg( array('action' => 'csmm_install_mailoptin'), admin_url('admin.php') ),
    'mm_images' => array('john-cobb-13961-unsplash.jpg', 'aaron-burden-189321-unsplash.jpg', 'alberto-restifo-4510-unsplash.jpg', 'amy-humphries-227515-unsplash.jpg', 'anders-jilden-89745-unsplash.jpg', 'art-by-lonfeldt-1064207-unsplash.jpg', 'brenda-godinez-229718-unsplash.jpg', 'ad_more-images.png', 'brooke-lark-229136-unsplash.jpg', 'carmine-de-fazio-31543-unsplash.jpg', 'denys-nevozhai-100695-unsplash.jpg', 'dustin-lee-19667-unsplash.jpg', 'elena-prokofyeva-17909-unsplash.jpg', 'fezbot2000-278419-unsplash.jpg', 'glenn-carstens-peters-190592-unsplash.jpg', 'greg-rakozy-38802-unsplash.jpg', 'henry-be-99471-unsplash.jpg', 'hoach-le-dinh-91879-unsplash.jpg', 'ian-dooley-280928-unsplash.jpg', 'ian-schneider-108618-unsplash.jpg', 'jakub-sejkora-42069-unsplash.jpg', 'jesus-kiteque-224069-unsplash.jpg', 'joanna-kosinska-44214-unsplash.jpg', 'jonathan-bean-37632-unsplash.jpg', 'kimon-maritz-193428-unsplash.jpg', 'matthew-henry-49707-unsplash.jpg', 'ng-32703-unsplash.jpg', 'nitish-meena-37745-unsplash.jpg', 'osman-rana-1064081-unsplash.jpg', 'patrick-tomasso-208114-unsplash.jpg', 'patrick-tomasso-71909-unsplash.jpg', 'pawel-czerwinski-1060762-unsplash.jpg', 'rachael-gorjestani-282049-unsplash.jpg', 'rawpixel-191102-unsplash.jpg', 'sarah-dorweiler-211779-unsplash.jpg', 'stefan-stefancik-105374-unsplash.jpg', 'steven-wei-124690-unsplash.jpg', 'sunrise-1756274.jpg', 'teddy-kelley-106391-unsplash.jpg', 'thought-catalog-214785-unsplash.jpg', 'ad_custom-image.png', 'brooke-lark-356767-unsplash.jpg', 'ian-dooley-280928-unsplash.jpg', 'jeremy-bishop-334996-unsplash.jpg', 'martin-reisch-185835-unsplash.jpg', 'simon-matzinger-320332-unsplash.jpg', 'trevor-cole-393228-unsplash.jpg', 'verne-ho-237626-unsplash.jpg')
  );
  wp_localize_script( 'csmm-admin-base', 'mm_js_vars', $mm_js_vars );

	wp_enqueue_style( 'csmm-admin-base' );

	wp_enqueue_script( 'csmm-webfonts' );
	wp_enqueue_script( 'csmm-admin-editor' );
	wp_enqueue_script( 'csmm-admin-color' );
  wp_enqueue_script( 'csmm-admin-plugins' );
	wp_enqueue_script( 'csmm-admin-base' );

  wp_enqueue_style('wp-jquery-ui-dialog');
  wp_enqueue_script('jquery-ui-dialog');

	// For the upload option using media uploader
	wp_enqueue_media();
}


// Scripts & styles for the plugin
function csmm_load_scripts() {
	add_action( 'admin_enqueue_scripts', 'csmm_admin_scripts' );
}


// add settings link to plugins page
function csmm_plugin_action_links($links) {
  $settings_link = '<a href="' . admin_url('options-general.php?page=maintenance_mode_options') . '" title="Minimal Coming Soon &amp; Maintenance Mode Settings">Settings</a>';

  array_unshift($links, $settings_link);

  return $links;
} // csmm_plugin_action_links


// add links to plugin's description in plugins table
function csmm_plugin_meta_links($links, $file) {
  $support_link = '<a target="_blank" href="https://wordpress.org/support/plugin/minimal-coming-soon-maintenance-mode" title="Get help">Support</a>';
  $rate_link = '<a target="_blank" href="https://wordpress.org/support/plugin/minimal-coming-soon-maintenance-mode/reviews/?filter=5#new-post" title="Let others know how you like the plugin">Rate the plugin ★★★★★</a>';

  if ($file == CSMM_BASENAME) {
    $links[] = $support_link;
    $links[] = $rate_link;
  }

  return $links;
} // csmm_plugin_meta_links


// permanently dismiss a pointer
function csmm_dismiss_pointer_ajax() {
  check_ajax_referer('csmm_dismiss_pointer');

  $disabled_pointers = get_option(CSMM_POINTERS);
  $pointer = trim($_POST['pointer']);

  $disabled_pointers[$pointer] = true;
  update_option(CSMM_POINTERS, $disabled_pointers);

  wp_send_json_success();
} // dismiss_pointer_ajax


// reset all pointers to default state - visible
function csmm_get_pointers() {
  $pointers = array();

  $pointers['welcome'] = array('target' => '#menu-settings', 'edge' => 'left', 'align' => 'right', 'content' => 'Thank you for installing the <b style="font-weight: 800;">Minimal Coming Soon &amp; Maintenance Mode</b> plugin! Please open <a href="' . admin_url('options-general.php?page=maintenance_mode_options'). '">Settings - Maintenance Mode</a> to create a beautiful coming soon or maintenance mode page.');
  $pointers['getting_started'] = array('target' => '#main-status', 'edge' => 'bottom', 'align' => 'left', 'content' => 'Make sure you <b>enable Maintenance Mode</b> so it\'s visible to your visitors. If you just want to preview it, use the preview button on the bottom of the page.');

  return $pointers;
} // csmm_get_pointers


function csmm_enqueue_pointers($hook) {
  $pointers = array();
  $all_pointers = csmm_get_pointers();
  $disabled_pointers = get_option(CSMM_POINTERS);

  // auto remove welcome pointer when options are opened
  // disabled
  if (false && empty($disabled_pointers['welcome']) && 'settings_page_maintenance_mode_options' == $hook) {
    $disabled_pointers['welcome'] = true;
    update_option(CSMM_POINTERS, $disabled_pointers);
  }

  // temp remove
  if ('settings_page_maintenance_mode_options' == $hook) {
    $disabled_pointers['welcome'] = true;
  }

  foreach ($all_pointers as $tmp_key => $tmp_val) {
    if (empty($disabled_pointers[$tmp_key])) {
      $pointers[$tmp_key] = $tmp_val;
    }
  } // foreach

  if (empty($pointers)) {
    return;
  }

  $pointers['_nonce_dismiss_pointer'] = wp_create_nonce('csmm_dismiss_pointer');
  wp_enqueue_script('wp-pointer');
  wp_enqueue_script('csmm-pointers', CSMM_URL . '/framework/admin/js/pointers.js', array('jquery'), csmm_get_plugin_version(), true);
  wp_enqueue_style('wp-pointer');
  wp_localize_script('wp-pointer', 'csmm_pointers', $pointers);
} // csmm_enqueue_pointers


function csmm_plugin_admin_init() {
  if (!is_admin()) {
    return;
  }

  $meta = get_option('signals_csmm_meta', array());
  if (!isset($meta['first_version']) || !isset($meta['first_install'])) {
    $meta['first_version'] = csmm_get_plugin_version();
    $meta['first_install_gmt'] = time();
    $meta['first_install'] = current_time('timestamp');
    update_option('signals_csmm_meta', $meta);
  }

  add_filter('plugin_action_links_' . CSMM_BASENAME, 'csmm_plugin_action_links');
  add_filter('plugin_row_meta', 'csmm_plugin_meta_links', 10, 2);

  add_action('admin_enqueue_scripts', 'csmm_enqueue_pointers', 100, 1);

  add_action('admin_action_csmm_activate_theme', 'csmm_activate_theme');
  add_action('admin_action_csmm_export_settings', 'csmm_export_settings');

  add_filter('install_plugins_table_api_args_featured', 'csmm_featured_plugins_tab');
} // csmm_plugin_admin_init

add_action( 'init', 'csmm_plugin_admin_init' );

// Including file for the management panel
require_once CSMM_PATH . 'framework/admin/settings.php';

function csmm_create_select_options($options, $selected = null, $output = true) {
    $out = "\n";

    if(!is_array($selected)) {
      $selected = array($selected);
    }

    foreach ($options as $tmp) {
      $data = '';
      if (isset($tmp['disabled'])) {
        $data .= ' disabled="disabled" ';
      }
      if (in_array($tmp['val'], $selected)) {
        $out .= "<option selected=\"selected\" value=\"{$tmp['val']}\"{$data}>{$tmp['label']}&nbsp;</option>\n";
      } else {
        $out .= "<option value=\"{$tmp['val']}\"{$data}>{$tmp['label']}&nbsp;</option>\n";
      }
    } // foreach

    if ($output) {
      echo $out;
    } else {
      return $out;
    }
  } // csmm_create_select_options


function csmm_activate_theme() {
    $themes = array();
    $theme = basename(trim(@$_GET['theme']));
    $settings = csmm_get_options();

    $themes['default'] = array(
      'header_text'       => 'Our site is coming soon',
      'secondary_text'     => 'We are doing some maintenance on our site. It won\'t take long, we promise. Come back and visit us again in a few days. Thank you for your patience!',
      'antispam_text'     => 'And yes, we hate spam too!',
      'arrange'         => 'logo,header,secondary,form,html',
      'logo'          => CSMM_URL . '/framework/public/img/mm-logo.png',
      'favicon'        => CSMM_URL . '/framework/public/img/mm-favicon.png',
      'bg_cover'         => CSMM_URL . '/framework/public/img/mountain-bg.jpg',
      'content_overlay'     => 1,
      'content_width'      => '600',
      'bg_color'         => 'FFFFFF',
      'content_position'    => 'center',
      'content_alignment'    => 'left',
      'header_font'       => 'Karla',
      'secondary_font'     => 'Karla',
      'header_font_size'     => '28',
      'secondary_font_size'   => '14',
      'header_font_color'   => 'FFFFFF',
      'secondary_font_color'   => 'FFFFFF',
      'antispam_font_size'   => '13',
      'antispam_font_color'   => 'BBBBBB',
      'input_text'       => 'Enter your best email address',
      'button_text'       => 'Subscribe',
      'ignore_form_styles'   => 1,
      'input_font_size'    => '13',
      'button_font_size'    => '12',
      'input_font_color'    => 'FFFFFF',
      'button_font_color'    => 'FFFFFF',
      'input_bg'        => '',
      'button_bg'        => '0F0F0F',
      'input_bg_hover'    => '',
      'button_bg_hover'    => '0A0A0A',
      'input_border'      => 'EEEEEE',
      'button_border'      => '0F0F0F',
      'input_border_hover'  => 'BBBBBB',
      'button_border_hover'  => '0A0A0A',
      'success_background'   => '90C695',
      'success_color'     => 'FFFFFF',
      'error_background'     => 'E08283',
      'error_color'       => 'FFFFFF',
      'disable_settings'     => '2',
      'custom_html'      => '',
      'custom_css'      => ''
    );

    $themes['minimal'] = array(
      'header_text'       => 'Maintenance Mode',
      'secondary_text'     => 'We are doing some maintenance on our site. It won\'t take long, we promise. Come back and visit us again in a few days. Thank you for your patience!',
      'antispam_text'     => 'And yes, we hate spam too!',
      'arrange'         => 'logo,header,secondary,form,html',
      'logo'          => CSMM_URL . '/framework/public/img/mm-logo.png',
      'favicon'        => CSMM_URL . '/framework/public/img/mm-favicon.png',
      'bg_cover'         => '',
      'content_overlay'     => 0,
      'content_width'      => '600',
      'bg_color'         => 'FFFFFF',
      'content_position'    => 'center',
      'content_alignment'    => 'left',
      'header_font'       => 'Karla',
      'secondary_font'     => 'Karla',
      'header_font_size'     => '28',
      'secondary_font_size'   => '14',
      'header_font_color'   => '111111',
      'secondary_font_color'   => '111111',
      'antispam_font_size'   => '13',
      'antispam_font_color'   => 'BBBBBB',
      'input_text'       => 'Enter your best email address',
      'button_text'       => 'Subscribe',
      'ignore_form_styles'   => 1,
      'input_font_size'    => '13',
      'button_font_size'    => '12',
      'input_font_color'    => '111111',
      'button_font_color'    => 'FFFFFF',
      'input_bg'        => '',
      'button_bg'        => '0F0F0F',
      'input_bg_hover'    => '',
      'button_bg_hover'    => '0A0A0A',
      'input_border'      => 'EEEEEE',
      'button_border'      => '0F0F0F',
      'input_border_hover'  => 'BBBBBB',
      'button_border_hover'  => '0A0A0A',
      'success_background'   => '90C695',
      'success_color'     => '111111',
      'error_background'     => 'E08283',
      'error_color'       => '111111',
      'disable_settings'     => '2',
      'custom_html'      => '',
      'custom_css'      => '.logo { filter: grayscale(100%); } .logo-container { text-align: left; }'
    );


    if (empty($themes[$theme])) {
      set_transient('csmm_error_msg', '<div class="signals-alert signals-alert-info"><strong>Error loading theme! Theme data not found. Please contact support.</strong><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 1);
    } else {
      $settings = array_merge($settings, $themes[$theme]);
      update_option('signals_csmm_options', $settings);

      set_transient('csmm_error_msg', '<div class="signals-alert signals-alert-info"><strong>' . ucfirst($theme) . ' theme has been activated!</strong><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 1);
    }

    if (!empty($_GET['redirect'])) {
      wp_safe_redirect($_GET['redirect']);
    } else {
      wp_safe_redirect(admin_url());
    }

    exit;
  } // activate_theme


function csmm_export_settings() {
    $filename = str_replace(array('http://', 'https://'), '', home_url());
    $filename = str_replace(array('/', '\\', '.'), '-', $filename);
    $filename .= '-' . date('Y-m-d') . '-csmm.txt';

    $options = csmm_get_options();
    unset($options['none']);
    $options = apply_filters('csmm_options_pre_export', $options);

    $out = array('type' => 'CSMM', 'version' => csmm_get_plugin_version(), 'data' => $options);
    $out = json_encode($out);

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . strlen($out));

    @ob_end_clean();
    flush();

    echo $out;
    exit;
  } // export_settings
