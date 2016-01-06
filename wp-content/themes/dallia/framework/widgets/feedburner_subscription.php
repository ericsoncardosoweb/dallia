<?php
add_action('widgets_init', 'ts_feedburner_subscription_load_widgets');

function ts_feedburner_subscription_load_widgets()
{
	register_widget('TS_Feedburner_Subscription_Widget');
}

if( !class_exists('TS_Feedburner_Subscription_Widget') ){
	class TS_Feedburner_Subscription_Widget extends WP_Widget {

		function TS_Feedburner_Subscription_Widget() {
			$widgetOps = array('classname' => 'feedburner-subscription', 'description' => esc_html__('Display Feedburner Subscriptions Form','gon'));
			$controlOps = array('width' => 400, 'height' => 550);
			parent::__construct('ts_feedburner_subscription', esc_html__('TS - Feedburner Subscription','gon'), $widgetOps, $controlOps);
		}

		function widget( $args, $instance ) {
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);
			
			$intro_text = $instance['intro_text'];
			
			$intro_text_2 = isset($instance['intro_text_2'])?$instance['intro_text_2']:'';
			
			$placeholder_text = isset($instance['placeholder_text']) ? $instance['placeholder_text'] : 'Email address';
			
			$button_text = $instance['button_text'];
			
			$feedburner_id = $instance['feedburner_id'];
			
			echo $before_widget;
			
			if( $title ){
				echo $before_title . $title . $after_title;
			}
			?>
			
			<div class="subscribe-widget">
				<?php if( $intro_text != '' || $intro_text_2 != '' ): ?>
				<div class="newsletter">
					<?php if( $intro_text != '' ): ?>
						<p><?php echo esc_html($intro_text); ?></p>
					<?php endif; ?>
					<?php if( $intro_text_2 != '' ): ?>
						<p><?php echo esc_html($intro_text_2); ?></p>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo esc_attr($feedburner_id); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
					<div class="subscribe-email">
						<input type="text" name="email" class="subscribe-input" value="" placeholder="<?php echo esc_attr($placeholder_text); ?>" />
						<input type="hidden" value="<?php echo esc_attr($feedburner_id); ?>" name="uri"/>
						<input type="hidden" value="<?php echo get_bloginfo( 'name' );?>" name="title"/>
						<input type="hidden" name="loc" value="en_US"/>
						<button class="button button-secondary transparent" type="submit" title="Subscribe"><?php echo esc_html($button_text); ?></button>
						<p style="display:none;">Delivered by <a href="<?php echo "http://www.feedburner.com"; ?>" target="_blank">FeedBurner</a></p>
					</div>
				</form>
			</div>

			<?php
			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;		
			$instance['title'] = $new_instance['title'];
			$instance['intro_text'] =  $new_instance['intro_text'];
			$instance['intro_text_2'] =  $new_instance['intro_text_2'];
			$instance['button_text'] =  $new_instance['button_text'];
			$instance['placeholder_text'] =  $new_instance['placeholder_text'];
			$instance['feedburner_id'] =  $new_instance['feedburner_id'];	
			return $instance;
		}

		function form( $instance ) {
			
			$defaults = array(
				'title' 			=> 'Sign up for Our Newsletter' 
				,'intro_text' 		=> 'Enjoy our newsletter to stay updated with the latest news and special sales'
				,'intro_text_2' 	=> 'Let\'s your email address here!'				
				,'button_text' 		=> 'Subscribe'
				,'placeholder_text' => 'Email address'
				,'feedburner_id' 	=> ''
			);
		
			$instance = wp_parse_args( (array) $instance, $defaults );
			$title = esc_attr($instance['title']);
			$intro_text = esc_attr($instance['intro_text']);
			$intro_text_2 = esc_attr($instance['intro_text_2']);
			$button_text = esc_attr($instance['button_text']);
			$placeholder_text = esc_attr($instance['placeholder_text']);
			$feedburner_id = format_to_edit($instance['feedburner_id']);		
		?>
			<p>
				<label for="<?php echo $this->get_field_id('feedburner_id'); ?>"><?php esc_html_e('Enter your Feedburner ID', 'gon'); ?> </label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('feedburner_id'); ?>" name="<?php echo $this->get_field_name('feedburner_id'); ?>" value="<?php echo esc_attr($feedburner_id); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Enter your title', 'gon'); ?> </label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('intro_text'); ?>"><?php esc_html_e('Enter your Intro Text Line 1', 'gon'); ?> </label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('intro_text'); ?>" name="<?php echo $this->get_field_name('intro_text'); ?>" value="<?php echo esc_attr($intro_text); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('intro_text_2'); ?>"><?php esc_html_e('Enter your Intro Text Line 2', 'gon'); ?> </label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('intro_text_2'); ?>" name="<?php echo $this->get_field_name('intro_text_2'); ?>" value="<?php echo esc_attr($intro_text_2); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('button_text'); ?>"><?php esc_html_e('Enter your button text', 'gon'); ?> </label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('button_text'); ?>" name="<?php echo $this->get_field_name('button_text'); ?>" value="<?php echo esc_attr($button_text); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('placeholder_text'); ?>"><?php esc_html_e('Placeholder text', 'gon'); ?> </label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('placeholder_text'); ?>" name="<?php echo $this->get_field_name('placeholder_text'); ?>" value="<?php echo esc_attr($placeholder_text); ?>" />
			</p>		
			<?php 
		}
	}
}
