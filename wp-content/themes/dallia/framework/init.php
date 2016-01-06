<?php 
/*** Include files in includes folder ***/
$file_names = array('mobile_detect', 'class-tgm-plugin-activation');
foreach( $file_names as $file ){
	$file_path = get_template_directory().'/framework/includes/'.$file.'.php';
	if( file_exists($file_path) ){
		require_once $file_path;
	}
}

/*** Include files in framework folder ***/
$file_names = array('theme_functions', 'woo_term', 'woo_filter_by_color', 'woo_functions', 'woo_hooks', 'quickshop', 'theme_control', 'theme_filter'
					, 'mega_menu', 'register_sidebar', 'grid_list_toggle');
foreach( $file_names as $file ){
	$file_path = get_template_directory().'/framework/'.$file.'.php';
	if( file_exists($file_path) ){
		require_once $file_path;
	}
}

/*** Require Metaboxes ***/
require_once get_template_directory().'/framework/metaboxes/metaboxes.php';

/*** Register Widgets ***/

/** Allow to add shortcodes in widget text **/
add_filter('widget_text', 'do_shortcode');

/** Include widget files **/
$file_names = array('feedburner_subscription', 'product_filter_by_color', 'product_filter_by_availability', 'social_icons', 'products'
					, 'blogs', 'blogs_tabs', 'recent_comments', 'facebook_page', 'flickr', 'instagram', 'product_categories', 'menus');
foreach( $file_names as $file ){
	$file_path = get_template_directory().'/framework/widgets/'.$file.'.php';
	if( file_exists($file_path) ){
		include_once $file_path;
	}
}

/*** Visual Composer plugin ***/
if( class_exists('Vc_Manager') && class_exists('WPBakeryVisualComposerAbstract') ){
	$file_names = array('vc_map', 'update_param');
	foreach( $file_names as $file ){
		$file_path = get_template_directory().'/framework/vc_extension/'.$file.'.php';
		if( file_exists($file_path) ){
			require_once $file_path;
		}
	}
	
	vc_set_shortcodes_templates_dir(get_template_directory() . '/framework/vc_extension/templates');
	
	/* Disable VC Frontend Editor */
	vc_disable_frontend();
}
	
?>