<script>

var __bgStyle = "";
var $ = jQuery.noConflict();

(function($) {
  'use strict';

/*=================================================
variable
=================================================*/
var $html = $('html');
var $body = $('body');
var $bg = $('#bg');
var $intro = $('#intro');
var $preloader = $('#preloader');
var $preloaderImg = $('#preloader-img');

/*=================================================
ie10 viewport fix
=================================================*/
  (function() {
    'use strict';
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement('style')
      msViewportStyle.appendChild(
        document.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
      )
      document.querySelector('head').appendChild(msViewportStyle)
    }
  })();

/*=================================================
platform detect
=================================================*/
  var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
  (isMobile) ? $html.addClass('is-mobile') : $html.addClass('non-mobile'); // add class for mobile and non-mobile
  if ($html.hasClass('ie9')) {
    var isIE9 = true; // var ie9
  }

/*=================================================
preloader
=================================================*/
  function fn_preloader() {
    $preloaderImg.velocity('fadeOut', {duration: __preloaderFadeOut});
    $preloader.velocity('slideUp', {delay: __preloaderDelay, duration: __preloaderFadeOut, easing: 'easeInExpo', complete: function() {
      var $sectionActive = $('section.active');
      $sectionActive.velocity('transition.slideDownIn', {duration: 1200});
      // other callback after preloader
    }});
  }

/*=================================================
ie9 placeholder
=================================================*/
  function fn_placeholder() {
    if (isIE9) {
      $('input, textarea').placeholder({customClass: 'ie-placeholder'});
    }
  }


/*=================================================
background
=================================================*/
  function fn_bg() {
    /* enable background style from variable.js setting */
    <?php if($wpsm_rcs_plugin_options_background['select_background']=="bg_image"){ ?>
      fn_single();
  <?php } ?>
	
	<?php if($wpsm_rcs_plugin_options_background['select_background']=="bg_slideshow"){ ?>
		fn_slideshow();
	<?php } ?>
   
  

  function fn_single() {
    $bg.backstretch('<?php echo $wpsm_rcs_plugin_options_background['background_image']; ?>'); // set single background image
  }

  

  function fn_slideshow() {
    var slideShowImageSet = [];
	<?php 
    for($i=0; $i<=$wpsm_rcs_plugin_options_background['bg_slideshow_no']-1; $i++) {
		
	?>
      slideShowImageSet.push('<?php echo $wpsm_rcs_plugin_options_background['background_slides_'.$i];  ?>');
	  <?php 
    }
	
	?>
    $bg.backstretch(slideShowImageSet, {
      duration: __slideshowDuration, fade: __slideshowDelay // slideshow duration and delay
    });
  }

 

  }

/*=================================================
menu
=================================================*/
  function fn_menu() {
    var $menuWrap = $('#menu-wrap');
    var $menu = $('#menu');
    var $menuLink = $menu.find('li');

    $('.menu-toggle').on('click', function(e) {
      e.preventDefault();
      $body.toggleClass('menu-in');
      if ($body.hasClass('menu-in')) {
        $menuWrap.velocity('stop', true).velocity({left: 0}, {duration: 1200, easing: 'easeOutExpo'});
        $menu.velocity('stop', true).velocity({left: 0}, {duration: 800, easing: 'easeOutExpo', delay: 200});
        $menuLink.velocity('stop', true).velocity('transition.slideRightIn', {stagger: 200});
      } else {
        $menuWrap.velocity('stop', true).velocity({left: '100%'}, {duration: 1200, easing: 'easeOutExpo'});
        $menu.velocity('stop', true).velocity({left: '100%'}, {duration: 800, easing: 'easeOutExpo', delay: 200});
        $menuLink.velocity('stop', true).velocity('transition.slideRightOut', {stagger: 200});        
      }
    });

    $('a[data-link-to]').on('click', function(e) {
      e.preventDefault();
      var $this = $(this);
      var $sectionActive = $('section.active');
      var $onClickSection = $($this.data('link-to'));
      var id = $onClickSection.attr('id');

      if (!$onClickSection.hasClass('active')) {
        $sectionActive.velocity('stop', true).velocity('transition.slideUpOut', {duration: 1200, complete: function() {
          $preloader.add($preloaderImg).velocity('fadeIn', {duration: 500, complete: function() {
            if (__bgStyle == 2) {
              $bg.backstretch('assets/img/bg/' + id + '.jpg');
            }
          }});
          $preloaderImg.velocity('fadeOut', {duration: 1000});
          $preloader.velocity('slideUp', {delay: 400, duration: 800, easing: 'easeInExpo', complete: function() {
            $onClickSection.velocity('transition.slideDownIn', {duration: 1200});
            $sectionActive.removeClass('active');
            $onClickSection.addClass('active');
          }});
        }});
      }

      if ($this.parent('#menu li').length) {
        $body.toggleClass('menu-in');
        $menuWrap.velocity('stop', true).velocity({left: '100%'}, {duration: 1200, easing: 'easeOutExpo'});
        $menu.velocity('stop', true).velocity({left: '100%'}, {duration: 800, easing: 'easeOutExpo', delay: 200});
        $menuLink.velocity('stop', true).velocity({opacity: 0}, {duration: 800, easing: 'easeInOut', delay: 200});
      }
    });

  }



/*=================================================
email validation
=================================================*/
  function fn_formValidation(email_address) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(email_address);
  }

/*=================================================
subscribe form
=================================================*/
  function fn_subscribe() {
  
     fn_subscribeForm();
   
  }

 

  /* php */
  function fn_subscribeForm() {

  /*=================================================
subscribe
=================================================*/

var __subscribeSuccess = '<i class="icons fa fa-check valid"></i> <?php echo $wpsm_rcs_plugin_options_subscription_field['success_subs_notification_text'];  ?>'; // subscribe success message
var __subscribeError = '<i class="icons fa fa-close error"></i> <?php echo $wpsm_rcs_plugin_options_subscription_field['invalid_email_notification_text'];  ?>'; // subscribe error message
  
  
    var $form = $('#subscribe-form');
    var $subscribeEmail = $('#subscribe-email');

    $subscribeEmail.prop('type', 'text');

    $form.on('submit', function(e) {

      var subscribeEmailVal = $subscribeEmail.val();
	 
      var $subscribeNotice = $('.subscribe-notice');
      var $submitButton = $form.find('button[type="submit"]');
		$(".load_msg").fadeIn();
      e.preventDefault();
		
      $submitButton.prop('disabled', true);

      if (!fn_formValidation(subscribeEmailVal)) {
		  $(".load_msg").fadeOut();
        $subscribeNotice.stop(true).hide().addClass('visible').html(__subscribeError).fadeIn();
			
        $submitButton.prop('disabled', false);
        $('#subscribe-email').focus();
      }
      else {
        $.ajax({
          type: 'POST',
          url: location.href,
          data: {
			action:"wp_mail",  
            email: subscribeEmailVal,
           
          },
          success: function() {
			  $(".load_msg").fadeOut();
            $subscribeNotice.stop(true).hide().addClass('visible').html(__subscribeSuccess).fadeIn();

            $submitButton.prop('disabled', false);
            $form[0].reset();
            $subscribeEmail.blur();

          }
        });
      }
      return false;

    });

  }

/*=================================================
lightbox
=================================================*/
  function fn_lightbox() {
    var $popBtn = $('#pop-with-subscribe-form');
    $popBtn.magnificPopup({
      type: 'inline',
      preloader: false,
      focus: 'input',
      callbacks: {
        beforeOpen: function() {
          if($(window).width() < 768) {
            this.st.focus = false;
          } else {
            this.st.focus = '#subscribe-email';
          }
        },
        afterClose: function() {
          $popBtn.blur();
        }
      }
    });
  }

/*=================================================
disable section
=================================================*/
  function fn_disableSection() {

    for (var a in __disableSection) {
      if (__disableSection[a]) {
        var id = '#' + a;
        $(id).remove();
        $('#menu').find('a[data-link-to="' + id + '"]').parent().remove();
      }
    }

  }

/*=================================================
preload image
=================================================*/
  function fn_imageLoaded() {
   
      fn_preloader();
   
  }

/*=================================================
window on load
=================================================*/
  $(window).on('load', function() {

    $('section').hide(); // hide all section
    fn_imageLoaded();

  });

/*=================================================
document on ready
=================================================*/
  $(document).on('ready', function() {

   
    fn_bg();
    fn_menu();
    
    fn_lightbox();
    fn_subscribe();
   // fn_contactForm();
    fn_disableSection();
    fn_placeholder();
	
		/* ------------------------------------------------------------------------ */
		/*	COUNTDOWN
		/* ------------------------------------------------------------------------ */
		
		<?php if($wpsm_rcs_plugin_options_countdown['countdown_enable']=="on") {?>
		
			if($.find('#countdown')[0]) {
				$('#countdown').countdown('<?php echo $wpsm_rcs_plugin_options_countdown['countdown_date']; ?> <?php echo $wpsm_rcs_plugin_options_countdown['countdown_time']; ?>').on('update.countdown', function(event) {
					var $this = $(this).html(event.strftime(''
						+ ''
						+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%-D</span><p class="unit"><?php echo $wpsm_rcs_plugin_options_countdown['days']; ?></p></li>'
						+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%H</span><p class="unit"><?php echo $wpsm_rcs_plugin_options_countdown['hours']; ?></p></li>'
						+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%M</span><p class="unit"><?php echo $wpsm_rcs_plugin_options_countdown['minutes']; ?></p></li>'
						+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%S</span><p class="unit"><?php echo $wpsm_rcs_plugin_options_countdown['seconds']; ?></p></li>'
						+''
					));
				});
			};
			
		<?php } ?>

  });

/*=================================================
window on resize
=================================================*/
  $(window).on('resize', function() {
    // resize function
  });

/*=================================================
window on resize - trigger
=================================================*/
  $(window).on('resize', function() {
    // resize function
  }).trigger('resize');

})(jQuery);
</script>

<?php
if(isset($_POST['action'])=="wp_mail") {
	
		$email = $_POST['email'];
		$email = strtolower($email);
		
		$to_admin = $wpsm_rcs_plugin_options_newsletter['email_add_of_admin'];
        $subject  = $wpsm_rcs_plugin_options_newsletter['to_admin_mail_sub'];
        $message  = $wpsm_rcs_plugin_options_newsletter['to_admin_mail_msg'] . "<br>Subscriber Email - " . $email ;
        $from     = $wpsm_rcs_plugin_options_newsletter['email_add_of_admin'];
        $headers  = "From:" . $from;
		
		$to_user  = $email;
        $subject1 = $wpsm_rcs_plugin_options_newsletter['to_subs_mail_sub'];
        $message1 = $wpsm_rcs_plugin_options_newsletter['to_subs_mail_msg'];
        $from1    = $wpsm_rcs_plugin_options_newsletter['email_add_of_admin'];
        $headers1 = "From:" . $from1;
	
		wp_mail($to_admin,$subject,$message,$headers);
		wp_mail($to_user,$subject1,$message1,$headers1);
	
}
?>