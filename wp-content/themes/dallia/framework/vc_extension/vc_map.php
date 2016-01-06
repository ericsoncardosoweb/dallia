<?php 
add_action( 'vc_before_init', 'ts_integrate_with_vc' );
function ts_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** TS Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Feature', 'gon' ),
		'base' 		=> 'ts_feature',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'gon' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Horizontal'	=>  'feature-horizontal'
						,'Vertical'		=>  'feature-vertical'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'gon' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'gon' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Default'		=>  'icon-default'
						,'Small'		=>  'icon-small'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'gon' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('feature-vertical'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'gon' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'gon')
				,'dependency' 	=> array('element' => 'style', 'value' => array('feature-vertical'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'gon' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'gon' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Ex: http://google.com'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'gon' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'New Window Tab'	=>  '_blank'
						,'Self'				=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'gon' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Ex: feature-icon-blue, feature-icon-orange, feature-icon-green'
			)
		)
	) );
	
	/*** TS Price Table ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Price Table', 'gon' ),
		'base' 		=> 'ts_price_table',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title Table', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Price', 'gon' )
				,'param_name' 	=> 'price'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Currency', 'gon' )
				,'param_name' 	=> 'currency'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'During Price', 'gon' )
				,'param_name' 	=> 'during_price'
				,'admin_label' 	=> true
				,'value' 		=> '/month'
				,'description' 	=> 'Ex: /day, /month, /year'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Description', 'gon' )
				,'param_name' 	=> 'description'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> 'Accept ul, li, b, strong and i tags'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button text', 'gon' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Active Table', 'gon' )
				,'param_name' 	=> 'active_table'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No'		=> 0
							,'Yes'		=> 1
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Blogs', 'gon' ),
		'base' 		=> 'ts_blogs',
		'base' 		=> 'ts_blogs',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'gon' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Grid'		=> 'grid'
							,'Slider'	=> 'slider'
							,'Masonry'	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'gon' )
			)
			,array(
				'type' 			=> 'ts_category'
				,'heading' 		=> esc_html__( 'Categories', 'gon' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'gon' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'None'		=> 'none'
						,'ID'		=> 'ID'
						,'Date'		=> 'date'
						,'Name'		=> 'name'
						,'Title'	=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'gon' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Descending'	=> 'DESC'
						,'Ascending'	=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'gon' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'gon' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'gon' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'gon' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'gon' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'gon' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'gon' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'gon' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'gon' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'gon' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'gon')
				,'group'		=> 'Slider Options'
			)
		)
	) );

	/*** TS Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Button', 'gon' ),
		'base' 		=> 'ts_button',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'gon' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'gon' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'gon' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'gon' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'gon' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'gon' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'gon' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'gon' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'gon' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'gon' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Self'				=> '_self'
						,'New Window Tab'	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'gon' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Small'		=> 'small'
						,'Medium'	=> 'medium'
						,'Large'	=> 'large'
						,'X-Large'	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'gon' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'gon' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> ''
				,'group'		=> 'Popup Options'
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'gon' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> 'Popup Options'
			)
		)
	) );
	
	/*** TS Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Single Image', 'gon' ),
		'base' 		=> 'ts_single_image',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'gon' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'gon' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'gon' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'gon')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'gon' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'gon' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Effect', 'gon' )
				,'param_name' 	=> 'style_effect'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Widespread Left Right'		=> 'eff-widespread-corner-left-right'
						,'Border Scale'				=> 'eff-border-scale'
						,'Background Fade Icon'		=> 'eff-background-fade-icon'
						,'Background From Top Icon'	=> 'eff-background-from-top-icon'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'gon' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'New Window Tab'	=> '_blank'
						,'Self'				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Heading', 'gon' ),
		'base' 		=> 'ts_heading',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'gon' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'				=> '1'
						,'2'			=> '2'
						,'3'			=> '3'
						,'4'			=> '4'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'gon' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Banner', 'gon' ),
		'base' 		=> 'ts_banner',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'gon' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'gon' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'gon')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'gon' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'gon' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position Banner Content', 'gon' )
				,'param_name' 	=> 'position_content'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Left Top'			=>  'left-top'
						,'Left Bottom	'	=>  'left-bottom'
						,'Left Center'		=>  'left-center'
						,'Right Top'		=>  'right-top'
						,'Right Bottom'		=>  'right-bottom'
						,'Right Center'		=>  'right-center'
						,'Center Top'		=>  'center-top'
						,'Center Bottom'	=>  'center-bottom'
						,'Center Center'	=>  'center-center'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'gon' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'gon' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Effect', 'gon' )
				,'param_name' 	=> 'style_effect'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Background Scale'						=>  'background-scale'
						,'Background Scale Opacity'				=>  'background-scale-opacity'
						,'Background Scale Dark'				=>	'background-scale-dark'
						,'Background Scale and Line'			=>  'background-scale-and-line'
						,'Background Scale Opacity and Line'	=>  'background-scale-opacity-line'
						,'Background Scale Dark and Line'		=>  'background-scale-dark-line'
						,'Background Opacity and Line'			=>	'background-opacity-and-line'
						,'Background Dark and Line'				=>	'background-dark-and-line'
						,'Background Opacity'					=>	'background-opacity'
						,'Background Dark'						=>	'background-dark'
						,'Line'									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'gon' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'No'			=>  0
						,'Yes'			=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'gon' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Yes'			=>  1
						,'No'			=>  0
						
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'gon' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'New Window Tab'	=>  '_blank'
						,'Self'				=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'gon' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> 'rp-rectangle-full,rp-rectangle'
			)
		)
	) );
	
	/*** TS Team Members ***/
	$team_options = array();
	if( class_exists('TS_Team_Members') || post_type_exists('ts_team') ){
		$args = array(
				'post_type'				=> 'ts_team'
				,'post_status'			=> 'publish'
				,'ignore_sticky_posts'	=> true
				,'posts_per_page'		=> -1
				);
		$teams = new WP_Query($args);
		if( $teams->have_posts() ){
			global $post;
			while( $teams->have_posts() ){
				$teams->the_post();
				$team_options[$post->post_title] = $post->ID;
			}
		}
		wp_reset_postdata();
	}
	
	vc_map( array(
		'name' 		=> esc_html__( 'TS Team Member', 'gon' ),
		'base' 		=> 'ts_team_member',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Member name', 'gon' )
				,'param_name' 	=> 'id'
				,'admin_label' 	=> true
				,'value' 		=> $team_options
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'gon' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '30'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'gon' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'New Window Tab'	=>  '_blank'
						,'Self'				=>  '_self'	
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/* TS Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'TS Testimonial', 'gon' ),
		'base' 		=> 'ts_testimonial',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'ts_category'
				,'heading' 		=> esc_html__( 'Categories', 'gon' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ts_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'gon' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Content Border', 'gon' )
				,'param_name' 	=> 'style_content'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No Border'		=> 'content-no-border'
							,'Border'		=> 'content-border'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'gon' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'gon')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'gon' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'gon' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'default'	=> 'text-default'
							,'light'	=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'gon' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'gon' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'gon')
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
		)
	) );
	
	/* TS Portfolio */
	vc_map( array(
		'name' 		=> esc_html__( 'TS Portfolio', 'gon' ),
		'base' 		=> 'ts_portfolio',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'2'		=> '2'
							,'3'	=> '3'
							,'4'	=> '4'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '8'
				,'description' 	=> esc_html__('Number of Posts', 'gon')
			)
			,array(
				'type' 			=> 'ts_category'
				,'heading' 		=> esc_html__( 'Categories', 'gon' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ts_portfolio'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'gon' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'None'		=> 'none'
						,'ID'		=> 'ID'
						,'Date'		=> 'date'
						,'Name'		=> 'name'
						,'Title'	=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'gon' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						'Descending'	=> 'DESC'
						,'Ascending'	=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show portfolio title', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show portfolio date', 'gon' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show link icon', 'gon' )
				,'param_name' 	=> 'show_link_icon'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show like icon', 'gon' )
				,'param_name' 	=> 'show_like_icon'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show filter bar', 'gon' )
				,'param_name' 	=> 'show_filter_bar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'gon' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'gon' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'gon' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> esc_html__('If slider is enabled, the filter bar and load more button will be removed', 'gon')
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
		)
	) );
	
	
	/*** TS Logos Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Logos Slider', 'gon' ),
		'base' 		=> 'ts_logos_slider',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Content Border', 'gon' )
				,'param_name' 	=> 'style_content'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No Border'		=> 'content-no-border'
							,'Border'		=> 'content-border'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Logo', 'gon' )
				,'param_name' 	=> 'style_logo'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Default'		=> 'style-default'
							,'Light'		=> 'style-light'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'gon' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'gon' )
			)
			,array(
				'type' 			=> 'ts_category'
				,'heading' 		=> esc_html__( 'Categories', 'gon' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ts_logo'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'gon' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'gon' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );
	
	
	/*** TS Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Google Map', 'gon' ),
		'base' 		=> 'ts_google_map',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'gon' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'gon' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'gon' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> 'input a number between 0 and 22'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'gon' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								'ROADMAP'		=> 'ROADMAP'
								,'SATELLITE'	=> 'SATELLITE'
								,'HYBRID'		=> 'HYBRID'
								,'TERRAIN'		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Twitter Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Twitter Slider', 'gon' ),
		'base' 		=> 'ts_twitter_slider',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Username', 'gon' )
				,'param_name' 	=> 'username'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit tweets', 'gon' )
				,'param_name' 	=> 'limit'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Exclude Replies', 'gon' )
				,'param_name' 	=> 'exclude_replies'
				,'admin_label' 	=> true
				,'value' 		=> array(
								'No'		=> 'false'
								,'Yes'		=> 'true'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'gon' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'default'	=> 'text-default'
							,'light'	=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Content Border', 'gon' )
				,'param_name' 	=> 'style_content'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No Border'		=> 'content-no-border'
							,'Border'		=> 'content-border'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'gon' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Cache time (hours)', 'gon' )
				,'param_name' 	=> 'cache_time'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Milestone', 'gon' ),
		'base' 		=> 'ts_milestone',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'gon' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'gon' )
				,'param_name' 	=> 'subject'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'gon' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'default'	=> 'text-default'
							,'light'	=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Countdown', 'gon' ),
		'base' 		=> 'ts_countdown',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'gon' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'gon' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'gon' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'gon' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'default'	=> 'text-default'
							,'light'	=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Feedburner Subscription', 'gon' ),
		'base' 		=> 'ts_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'gon' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 1', 'gon' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 2', 'gon' )
				,'param_name' 	=> 'intro_text_2'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'gon' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'gon' )
				,'param_name' 	=> 'placeholder_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Enter your email address'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'gon' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Style 1'	=> 'style-1'
							,'Style 2'	=> 'style-2'
							,'Style 3'	=> 'style-3'
						)
				,'description' 	=> ''
			)
		)
	) );

	/********************** TS Product Shortcodes ************************/

	/*** TS Products ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Products', 'gon' ),
		'base' 		=> 'ts_products',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Content Border', 'gon' )
				,'param_name' 	=> 'style_content'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Border'		=> 'content-border'
							,'No Border'	=> 'content-no-border'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'gon' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Recent'		=> 'recent'
						,'Sale'			=> 'sale'
						,'Featured'		=> 'featured'
						,'Best Selling'	=> 'best_selling'
						,'Top Rated'	=> 'top_rated'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'gon' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product IDs', 'gon' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'gon' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'gon' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'gon' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'gon' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'gon' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'gon' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'gon' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'gon' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );

	/*** TS Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Products Slider', 'gon' ),
		'base' 		=> 'ts_products_slider',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Content Border', 'gon' )
				,'param_name' 	=> 'style_content'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Border'		=> 'content-border'
							,'No Border'	=> 'content-no-border'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'gon' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Recent'		=> 'recent'
						,'Sale'			=> 'sale'
						,'Featured'		=> 'featured'
						,'Best Selling'	=> 'best_selling'
						,'Top Rated'	=> 'top_rated'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'gon' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'gon' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'gon' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'gon' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'gon' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'gon' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'gon' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'gon' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'gon' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'gon' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position navigation button', 'gon' )
				,'param_name' 	=> 'position_nav'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Top'		=> 'nav-top'
							,'Bottom'	=> 'nav-bottom'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'gon' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'gon')
			)
		)
	) );
	
	/*** TS Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'TS Products Widget', 'gon' ),
		'base' 			=> 'ts_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'Theme-Sky',
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'gon' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Recent'		=> 'recent'
						,'Sale'			=> 'sale'
						,'Featured'		=> 'featured'
						,'Best Selling'	=> 'best_selling'
						,'Top Rated'	=> 'top_rated'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'gon' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'gon' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'gon' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'gon' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'gon' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'gon' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'gon' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'gon' )
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
				,'group'		=> 'Slider Options'
			)
		)
	) );
	
	/*** TS Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Product Deals Slider', 'gon' ),
		'base' 		=> 'ts_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Content Border', 'gon' )
				,'param_name' 	=> 'style_content'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Border'		=> 'content-border'
							,'No Border'	=> 'content-no-border'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'gon' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'Grid'		=> 'grid'
							,'List'		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'gon' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'gon' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'gon' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Bottom'		=> 'bottom'
							,'On thumbnail'	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'gon' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'gon' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'gon' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'gon' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'gon' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'gon' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'gon' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'gon' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'gon' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'gon')
			)
		)
	) );
	
	/*** TS Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Product Categories Slider', 'gon' ),
		'base' 		=> 'ts_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'gon' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'gon' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'gon' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'gon' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'gon' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'gon')
			)
		)
	) );
	
	/*** TS Products In Category Tabs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Products In Category Tabs', 'gon' ),
		'base' 		=> 'ts_products_in_category_tabs',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Color', 'gon' )
				,'param_name' 	=> 'color'
				,'admin_label' 	=> true
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Icon', 'gon' )
				,'param_name' 	=> 'icon_fontawesome'
				,'admin_label' 	=> true
				,'value' 		=> 'fa fa-info-circle'
				,'settings' 	=> array(
					'emptyIcon' 	=> false /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add this icon before the block title', 'gon')
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Custom Icon', 'gon' )
				,'param_name' 	=> 'icon_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_images'
				,'heading' 		=> esc_html__( 'Banners', 'gon' )
				,'param_name' 	=> 'banners'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Display these banners on the right side', 'gon')
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Links for banners', 'gon' )
				,'param_name' 	=> 'links'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of links. Ex: if you have 3 banners, the value of this field should be "link1, link2, link3"', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'gon' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Recent'		=> 'recent'
						,'Sale'			=> 'sale'
						,'Featured'		=> 'featured'
						,'Best Selling'	=> 'best_selling'
						,'Top Rated'	=> 'top_rated'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'gon' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'gon' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'gon' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'gon' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'No'			=> 0
						,'Yes'			=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'gon' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show general tab', 'gon' )
				,'param_name' 	=> 'show_general_tab'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> esc_html__('Get products from all categories or sub categories', 'gon')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'General tab heading', 'gon' )
				,'param_name' 	=> 'general_tab_heading'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type of general tab', 'gon' )
				,'param_name' 	=> 'product_type_general_tab'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Recent'		=> 'recent'
						,'Sale'			=> 'sale'
						,'Featured'		=> 'featured'
						,'Best Selling'	=> 'best_selling'
						,'Top Rated'	=> 'top_rated'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'gon' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'gon' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'gon' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'gon' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'gon' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'gon' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'gon' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'gon' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'gon' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show see more button', 'gon' )
				,'param_name' 	=> 'show_see_more_button'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'See more button label', 'gon' )
				,'param_name' 	=> 'see_more_button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'See more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'gon' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'gon' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'gon' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS Products In Sub Category Tabs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS Products In Sub Category Tabs', 'gon' ),
		'base' 		=> 'ts_products_in_sub_category_tabs',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Color title', 'gon' )
				,'param_name' 	=> 'color_title'
				,'admin_label' 	=> true
				,'value' 		=> '#66b1d4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Icon', 'gon' )
				,'param_name' 	=> 'icon_fontawesome'
				,'admin_label' 	=> true
				,'value' 		=> 'fa fa-info-circle'
				,'settings' 	=> array(
					'emptyIcon' 	=> false /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add this icon before the block title', 'gon')
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Custom Icon', 'gon' )
				,'param_name' 	=> 'icon_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Color icon', 'gon' )
				,'param_name' 	=> 'color_icon'
				,'admin_label' 	=> true
				,'value' 		=> '#73d2ff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_images'
				,'heading' 		=> esc_html__( 'Banners', 'gon' )
				,'param_name' 	=> 'banners'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Banner position', 'gon' )
				,'param_name' 	=> 'banner_position'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Bottom'	=> 'bottom'
						,'Top'		=> 'top'
						)
				,'description' 	=> esc_html__( 'Display the banners on the top or bottom of products', 'gon' )
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Links for banners', 'gon' )
				,'param_name' 	=> 'links'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of links. Ex: if you have 3 banners, the value of this field should be "link1, link2, link3"', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'gon' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'Recent'		=> 'recent'
						,'Sale'			=> 'sale'
						,'Featured'		=> 'featured'
						,'Best Selling'	=> 'best_selling'
						,'Top Rated'	=> 'top_rated'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'gon' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'gon' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('You have to choose at least one category. Each tab will be a sub category of this category', 'gon')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit sub categories', 'gon' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Sub Categories. If this value is 0, the tab wont be displayed', 'gon' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'The text of link to category page', 'gon' )
				,'param_name' 	=> 'link_all_text'
				,'admin_label' 	=> true
				,'value' 		=> 'All'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Featured product', 'gon' )
				,'param_name' 	=> 'featured_product'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('This product will be displayed on the left side', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'gon' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'gon' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'gon' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'gon' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'gon' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'gon' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'gon' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'gon' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'gon' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'gon' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'No'	=> 0
							,'Yes'	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'gon' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** TS List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'TS List Of Product Categories', 'gon' ),
		'base' 		=> 'ts_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'Theme-Sky',
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'gon' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background image', 'gon' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'gon' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'gon')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'gon' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							'Yes'	=> 1
							,'No'	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'gon' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'gon' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'gon' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'gon')
			)
		)
	) );
	
}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('ts_category', 'ts_product_catgories_shortcode_param');
if( !function_exists('ts_product_catgories_shortcode_param') ){
	function ts_product_catgories_shortcode_param($settings, $value){
		$categories = ts_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ts-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ts-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php ts_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.ts-select-category').bind('change', function(){
				"use strict";
				
				var selected = jQuery('.ts-select-category:checked');
				jQuery('.ts-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.ts-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('ts_get_list_categories_shortcode_param') ){
	function ts_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'ts_testimonial' ){
				$taxonomy = 'ts_testimonial_cat';
			}
			if( $settings['class'] == 'ts_portfolio' ){
				$taxonomy = 'ts_portfolio_cat';
			}
			if( $settings['class'] == 'ts_logo' ){
				$taxonomy = 'ts_logo_cat';
			}
		}
		
		$args = array(
				'taxonomy' 			=> $taxonomy
				,'hierarchical'		=> 1
				,'hide_empty'		=> 0
				,'parent'			=> $cat_parent_id
				,'title_li'			=> ''
				,'child_of'			=> 0
			);
		$cats = get_categories($args);
		return $cats;
	}
}

if( !function_exists('ts_get_list_sub_categories_shortcode_param') ){
	function ts_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = ts_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
		?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ts-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php ts_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_ts_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ts_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	add_filter( 'vc_autocomplete_ts_products_in_sub_category_tabs_featured_product_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ts_products_in_sub_category_tabs_featured_product_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('ts_products', 'product_cats');
	$shortcode_field_cats[] = array('ts_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('ts_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('ts_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('ts_products_in_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('ts_products_in_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('ts_products_in_sub_category_tabs', 'product_cat');
	$shortcode_field_cats[] = array('ts_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('ts_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('ts_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('ts_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('ts_product_categories_slider', 'ids');
		
	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>