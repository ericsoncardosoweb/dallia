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
				'id'		=> 'post_layout_heading'
				,'label'	=> 'Post Layout'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'post_layout'
				,'label'	=> 'Post Layout'
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
				'id'		=> 'post_left_sidebar'
				,'label'	=> 'Left Sidebar'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'post_right_sidebar'
				,'label'	=> 'Right Sidebar'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> 'Breadcrumb Background Image'
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'post_audio_heading'
				,'label'	=> 'Post Audio'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);	
			
$options[] = array(
				'id'		=> 'audio_url'
				,'label'	=> 'Audio URL'
				,'desc'		=> 'Enter MP3, OGG, WAV file URL or SoundCloud URL'
				,'type'		=> 'text'
			);

$options[] = array(
				'id'		=> 'post_video_heading'
				,'label'	=> 'Post Video'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);			
			
$options[] = array(
				'id'		=> 'video_url'
				,'label'	=> 'Video URL'
				,'desc'		=> 'Enter Youtube or Vimeo video URL'
				,'type'		=> 'text'
			);			
?>