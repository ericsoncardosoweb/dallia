<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> 'Gravatar Email Address'
				,'desc'		=> 'Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".'
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> 'Byline'
				,'desc'		=> 'Enter a byline for the customer giving this testimonial (for example: "CEO of Theme-Sky").'
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> 'URL'
				,'desc'		=> 'Enter a URL that applies to this customer (for example: http://theme-sky.com/).'
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> 'Rating'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> 'no rating'
						,'0'	=> '0 star'
						,'0.5'	=> '0.5 star'
						,'1'	=> '1 star'
						,'1.5'	=> '1.5 star'
						,'2'	=> '2 stars'
						,'2.5'	=> '2.5 stars'
						,'3'	=> '3 stars'
						,'3.5'	=> '3.5 stars'
						,'4'	=> '4 stars'
						,'4.5'	=> '4.5 stars'
						,'5'	=> '5 stars'
				)
			);
?>