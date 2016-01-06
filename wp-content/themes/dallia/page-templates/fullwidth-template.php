<?php 
/**
 *	Template Name: Fullwidth Template
 */
global $ts_page_datas, $smof_data;
get_header( $smof_data['ts_header_layout'] );

$extra_class = "";

$show_breadcrumb = ( !is_home() && !is_front_page() && isset($ts_page_datas['ts_show_breadcrumb']) && absint($ts_page_datas['ts_show_breadcrumb']) == 1 );
$show_page_title = ( !is_home() && !is_front_page() && absint($ts_page_datas['ts_show_page_title']) == 1 );

if( ($show_breadcrumb || $show_page_title) && isset($smof_data['ts_breadcrumb_layout']) ){
	$extra_class = 'show_breadcrumb_'.$smof_data['ts_breadcrumb_layout'];
}


ts_breadcrumbs_title($show_breadcrumb, $show_page_title, get_the_title());

?>
<div class="page-template fullwidth-template <?php echo esc_attr($extra_class) ?>">
	<!-- Page slider -->
	<?php if( $ts_page_datas['ts_page_slider'] && $ts_page_datas['ts_page_slider_position'] == 'before_main_content' ): ?>
	<div class="top-slideshow">
		<div class="top-slideshow-wrapper">
			<?php ts_show_page_slider(); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="page-fullwidth-template">
		
		<!-- Main Content -->
		<div id="main-content">	
			<div id="primary" class="site-content">
			<?php 
				if( ts_has_woocommerce() ){
					wc_print_notices();
				}
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php 
						if( have_posts() ) the_post();
						the_content();
						wp_link_pages();
					?>
				</article>
			</div>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>