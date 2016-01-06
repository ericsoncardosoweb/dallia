<?php
$options = array();
global $ts_default_sidebars;
$sidebar_options = array();
foreach( $ts_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => 'Default');
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> 'Page Layout'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> 'Layout Style'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> 'Default'
									,'boxed' 	=> 'Boxed'
									,'wide' 	=> 'Wide'
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> 'Page Layout'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => 'Fullwidth'
									,'1-1-0' => 'Left Sidebar'
									,'0-1-1' => 'Right Sidebar'
									,'1-1-1' => 'Left & Right Sidebar'
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> 'Left Sidebar'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> 'Right Sidebar'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> 'Full Page'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> 'Yes'
								,'0'	=> 'No'
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> 'Header - Breadcrumb'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> 'Header Layout'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> 'Default'
									,'v1'  		=> 'Header Layout 1'
									,'v2' 		=> 'Header Layout 2'
									,'v3' 		=> 'Header Layout 3'
									,'v4' 		=> 'Header Layout 4'
									,'v5' 		=> 'Header Layout 5'
									,'v6' 		=> 'Header Layout 6'
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> 'Transparent Header'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> 'Yes'
								,'0'	=> 'No'
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> 'Header Text Color'
				,'desc'		=> 'Only available on transparent header'
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> 'Default'
								,'light'	=> 'Light'
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> 'Primary Menu'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> 'Show Page Title'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> 'Yes'
								,'0'	=> 'No'
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> 'Show Breadcrumb'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> 'Yes'
								,'0'	=> 'No'
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> 'Breadcrumb Layout'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> 'Default'
									,'v1'  		=> 'Breadcrumb Layout 1'
									,'v2' 		=> 'Breadcrumb Layout 2'
									,'v3' 		=> 'Breadcrumb Layout 3'
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> 'Breadcrumb Background Parallax'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> 'Default'
								,'1'		=> 'Yes'
								,'0'		=> 'No'
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> 'Breadcrumb Background Image'
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> 'Logo'
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> 'Sticky Logo'
				,'desc'		=> ''
				,'type'		=> 'upload'
			);

$options[] = array(
				'id'		=> 'page_slider_heading'
				,'label'	=> 'Page Slider'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);			
			
$revolution_exists = ( class_exists('RevSlider') && class_exists('UniteFunctionsRev') );

$page_sliders = array();
$page_sliders[0] = 'No Slider';
if( $revolution_exists ){
	$page_sliders['revslider']	= 'Revolution Slider';
}

$options[] = array(
				'id'		=> 'page_slider'
				,'label'	=> 'Page Slider'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $page_sliders
			);
			
$options[] = array(
				'id'		=> 'page_slider_position'
				,'label'	=> 'Page Slider Position'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'before_header'			=> 'Before Header'
							,'before_main_content'	=> 'Before Main Content'
							)
				,'default'	=> 'before_main_content'
			);

if( $revolution_exists ){
	global $wpdb;
	$revsliders = array();
	$revsliders[0] = 'Select a slider';
	$sliders = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'revslider_sliders');
	if( $sliders ) {
		foreach( $sliders as $slider ) {
			$revsliders[$slider->id] = $slider->title;
		}
	}
				
	$options[] = array(
					'id'		=> 'rev_slider'
					,'label'	=> 'Select Revolution Slider'
					,'desc'		=> ''
					,'type'		=> 'select'
					,'options'	=> $revsliders
				);
}
?>