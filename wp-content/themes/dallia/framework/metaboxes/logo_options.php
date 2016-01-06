<?php 
$options = array();

$options[] = array(
				'id'		=> 'logo_url'
				,'label'	=> 'Logo URL'
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'logo_target'
				,'label'	=> 'Target'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'_self'	=> 'Same Window'
							,'_blank'	=> 'New Tab'
						)
			);
?>