<?php
add_action('widgets_init', 'ts_social_icons_load_widgets');

function ts_social_icons_load_widgets()
{
	register_widget('TS_Social_Icons_Widget');
}

if( !class_exists('TS_Social_Icons_Widget') ){
	class TS_Social_Icons_Widget extends WP_Widget {

		function TS_Social_Icons_Widget() {
			$widgetOps = array('classname' => 'ts-social-icons', 'description' => esc_html__('Display Your Social Icons','gon'));
			parent::__construct('ts_social_icons', esc_html__('TS - Social Icons','gon'), $widgetOps);
		}

		function widget( $args, $instance ) {
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);
			
			$desc = esc_html( $instance['desc'] );
			
			$facebook_id 		= esc_attr($instance['facebook_id']);
			$twitter_id 		= esc_attr($instance['twitter_id']);
			$google_plus_id 	= esc_attr($instance['google_plus_id']);
			$flickr_id 			= esc_attr($instance['flickr_id']);
			$vimeo_id 			= esc_attr($instance['vimeo_id']);
			$feedburner_id 		= esc_attr($instance['feedburner_id']);
			$custom_link 		= esc_attr($instance['custom_link']);
			$custom_text 		= esc_html($instance['custom_text']);
			$custom_font 		= esc_attr($instance['custom_font']);
			$show_tooltip 		= $instance['show_tooltip'];
			$social_style 		= $instance['social_style'];
			
			$extra_class = ($show_tooltip)?'ts-tooltip social-tooltip':'';
			
			echo $before_widget;
			
			if( empty($title) ){
				$before_title = '<h3 class="widget-title heading-title hidden">';
				$after_title = '</h3>';
				$title = 'Social Icons';
			}
			echo $before_title . $title . $after_title;
			?>
			
			<div class="social-icons <?php echo esc_attr($social_style) ?>">
				<?php if( strlen(trim($desc)) > 0 ): ?>
				<div class="social-desc">
					<?php echo esc_html($desc); ?>
				</div>
				<?php endif; ?>
				<ul class="list-icons">
					<?php if( $facebook_id !== "" ): ?>
						<li><a class="facebook" href="http://www.facebook.com/<?php echo esc_attr($facebook_id); ?>" target="_blank" title="<?php echo (!$show_tooltip)?esc_html__('Become our fan', 'gon'):''; ?>" ><i class="fa fa-facebook"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php esc_html_e('Facebook', 'gon'); ?></span></a></li>				
					<?php endif; ?>
					<?php if( $twitter_id !== "" ): ?>
						<li><a class="twitter" href="http://twitter.com/<?php echo esc_attr($twitter_id); ?>" target="_blank" title="<?php echo (!$show_tooltip)?esc_html__('Follow us', 'gon'):''; ?>" ><i class="fa fa-twitter"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php esc_html_e('Twitter', 'gon'); ?></span></a></li>
					<?php endif; ?>
					<?php if( $google_plus_id !== "" ): ?>
						<li><a class="google-plus" href="https://plus.google.com/<?php echo esc_attr($google_plus_id); ?>" target="_blank" title="<?php echo (!$show_tooltip)?esc_html__('Join our circle', 'gon'):''; ?>"  ><i class="fa fa-google-plus"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php esc_html_e('Google Plus', 'gon'); ?></span></a></li>
					<?php endif; ?>
					<?php if( $flickr_id !== "" ): ?>
						<li><a class="flickr" href="http://www.flickr.com/photos/<?php echo esc_attr($flickr_id); ?>" target="_blank" title="<?php echo (!$show_tooltip)?esc_html__('See Us', 'gon'):''; ?>" ><i class="fa fa-flickr"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php esc_html_e('Flickr', 'gon'); ?></span></a></li>
					<?php endif; ?>
					<?php if( $vimeo_id !== "" ): ?>
						<li><a class="vimeo" href="http://vimeo.com/<?php echo esc_attr($vimeo_id); ?>" target="_blank" title="<?php echo (!$show_tooltip)?esc_html__('Watch Us', 'gon'):''; ?>" ><i class="fa fa-vimeo-square"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php esc_html_e('Vimeo', 'gon'); ?></span></a></li>
					<?php endif; ?>
					<?php if( $feedburner_id !== "" ): ?>
						<li><a class="feedburner" href="http://feeds.feedburner.com/<?php echo esc_attr($feedburner_id); ?>" target="_blank" title="<?php echo (!$show_tooltip)?esc_html__('Get updates', 'gon'):''; ?>" ><i class="fa fa-rss"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php esc_html_e('RSS', 'gon'); ?></span></a></li>
					<?php endif; ?>
					<?php if( $custom_link !== "" ): ?>
						<li><a class="custom-icon" href="<?php echo esc_url($custom_link); ?>" target="_blank" title="<?php echo (!$show_tooltip)?$custom_text:''; ?>" ><i class="fa <?php echo esc_attr($custom_font); ?>"></i><span class="<?php echo esc_attr($extra_class); ?>"><?php echo esc_html($custom_text); ?></span></a></li>
					<?php endif; ?>
				</ul>
			</div>

			<?php
			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;		
			$instance['title'] 			= $new_instance['title'];
			$instance['desc'] 			=  $new_instance['desc'];
			$instance['facebook_id'] 	=  $new_instance['facebook_id'];
			$instance['twitter_id'] 	=  $new_instance['twitter_id'];		
			$instance['google_plus_id'] =  $new_instance['google_plus_id'];		
			$instance['flickr_id'] 		=  $new_instance['flickr_id'];		
			$instance['vimeo_id'] 		=  $new_instance['vimeo_id'];		
			$instance['feedburner_id'] 	=  $new_instance['feedburner_id'];		
			$instance['custom_link'] 	=  $new_instance['custom_link'];		
			$instance['custom_text'] 	=  $new_instance['custom_text'];		
			$instance['custom_font'] 	=  $new_instance['custom_font'];		
			$instance['show_tooltip'] 	=  $new_instance['show_tooltip'];
			$instance['social_style']	=  $new_instance['social_style'];
			return $instance;
		}

		function form( $instance ) {
			
			$defaults = array(
				'title'			=> ''
				,'desc'				=> ''
				,'facebook_id' 		=> ''
				,'twitter_id' 		=> ''
				,'google_plus_id' 	=> ''
				,'flickr_id' 		=> ''
				,'vimeo_id'			=>'' 
				,'feedburner_id' 	=> ''
				,'custom_link' 		=> ''
				,'custom_text' 		=> ''
				,'custom_font' 		=> ''
				,'show_tooltip'		=> 1 
				,'social_style'		=> 'style-1' 
			);
		
			$instance = wp_parse_args( (array) $instance, $defaults );	
		?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Enter your title', 'gon'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('social_style'); ?>"><?php esc_html_e('Social style', 'gon'); ?></label>
				<select class="widefat" id="<?php echo $this->get_field_id('social_style'); ?>" name="<?php echo $this->get_field_name('social_style'); ?>">
					<option value="style-1" <?php selected($instance['social_style'], 'style-1'); ?>><?php esc_html_e('Style 1', 'gon'); ?></option>
					<option value="style-2" <?php selected($instance['social_style'], 'style-2'); ?>><?php esc_html_e('Style 2', 'gon'); ?></option>
					<option value="style-3" <?php selected($instance['social_style'], 'style-3'); ?>><?php esc_html_e('Style 3', 'gon'); ?></option>
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('desc'); ?>"><?php esc_html_e('Enter description about your social icons', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('desc'); ?>" name="<?php echo $this->get_field_name('desc'); ?>" value="<?php echo esc_attr($instance['desc']); ?>" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id('facebook_id'); ?>"><?php esc_html_e('Facebook ID', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('facebook_id'); ?>" name="<?php echo $this->get_field_name('facebook_id'); ?>" value="<?php echo esc_attr($instance['facebook_id']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('twitter_id'); ?>"><?php esc_html_e('Twitter ID', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo esc_attr($instance['twitter_id']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('google_plus_id'); ?>"><?php esc_html_e('Google Plus ID', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('google_plus_id'); ?>" name="<?php echo $this->get_field_name('google_plus_id'); ?>" value="<?php echo esc_attr($instance['google_plus_id']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('flickr_id'); ?>"><?php esc_html_e('Flickr ID', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('flickr_id'); ?>" name="<?php echo $this->get_field_name('flickr_id'); ?>" value="<?php echo esc_attr($instance['flickr_id']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('vimeo_id'); ?>"><?php esc_html_e('Vimeo ID', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('vimeo_id'); ?>" name="<?php echo $this->get_field_name('vimeo_id'); ?>" value="<?php echo esc_attr($instance['vimeo_id']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('feedburner_id'); ?>"><?php esc_html_e('FeedBurner ID', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('feedburner_id'); ?>" name="<?php echo $this->get_field_name('feedburner_id'); ?>" value="<?php echo esc_attr($instance['feedburner_id']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('custom_link'); ?>"><?php esc_html_e('Custom Link', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('custom_link'); ?>" name="<?php echo $this->get_field_name('custom_link'); ?>" value="<?php echo esc_attr($instance['custom_link']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('custom_text'); ?>"><?php esc_html_e('Custom Text - Show on tooltip', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('custom_text'); ?>" name="<?php echo $this->get_field_name('custom_text'); ?>" value="<?php echo esc_attr($instance['custom_text']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('custom_font'); ?>"><?php esc_html_e('Custom Font - Use FontAwesome class', 'gon'); ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('custom_font'); ?>" name="<?php echo $this->get_field_name('custom_font'); ?>" value="<?php echo esc_attr($instance['custom_font']); ?>" />
			</p>
			<p>
				<input type="checkbox" id="<?php echo $this->get_field_id('show_tooltip'); ?>" name="<?php echo $this->get_field_name('show_tooltip'); ?>" value="1" <?php checked($instance['show_tooltip'], 1); ?> />
				<label for="<?php echo $this->get_field_id('show_tooltip'); ?>"><?php esc_html_e('Show Tooltip', 'gon'); ?></label>
			</p>
			<?php 
		}
	}
}

