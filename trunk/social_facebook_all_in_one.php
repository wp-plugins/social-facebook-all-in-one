<?php

/*
Plugin Name: Social Facebook All In One
Plugin URI: http://donisocial.donimedia-servicetique.net/
Description: With this widget , you can display a customizable JQuery accordion which gathers Facebook social plugins together , on your Wordpress website . <a href="http://www.donimedia-servicetique.net/newsletters" title="Be well informed about our latest creations or updates">Newsletter</a> | <a href="http://www.donimedia-servicetique.net/support-forum-donimedia-servicetique-cms-extensions">Support Forum</a>
Version: 1.0.1
Author: David DONISA
Author URI: http://donisocial.donimedia-servicetique.net/
*/


/** Make sure that the WordPress bootstrap has run before continuing. */
require( $_SERVER["DOCUMENT_ROOT"].'/wp-load.php' );








	//  error_reporting(E_ALL);  //  For DEBUG purpose
	add_action("widgets_init", array('social_facebook_all_in_one', 'register'));
	register_activation_hook( __FILE__, array('social_facebook_all_in_one', 'activate'));
	register_deactivation_hook( __FILE__, array('social_facebook_all_in_one', 'deactivate'));



	global $data;


	$plugin_dir = basename(dirname(__FILE__));


	$plugin_prefix = 'social_sfaio';




class social_facebook_all_in_one {

  function activate(){

		global $data;

    		$data = array( 
								'social_sfaio_title' => 'Your widget title',
								'social_sfaio_like_box_label' => 'Facebook Fans Like Box',
								'social_sfaio_activity_feed_box_label' => 'Facebook Activity Feed',
								'social_sfaio_recommandations_feed_box_label' => 'Facebook Recommandations',
								'social_sfaio_registration_feed_box_label' => 'Facebook Registration',

								'social_sfaio_facebook_url_page' => '' ,
								'social_sfaio_facebook_app_id' => '' ,
								'social_sfaio_facebook_app_secret' => '' ,
								'social_sfaio_titles_font_size' => '10' ,

								'social_sfaio_social_blocks_width' => '221' ,
								'social_sfaio_social_blocks_height' => '300' ,
								'social_sfaio_social_blocks_left_position' => '-0' ,

								'social_sfaio_like_box_thumbnail_width' => '190' ,
								'social_sfaio_like_box_padding_left' => '0' ,

								'social_sfaio_registration_box_width' => '221' ,
								'social_sfaio_registration_box_height' => '50' ,
								'social_sfaio_registration_box_left_position' => '-0' ,
								'social_sfaio_footer_like_button_box_width' => '230' ,
								'social_sfaio_footer_like_button_box_height' => '60' ,
								'social_sfaio_footer_like_button_box_margin_top' => '10' ,
								'social_sfaio_footer_like_button_box_margin_left' => '30',

								'social_sfaio_credit_link' => 'Yes',
								'is_social_sfaio_credit_link_first_load' => 'Yes',

							);

    	if ( ! get_option('social_sfaio_name')){
     	add_option('social_sfaio_name' , $data);
    	} else {
     	update_option('social_sfaio_name' , $data);
    	}
  }

  function deactivate(){

    	delete_option('social_sfaio_name');

  }


function control(){

	global $data;

  $data = get_option('social_sfaio_name');
  ?>



	<h3>Facebook Labels Translations</h3>
  	<p><label>Title <b>:</b> <br /> <input name="social_sfaio_title" type="text" size="30" value="<?php echo $data['social_sfaio_title']; ?>" /></label></p>
  	<p><label>"Like Box" label <b>:</b> <br /> <input name="social_sfaio_like_box_label" type="text" size="30" value="<?php echo $data['social_sfaio_like_box_label']; ?>" /></label></p>
  	<p><label>"Activity Feed Box" label <b>:</b> <br /> <input name="social_sfaio_activity_feed_box_label" type="text" size="30" value="<?php echo $data['social_sfaio_activity_feed_box_label']; ?>" /></label></p>
  	<p><label>"Recommandations Box" label <b>:</b> <br /> <input name="social_sfaio_recommandations_feed_box_label" type="text" size="30" value="<?php echo $data['social_sfaio_recommandations_feed_box_label']; ?>" /></label></p>
  	<p><label>"Registration Box" label <b>:</b> <br /> <input name="social_sfaio_registration_feed_box_label" type="text" size="30" value="<?php echo $data['social_sfaio_registration_feed_box_label']; ?>" /></label></p>


	<h3>General Settings</h3>
  	<p><label>Facebook Url Page <b>:</b> <br /> <input name="social_sfaio_facebook_url_page" type="text" size="30" value="<?php echo $data['social_sfaio_facebook_url_page']; ?>" /></label></p>
  	<p><label>Facebook App Id <b>:</b> <br /> <input name="social_sfaio_facebook_app_id" type="text" size="16" value="<?php echo $data['social_sfaio_facebook_app_id']; ?>" /></label></p>
  	<p><label>Facebook App Secret <b>:</b> <br /> <input name="social_sfaio_facebook_app_secret" type="text" size="16" value="<?php echo $data['social_sfaio_facebook_app_secret']; ?>" /></label></p>
  	<p><label>Titles Font Size ( in pt ) <b>:</b> <br /> <input name="social_sfaio_titles_font_size" type="text" size="3" value="<?php echo $data['social_sfaio_titles_font_size']; ?>" /></label></p>


	<h3>Social Containers Settings</h3>
  	<p><label>Social Containers Blocks Width <br /> <small>( Except for Registration Box )</small> <b>:</b> <br /> <input name="social_sfaio_social_blocks_width" type="text" size="4" value="<?php echo $data['social_sfaio_social_blocks_width']; ?>" /></label></p>
  	<p><label>Social Containers Blocks Height <br /> <small>( Except for Registration Box )</small> <b>:</b> <br /> <input name="social_sfaio_social_blocks_height" type="text" size="4" value="<?php echo $data['social_sfaio_social_blocks_height']; ?>" /></label></p>
  	<p><label>Social Containers Blocks Left position <br /> <small>( Except for Registration Box )</small> <b>:</b> <br /> <input name="social_sfaio_social_blocks_left_position" type="text" size="4" value="<?php echo $data['social_sfaio_social_blocks_left_position']; ?>" /></label></p>


	<h3>Like Box Settings</h3>
  	<p><label>Thumbnail Width <b>:</b> <br /> <input name="social_sfaio_like_box_thumbnail_width" type="text" size="4" value="<?php echo $data['social_sfaio_like_box_thumbnail_width']; ?>" /></label></p>
  	<p><label>Thumbail Padding Left <b>:</b> <br /> <input name="social_sfaio_like_box_padding_left" type="text" size="4" value="<?php echo $data['social_sfaio_like_box_padding_left']; ?>" /></label></p>


	<h3>Registration Box Settings</h3>
  	<p><label>Registration Box Width <b>:</b> <br /> <input name="social_sfaio_registration_box_width" type="text" size="4" value="<?php echo $data['social_sfaio_registration_box_width']; ?>" /></label></p>
  	<p><label>Registration Box Height <b>:</b> <br /> <input name="social_sfaio_registration_box_height" type="text" size="4" value="<?php echo $data['social_sfaio_registration_box_height']; ?>" /></label></p>
  	<p><label>Registration Box Left position <b>:</b> <br /> <input name="social_sfaio_registration_box_left_position" type="text" size="4" value="<?php echo $data['social_sfaio_registration_box_left_position']; ?>" /></label></p>


	<h3>Footer Like Button Settings</h3>
  	<p><label>Footer Like Button Box Width <b>:</b> <br /> <input name="social_sfaio_footer_like_button_box_width" type="text" size="4" value="<?php echo $data['social_sfaio_footer_like_button_box_width']; ?>" /></label></p>
  	<p><label>Footer Like Button Box Height <b>:</b> <br /> <input name="social_sfaio_footer_like_button_box_height" type="text" size="4" value="<?php echo $data['social_sfaio_footer_like_button_box_height']; ?>" /></label></p>
  	<p><label>Footer Like Button Box Margin Top <b>:</b> <br /> <input name="social_sfaio_footer_like_button_box_margin_top" type="text" size="4" value="<?php echo $data['social_sfaio_footer_like_button_box_margin_top']; ?>" /></label></p>
  	<p><label>Footer Like Button Box Margin Left <b>:</b> <br /> <input name="social_sfaio_footer_like_button_box_margin_left" type="text" size="4" value="<?php echo $data['social_sfaio_footer_like_button_box_margin_left']; ?>" /></label></p>

	<h3>Credit link for DoniSocial</h3>

  <?php

	if ( $data['is_social_sfaio_credit_link_first_load'] == 'Yes' ) {

	  	echo '<p><label>Display DoniSocial credit link , please <b>:</b> <br /> Yes <input name="social_sfaio_credit_link" type="radio" value="Yes" checked/>';
	  	echo ' No <input name="social_sfaio_credit_link" type="radio" value="No" /></label></p>';

		$data['is_social_sfaio_credit_link_first_load'] = 'No';

	} else {

		if ( $data['social_sfaio_credit_link'] == 'Yes' ) {

		  	echo '<p><label>Display DoniSocial credit link , please <b>:</b> <br /> Yes <input name="social_sfaio_credit_link" type="radio" value="Yes" checked/>';
		  	echo ' No <input name="social_sfaio_credit_link" type="radio" value="No" /></label></p>';

		} else {

		  	echo '<p><label>Display DoniSocial credit link , please <b>:</b> <br /> Yes <input name="social_sfaio_credit_link" type="radio" value="Yes" />';
		  	echo ' No <input name="social_sfaio_credit_link" type="radio" value="No" checked/></label></p>';

		};
	};



   if (isset($_POST['social_sfaio_title'])){

    	$data['social_sfaio_title'] = attribute_escape($_POST['social_sfaio_title']);

    	$data['social_sfaio_like_box_label'] = attribute_escape($_POST['social_sfaio_like_box_label']);
    	$data['social_sfaio_activity_feed_box_label'] = attribute_escape($_POST['social_sfaio_activity_feed_box_label']);
    	$data['social_sfaio_recommandations_feed_box_label'] = attribute_escape($_POST['social_sfaio_recommandations_feed_box_label']);
    	$data['social_sfaio_registration_feed_box_label'] = attribute_escape($_POST['social_sfaio_registration_feed_box_label']);

    	$data['social_sfaio_facebook_url_page'] = attribute_escape($_POST['social_sfaio_facebook_url_page']);
    	$data['social_sfaio_facebook_app_id'] = attribute_escape($_POST['social_sfaio_facebook_app_id']);
    	$data['social_sfaio_facebook_app_secret'] = attribute_escape($_POST['social_sfaio_facebook_app_secret']);
    	$data['social_sfaio_titles_font_size'] = attribute_escape($_POST['social_sfaio_titles_font_size']);


    	$data['social_sfaio_social_blocks_width'] = attribute_escape($_POST['social_sfaio_social_blocks_width']);
    	$data['social_sfaio_social_blocks_height'] = attribute_escape($_POST['social_sfaio_social_blocks_height']);
    	$data['social_sfaio_social_blocks_left_position'] = attribute_escape($_POST['social_sfaio_social_blocks_left_position']);

    	$data['social_sfaio_like_box_thumbnail_width'] = attribute_escape($_POST['social_sfaio_like_box_thumbnail_width']);
    	$data['social_sfaio_like_box_padding_left'] = attribute_escape($_POST['social_sfaio_like_box_padding_left']);

    	$data['social_sfaio_registration_box_width'] = attribute_escape($_POST['social_sfaio_registration_box_width']);
    	$data['social_sfaio_registration_box_height'] = attribute_escape($_POST['social_sfaio_registration_box_height']);
    	$data['social_sfaio_registration_box_left_position'] = attribute_escape($_POST['social_sfaio_registration_box_left_position']);
    	$data['social_sfaio_footer_like_button_box_width'] = attribute_escape($_POST['social_sfaio_footer_like_button_box_width']);
    	$data['social_sfaio_footer_like_button_box_height'] = attribute_escape($_POST['social_sfaio_footer_like_button_box_height']);
    	$data['social_sfaio_footer_like_button_box_margin_top'] = attribute_escape($_POST['social_sfaio_footer_like_button_box_margin_top']);
    	$data['social_sfaio_footer_like_button_box_margin_left'] = attribute_escape($_POST['social_sfaio_footer_like_button_box_margin_left']);

    	$data['social_sfaio_credit_link'] = attribute_escape($_POST['social_sfaio_credit_link']);

    	update_option('social_sfaio_name', $data);


  }
}


  function widget($args){


		/** Make sure that the WordPress bootstrap has run before continuing. */
		require( '/home/donimedi/donisocial/www/wp-load.php' );

		global $data;

		$data = get_option('social_sfaio_name');

    		echo $args['before_widget'];
		echo $args['before_title'] .$data['social_sfaio_title']. $args['after_title'];


		$widget_code_to_display = '<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>';
		$widget_code_to_display .= '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>';
		$widget_code_to_display .= '<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>';



		$widget_code_to_display .= '<script>';
		$widget_code_to_display .= '  jQuery(document).ready(function() {';

		$widget_code_to_display .= '    jQuery(".social_sfaio_accordion").accordion({'; 
		$widget_code_to_display .= '	    	event: "mouseover", ';
		$widget_code_to_display .= '			active: false,';
		$widget_code_to_display .= '    		animated: "bounceslide"';
		$widget_code_to_display .= ' 		})';

		$widget_code_to_display .= '  });';
		$widget_code_to_display .= '  </script>';


		$widget_code_to_display .= '<div class="social_sfaio_accordion">';


		$widget_code_to_display .= '	<h3 style="font-size: '.$data['social_sfaio_titles_font_size'].'pt;"><a href="#">'.$data['social_sfaio_like_box_label'].'</a></h3>';
		$widget_code_to_display .= '	<div style="position:relative; left: '.$data['social_sfaio_social_blocks_left_position'].'px; width: '.$data['social_sfaio_social_blocks_width'].'px; height: '.$data['social_sfaio_social_blocks_height'].'px; font-size:10pt; text-align: center; overflow: hidden;">';
		$widget_code_to_display .= '		<iframe src="//www.facebook.com/plugins/likebox.php?href='.$data['social_sfaio_facebook_url_page'].'&amp;width='.$data['social_sfaio_like_box_thumbnail_width'].'&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false"';
		$widget_code_to_display .= '			scrolling="no"';
		$widget_code_to_display .= '			frameborder="0"';
		$widget_code_to_display .= '			style="border:none; overflow:hidden; width:190px; height: 300px; padding-left: '.$data['social_sfaio_like_box_padding_left'].'px;"';
		$widget_code_to_display .= '			allowTransparency="true"';
		$widget_code_to_display .= '		>';
		$widget_code_to_display .= '		</iframe>';
		$widget_code_to_display .= '	<?php echo site_url("wp-login.php?action=register", "login"); ?></div>';


		$widget_code_to_display .= '		<h3 style="font-size: '.$data['social_sfaio_titles_font_size'].'pt;"><a href="#">'.$data['social_sfaio_activity_feed_box_label'].'</a></h3>';
		$widget_code_to_display .= '	<div style="position:relative; left: '.$data['social_sfaio_social_blocks_left_position'].'px; width: '.$data['social_sfaio_social_blocks_width'].'px; height: '.$data['social_sfaio_social_blocks_height'].'px; font-size:10pt; text-align: center; overflow: hidden;">';
		$widget_code_to_display .= '		<iframe src="//www.facebook.com/plugins/activity.php?site='.$data['social_sfaio_facebook_url_page'].'&amp;width=190&amp;height=300&amp;header=true&amp;colorscheme=light&amp;linktarget=_blank&amp;border_color&amp;font=trebuchet+ms&amp;recommendations=false&amp;appId='.$data['social_sfaio_facebook_app_id'].'"';
		$widget_code_to_display .= '			scrolling="no"';
		$widget_code_to_display .= '			frameborder="0"';
		$widget_code_to_display .= '			style="border:none; overflow:hidden; width: 190px; height:300px;"';
		$widget_code_to_display .= '			allowTransparency="true"';
		$widget_code_to_display .= '		>';
		$widget_code_to_display .= '		</iframe>';
		$widget_code_to_display .= '	</div>';


		$widget_code_to_display .= '		<h3 style="font-size: '.$data['social_sfaio_titles_font_size'].'pt;"><a href="#">'.$data['social_sfaio_recommandations_feed_box_label'].'</a></h3>';
		$widget_code_to_display .= '	<div style="position:relative; left: '.$data['social_sfaio_social_blocks_left_position'].'px; width: '.$data['social_sfaio_social_blocks_width'].'px; height: '.$data['social_sfaio_social_blocks_height'].'px; font-size:10pt; text-align: center;">';
		$widget_code_to_display .= '		<iframe src="//www.facebook.com/plugins/recommendations.php?site='.$data['social_sfaio_facebook_url_page'].'&amp;width=190&amp;height=300&amp;header=false&amp;colorscheme=light&amp;linktarget=_blank&amp;border_color&amp;font&amp;appId='.$data['social_sfaio_facebook_app_id'].'"';
		$widget_code_to_display .= '			scrolling="no"';
		$widget_code_to_display .= '			frameborder="0"';
		$widget_code_to_display .= '			style="border:none; overflow:hidden; width:190px; height:300px;"';
		$widget_code_to_display .= '			allowTransparency="true"';
		$widget_code_to_display .= '		>';
		$widget_code_to_display .= '		</iframe>';
		$widget_code_to_display .= '	</div>';


		$widget_code_to_display .= '		<h3 style="font-size: '.$data['social_sfaio_titles_font_size'].'pt;"><a href="#">'.$data['social_sfaio_registration_feed_box_label'].'</a></h3>';
		$widget_code_to_display .= '	<div style="position:relative; left: '.$data['social_sfaio_registration_box_left_position'].'px; overflow-x:hidden; overflow-x:scroll; overflow-y:hidden; width: '.$data['social_sfaio_registration_box_width'].'px; height: '.$data['social_sfaio_registration_box_height'].'px; font-size:10pt;">';
		$widget_code_to_display .= '		<iframe src="http://www.facebook.com/plugins/registration.php?';
		$widget_code_to_display .= '             client_id='.$data['social_sfaio_facebook_app_id'].'&';
		$widget_code_to_display .= '             redirect_uri='.plugins_url( 'social_facebook_all_in_one/register.php' , dirname(__FILE__) ).'&';
		//  $widget_code_to_display .= '             fields=name,birthday,gender,location,email"';

		$widget_code_to_display .= 'fields=[';
		$widget_code_to_display .= '{\'name\':\'name\'},';
		$widget_code_to_display .= '{\'name\':\'username\',\'description\':\'Username\',\'type\':\'text\'},';
		$widget_code_to_display .= '{\'name\':\'email\'},';
		$widget_code_to_display .= '{\'name\':\'location\',\'description\':\'Location\',\'type\':\'typeahead\',\'categories\':';
		$widget_code_to_display .= '[\'city\']}]"'; 


		$widget_code_to_display .= '        scrolling="no"';
		$widget_code_to_display .= '        frameborder="no"';
		$widget_code_to_display .= '        style="border: none"';
		$widget_code_to_display .= '        allowTransparency="true"';
		$widget_code_to_display .= '        width="400"';
		$widget_code_to_display .= '        height="285"';
		$widget_code_to_display .= '		>';
		$widget_code_to_display .= '		</iframe>';
		$widget_code_to_display .= '	</div>';

		$widget_code_to_display .= '</div>';

		$widget_code_to_display .= '<iframe src="//www.facebook.com/plugins/like.php?href='.$data['social_sfaio_facebook_url_page'].'&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;font&amp;height=35"';
		$widget_code_to_display .= '			scrolling="no"';
		$widget_code_to_display .= '			frameborder="0"';
		$widget_code_to_display .= '			style="position: relative; border:none; overflow:hidden; width: '.$data['social_sfaio_footer_like_button_box_width'].'px; height: '.$data['social_sfaio_footer_like_button_box_height'].'px; margin-left: '.$data['social_sfaio_footer_like_button_box_margin_left'].'px; margin-top: '.$data['social_sfaio_footer_like_button_box_margin_top'].'px;"';
		$widget_code_to_display .= '			allowTransparency="true"';
		$widget_code_to_display .= '></iframe>';


		if ( $data['social_sfaio_credit_link'] == 'Yes' ) {

			$widget_code_to_display .= '<div style="text-align: center;  color: #ff0000; font-size: 7pt; font-weight: bold;">';
			$widget_code_to_display .= '<a href="http://donisocial.donimedia-servicetique.net" title="Wordpress Social Facebook All In One widget by DoniSocial">By DoniSocial</a>';
			$widget_code_to_display .= '</div>';

		};



		echo $widget_code_to_display;

     		echo $args['after_widget'];


  }


  function register(){

		function social_sfaio_my_enqueue_scripts() {

			wp_register_style('social_sfaio_pluginStylesheet', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css',false,null);
			wp_enqueue_style('social_sfaio_pluginStylesheet');
		
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js',false,null);
			wp_enqueue_script('jquery');
		
			wp_deregister_script('jquery-ui-core');
			wp_register_script('jquery-ui-core', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js',false,null);
			wp_enqueue_script('jquery-ui-core');
		
			$file_dir=get_bloginfo('url')."/wp-content/plugins/social_facebook_all_in_one";
			//  wp_enqueue_style("social_sfaio_pluginStylesheet", $file_dir."/styles/styles.css", false, "1.0", "all");
			wp_enqueue_script("social_sfaio_pluginJQueryScript", $file_dir."/scripts/script.js", array('jquery'),null);
		
		}
 
		add_action('init', 'social_sfaio_my_enqueue_scripts');
		//  add_action('admin_init', 'social_sfaio_my_enqueue_scripts');

    	register_sidebar_widget('Social Facebook All In One', array('social_facebook_all_in_one', 'widget'));
    	register_widget_control('Social Facebook All In One', array('social_facebook_all_in_one', 'control'));
  	}
}






?>