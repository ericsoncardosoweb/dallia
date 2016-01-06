<?php
global $smof_data;

get_header( $smof_data['ts_header_layout'] );

$extra_class = "";

$page_column_class = ts_page_layout_columns_class($smof_data['ts_blog_layout']);

$show_breadcrumb = false;
$show_page_title = false;
if($show_breadcrumb && isset($smof_data['ts_breadcrumb_layout']) ){
	$extra_class = 'show_breadcrumb_'.$smof_data['ts_breadcrumb_layout'];
}
ts_breadcrumbs_title($show_breadcrumb, $show_page_title, '');
	
?>
<div class="page-template blog-template index-template page-container <?php echo esc_attr($extra_class) ?>">
	<!-- Left Sidebar -->
	<?php if( $page_column_class['left_sidebar'] ): ?>
		<aside id="left-sidebar" class="ts-sidebar <?php echo esc_attr($page_column_class['left_sidebar_class']); ?>">
		<?php if( is_active_sidebar( $smof_data['ts_blog_left_sidebar'] ) ): ?>
			<?php dynamic_sidebar( $smof_data['ts_blog_left_sidebar'] ); ?>
		<?php endif; ?>
		</aside>
	<?php endif; ?>			
	
	<div id="main-content" class="<?php echo esc_attr($page_column_class['main_class']); ?>">	
		<div id="primary" class="site-content">
			
			<?php	
				if( have_posts() ):
					echo '<div class="list-posts">';
					while( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() ); 
					endwhile;
					echo '</div>';
				else:
					echo '<div class="alert alert-error">'.esc_html__('Sorry. There are no posts to display', 'gon').'</div>';
				endif;
				
				ts_pagination();
			?>

		</div>
	</div>
	
	
	<!-- Right Sidebar -->
	<?php if( $page_column_class['right_sidebar'] ): ?>
		<aside id="right-sidebar" class="ts-sidebar <?php echo esc_attr($page_column_class['right_sidebar_class']); ?>">
		<?php if( is_active_sidebar( $smof_data['ts_blog_right_sidebar'] ) ): ?>
			<?php dynamic_sidebar( $smof_data['ts_blog_right_sidebar'] ); ?>
		<?php endif; ?>
		</aside>
	<?php endif; ?>	
		
</div>
<?php get_footer(); ?>