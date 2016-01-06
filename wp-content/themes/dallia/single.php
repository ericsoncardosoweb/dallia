<?php 
global $smof_data, $post;

get_header( $smof_data['ts_header_layout'] );

$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */

$show_blog_thumbnail = $smof_data['ts_blog_details_thumbnail'];

$extra_class = "";

$page_column_class = ts_page_layout_columns_class($smof_data['ts_blog_details_layout']);

ts_breadcrumbs_title(true, $smof_data['ts_blog_details_title'], get_the_title());
if(isset($smof_data['ts_breadcrumb_layout']) ){
	$extra_class = 'show_breadcrumb_'.$smof_data['ts_breadcrumb_layout'];
}
?>
<div id="content" class="page-container container-post <?php echo esc_attr($extra_class) ?>">
	<!-- Left Sidebar -->
	<?php if( $page_column_class['left_sidebar'] ): ?>
		<aside id="left-sidebar" class="ts-sidebar <?php echo esc_attr($page_column_class['left_sidebar_class']); ?>">
		<?php if( is_active_sidebar($smof_data['ts_blog_details_left_sidebar']) ): ?>
			<?php dynamic_sidebar( $smof_data['ts_blog_details_left_sidebar'] ); ?>
		<?php endif; ?>
		</aside>
	<?php endif; ?>	
	<!-- end left sidebar -->
	
	<!-- main-content -->
	<div id="main-content" class="<?php echo esc_attr($page_column_class['main_class']); ?>">
		<article class="single single-post">
			<div class="entry-format">
				<!-- Blog Thumbnail -->
				<?php if( $show_blog_thumbnail ): ?>
					<?php if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){ ?>
						<a class="<?php echo ($post_format == 'gallery')?'gallery loading':'' ?>" href="javascript: void(0)">
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
							
								if( ($post_format === false || $post_format == 'standard') && !is_singular('ts_feature') ){
									if( has_post_thumbnail() ){
										the_post_thumbnail('ts_blog_thumb', array('class' => 'thumbnail-blog'));
									}
									else{ /* Fix date position */
										$show_blog_thumbnail = 0;
									}
								}
								
								?>
							</figure>
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
				<?php endif; ?>
				<!-- Blog Date -->
				<?php if( $smof_data['ts_blog_details_date'] && $show_blog_thumbnail && ( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ) ): ?>
				<div class="date-time">
					<span><?php echo get_the_time('d'); ?></span>
					<span><?php echo get_the_time('M'); ?></span>
				</div>
				<?php endif; ?>
			</div>
			<div class="entry-content">	
				<!-- Blog Date -->
				<?php if( $smof_data['ts_blog_details_date'] && ( !$show_blog_thumbnail || ( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ) ) ): ?>
				<div class="entry-meta">
					<span class="date-time date-time-meta">
						<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
					</span>
				</div>
				<?php endif; ?>
				
				<!-- Blog Content -->
				<?php if( $smof_data['ts_blog_details_content'] ): ?>
				<div class="content-wrapper">
					<div class="full-content"><?php the_content(); ?></div>
					<?php wp_link_pages(); ?>
				</div>
				<?php endif; ?>
				<div class="meta-bottom-wrapper">
					<?php if( $smof_data['ts_blog_details_categories'] != 0 || $smof_data['ts_blog_details_sharing'] != 0 ): ?>
					<div class="meta-bottom-1 <?php echo ($smof_data['ts_blog_details_categories'])?'has-categories':'' ?> <?php echo ($smof_data['ts_blog_details_sharing'])?'has-social':'' ?>">
						<!-- Blog Categories -->
						<?php
						$categories_list = get_the_category_list(', ');
						if ( $categories_list && $smof_data['ts_blog_details_categories'] ):
						?>
						<div class="cats-link">
							<span class="cat-title"><?php esc_html_e('Categories: ', 'gon'); ?></span>
							<span class="cat-links"><?php echo trim($categories_list); ?></span>
						</div>
						<?php endif; ?>
						
						<!-- Blog Sharing -->
						<?php if( $smof_data['ts_blog_details_sharing'] ): ?>
						<div class="social-sharing">
							<?php ts_template_social_sharing(); ?>
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
					<?php 
					$tags_list = get_the_tag_list('', ' '); 
					if ( $tags_list && $smof_data['ts_blog_details_tags'] ):
					?>
					<div class="meta-bottom-2">
						<!-- Blog Tags -->
						<div class="tags-link">
							<span><?php esc_html_e('Tags: ','gon');?></span>
							<span class="tag-links">
								<?php echo trim($tags_list); ?>
							</span>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<!-- Blog Author -->
			<?php if( $smof_data['ts_blog_details_author_box'] == 1 && get_the_author_meta('ID') ) : ?>
			<?php $author_box_bg = get_the_author_meta( 'author_box_bg' ); ?>
			<div class="entry-author" <?php echo !empty($author_box_bg)?'style="background-image: url(' . esc_url($author_box_bg) . ')"':'' ?>>
				<div class="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), 100, 'mystery' ); ?>
				</div>	
				<div class="author-info">		
					<span class="author"><?php the_author_posts_link();?></span>
					<span class="role"><?php echo ts_get_user_role( get_the_author_meta('ID') ); ?></span>
					<p><?php the_author_meta( 'description' ); ?></p>
				</div>
			</div>
			<?php endif; ?>	
			
			<!-- Next Prev Blog -->
			<div class="single-navigation">
			<?php
				previous_post_link('%link', esc_html__('Prev post', 'gon'));
				next_post_link('%link', esc_html__('Next post', 'gon'));
			?>
			</div>
			
			<!-- Related Posts-->
			<?php 
			if( !is_singular('ts_feature') && $smof_data['ts_blog_details_related_posts'] ){
				get_template_part('templates/related-posts');
			}
			?>
			
			<!-- Comment Form -->
			<?php 
			if( $smof_data['ts_blog_details_comment_form'] && ( comments_open() || get_comments_number() ) ){
				comments_template( '', true );
			}
			?>
		</article>
	</div><!-- end main-content -->
	
	<!-- Right Sidebar -->
	<?php if( $page_column_class['right_sidebar'] ): ?>
		<aside id="right-sidebar" class="ts-sidebar <?php echo esc_attr($page_column_class['right_sidebar_class']); ?>">
		<?php if( is_active_sidebar($smof_data['ts_blog_details_right_sidebar']) ): ?>
			<?php dynamic_sidebar( $smof_data['ts_blog_details_right_sidebar'] ); ?>
		<?php endif; ?>
		</aside>
	<?php endif; ?>	
	<!-- end right sidebar -->	
</div>
<?php get_footer(); ?>