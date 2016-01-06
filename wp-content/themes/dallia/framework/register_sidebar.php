<?php 
global $ts_default_sidebars, $ts_default_widgetareas;

$ts_default_sidebars = array(
						array(
							'name' => esc_html__( 'Home Sidebar', 'gon' ),
							'id' => 'home-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Blog Sidebar', 'gon' ),
							'id' => 'blog-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Blog Detail Sidebar', 'gon' ),
							'id' => 'blog-detail-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Product Category Sidebar', 'gon' ),
							'id' => 'product-category-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Product Category Top Content', 'gon' ),
							'id' => 'product-category-top-content',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Product Detail Sidebar', 'gon' ),
							'id' => 'product-detail-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						)
					);

$ts_default_widgetareas = array(
					array(
							'name' => esc_html__( 'Footer Widget Area', 'gon' ),
							'id' => 'footer-widget-area',
							'description' => '',
							'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</div>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
					)
					,array(
							'name' => esc_html__( 'Footer Copyright Widget Area', 'gon' ),
							'id' => 'footer-copyright-widget-area',
							'description' => '',
							'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</div>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
					)
				);
				
$custom_sidebars = ts_get_custom_sidebars();
if( is_array($custom_sidebars) && !empty($custom_sidebars) ){
	foreach( $custom_sidebars as $name ){
		$ts_default_sidebars[] = array(
							'name' => ''.$name.'',
							'id' => sanitize_title($name),
							'description' => '',
							'class'			=> 'ts-custom-sidebar',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title heading-title">',
							'after_title' => '</h3></div>',
						);
	}
}
				
function ts_register_widget_area(){
	global $ts_default_sidebars, $ts_default_widgetareas;
	$default_sidebar = array_merge($ts_default_sidebars, $ts_default_widgetareas);
	foreach( $default_sidebar as $sidebar ){
		register_sidebar($sidebar);
	}
}
add_action( 'widgets_init', 'ts_register_widget_area' );
?>