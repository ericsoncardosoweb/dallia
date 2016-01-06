<?php 
$options = array();
global $ts_default_sidebars;
$sidebar_options = array(
				'0'	=> 'Default'
				);
foreach( $ts_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}
			
$options[] = array(
				'id'		=> 'prod_layout'
				,'label'	=> 'Product Layout'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'			=> 'Default'
									,'0-1-0'  	=> 'Fullwidth'
									,'1-1-0' 	=> 'Left Sidebar'
									,'0-1-1' 	=> 'Right Sidebar'
									,'1-1-1' 	=> 'Left & Right Sidebar'
								)
			);
			
$options[] = array(
				'id'		=> 'prod_left_sidebar'
				,'label'	=> 'Left Sidebar'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'prod_right_sidebar'
				,'label'	=> 'Right Sidebar'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab'
				,'label'	=> 'Custom Tab'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'		=> 'Default'
									,'1'	=> 'Override'
								)
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_title'
				,'label'	=> 'Custom Tab Title'
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_content'
				,'label'	=> 'Custom Tab Content'
				,'desc'		=> ''
				,'type'		=> 'textarea'
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> 'Breadcrumb Background Image'
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
?>