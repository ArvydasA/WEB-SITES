<div class="signals-tile" id="pro">
	<div class="signals-tile-body">
		<div class="signals-tile-title">Coming Soon &amp; Maintenance Mode PRO - Save time &amp; money when building pages</div>
		<p>PRO version of the plugin gives you access to numerous <a href="<?php echo csmm_generate_web_link('pro-header', '/features/'); ?>" target="_blank">advanced features</a> including best-in-class SEO options, gallery of 400,000+ images, 70+ themes, 10+ page modules, and refined access control options.</p>

		<div class="signals-section-content">
 <?php
  if (csmm_chat_available()) {
?>
  <p class="below-pricing">Our agents are online and available for any questions you have about the PRO version! <a title="Chat with our support agents" style="margin: 0 0 0 15px;" href="#" class="signals-btn csmm-open-chat"><span style="font-size: 19px;" class="dashicons dashicons-format-chat"></span>  <strong>Chat with Live Support</strong></a></p>
<?php
}
?>

<table id="features-table">
   <tr>
      <td>
         <div class="home-box"><span>70+ Pixel Perfect Themes</span>
      <p>Professional, easily editable <a href="#themes" class="csmm-change-tab">themes</a> that fit and adjust to any brand will enable you to build a page for your online or offline business in minutes. New themes are added weekly.</p>
    </div>
      </td>
      <td>
         <div class="home-box"><span>650,000+ Premium Hi-Resolution Images</span>
      <p>Are you still googling for images? Good ones are costly, and others are low-res with watermarks? With our image library, the only thing you have to do is enter a search term and pick an image. Five seconds of work.</p>
    </div>
      </td>
      <td>
         <div class="home-box"><span>Advanced SEO Preview &amp; Analysis</span>
      <p>Our SEO analytics tool provides actionable advice based on over 30 SEO signals analyzed on your page. With a bit of optimization, you'll be on the first position in search results in no time.</p>
    </div>
      </td>
   </tr>
   <tr>
      <td>
         <div class="home-box"><span>Drag &amp; Drop Builder that Doesn't Frustrate</span>
      <p>Nobody has time to read a manual just to use a drag&amp;drop builder because it has 50% options that nobody needs. Our builder has only the options you need. It's fast and dead simple to use!</p>
    </div>
      </td>
      <td>
         <div class="home-box"><span>Advanced Access Rules</span>
      <p>Want to show off the new website to a client? But you know they are not very "technical" and need a simple solution? Just send them a secret access link, and they can view the site while it's still in coming soon mode.</p>
    </div>
      </td>
      <td>
         <div class="home-box"><span>Connect any Email, CRM or Webinar System</span>
      <p>Are you using a less popular email service provider, CRM or webinar platform that other plugins don't support? Well, we do support them! Our universal autoresponder system works with any 3rd party service.</p>
    </div>
      </td>
   </tr>
</table>

<p class="below-pricing">Find out more about the <b>PRO features</b> on the plugin's site - <a href="<?php echo csmm_generate_web_link('find-out-more'); ?>" target="_blank">comingsoonwp.com</a></p>

<hr id="pricing-table-above">

  <table id="pricing-table">
  <colgroup></colgroup>
  <colgroup></colgroup>
  <colgroup></colgroup>
  <tbody>
    <tr>
      <td>
        <h3>Lifetime<br>PRO License</h3>
        <span>For single site owners who like paying only once</span>
      </td>
      <td>
        <h3>Lifetime Unlimited<br>Agency License</h3>
        <span>Best value for money</span>
      </td>
      <td>
        <h3>Personal<br>PRO License</h3>
        <span>Pay only for the time you use the plugin</span>
      </td>
    </tr>
    <tr>
      <td>One Time Payment</td>
      <td>One Time Payment</td>
      <td>Monthly / Yearly Payment</td>
    </tr>
    <tr>
      <td>1 Personal or Client Site</td>
      <td>Unlimited Client &amp; Personal Sites</td>
      <td>1 Personal Site</td>
    </tr>
    <tr>
      <td>Lifetime Support &amp; Updates</td>
      <td>Lifetime Priority Support &amp; Updates</td>
      <td>1 Year of Support &amp; Updates</td>
    </tr>
    <tr>
      <td>Advanced SEO Preview &amp; Anaylsis</td>
      <td>Advanced SEO Preview &amp; Anaylsis</td>
      <td>Advanced SEO Preview &amp; Anaylsis</td>
    </tr>
    <tr>
      <td>650,000+ Hi-Resolution Images</td>
      <td>650,000+ Hi-Resolution Images</td>
      <td>650,000+ Hi-Resolution Images</td>
    </tr>
    <tr>
      <td>30+ Templates</td>
      <td>70+ Templates</td>
      <td>30+ Templates</td>
    </tr>
    <tr>
      <td>10+ Page Modules</td>
      <td>10+ Page Modules</td>
      <td>10+ Page Modules</td>
    </tr>
    <tr>
      <td>All Current &amp; Future Features Included</td>
      <td>All Current &amp; Future Features Included</td>
      <td>All Current &amp; Future Features Included</td>
    </tr>
    <tr>
<?php
  $meta = csmm_get_meta();
  $promo_delta = HOUR_IN_SECONDS;
  $promo_delta2 = DAY_IN_SECONDS * 28;
if ((time() - $meta['first_install_gmt']) < $promo_delta) {
?>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-pro-lifetime/welcome/?wanted=true&plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW - 25% OFF<br><del>$79</del> $59<br><span style="font-weight: normal;">Discount ends in <span class="mm-countdown" data-endtime="<?php echo $meta['first_install_gmt'] + $promo_delta; ?>" style="">59 min</span></span></a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-agency-lifetime/welcome/?wanted=true&plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW - $60 OFF<br><del>$199</del> $139<br><span style="font-weight: normal;">Discount ends in <span class="mm-countdown" data-endtime="<?php echo $meta['first_install_gmt'] + $promo_delta; ?>" style="">59 min</span></span></a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-pro-yearly/?plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW<br>$6.99<small>/month</small></a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
<?php
} elseif ((time() - $meta['first_install_gmt']) > $promo_delta2) {
?>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-pro-lifetime/olduser/?wanted=true&plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW - 25% OFF<br><del>$79</del> $59</a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-agency-lifetime/olduser/?wanted=true&plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW - $60 OFF<br><del>$199</del> $139</a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-pro-yearly/?plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW<br>$6.99<small>/month</small></a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
<?php
} else {
?>
    <td>
    <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-pro-lifetime/?wanted=true&plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW<br>$79</a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-agency-lifetime/?wanted=true&plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW<br>$199</a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
      <td>
        <a data-gumroad-single-product="true" class="promo-button go-to-license-key" href="https://gum.co/csmm-pro-yearly/?plugin_info=CSMM+v<?php echo csmm_get_plugin_version(); ?>" target="_blank">BUY NOW<br>$6.99<small>/month</small></a>
        <span class="instant-download"><span class="dashicons dashicons-yes"></span> Secure payment<br><span class="dashicons dashicons-yes"></span> Instant activation from WordPress admin<br><span class="dashicons dashicons-yes"></span> 100% No-Risk Money Back Guarantee</span>
      </td>
<?php
  }
?>
    </tr>
  </tbody>
</table>

<?php
  if (csmm_chat_available()) {
?>
  <p class="below-pricing">Our agents are online and available for any questions you have about the PRO version! <a title="Chat with our support agents" style="margin: 0 0 0 15px;" href="#" class="signals-btn csmm-open-chat"><span style="font-size: 19px;" class="dashicons dashicons-format-chat"></span>  <strong>Chat with Live Support</strong></a></p>
<?php
}
?>
<hr>

      <div class="signals-double-group signals-clearfix">
        <div class="signals-form-group">
          <label for="signals_csmm_license_key" class="signals-strong"><?php _e( 'Activate Your PRO License', 'signals' ); ?></label>
          <input type="text" name="license_key" id="signals_csmm_license_key" value="<?php echo esc_attr_e( stripslashes( $meta['license_key'] ) ); ?>" placeholder="License key, ie: 123456-123456-123456" class="signals-form-control">
          <p class="signals-form-help-block">License key is located in the confirmation email you received after purchasing. In case of any problems, please contact <a href="#support" class="csmm-change-tab">support</a>. If you don't have a PRO license key - <a href="#pricing-table">get it now</a>.</p>

<?php
if (csmm_license::is_activated()) {
      $plugin = plugin_basename(__FILE__);
      $update_url = wp_nonce_url(admin_url('update.php?action=upgrade-plugin&amp;plugin=' . urlencode(CSMM_BASENAME)), 'upgrade-plugin_' . CSMM_BASENAME);
      echo '<a href="' . $update_url . '" class="signals-btn signals-btn-red">Finish the upgrade process - update Coming Soon files to PRO</a>';
    }
      echo '<button style="margin-top: 10px;" type="submit" id="save-license" name="save-license" value="save-license" class="signals-btn">Save and Validate License Key</button>';
    echo '<br><br>';

 if (!empty($meta['license_key'])) {
      if (csmm_license::is_activated()) {
        if ($meta['license_expires'] == '2035-01-01') {
          $valid = 'indefinitely';
        } else {
          $valid = 'until ' . date('F jS, Y', strtotime($meta['license_expires']));
          if (date('Y-m-d') == $meta['license_expires']) {
            $valid .= '; expires today';
          } elseif (date('Y-m-d', time() + 30 * DAY_IN_SECONDS) > $meta['license_expires']) {
            $tmp = (strtotime($meta['license_expires'] . date(' G:i:s')) - time()) / DAY_IN_SECONDS;
            $valid .= '; expires in ' . round($tmp) . ' days';
          }
        }
        echo 'License Status:
            <b style="color: #66b317;">Active</b><br>
            Type: ' . str_replace('pro', 'PRO', $meta['license_type']);
        echo '<br>Valid ' . $valid . '';
      } else {
        echo 'License Status:
            <b style="color: #ea1919;">Inactive</b>';
        if (!empty($meta['license_type'])) {
          echo '<br>Type: ' . $meta['license_type'];
        }
        if (!empty($meta['license_expires']) && $meta['license_expires'] != '1900-01-01' && $meta['license_expires'] != '1970-01-01') {
          echo '<br>Expired on ' . date('F jS, Y', strtotime($meta['license_expires']));
        }
      }
    }
?>
        </div>
      </div>


  </div>
	</div>
</div><!-- #pro -->
