<?php
global $smof_data;

get_header( $smof_data['ts_header_layout'] );

$page_column_class = ts_page_layout_columns_class( $smof_data['ts_blog_layout'] );

$show_breadcrumb = true;
$show_page_title = true;
$page_title = '';
$extra_class = "";
if($show_breadcrumb && isset($smof_data['ts_breadcrumb_layout']) ){
	$extra_class = 'show_breadcrumb_'.$smof_data['ts_breadcrumb_layout'];
}
switch( true ){
	case is_day():
		$page_title = esc_html__( 'Day: ', 'gon' ) . get_the_date();
	break;
	case is_month():
		$page_title = esc_html__( 'Month: ', 'gon' ) . get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'gon' ) );
	break;
	case is_year():
		$page_title = esc_html__( 'Year: ', 'gon' ) . get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'gon' ) );
	break;
	case is_search():
		$page_title = esc_html__( 'Search Results for: ', 'gon' ) . get_search_query();
	break;
	case is_tag():
		$page_title = esc_html__( 'Tag: ', 'gon' ) . single_tag_title( '', false );
	break;
	case is_category():
		$page_title = esc_html__( 'Category: ', 'gon' ) . single_cat_title( '', false );
	break;
	case is_404():
		$page_title = esc_html__( 'OOPS! FILE NOT FOUND', 'gon' );
	break;
	default:
		$page_title = esc_html__( 'Archives', 'gon' );
	break;
}

ts_breadcrumbs_title($show_breadcrumb, $show_page_title, $page_title);
?>

<div class="page-container page-template archive-template <?php echo esc_attr($extra_class) ?>">
	
	<!-- Left Sidebar -->
	<?php if( $page_column_class['left_sidebar'] ): ?>
		<aside id="left-sidebar" class="ts-sidebar <?php echo esc_attr($page_column_class['left_sidebar_class']); ?>">
		<?php if( is_active_sidebar( $smof_data['ts_blog_left_sidebar'] ) ): ?>
			<?php dynamic_sidebar( $smof_data['ts_blog_left_sidebar'] ); ?>
		<?php endif; ?>
		</aside>
	<?php endif; ?>	
	
	<!-- Main Content -->
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

<?php
get_footer();
