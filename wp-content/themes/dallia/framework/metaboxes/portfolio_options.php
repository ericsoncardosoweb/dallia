<?php 
$options = array();
		
$options[] = array(
				'id'		=> 'portfolio_url'
				,'label'	=> 'Portfolio URL'
				,'desc'		=> 'Enter URL to the live version of the project'
				,'type'		=> 'text'
			);

$options[] = array(
				'id'		=> 'bg_color'
				,'label'	=> 'Background Color'
				,'desc'		=> 'Used for the shortcode. It will display this background color on hover'
				,'type'		=> 'colorpicker'
			);
			
$options[] = array(
				'id'		=> 'portfolio_custom_field'
				,'label'	=> 'Custom Field'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'		=> 'Default'
									,'1'	=> 'Override'
								)
			);
			
$options[] = array(
				'id'		=> 'portfolio_custom_field_title'
				,'label'	=> 'Custom Field Title'
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'portfolio_custom_field_content'
				,'label'	=> 'Custom Field Content'
				,'desc'		=> ''
				,'type'		=> 'textarea'
			);
?>