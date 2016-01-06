<?php 
global $post;
$cat_list = get_the_category($post->ID);
$cat_ids = array();
foreach( $cat_list as $cat ){
	$cat_ids[] = $cat->term_id;
}
$cat_ids = implode(',', $cat_ids);

if( strlen($cat_ids) > 0 ){
	$arg = array(
		'post_type' => $post->post_type
		,'cat' => $cat_ids
		,'post__not_in' => array($post->ID)
	);
}
else{
	$arg = array(
		'post_type' => $post->post_type
		,'post__not_in' => array($post->ID)
	);
}

/* Remove the quote post format */
$arg['tax_query'] = array(
	array(
		'taxonomy'	=> 'post_format'
		,'field'	=> 'slug'
		,'terms'    => array( 'post-format-quote' )
		,'operator'	=> 'NOT IN'
	)
);

$related_posts = new WP_Query($arg);
	
if( $related_posts->have_posts() ){
	$is_slider = true;
	if( isset($related_posts->post_count) && $related_posts->post_count <= 1 ){
		$is_slider = false;
	}
?>
	<div class="related-posts related <?php echo ($is_slider)?'loading':'' ?>">
		<header class="theme-title">
			<h3 class="heading-title"><?php esc_html_e('Related Posts', 'gon'); ?></h3>
		</header>
		<div class="content-wrapper">
			<div class="blogs">
				<?php 
				while( $related_posts->have_posts() ): $related_posts->the_post();
				
				$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */
				if( $is_slider && $post_format == 'gallery' ){ /* Remove Slider in Slider */
					$post_format = false;
				}
				?>
				<article>
					<div class="thumbnail-content">
						<?php if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){ ?>
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
										echo wp_get_attachment_image( $gallery_id, 'ts_blog_shortcode_thumb', 0, array('class' => 'thumbnail-blog') );
									}
								}
							
								if( $post_format === false || $post_format == 'standard' ){
									if( has_post_thumbnail() ){
										the_post_thumbnail('ts_blog_shortcode_thumb'); 
									}
									else{
										?>
										<img title="noimage" src="<?php echo get_template_directory_uri()?>/images/no-image-blog.jpg" alt="<?php echo esc_attr(get_the_title()); ?>" />
										<?php 
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
									echo do_shortcode('[audio '.$file_format.'="'.esc_url($audio_url).'"]');
								}
								else{
									echo do_shortcode('[ts_soundcloud url="'.esc_url($audio_url).'" width="100%" height="166"]');
								}
							}
						}
						?>
						<!-- Blog Date -->
						<?php if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ): ?>
						<div class="date-time">
							<span><?php echo get_the_time('d'); ?></span>
							<span><?php echo get_the_time('M'); ?></span>
						</div>
						<?php endif; ?>
					</div>
		
					<div class="content-meta">
						<header>
							<!-- Blog Title -->
							<h3 class="heading-title blog-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<!-- Blog Date Time -->
							<?php if( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ): ?>
							<div class="date-time date-time-meta">
								<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
							</div>
							<?php endif; ?>
						</header>	
						
						<!-- Blog Excerpt -->
						<div class="excerpt"><?php ts_the_excerpt_max_words(18, '', true, '', true); ?></div>
						
						<!-- Blog Author -->
						<!--<span class="author"><?php //esc_html_e('Post by ','gon') ?><?php //the_author_posts_link(); ?></span>-->
						
						<!-- Blog Read More -->
						<a href="<?php the_permalink(); ?>" class="button-readmore"><?php esc_html_e('Read More','gon') ?></a>
						
						<!-- Blog Comment -->
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
					</div>
				</article>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	
<?php 
	wp_reset_postdata();
}
?>