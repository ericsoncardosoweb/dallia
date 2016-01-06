<?php 
/*** Template Redirect ***/
add_action('template_redirect', 'ts_template_redirect');
function ts_template_redirect(){
	global $wp_query, $post, $ts_page_datas, $smof_data;
	
	/* Get Page Options */
	if( is_page() || is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product') ){
		if( is_page() ){
			$page_id = $post->ID;
		}
		if( is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product') ){
			$page_id = get_option('woocommerce_shop_page_id', 0);
		}
		$post_custom = get_post_custom( $page_id );
		foreach( $post_custom as $key => $value ){
			if( isset($value[0]) ){
				$ts_page_datas[$key] = $value[0];
			}
		}
		$page_option_default = array(
							'ts_layout_style'						=> 'default'
							,'ts_page_layout'						=> '0-1-0'
							,'ts_left_sidebar'						=> ''
							,'ts_right_sidebar'						=> ''
							,'ts_full_page'							=> 0
							,'ts_header_layout'						=> 'default'
							,'ts_header_transparent'				=> 0
							,'ts_header_text_color'					=> 'default'
							,'ts_menu_id'							=> 0
							,'ts_breadcrumb_layout'					=> 'default'
							,'ts_breadcrumb_bg_parallax'			=> 'default'
							,'ts_bg_breadcrumbs'					=> ''
							,'ts_logo'								=> ''
							,'ts_logo_sticky'						=> ''
							,'ts_show_breadcrumb'					=> 1
							,'ts_show_page_title'					=> 1
							,'ts_page_slider'						=> 0
							,'ts_page_slider_position'				=> 'before_main_content'
							,'ts_rev_slider'						=> 0
							);
							
		$ts_page_datas = ts_array_atts($page_option_default, $ts_page_datas);
		
		if( $ts_page_datas['ts_layout_style'] != 'default' ){
			$smof_data['ts_layout_style'] = $ts_page_datas['ts_layout_style'];
		}
		
		if( $ts_page_datas['ts_header_layout'] != 'default' ){
			$smof_data['ts_header_layout'] = $ts_page_datas['ts_header_layout'];
		}
		
		if( $ts_page_datas['ts_breadcrumb_layout'] != 'default' ){
			$smof_data['ts_breadcrumb_layout'] = $ts_page_datas['ts_breadcrumb_layout'];
		}
		
		if( $ts_page_datas['ts_breadcrumb_bg_parallax'] != 'default' ){
			$smof_data['ts_breadcrumb_bg_parallax'] = $ts_page_datas['ts_breadcrumb_bg_parallax'];
		}
		
		if( trim($ts_page_datas['ts_bg_breadcrumbs']) != '' ){
			$smof_data['ts_bg_breadcrumbs'] = $ts_page_datas['ts_bg_breadcrumbs'];
		}
		
		if( trim($ts_page_datas['ts_logo']) != '' ){
			$smof_data['ts_logo'] = $ts_page_datas['ts_logo'];
		}
		
		if( trim($ts_page_datas['ts_logo_sticky']) != '' ){
			$smof_data['ts_logo_sticky'] = $ts_page_datas['ts_logo_sticky'];
		}
		
		if( $ts_page_datas['ts_menu_id'] ){
			add_filter('wp_nav_menu_args', 'ts_filter_wp_nav_menu_args');
		}
		
		if( $ts_page_datas['ts_full_page'] ){
			add_filter('body_class', create_function('$classes', '$classes[] = "full-page"; return $classes;'));
		}
		
	}
	
	/* Archive - Category product */
	if( is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product') ){
		ts_set_header_breadcrumb_layout_woocommerce_page( 'shop' );
	
		add_action( 'wp_enqueue_scripts', 'ts_grid_list_desc_style', 1000 );
		
		ts_remove_hooks_from_shop_loop();
		
		/* Update product category layout */
		if( is_tax('product_cat') ){
			$term = $wp_query->queried_object;
			if( !empty($term->term_id) ){
				$bg_breadcrumbs_id = get_woocommerce_term_meta($term->term_id, 'bg_breadcrumbs_id', true);
				$layout = get_woocommerce_term_meta($term->term_id, 'layout', true);
				$left_sidebar = get_woocommerce_term_meta($term->term_id, 'left_sidebar', true);
				$right_sidebar = get_woocommerce_term_meta($term->term_id, 'right_sidebar', true);
				
				if( $bg_breadcrumbs_id != '' ){
					$bg_breadcrumbs_src = wp_get_attachment_url( $bg_breadcrumbs_id );
					if( $bg_breadcrumbs_src !== false ){
						$smof_data['ts_bg_breadcrumbs'] = $bg_breadcrumbs_src;
					}
				}
				if( $layout != '' ){
					$smof_data['ts_prod_cat_layout'] = $layout;
				}
				if( $left_sidebar != '' ){
					$smof_data['ts_prod_cat_left_sidebar'] = $left_sidebar;
				}
				if( $right_sidebar != '' ){
					$smof_data['ts_prod_cat_right_sidebar'] = $right_sidebar;
				}
			}
		}
	}
	
	/* single post */
	if( is_singular('post') ){
		$post_data = array();
		$post_custom = get_post_custom();
		foreach( $post_custom as $key => $value ){
			if( isset($value[0]) ){
				$post_data[$key] = $value[0];
			}
		}
		
		$smof_data['ts_blog_details_layout'] = (isset($post_data['ts_post_layout']) && $post_data['ts_post_layout']!='0')?$post_data['ts_post_layout']:$smof_data['ts_blog_details_layout'];
		$smof_data['ts_blog_details_left_sidebar'] = (isset($post_data['ts_post_left_sidebar']) && $post_data['ts_post_left_sidebar']!='0')?$post_data['ts_post_left_sidebar']:$smof_data['ts_blog_details_left_sidebar'];
		$smof_data['ts_blog_details_right_sidebar'] = (isset($post_data['ts_post_right_sidebar']) && $post_data['ts_post_right_sidebar']!='0')?$post_data['ts_post_right_sidebar']:$smof_data['ts_blog_details_right_sidebar'];
		
		/* Update Post Views Count */
		$views_count = get_post_meta($post->ID, '_ts_post_views_count', true);
		if( $views_count ){
			$views_count++;
			update_post_meta($post->ID, '_ts_post_views_count', $views_count);
		}
		else{
			update_post_meta($post->ID, '_ts_post_views_count', 1);
		}
		
		/* Breadcrumb */
		$bg_breadcrumbs = get_post_meta($post->ID, 'ts_bg_breadcrumbs', true);
		if( !empty($bg_breadcrumbs) ){
			$smof_data['ts_bg_breadcrumbs'] = $bg_breadcrumbs;
		}
	}
	
	/* Single product */
	if( is_singular('product') ){
		
		/* Add vertical thumbnail class */
		$vertical_thumbnail = isset($smof_data['ts_prod_thumbnails_style']) && $smof_data['ts_prod_thumbnails_style'] == 'vertical';
		if( $vertical_thumbnail ){
			add_filter('post_class', create_function('$classes', '$classes[] = "vertical-thumbnail"; return $classes;'));
		}
		
		/* Remove hooks on Related and Up-Sell products */
		ts_remove_hooks_from_shop_loop();
		if( ! $smof_data['ts_prod_cat_grid_desc'] ){
			remove_action('woocommerce_after_shop_loop_item', 'ts_template_loop_short_description', 40);
		}
	
		$prod_data = array();
		$post_custom = get_post_custom();
		foreach( $post_custom as $key => $value ){
			if( isset($value[0]) ){
				$prod_data[$key] = $value[0];
			}
		}
		
		$smof_data['ts_prod_layout'] = (isset($prod_data['ts_prod_layout']) && $prod_data['ts_prod_layout']!='0')?$prod_data['ts_prod_layout']:$smof_data['ts_prod_layout'];
		$smof_data['ts_prod_left_sidebar'] = (isset($prod_data['ts_prod_left_sidebar']) && $prod_data['ts_prod_left_sidebar']!='0')?$prod_data['ts_prod_left_sidebar']:$smof_data['ts_prod_left_sidebar'];
		$smof_data['ts_prod_right_sidebar'] = (isset($prod_data['ts_prod_right_sidebar']) && $prod_data['ts_prod_right_sidebar']!='0')?$prod_data['ts_prod_right_sidebar']:$smof_data['ts_prod_right_sidebar'];
		
		if( !$smof_data['ts_prod_thumbnail'] ){
			remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
		}
		
		if( !$smof_data['ts_prod_label'] ){
			remove_action('ts_before_product_image', 'ts_template_loop_product_label', 10);
		}
		
		if( !$smof_data['ts_prod_rating'] ){
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 5);
		}
		
		if( !$smof_data['ts_prod_sku'] ){
			remove_action('woocommerce_single_product_summary', 'ts_template_single_sku', 6);
		}
		
		if( !$smof_data['ts_prod_availability'] ){
			remove_action('woocommerce_single_product_summary', 'ts_template_single_availability', 3);
		}
		
		if( !$smof_data['ts_prod_excerpt'] ){
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
		}
		
		if( !$smof_data['ts_prod_count_down'] ){
			remove_action('woocommerce_single_product_summary', 'ts_template_loop_time_deals', 20);
		}
		
		if( !$smof_data['ts_prod_price'] ){
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 2);
			remove_action('woocommerce_single_variation', 'woocommerce_single_variation', 10);
		}
		
		if( !$smof_data['ts_prod_add_to_cart'] || $smof_data['ts_enable_catalog_mode'] ){
			$terms        = get_the_terms( $post->ID, 'product_type' );
			$product_type = ! empty( $terms ) ? sanitize_title( current( $terms )->name ) : 'simple';
			if( $product_type != 'variable' ){
				remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
			}
			else{
				remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
			}
		}
		
		if( !$smof_data['ts_prod_sharing'] ){
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 70);
		}
		
		if( !$smof_data['ts_prod_upsells'] ){
			remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
		}
		
		if( !$smof_data['ts_prod_related'] ){
			remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
		}
		
		if( isset($smof_data['ts_prod_tabs_position']) && $smof_data['ts_prod_tabs_position'] == 'inside_summary' ){
			remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
			add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 50);
		}
		
		/* Breadcrumb */
		$bg_breadcrumbs = get_post_meta($post->ID, 'ts_bg_breadcrumbs', true);
		if( !empty($bg_breadcrumbs) ){
			$smof_data['ts_bg_breadcrumbs'] = $bg_breadcrumbs;
		}
		
		/* Fix cloudzoom for WP 4.4 */
		add_filter('wp_get_attachment_image_attributes', function($attr) {
			if( isset($attr['sizes']) ){
				unset($attr['sizes']);
			}
			if( isset($attr['srcset']) ){
				unset($attr['srcset']);
			}
			return $attr;
		}, 9999);
		add_filter('wp_calculate_image_sizes', '__return_false', 9999);
		add_filter('wp_calculate_image_srcset', '__return_false', 9999);
		remove_filter('the_content', 'wp_make_content_images_responsive');
		
	}
	
	/* Single Portfolio */
	if( is_singular('ts_portfolio') ){
		$portfolio_data = array();
		$post_custom = get_post_custom();
		foreach( $post_custom as $key => $value ){
			if( isset($value[0]) ){
				$portfolio_data[$key] = $value[0];
			}
		}
		
		if( isset($portfolio_data['ts_portfolio_custom_field']) && $portfolio_data['ts_portfolio_custom_field'] == 1 ){
			$smof_data['ts_portfolio_custom_field_title'] = isset($portfolio_data['ts_portfolio_custom_field_title'])?$portfolio_data['ts_portfolio_custom_field_title']:$smof_data['ts_portfolio_custom_field_title'];
			$smof_data['ts_portfolio_custom_field_content'] = isset($portfolio_data['ts_portfolio_custom_field_content'])?$portfolio_data['ts_portfolio_custom_field_content']:$smof_data['ts_portfolio_custom_field_content'];
		}
	}
	
	/* WooCommerce - Other pages */
	if( ts_has_woocommerce() ){
		if( is_cart() ){
			ts_set_header_breadcrumb_layout_woocommerce_page( 'cart' );
			
			ts_remove_hooks_from_shop_loop();
			
			if( ! $smof_data['ts_prod_cat_grid_desc'] ){
				remove_action('woocommerce_after_shop_loop_item', 'ts_template_loop_short_description', 40);
			}
		}
		
		if( is_checkout() ){
			ts_set_header_breadcrumb_layout_woocommerce_page( 'checkout' );
		}
		
		if( is_account_page() ){
			ts_set_header_breadcrumb_layout_woocommerce_page( 'myaccount' );
		}
	}

	/* Right to left */
	if( is_rtl() ){
		$smof_data['ts_enable_rtl'] = 1;
	}
	
	/* Remove bbpress style if not in any bbpress page */
	if( function_exists('is_bbpress') && !is_bbpress() ){
		add_filter('bbp_default_styles', create_function('', 'return array();'));
		add_filter('bbp_default_scripts', create_function('', 'return array();'));
	}
	
	/* Remove background image if not necessary */
	$load_bg = true;
	if( is_page_template('page-templates/fullwidth-template.php') ){
		$load_bg = false;
	}
	if( is_page() && isset($ts_page_datas['ts_layout_style']) && $load_bg ){
		if( $ts_page_datas['ts_layout_style'] == 'wide' || ( $ts_page_datas['ts_layout_style'] == 'default' && $smof_data['ts_layout_style'] == 'wide' ) ){
			$load_bg = false;
		}
	}
	
	if( !$load_bg ){
		add_filter('theme_mod_background_image', create_function('', 'return "";'));
	}
}

function ts_filter_wp_nav_menu_args( $args ){
	global $post;
	if( is_page() && !is_admin() && !empty($args['theme_location']) && $args['theme_location'] == 'primary' ){
		$menu = get_post_meta($post->ID, 'ts_menu_id', true);
		if( $menu ){
			$args['menu'] = $menu;
		}
	}
	return $args;
}

add_filter('single_template', 'ts_change_single_portfolio_template');
function ts_change_single_portfolio_template( $single_template ){
	
	if( is_singular('ts_portfolio') && locate_template('single-portfolio.php') ){
		$single_template = locate_template('single-portfolio.php');
	}
	
	return $single_template;
}

function ts_remove_hooks_from_shop_loop(){
	global $smof_data;
	
	if( ! $smof_data['ts_prod_cat_thumbnail'] ){
		remove_action('woocommerce_before_shop_loop_item_title', 'ts_template_loop_product_thumbnail', 10);
	}
	if( ! $smof_data['ts_prod_cat_label'] ){
		remove_action('woocommerce_after_shop_loop_item_title', 'ts_template_loop_product_label', 1);
	}
	if( ! $smof_data['ts_prod_cat_cat'] ){
		remove_action('woocommerce_after_shop_loop_item', 'ts_template_loop_categories', 10);
	}
	if( ! $smof_data['ts_prod_cat_title'] ){
		remove_action('woocommerce_after_shop_loop_item', 'ts_template_loop_product_title', 20);
	}
	if( ! $smof_data['ts_prod_cat_sku'] ){
		remove_action('woocommerce_after_shop_loop_item', 'ts_template_loop_product_sku', 30);
	}
	if( ! $smof_data['ts_prod_cat_rating'] ){
		remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 60);
	}
	if( ! $smof_data['ts_prod_cat_price'] ){
		remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 50);
	}
	if( ! $smof_data['ts_prod_cat_add_to_cart'] ){
		remove_action('woocommerce_after_shop_loop_item', 'ts_template_loop_add_to_cart', 70); 
		remove_action('woocommerce_after_shop_loop_item_title', 'ts_template_loop_add_to_cart', 10001 );
	}
		
}

function ts_grid_list_desc_style(){
	$custom_css = ".products.list .short-description.list{display: inline-block !important;}";
	$custom_css .= ".products.grid .short-description.grid{display: inline-block !important;}";
    wp_add_inline_style('ts-reset', $custom_css);
}

function ts_set_header_breadcrumb_layout_woocommerce_page( $page = 'shop' ){
	global $smof_data;
	/* Header Layout */
	$header_layout = get_post_meta(wc_get_page_id( $page ), 'ts_header_layout', true);
	if( $header_layout != 'default' && $header_layout != '' ){
		$smof_data['ts_header_layout'] = $header_layout;
	}
	
	/* Breadcrumb Layout */
	$breadcrumb_layout = get_post_meta(wc_get_page_id( $page ), 'ts_breadcrumb_layout', true);
	if( $breadcrumb_layout != 'default' && $breadcrumb_layout != '' ){
		$smof_data['ts_breadcrumb_layout'] = $breadcrumb_layout;
	}
}

?>