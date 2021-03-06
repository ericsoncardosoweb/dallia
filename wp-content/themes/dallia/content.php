<?php 
global $post, $wp_query, $smof_data;
$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */
$post_class = 'post-item hentry ';
$show_blog_thumbnail = $smof_data['ts_blog_thumbnail'];
?>
<article <?php post_class($post_class) ?>>

	<?php if( $post_format != 'quote' ): ?>
	
		<header class="entry-format">
			<?php 
			
			if( $show_blog_thumbnail ){
			
				if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){
				?>
					<a class="thumbnail <?php echo esc_attr($post_format); ?> <?php echo ($post_format == 'gallery')?'loading':''; ?>" href="<?php the_permalink() ?>">
						<figure>
						<?php 
							if( $post_format == 'gallery' ){
								$gallery = get_post_meta($post->ID, 'ts_gallery', true);
								$gallery_ids = explode(',', $gallery);
								if( is_array($gallery_ids) && has_post_thumbnail() ){
									array_unshift($gallery_ids, get_post_thumbnail_id());
								}
								foreach( $gallery_ids as $gallery_id ){
									echo wp_get_attachment_image( $gallery_id, 'ts_blog_thumb', 0, array('class' => 'thumbnail-blog') );
								}
								
								if( !has_post_thumbnail() && empty($gallery) ){ /* Fix date position */
									$show_blog_thumbnail = 0;
								}
							}
						
							if( $post_format === false || $post_format == 'standard' ){
								if( has_post_thumbnail() ){
									the_post_thumbnail('ts_blog_thumb', array('class' => 'thumbnail-blog'));
								}
								else{ /* Fix date position */
									$show_blog_thumbnail = 0;
								}
							}
						?>
						</figure>
						<div class="effect-thumbnail"></div>
					</a>
				<?php
				}
				
				if( $post_format == 'video' ){
					$video_url = get_post_meta($post->ID, 'ts_video_url', true);
					if( $video_url != '' ){
						echo do_shortcode('[ts_video src="'.esc_url($video_url).'"]');
					}
				}
				
				if( $post_format == 'audio' ){
					$audio_url = get_post_meta($post->ID, 'ts_audio_url', true);
					if( strlen($audio_url) > 4 ){
						$file_format = substr($audio_url, -3, 3);
						if( in_array($file_format, array('mp3', 'ogg', 'wav')) ){
							echo do_shortcode('[audio '.$file_format.'="'.$audio_url.'"]');
						}
						else{
							echo do_shortcode('[ts_soundcloud url="'.$audio_url.'" width="100%" height="166"]');
						}
					}
				}
									
			}
			?>
			<!-- Blog Date -->
			<?php if( $smof_data['ts_blog_date'] && $show_blog_thumbnail && ( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ) ): ?>
			<div class="date-time">
				<span><?php echo get_the_time('d'); ?></span>
				<span><?php echo get_the_time('M'); ?></span>
			</div>
			<?php endif; ?>
		</header>
		<div class="entry-content">
			
			<div class="entry-info">
				<!-- Blog Title -->
				<?php if( $smof_data['ts_blog_title'] ): ?>
				<h3 class="heading-title entry-title">
					<a class="post-title heading-title" href="<?php the_permalink() ; ?>"><?php the_title(); ?></a>
				</h3>
				<?php endif; ?>
				
				<!-- Blog Date Time -->
				<?php if( $smof_data['ts_blog_date'] && ( !$show_blog_thumbnail || ( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ) ) ) : ?>
				<div class="date-time date-time-meta">
					<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
				</div>
				<?php endif; ?>
				
				<div class="entry-summary">
					<!-- Blog Excerpt -->
					<?php if( $smof_data['ts_blog_excerpt'] ): ?>
					<div class="short-content">
						<?php 
						$max_words = (int)$smof_data['ts_blog_excerpt_max_words']?(int)$smof_data['ts_blog_excerpt_max_words']:125;
						$strip_tags = $smof_data['ts_blog_excerpt_strip_tags']?true:false;
						ts_the_excerpt_max_words($max_words, $post, $strip_tags, '', true); 
						?>
					</div>
					<?php endif; ?>
					
					<!-- Blog Read More Button -->
					<?php if( $smof_data['ts_blog_read_more'] ): ?>
					<a class="button-readmore" href="<?php the_permalink() ; ?>"><?php esc_html_e('Read More', 'gon'); ?></a>
					<?php endif; ?>
					
					<!-- Blog Comment -->
					<?php if( $smof_data['ts_blog_comment'] ): ?>
					<span class="comment-count">
						<i class="fa fa-comments-o"></i>
						<span class="number">
							<?php 
							$comments_count = wp_count_comments($post->ID); 
							$comment_number = $comments_count->approved;
							if( $comment_number > 0 ){
								echo zeroise($comment_number, 2); 
							}else{
								echo esc_html($comment_number); 
							} 
							?>
						</span>
					</span>
					<?php endif; ?>
				</div>
			</div>
			
			<?php 
				$categories_list = get_the_category_list(', ');
				if ( ($categories_list && $smof_data['ts_blog_categories']) || $smof_data['ts_blog_author'] ): 
			?>
			<div class="entry-bottom">
				<!-- Blog Categories -->
				<?php if ( $categories_list && $smof_data['ts_blog_categories'] ): ?>
				<div class="cats-link">
					<span><?php esc_html_e('Categories: ', 'gon'); ?></span>
					<span class="cat-links"><?php echo trim($categories_list); ?></span>
				</div>
				<?php endif; ?>
				
				<!-- Blog Author -->
				<?php if( $smof_data['ts_blog_author'] ): ?>
				<span class="vcard author"><?php esc_html_e('Post by ', 'gon'); ?><?php the_author_posts_link(); ?></span>
				<?php endif; ?>			
			</div>
			<?php endif; ?>
			
		</div>
		
	<?php else: /* Post format is quote */ ?>
	
		<blockquote class="blockquote-bg">
			<?php 
			$quote_content = get_the_excerpt();
			if( !$quote_content ){
				$quote_content = get_the_content();
			}
			echo do_shortcode($quote_content);
			?>
		</blockquote>
		
		<div class="blockquote-meta">
			<!-- Blog Date -->
			<?php if( $smof_data['ts_blog_date'] ): ?>
			<span class="date-time">
				<i class="fa fa-calendar"></i>
				<?php echo get_the_time( get_option('date_format')); ?>
			</span>
			<?php endif; ?>
			
			<!-- Blog Author -->
			<?php if( $smof_data['ts_blog_author'] ): ?>
			<span class="vcard author"><?php the_author_posts_link(); ?></span>
			<?php endif; ?>	
		</div>
		
	<?php endif; ?>
	
</article>