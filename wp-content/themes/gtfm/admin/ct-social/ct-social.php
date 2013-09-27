<?php
/*
Plugin Name: Contempo Social Widget
Plugin URI: http://contemporealestatethemes.com
Description: A simple social profile widget
Version: 1.0.0
Author: Chris Robinson
Author URI: http://contemporealestatethemes.com
*/

/*-----------------------------------------------------------------------------------*/
/* Include CSS */
/*-----------------------------------------------------------------------------------*/
 
function ct_social_css() {		
	wp_enqueue_style( 'ct_social_css', get_template_directory_uri() . '/admin/ct-social/assets/style.css', false, '1.0' );
}
add_action( 'wp_print_styles', 'ct_social_css' );

/*-----------------------------------------------------------------------------------*/
/* Include JS */
/*-----------------------------------------------------------------------------------*/

function ct_social_scripts() {
	wp_enqueue_script( 'core', get_template_directory_uri() . '/admin/ct-social/assets/core.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ct_social_scripts' );

/*-----------------------------------------------------------------------------------*/
/* Register Widget */
/*-----------------------------------------------------------------------------------*/

class ct_Social extends WP_Widget {

	function ct_Social() {
	   $widget_ops = array('description' => 'Use this widget to display your social profiles.' );
	   parent::WP_Widget(false, __('CT Social', 'contempo'),$widget_ops);      
	}
	
	function widget($args, $instance) {  
	
		extract( $args );
		global $ct_options;
		
		$title = $instance['title'];
		$delicious = $instance['delicious'];
		$digg = $instance['digg'];
		$dribbble = $instance['dribbble'];
		$email = $instance['email'];
		$facebook = $instance['facebook'];
		$flickr = $instance['flickr'];
		$forrst = $instance['forrst'];
		$foursquare = $instance['foursquare'];
		$github = $instance['github'];
		$googleplus = $instance['googleplus'];
		$instagram = $instance['instagram'];
		$lastfm = $instance['lastfm'];
		$linkedin = $instance['linkedin'];
		$myspace = $instance['myspace'];
		$paypal = $instance['paypal'];
		$picasa = $instance['picasa'];
		$pinterest = $instance['pinterest'];
		$skype = $instance['skype'];
		$soundcloud = $instance['soundcloud'];
		$spotify = $instance['spotify'];
		$twitter = $instance['twitter'];
		$vimeo = $instance['vimeo'];
		$virb = $instance['virb'];
		$wordpress = $instance['wordpress'];
		$yahoo = $instance['yahoo'];
		$yelp = $instance['yelp'];
		$youtube = $instance['youtube'];
		$links = $instance['links'];
		$size = $instance['size'];
	
	?>
		<?php echo $before_widget; ?>
		<?php if ($title) { echo $before_title . $title . $after_title; } ?>
        <ul>
		<?php if($delicious) { ?>
            <li><a href="<?php echo $delicious; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/delicious.png'; ?>" alt="Delicious" /></a></li>
        <?php } ?>
        <?php if($digg) { ?>
            <li><a href="<?php echo $digg; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/digg.png'; ?>" alt="Digg" /></a></li>
        <?php } ?>
        <?php if($dribbble) { ?>
            <li><a href="<?php echo $dribbble; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/dribbble.png'; ?>" alt="Dribbble" /></a></li>
        <?php } ?>
        <?php if($facebook) { ?>
            <li><a href="<?php echo $facebook; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/facebook.png'; ?>" alt="Facebook" /></a></li>
        <?php } ?>
        <?php if($flickr) { ?>
            <li><a href="<?php echo $flickr; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/flickr.png'; ?>" alt="Flickr" /></a></li>
        <?php } ?>
        <?php if($forrst) { ?>
            <li><a href="<?php echo $forrst; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/forrst.png'; ?>" alt="Forrst" /></a></li>
        <?php } ?>
        <?php if($foursquare) { ?>
            <li><a href="<?php echo $foursquare; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/foursquare.png'; ?>" alt="FourSquare" /></a></li>
        <?php } ?>
        <?php if($github) { ?>
            <li><a href="<?php echo $github; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/github.png'; ?>" alt="GitHub" /></a></li>
        <?php } ?>
        <?php if($googleplus) { ?>
            <li><a href="<?php echo $googleplus; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/google-plus.png'; ?>" alt="Google+" /></a></li>
        <?php } ?>
        <?php if($instagram) { ?>
            <li><a href="<?php echo $instagram; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/instagram.png'; ?>" alt="Instagram" /></a></li>
        <?php } ?>
        <?php if($lastfm) { ?>
            <li><a href="<?php echo $lastfm; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/lastfm.png'; ?>" alt="LastFM" /></a></li>
        <?php } ?>
        <?php if($linkedin) { ?>
            <li><a href="<?php echo $linkedin; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/linkedin.png'; ?>" alt="LinkedIn" /></a></li>
        <?php } ?>
        <?php if($myspace) { ?>
            <li><a href="<?php echo $myspace; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/myspace.png'; ?>" alt="MySpace" /></a></li>
        <?php } ?>
        <?php if($paypal) { ?>
            <li><a href="<?php echo $paypal; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/paypal.png'; ?>" alt="PayPal" /></a></li>
        <?php } ?>
        <?php if($picasa) { ?>
            <li><a href="<?php echo $picasa; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/picasa.png'; ?>" alt="Picasa" /></a></li>
        <?php } ?>
        <?php if($pinterest) { ?>
            <li><a href="<?php echo $pinterest; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/pinterest.png'; ?>" alt="Pinterest" /></a></li>
        <?php } ?>
        <?php if($skype) { ?>
            <li><a href="<?php echo $skype; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/skype.png'; ?>" alt="Skype" /></a></li>
        <?php } ?>
        <?php if($soundcloud) { ?>
            <li><a href="<?php echo $soundcloud; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/soundcloud.png'; ?>" alt="SoundCloud" /></a></li>
        <?php } ?>
        <?php if($spotify) { ?>
            <li><a href="<?php echo $spotify; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/spotify.png'; ?>" alt="Spotify" /></a></li>
        <?php } ?>
        <?php if($twitter) { ?>
            <li><a href="<?php echo $twitter; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/twitter.png'; ?>" alt="Twitter" /></a></li>
        <?php } ?>
        <?php if($vimeo) { ?>
            <li><a href="<?php echo $vimeo; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/vimeo.png'; ?>" alt="Vimeo" /></a></li>
        <?php } ?>
        <?php if($virb) { ?>
            <li><a href="<?php echo $virb; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/virb.png'; ?>" alt="Virb" /></a></li>
        <?php } ?>
        <?php if($wordpress) { ?>
            <li><a href="<?php echo $wordpress; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/wordpress.png'; ?>" alt="WordPress" /></a></li>
        <?php } ?>
        <?php if($yahoo) { ?>
            <li><a href="<?php echo $yahoo; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/yahoo.png'; ?>" alt="Yahoo" /></a></li>
        <?php } ?>
        <?php if($yelp) { ?>
            <li><a href="<?php echo $yelp; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/yelp.png'; ?>" alt="Yelp" /></a></li>
        <?php } ?>
        <?php if($youtube) { ?>
            <li><a href="<?php echo $youtube; ?>" target="<?php echo $links; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/youtube.png'; ?>" alt="YouTube" /></a></li>
        <?php } ?>
         <?php if($email) { ?>
            <li><a href="mailto:<?php echo $email; ?>"><img src="<?php echo get_template_directory_uri() . '/admin/ct-social/assets/images/'. $size .'/email.png'; ?>" alt="Email" /></a></li>
        <?php } ?>
        </ul>	
		<?php echo $after_widget; ?>   
    <?php
   }

   function update($new_instance, $old_instance) {                
	   return $new_instance;
   }

   function form($instance) {
	   
			$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
			$delicious = isset( $instance['delicious'] ) ? esc_attr( $instance['delicious'] ) : '';
			$digg = isset( $instance['digg'] ) ? esc_attr( $instance['digg'] ) : '';
			$dribbble = isset( $instance['dribbble'] ) ? esc_attr( $instance['dribbble'] ) : '';
			$email = isset( $instance['email'] ) ? esc_attr( $instance['email'] ) : '';
			$facebook = isset( $instance['facebook'] ) ? esc_attr( $instance['facebook'] ) : '';
			$flickr = isset( $instance['flickr'] ) ? esc_attr( $instance['flickr'] ) : '';
			$forrst = isset( $instance['forrst'] ) ? esc_attr( $instance['forrst'] ) : '';
			$foursquare = isset( $instance['foursquare'] ) ? esc_attr( $instance['foursquare'] ) : '';
			$github = isset( $instance['github'] ) ? esc_attr( $instance['github'] ) : '';
			$googleplus = isset( $instance['googleplus'] ) ? esc_attr( $instance['googleplus'] ) : '';
			$instagram = isset( $instance['instagram'] ) ? esc_attr( $instance['instagram'] ) : '';
			$lastfm = isset( $instance['lastfm'] ) ? esc_attr( $instance['lastfm'] ) : '';
			$linkedin = isset( $instance['linkedin'] ) ? esc_attr( $instance['linkedin'] ) : '';
			$myspace = isset( $instance['myspace'] ) ? esc_attr( $instance['myspace'] ) : '';
			$paypal = isset( $instance['paypal'] ) ? esc_attr( $instance['paypal'] ) : '';
			$picasa = isset( $instance['picasa'] ) ? esc_attr( $instance['picasa'] ) : '';
			$pinterest = isset( $instance['pinterest'] ) ? esc_attr( $instance['pinterest'] ) : '';
			$skype = isset( $instance['skype'] ) ? esc_attr( $instance['skype'] ) : '';
			$soundcloud = isset( $instance['soundcloud'] ) ? esc_attr( $instance['soundcloud'] ) : '';
			$spotify = isset( $instance['spotify'] ) ? esc_attr( $instance['spotify'] ) : '';
			$twitter = isset( $instance['twitter'] ) ? esc_attr( $instance['twitter'] ) : '';
			$vimeo = isset( $instance['vimeo'] ) ? esc_attr( $instance['vimeo'] ) : '';
			$virb = isset( $instance['virb'] ) ? esc_attr( $instance['virb'] ) : '';
			$wordpress = isset( $instance['wordpress'] ) ? esc_attr( $instance['wordpress'] ) : '';
			$yahoo = isset( $instance['yahoo'] ) ? esc_attr( $instance['yahoo'] ) : '';
			$yelp = isset( $instance['yelp'] ) ? esc_attr( $instance['yelp'] ) : '';
			$youtube = isset( $instance['youtube'] ) ? esc_attr( $instance['youtube'] ) : '';
			$links = isset( $instance['links'] ) ? esc_attr( $instance['links'] ) : '';
			$size = isset( $instance['size'] ) ? esc_attr( $instance['size'] ) : '';
		
		?>
        <p>
		   <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('title'); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('delicious'); ?>"><?php _e('Delicious:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('delicious'); ?>"  value="<?php echo $delicious; ?>" class="widefat" id="<?php echo $this->get_field_id('delicious'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('digg'); ?>"><?php _e('Digg:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('digg'); ?>"  value="<?php echo $digg; ?>" class="widefat" id="<?php echo $this->get_field_id('digg'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php _e('Dribbble:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('dribbble'); ?>"  value="<?php echo $dribbble; ?>" class="widefat" id="<?php echo $this->get_field_id('dribbble'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('email'); ?>"  value="<?php echo $email; ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('facebook'); ?>"  value="<?php echo $facebook; ?>" class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('flickr'); ?>"  value="<?php echo $flickr; ?>" class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('forrst'); ?>"><?php _e('Forrst:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('forrst'); ?>"  value="<?php echo $forrst; ?>" class="widefat" id="<?php echo $this->get_field_id('forrst'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('foursquare'); ?>"><?php _e('Foursquare:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('foursquare'); ?>"  value="<?php echo $foursquare; ?>" class="widefat" id="<?php echo $this->get_field_id('foursquare'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('GitHub:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('github'); ?>"  value="<?php echo $github; ?>" class="widefat" id="<?php echo $this->get_field_id('github'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php _e('Google+:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('googleplus'); ?>"  value="<?php echo $googleplus; ?>" class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('instagram'); ?>"  value="<?php echo $instagram; ?>" class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('lastfm'); ?>"><?php _e('LastFM:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('lastfm'); ?>"  value="<?php echo $lastfm; ?>" class="widefat" id="<?php echo $this->get_field_id('lastfm'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('linkedin'); ?>"  value="<?php echo $linkedin; ?>" class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('myspace'); ?>"><?php _e('MySpace:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('myspace'); ?>"  value="<?php echo $myspace; ?>" class="widefat" id="<?php echo $this->get_field_id('myspace'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('paypal'); ?>"><?php _e('PayPal:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('paypal'); ?>"  value="<?php echo $paypal; ?>" class="widefat" id="<?php echo $this->get_field_id('paypal'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('picasa'); ?>"><?php _e('Picasa:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('picasa'); ?>"  value="<?php echo $picasa; ?>" class="widefat" id="<?php echo $this->get_field_id('picasa'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('pinterest'); ?>"  value="<?php echo $pinterest; ?>" class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('skype'); ?>"><?php _e('Skype:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('skype'); ?>"  value="<?php echo $skype; ?>" class="widefat" id="<?php echo $this->get_field_id('skype'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('soundcloud'); ?>"><?php _e('SoundCloud:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('soundcloud'); ?>"  value="<?php echo $soundcloud; ?>" class="widefat" id="<?php echo $this->get_field_id('soundcloud'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('spotify'); ?>"><?php _e('Spotify:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('spotify'); ?>"  value="<?php echo $spotify; ?>" class="widefat" id="<?php echo $this->get_field_id('spotify'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('twitter'); ?>"  value="<?php echo $twitter; ?>" class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('vimeo'); ?>"  value="<?php echo $vimeo; ?>" class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('virb'); ?>"><?php _e('Virb:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('virb'); ?>"  value="<?php echo $virb; ?>" class="widefat" id="<?php echo $this->get_field_id('virb'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('wordpress'); ?>"><?php _e('WordPress:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('wordpress'); ?>"  value="<?php echo $wordpress; ?>" class="widefat" id="<?php echo $this->get_field_id('wordpress'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('yahoo'); ?>"><?php _e('Yahoo:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('yahoo'); ?>"  value="<?php echo $yahoo; ?>" class="widefat" id="<?php echo $this->get_field_id('yahoo'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('yelp'); ?>"><?php _e('Yelp:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('yelp'); ?>"  value="<?php echo $yelp; ?>" class="widefat" id="<?php echo $this->get_field_id('yelp'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('YouTube:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('youtube'); ?>"  value="<?php echo $youtube; ?>" class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id('links'); ?>"><?php _e('Links:', 'contempo'); ?></label> 
			<select id="<?php echo $this->get_field_id('links'); ?>" name="<?php echo $this->get_field_name('links'); ?>">
				<option value="_self"<?php if($links == '_self') echo ' selected="selected"'; ?>>Same Window</option>
				<option value="_blank"<?php if($links == '_blank') echo ' selected="selected"'; ?>>New Window</option>
			</select>
		</p>
        <p>
			<label for="<?php echo $this->get_field_id('size'); ?>"><?php _e('Size:', 'contempo'); ?></label> 
			<select id="<?php echo $this->get_field_id('size'); ?>" name="<?php echo $this->get_field_name('size'); ?>">
				<option value="16px"<?php if($size == '16px') echo ' selected="selected"'; ?>>16px</option>
				<option value="24px"<?php if($size == '24px') echo ' selected="selected"'; ?>>24px</option>
                <option value="32px"<?php if($size == '32px') echo ' selected="selected"'; ?>>32px</option>
			</select>
		</p>
		<?php
	}
} 

add_action( 'widgets_init', create_function( '', 'register_widget("ct_Social");' ) );

?>