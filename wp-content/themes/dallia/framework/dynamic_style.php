<?php 
global $smof_data;
if( !isset($data) ){
	$data = $smof_data;
}

$data = ts_array_atts(
			array(
				/* FONTS */
				'ts_body_font_enable_google_font'					=> 1
				,'ts_body_font_family'								=> "Arial"
				,'ts_body_font_google'								=> "Lato"
				
				,'ts_secondary_body_font_enable_google_font'		=> 1
				,'ts_secondary_body_font_family'					=> "Arial"
				,'ts_secondary_body_font_google'					=> "Raleway"
				
				,'ts_menu_font_enable_google_font'					=> 1
				,'ts_menu_font_family'								=> "Arial"
				,'ts_menu_font_google'								=> "Lato"
				
				,'ts_sub_menu_font_enable_google_font'				=> 1
				,'ts_sub_menu_font_family'							=> "Arial"
				,'ts_sub_menu_font_google'							=> "Lato"
				
				,'custom_font_woff'									=> ""
				,'custom_font_ttf'									=> ""
				,'custom_font_svg'									=> ""
				,'custom_font_eot'									=> ""
				
				/* COLORS */
				,'ts_primary_color'									=> "#40bea7"
				,'ts_text_color_in_bg_primary'						=> "#ffffff"

				,'ts_secondary_color'								=> "#3f3f3f"
				,'ts_text_color_in_bg_second'						=> "#ffffff"

				,'ts_heading_color'									=> "#535353"

				,'ts_main_content_background_color'					=> "#ffffff"
				,'ts_widget_content_background_color'				=> "#ffffff"
				,'ts_text_color'									=> "#808080"

				,'ts_link_color'									=> "#40bea7"
				,'ts_link_color_hover'								=> "#3f3f3f"

				,'ts_border_color'									=> "#e8e8e8"

				,'ts_button_text_color'								=> "#3f3f3f"
				,'ts_button_text_color_hover'						=> "#40bea7"
				,'ts_button_border_color'							=> "#e6e6e6"
				,'ts_button_border_color_hover'						=> "#40bea7"
				,'ts_button_background_color'						=> "#ffffff"
				,'ts_button_background_color_hover'					=> "#ffffff"

				/* HEADER */
				,'ts_header_top_background_color'					=> "#383838"
				,'ts_header_top_text_color'							=> "#a9a9a9"
				,'ts_header_top_line_color'							=> "#383838"
				,'ts_header_middle_background_color'				=> "#ffffff"
				,'ts_header_bottom_background_color'				=> "#fbfbfb"
				,'ts_header_search_categories_text_color'			=> "#3f3f3f"
				,'ts_header_search_input_text_color'				=> "#666666"
				,'ts_header_search_border_color'					=> "#e5e5e5"
				,'ts_header_cart_text_color'						=> "#3f3f3f"

				/* MENU */
				,'ts_vertical_menu_text'							=> "#ffffff"
				,'ts_vertical_menu_background_color'				=> "#40bea7"
				,'ts_vertical_menu_text_hover'						=> "#ffffff"
				,'ts_vertical_menu_background_hover'				=> "#40bea7"
				
				,'ts_menu_top_line_color'							=> "#e8e8e8"
				,'ts_menu_text_color'								=> "#3f3f3f"
				,'ts_menu_text_color_hover'							=> "#3f3f3f"

				,'ts_sub_menu_background_color'						=> "#ffffff"
				,'ts_sub_menu_text_color'							=> "#3f3f3f"
				,'ts_sub_menu_text_color_hover'						=> "#40bea7"
				,'ts_sub_menu_item_background_color_hover'			=> "#fbfbfb"
				,'ts_sub_menu_item_line_color'						=> "#e9e9e9"
				,'ts_sub_menu_heading_color'						=> "#3f3f3f"
				
				/* BREADCRUMB */
				,'ts_breadcrumb_text_color'							=> "#ffffff"
				,'ts_breadcrumb_background_color'					=> "#3f3f3f"
				
				/* FOOTER */
				,'ts_enable_footer_transparent_background'			=> 0
				,'ts_footer_background_color'						=> "#262626"
				,'ts_footer_text_color'								=> "#999999"
				,'ts_footer_heading_color'							=> "#ffffff"
				,'ts_footer_border_line_color'						=> "#999999"
				,'ts_footer_social_icon_color'						=> "#ffffff"
				,'ts_footer_social_background_color'				=> "#424242"

				/* PRODUCT */
				,'ts_rating_color'									=> "#f8d73f"
				
				,'ts_product_name_text_color'						=> "#3f3f3f"
				,'ts_product_day_hotdeal_background'				=> "#808080"

				,'ts_product_button_text_color'						=> "#666666"
				,'ts_product_button_text_color_hover'				=> "#ffffff"
				,'ts_product_button_background_color'				=> "#ffffff"
				,'ts_product_button_background_color_hover'			=> "#40bea7"
				,'ts_product_button_border_color'					=> "#e8e8e8"
				,'ts_product_button_border_color_hover'				=> "#40bea7"

				,'ts_product_sale_label_text_color'					=> "#ffffff"
				,'ts_product_sale_label_background_color'			=> "#000000"
				,'ts_product_feature_label_text_color'				=> "#ffffff"
				,'ts_product_feature_label_background_color'		=> "#f23434"
				,'ts_product_outstock_label_text_color'				=> "#ffffff"
				,'ts_product_outstock_label_background_color'		=> "#d4d4d4"

				,'ts_product_price_text_color'						=> "#3f3f3f"
				
				,'ts_nav_slider_icon_color'							=> "#3f3f3f"
				,'ts_nav_slider_border_color'						=> "#e8e8e8"
				
				,'ts_effect_hover_product_style'					=> 'style-1'


				/* Revolution */
				,'ts_revo_navigation_background_color'				=> "#000000"
				,'ts_revo_navigation_text_color'					=> "#ffffff"

				/* MESSAGE BOX */
				,'ts_message_text_color'							=> "#6db74c"
				,'ts_message_background_color'						=> "#c1faa8"
				,'ts_message_border_color'							=> "#9cff70"
				,'ts_info_message_text_color'						=> "#21c2f8"
				,'ts_info_message_background_color'					=> "#bceeff"
				,'ts_info_message_border_color'						=> "#8ae1ff"
				,'ts_error_message_text_color'						=> "#ff391f"
				,'ts_error_message_background_color'				=> "#ffcdc7"
				,'ts_error_message_border_color'					=> "#fdb1a8"
				,'ts_warning_message_text_color'					=> "#e99b00"
				,'ts_warning_message_background_color'				=> "#fff4bb"
				,'ts_warning_message_border_color'					=> "#ffcc66"
				
				/* RESPONSIVE */
				,'ts_responsive'									=> 1
				,'ts_layout_fullwidth'								=> 0
				,'ts_enable_rtl'									=> 0
				
				/* FONT SIZE */
				/* Body */
				,'ts_font_size_body'								=> 14
				,'ts_line_height_body'								=> 24
				
				/* Menu */
				,'ts_font_size_menu'								=> 14
				,'ts_line_height_menu'								=> 18
				
				/* Button */
				,'ts_font_size_button'								=> 12
				,'ts_line_height_button'							=> 18
				
				
				/* Heading */
				,'ts_font_size_heading_1'							=> 35
				,'ts_line_height_heading_1'							=> 40
				,'ts_font_size_heading_2'							=> 30
				,'ts_line_height_heading_2'							=> 34
				,'ts_font_size_heading_3'							=> 25
				,'ts_line_height_heading_3'							=> 30
				,'ts_font_size_heading_4'							=> 20
				,'ts_line_height_heading_4'							=> 24
				,'ts_font_size_heading_5'							=> 18
				,'ts_line_height_heading_5'							=> 24
				,'ts_font_size_heading_6'							=> 16
				,'ts_line_height_heading_6'							=> 22
				
				/* Custom CSS */
				,'ts_custom_css_code'								=> ''
		), $data);		
		
$data = of_filter_load_media_upload( $data ); /* Filter [site_url] */
$data = apply_filters('ts_custom_style_data', $data);

extract( $data );

/* font-body */
if( $data['ts_body_font_enable_google_font'] ){
	$ts_body_font				= $data['ts_body_font_google'];
}
else{
	$ts_body_font				= $data['ts_body_font_family'];
}

if( $data['ts_secondary_body_font_enable_google_font'] ){
	$ts_secondary_body_font		= $data['ts_secondary_body_font_google'];
}
else{
	$ts_secondary_body_font		= $data['ts_secondary_body_font_family'];
}
/* FONT MENU */
if( $data['ts_menu_font_enable_google_font'] ){
	$ts_menu_font				= $data['ts_menu_font_google'];
}
else{
	$ts_menu_font				= $data['ts_menu_font_family'];
}

if( $data['ts_sub_menu_font_enable_google_font'] ){
	$ts_sub_menu_font			= $data['ts_sub_menu_font_google'];
}
else{
	$ts_sub_menu_font			= $data['ts_sub_menu_font_family'];
}

?>	
	
	/*
	1. FONT FAMILY
	2. GENERAL COLORS
	3. HEADER COLORS
	4. MENU COLORS
	5. FOOTER COLORS
	6. PRODUCT COLORS
	7. WOOCOMMERCE MESSAGE COLORS
	8. FULLWIDTH LAYOUT
	9. RESPONSIVE
	10. FONT SIZE
	11. PRODUCT HOVER
	*/
	
	
	/* ============= 1. FONT FAMILY ============== */
	<?php 
	/* Custom Font */
	if( $custom_font_woff && $custom_font_ttf && $custom_font_svg && $custom_font_eot ):
	?>
	@font-face {
		font-family: 'CustomFont';
		src: url('<?php echo esc_url($custom_font_eot); ?>');
		src:
			url('<?php echo esc_url($custom_font_eot); ?>?#iefix') format('eot'),
			url('<?php echo esc_url($custom_font_woff); ?>') format('woff'),
			url('<?php echo esc_url($custom_font_ttf); ?>') format('truetype'),
			url('<?php echo esc_url($custom_font_svg); ?>#CustomFont') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	<?php
	endif;
	?>
	html, 
	body,
	label,
	input, 
	textarea, 
	keygen, 
	select, 
	button,
	.font-body,
	.ts-banner .heading-big-body,
	.ts-banner .heading-normal-body,
	.ts-banner .heading-body,
	.ts-button.fa,
	li.fa,
	h3.product-name > a, 
	h3.product-name,
	#order_review_heading,
	.woocommerce .checkout #order_review table thead th,
	.woocommerce-page .checkout #order_review table thead th,
	div.product .summary .compare,
	div.product .summary .yith-wcwl-add-to-wishlist a,
	body .rev_slider_wrapper .rev-btn,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tab > a,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li a,
	.ts-testimonial-wrapper.text-light .testimonial-content h4.name a,
	.ts-twitter-slider.text-light .twitter-content h4.name > a,
	.vc_toggle_default .vc_toggle_title h4,
	body.error404 article h1,
	body.error404 article h2,
	.ts-milestone h3.subject, 
	.cart_totals table th,
	.woocommerce #order_review table.shop_table tfoot td, 
	.woocommerce-page #order_review table.shop_table tfoot td,
	.woocommerce table.shop_table.order_details tfoot th, 
	.woocommerce-page table.shop_table.order_details tfoot th,
	.woocommerce #order_review table.shop_table tfoot th, 
	.woocommerce-page #order_review table.shop_table tfoot th,
	body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a,
	body div.pp_default .pp_nav .currentTextHolder,
	body .theme-default .nivo-caption{
		font-family: <?php echo esc_html($ts_body_font) ?>;
	}
	.amount,
	.quantity{
		font-family: <?php echo esc_html($ts_body_font) ?>;
	}
	h1,h2,h3,h4,h5,h6,
	.h1,.h2,.h3,.h4,.h5,.h6,
	.ts-banner .heading-big,
	h1.wpb_heading,
	h2.wpb_heading,
	h3.wpb_heading,
	h4.wpb_heading,
	h5.wpb_heading,
	h6.wpb_heading,
	.ts-banner-feature.show_image .banner-info,
	.woocommerce .products .product .product-label span, 
	.woocommerce-page .products .product .product-label span,
	.pp_woocommerce div.product .images .product-label span,
	.woocommerce #content div.product .images .product-label span,
	.woocommerce div.product .images .product-label span,
	.woocommerce-page #content div.product .images .product-label span,
	.woocommerce-page div.product .images .product-label span,
	.vc_column_container .vc_btn, 
	.vc_column_container .wpb_button,
	.woocommerce > form > fieldset legend,
	.variations label,
	.shipping-calculator-button,
	/* Forum */
	#bbpress-forums ul.bbp-lead-topic .bbp-header, 
	#bbpress-forums ul.bbp-topics .bbp-header, 
	#bbpress-forums ul.bbp-forums .bbp-header, 
	#bbpress-forums ul.bbp-replies > .bbp-header, 
	#bbpress-forums ul.bbp-search-results .bbp-headers,
	/* End forum */
	.widget_calendar,
	.ts-portfolio-wrapper .filter-bar li,
	html body body table.compare-list tr.add-to-cart td a,
	table thead th,
	body .vc_general.vc_tta-tabs .vc_tta-tab > a,
	/* Compare table */
	body table.compare-list .add-to-cart td a
	{
		font-family: <?php echo esc_html($ts_secondary_body_font) ?>;
	}
	
	/* === Menu Font === */
	header.ts-header .menu-wrapper nav > ul.menu > li > a,
	header.ts-header .ts-menu > .menu > ul > li > a,
	.widget-container .vertical-menu > .menu > li > a,
	header.ts-header .menu-wrapper nav > ul.menu > li ul .title-heading a,
	.title-heading a,
	.vertical-menu-wrapper .vertical-menu-heading{
		font-family: <?php echo esc_html($ts_menu_font) ?>;
	}
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu > li > a,
	header.ts-header .menu-wrapper nav div.list-link li > a,
	header.ts-header .menu-wrapper nav > ul.menu li.widget_nav_menu li > a,
	header.ts-header .menu-wrapper .vertical-menu nav > ul.menu > li > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu > li > a,
	.widget-container .vertical-menu div.list-link li > a,
	.widget-container .vertical-menu > ul.menu li.widget_nav_menu li > a,
	.widget-container .vertical-menu > ul.menu > li > a{
		font-family: <?php echo esc_html($ts_sub_menu_font) ?>;
	}
	
	
	/* ========== 2. GENERAL COLORS ========== */
	/* BACKGROUND CONTENT COLOR */
	body #main,
	.woocommerce .woocommerce-ordering .orderby ul, 
	.woocommerce-page .woocommerce-ordering .orderby ul,
	form.checkout div.create-account,
	#main > .page-container,
	#main > .fullwidth-template,
	.widget-container.feedburner-subscription input[type="text"],
	.thumbnails.loading:before,
	.ts-logo-slider-wrapper.loading .content-wrapper:before,
	.related-posts.loading .content-wrapper:before,
	.ts-portfolio-wrapper.loading:before,
	.ts-blogs-wrapper.loading .content-wrapper:before,
	.ts-testimonial-wrapper.content-no-border.loading:before,
	.ts-twitter-slider.content-no-border.loading:before
	{
		background-color:<?php echo esc_html($ts_main_content_background_color) ?>;
	}
	#order_review_heading,
	.woocommerce .checkout #order_review table th, 
	.woocommerce-page .checkout #order_review table th,
	.woocommerce .checkout #order_review table td, 
	.woocommerce-page .checkout #order_review table td,
	.woocommerce .checkout #order_review table tfoot tr.cart-subtotal th, 
	.woocommerce-page .checkout #order_review table tfoot tr.cart-subtotal th, 
	.woocommerce .checkout #order_review table tfoot tr.cart-subtotal td, 
	.woocommerce-page .checkout #order_review table tfoot tr.cart-subtotal td,
	.woocommerce #payment, 
	.woocommerce-page #payment{
		border-bottom-color:<?php echo esc_html($ts_main_content_background_color) ?>;
	}

	/* WIDGET & SHORTCODE BACKGROUND */
	.widget-container,
	.ts-shortcode.content-border,
	.vc_tta-container .vc_general,
	table.shop_table,
	.shopping-cart-wrapper .dropdown-container:before,
	.my-account-wrapper .dropdown-container:before,
	#lang_sel_click ul ul:before,
	.header-currency ul:before,
	div.pp_pic_holder .pp_content, 
	div.light_rounded .pp_content,
	body div.ppt,
	.single-navigation a .product-info:before,
	#yith-wcwl-popup-message,
	.ts-feedburner-subscription-shortcode.style-2 .feedburner-subscription .subscribe-email,
	body div.pp_pic_holder .pp_content_container .pp_details,
	div.pp_woocommerce.pp_pic_holder .pp_content_container,
	html input[type^="search"],
	html input[type^="text"], 
	html input[type^="email"],
	html input[type^="password"],
	html input[type="email"], 
	html input[type="number"], 
	html select, 
	html textarea,
	#bbpress-forums #bbp-your-profile fieldset input, 
	#bbpress-forums #bbp-your-profile fieldset textarea,
	.bbp-login-form .bbp-username input, 
	.bbp-login-form .bbp-email input, 
	.bbp-login-form .bbp-password input,
	body .select2-results,
	.chosen-container a.chosen-single,
	.woocommerce-checkout .form-row .chosen-container-single .chosen-single,
	.woocommerce form .form-row input.input-text, 
	.woocommerce form .form-row textarea, 
	.woocommerce-page form .form-row input.input-text, 
	.woocommerce-page form .form-row textarea,
	.woocommerce #content table.cart td.actions .coupon .input-text, 
	.woocommerce table.cart td.actions .coupon .input-text, 
	.woocommerce-page #content table.cart td.actions .coupon .input-text, 
	.woocommerce-page table.cart td.actions .coupon .input-text,
	.select2-container .select2-choice,
	body .select2-drop-active,
	.portfolio-inner .figcaption,
	.ts-price-table.active-table .table-description:before,
	.widget-container .gallery.loading figure:before,
	.list-posts article .gallery.loading:before,
	.thumbnail.loading:before,
	.ts-product-category-slider-wrapper .content-wrapper.loading:before,
	.ts-product-in-category-tab-wrapper .column-banners.loading:before,
	.ts-product-in-category-tab-wrapper .column-products.loading:before,
	.ts-product-in-sub-category-tab-wrapper .row-banners.loading:before,
	.ts-product-in-sub-category-tab-wrapper .row-products.loading:before,
	.widget-container .ts-logo-slider-wrapper.loading .content-wrapper:before,
	.ts-product .content-wrapper.loading:before,
	.tab-contents.loading:before,
	.ts-products-widget .ts-products-widget-wrapper.loading:before,
	.ts-product-deals-widget .ts-product-deals-slider-wrapper.loading:before,
	.ts-blogs-widget .ts-blogs-widget-wrapper.loading:before,
	.ts-recent-comments-widget .ts-recent-comments-widget-wrapper.loading:before,
	.blogs article a.gallery.loading:before,
	.single .gallery.loading:before,
	.widget-container .ts-testimonial-wrapper.content-no-border.loading:before,
	.ts-logo-slider-wrapper.content-border.loading .content-wrapper:before, 
	.ts-testimonial-wrapper.content-border.loading:before, 
	.ts-twitter-slider.content-border.loading:before,
	.load-more-wrapper .button.loading:before,
	body .vc_general.vc_tta-tabs .vc_tta-panels-container .vc_tta-panels,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab.vc_active > a,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a:hover,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a:hover,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a:hover,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover a,
	.woocommerce #payment div.payment_box, 
	.woocommerce-page #payment div.payment_box,
	.ts-feature-wrapper .feature-icon,
	.ts-blogs article .content-meta,
	.list-posts article,
	article.single .entry-content,
	.ts-feature-wrapper.has-image .feature-header,
	.ts-team-member .content-info,
	.vc_toggle,
	.vc_progress_bar .vc_single_bar:before,
	.woocommerce div.product .woocommerce-tabs .panel,
	.ts-twitter-slider.content-border,
	.ts-testimonial-wrapper.content-border,
	.ts-product-in-category-tab-wrapper,
	body .flexslider .slides,
	body .wpb_gallery_slides.wpb_slider_nivo,
	.ts-list-of-product-categories-wrapper,
	.ts-product-in-sub-category-tab-wrapper,
	/* Slider icon thumbnail */
	.images-thumbnails > .thumbnails .owl-controls .owl-nav > div,
	.pp_woocommerce .owl-controls .owl-nav > div,
	.pp_woocommerce .owl-controls .owl-nav > div:hover,
	/* Compare table */
	#cboxLoadingOverlay,
	/* Lightbox theme sky */
	body div.pp_pic_holder.ts-lightbox:before,
	body div.pp_pic_holder.ts-lightbox.loaded:before,
	body .ts-lightbox .pp_content_container,
	/* Forum */
	#bbpress-forums ul.bbp-lead-topic, 
	#bbpress-forums ul.bbp-topics, 
	#bbpress-forums ul.bbp-forums, 
	#bbpress-forums ul.bbp-replies, 
	#bbpress-forums ul.bbp-search-results
	{
		background-color:<?php echo esc_html($ts_widget_content_background_color) ?>;
	}
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab.vc_active > a,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a:hover,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover a,
	.portfolio-inner .figcaption:before,
	.ts-price-table .table-description ul li,
	.woocommerce-checkout #payment div.payment_box:before{
		border-bottom-color:<?php echo esc_html($ts_widget_content_background_color) ?>;
	}

	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a:hover{
		border-right-color:<?php echo esc_html($ts_widget_content_background_color) ?>;
	}
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a:hover{
		border-left-color:<?php echo esc_html($ts_widget_content_background_color) ?>;
	}

	.tab-content.loading:before,
	.yith-wcwl-add-to-wishlist .loading:after{
		background-color:<?php echo esc_html($ts_widget_content_background_color) ?>;
		opacity:0.7;
	}
	.single-navigation a .product-info:after{
		color:<?php echo esc_html($ts_widget_content_background_color) ?>;
	}
	/* BODY COLOR */

	body,
	.cat-links a,
	.tag-links a,
	.pp_woocommerce div.product .summary div[itemprop="description"], 
	.woocommerce div.product.summary div[itemprop="description"], 
	.woocommerce-page div.product .summary div[itemprop="description"],
	/* WIDGET */
	p.lost_password a,
	span.bbp-admin-links a,
	span.bbp-admin-links,
	.counter-wrapper .ref-wrapper,
	.woocommerce .widget_layered_nav ul li a,
	.ts-product-attribute > div a,
	.woocommerce .widget_layered_nav ul li span,
	.comment_list_widget .comment-body,
	header.ts-header .forgot-pass a,
	.prod-cat-show-top-content-button a,
	.woocommerce .woocommerce-ordering .orderby ul li a, 
	.woocommerce-page .woocommerce-ordering .orderby ul li a,
	.sku-wrapper span,
	article .social-sharing li a, 
	div.product .social-sharing li a,
	.social-sharing .print a,
	.social-sharing .email a,
	.woocommerce table.shop_attributes td, 
	.woocommerce-page table.shop_attributes td,
	.woocommerce table.shop_attributes th, 
	.woocommerce-page table.shop_attributes th,
	.woocommerce p.stars a,
	.woocommerce-product-rating .woocommerce-review-link,
	table tfoot th,
	.woocommerce table.shop_table.customer_details th,
	.ts-team-member .image-thumbnail .social,
	.woocommerce-checkout #payment div.payment_box,
	article a.button-readmore,
	body div.pp_default .pp_nav .currentTextHolder,
	/* Forum */
	#bbpress-forums .status-category > li > .bbp-forums-list > li a,
	li.bbp-forum-freshness a, 
	li.bbp-topic-freshness a{
		color:<?php echo esc_html($ts_text_color) ?>;
	}
	select,
	textarea,
	html input[type^="search"],
	html input[type^="text"], 
	html input[type^="email"],
	html input[type^="password"],
	#bbpress-forums #bbp-your-profile fieldset input, 
	#bbpress-forums #bbp-your-profile fieldset textarea,
	.bbp-login-form .bbp-username input, 
	.bbp-login-form .bbp-email input, 
	.bbp-login-form .bbp-password input,
	.select2-drop,
	footer .vc_col-sm-3 .feedburner-subscription input[type="text"], 
	footer .vc_col-sm-4 .feedburner-subscription input[type="text"]{
		color:<?php echo esc_html($ts_text_color) ?>;
		border-color:<?php echo esc_html($ts_border_color) ?>;
	}
	html input[type^="search"]:hover,
	html input[type^="text"]:hover, 
	html input[type^="email"]:hover,
	html input[type^="password"]:hover,
	html textarea:hover,
	html input[type^="search"]:focus,
	html input[type^="text"]:focus, 
	html input[type^="email"]:focus,
	html input[type^="password"]:focus,
	input:-webkit-autofill, 
	textarea:-webkit-autofill, 
	select:-webkit-autofill,
	html textarea:focus,
	html input:focus:invalid:focus, 
	html select:focus:invalid:focus,
	.woocommerce form .form-row textarea:hover, 
	.woocommerce-page form .form-row textarea:hover,
	.woocommerce form .form-row textarea:focus, 
	.woocommerce-page form .form-row textarea:focus,
	#bbpress-forums #bbp-your-profile fieldset input:hover, 
	#bbpress-forums #bbp-your-profile fieldset textarea:hover,
	#bbpress-forums #bbp-your-profile fieldset input:focus, 
	#bbpress-forums #bbp-your-profile fieldset textarea:focus,
	.bbp-login-form .bbp-username input:hover, 
	.bbp-login-form .bbp-email input:hover, 
	.bbp-login-form .bbp-password input:hover,
	.bbp-login-form .bbp-username input:focus, 
	.bbp-login-form .bbp-email input:focus, 
	.bbp-login-form .bbp-password input:focus,
	footer .vc_col-sm-3 .feedburner-subscription input[type="text"]:hover, 
	footer .vc_col-sm-4 .feedburner-subscription input[type="text"]:hover,
	footer .vc_col-sm-3 .feedburner-subscription input[type="text"]:focus, 
	footer .vc_col-sm-4 .feedburner-subscription input[type="text"]:focus,
	.select2-container .select2-choice,
	.select2-dropdown-open.select2-drop-above .select2-choice, 
	.select2-dropdown-open.select2-drop-above .select2-choices,
	.woocommerce form .form-row.woocommerce-validated .select2-container, 
	.woocommerce form .form-row.woocommerce-validated input.input-text, 
	.woocommerce form .form-row.woocommerce-validated select,
	body .select2-drop-active,
	body .select2-drop,
	body .select2-container .select2-choice,
	/* Lightbox theme sky */
	.ts-lightbox .feedburner-subscription input[type="text"]:hover,
	.ts-lightbox .feedburner-subscription input[type="text"]:focus{
		border-color:<?php echo ts_calc_color($ts_border_color, '#101010', false) ?>;
		color:<?php echo ts_calc_color($ts_text_color, '#1a1a1a', false) ?>;
	}
	.product-categories,
	.woocommerce .products .product .product-categories a, 
	.woocommerce-page .products .product .product-categories a,
	.woocommerce .widget-container il li .product-categories a,
	.woocommerce-page ul li .widget-container .product-categories a,
	.widget-container ul li .product-categories a,
	.woocommerce .products .product .product-categories, 
	.woocommerce-page .products .product .product-categories,
	.woocommerce .widget-container il li .product-categories,
	.woocommerce-page ul li .widget-container .product-categories,
	.widget-container ul li .product-categories,
	.widget.ts-products-widget .product-categories a,
	.woocommerce-page .widget.ts-products-widget .product-categories a,
	.widget.ts-products-widget .product-categories,
	.woocommerce-page .widget.ts-products-widget .product-categories,
	body .vc_general.vc_tta-tabs .vc_tta-tab > a,
	.testimonial-content .byline,
	.widget-container .post-meta span,
	/* WIDGET */
	.widget-container .tagcloud a,
	.comment_list_widget .comment-meta .meta,
	.ts-twitter-widget .date-time,
	.gridlist-toggle a,
	.prod-cat-show-top-content-button a:after,
	.woocommerce .woocommerce-ordering .orderby > li:after, 
	.woocommerce-page .woocommerce-ordering .orderby > li:after,
	/* Rating no comment */
	.woocommerce .products .star-rating.no-rating, 
	.woocommerce-page .products .star-rating.no-rating, 
	.star-rating.no-rating:before, 
	.pp_woocommerce .star-rating.no-rating:before, 
	.woocommerce .star-rating.no-rating:before, 
	.woocommerce-page .star-rating.no-rating:before, 
	.testimonial-content .rating.no-rating:before,
	.comment-count .number,
	.comments-area .datetime, 
	.comments-area .reply,
	.comments-area .reply .comment-reply-link,
	.portfolio-like,
	.ts-team-member .role,
	.date-time-meta{
		color:<?php echo ts_calc_color($ts_text_color, '#383838', true) ?>;
	}
	.ts-twitter-slider .owl-dots > div > span:before,
	.ts-testimonial-wrapper .owl-dots > div > span:before{
		border-color:<?php echo ts_calc_color($ts_text_color, '#383838', true) ?>;
	}
	::-webkit-input-placeholder {
		color:<?php echo ts_calc_color($ts_text_color, '#383838', true) ?>;
	}

	:-moz-placeholder { /* Firefox 18- */
		color:<?php echo ts_calc_color($ts_text_color, '#383838', true) ?>;
	}

	::-moz-placeholder {  /* Firefox 19+ */
		color:<?php echo ts_calc_color($ts_text_color, '#383838', true) ?>;
	}

	:-ms-input-placeholder {  
		color:<?php echo ts_calc_color($ts_text_color, '#383838', true) ?>;
	}
	/* saf3+, chrome1+ */
	@media screen and (-webkit-min-device-pixel-ratio:0) {
		input:-webkit-autofill{
			color:<?php echo esc_html($ts_text_color); ?>;
		}
	}
	body .theme-default .nivo-controlNav a:before{
		border-color:<?php echo esc_html($ts_text_color); ?>;
	}
	body .theme-default .nivo-controlNav a:hover:before,
	body .theme-default .nivo-controlNav a.active:before{
		border-color:<?php echo esc_html($ts_text_color); ?>;
		background-color:<?php echo esc_html($ts_text_color); ?>;
	}

	/* =============== 4. HEADING COLOR ================ */

	h1,h2,h3,h4,h5,h6,
	.h1,.h2,.h3,.h4,.h5,.h6,
	.woocommerce > form > fieldset legend,
	#main .ts-feedburner-subscription-shortcode .subscribe-widget,
	.widget-title-wrapper a.block-control,
	#bbpress-forums .status-category .bbp-forum-title,
	.type-forum .bbp-forum-title,
	#bbpress-forums li.bbp-footer,
	span.bbp-admin-links a:hover,
	#bbpress-forums fieldset.bbp-form legend,
	.widget-container.ts-product-categories-widget ul.product-categories span.icon-toggle,
	.widget-container.widget_categories > ul li.cat-parent > span.icon-toggle{
		color:<?php echo esc_html($ts_heading_color) ?>;
	}
	body div.ppt{
		color:<?php echo esc_html($ts_heading_color) ?> !important;
	}
	body.error404 h1:before{
		border-color:<?php echo esc_html($ts_text_color) ?>;
	}

	/* ================= 5. LINK COLOR ================= */

	a{
		color:<?php echo esc_html($ts_link_color) ?>;
	}
	a:hover,
	a:active{
		color:<?php echo esc_html($ts_link_color_hover) ?>;
	}


	/* ============= 6. PRIMARY TEXT COLOR ==============*/

	body .rev_slider_wrapper .rev-btn
		color:<?php echo esc_html($ts_text_color_in_bg_second) ?> !important;
	}
	.counter-wrapper > div .number-wrapper{
		color:<?php echo esc_html($ts_text_color_in_bg_second) ?>;
	}
	/* Portfolio */
	.portfolio-inner .icon-group a{
		background-color:<?php echo esc_html($ts_text_color_in_bg_second) ?>;
	}
	label ,
	.wpcf7 p,
	dt,
	.primary-text,
	.banner-fullwidth-wrapper .banner_detail a.banner-button,
	/* WIDGET */
	.woocommerce .widget-container .price_slider_amount .price_label,
	.woocommerce-page .widget-container .price_slider_amount .price_label,
	.widget-container .tagcloud a:hover,
	/* PRODUCT DETAIL */
	h3.heading-title > a,
	body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a,
	.vc_toggle_title h4,
	.vc_toggle .vc_toggle_icon:before,
	.ts-blogs-widget-wrapper.no-image .post-date,
	.ts-social-icons .ts-tooltip,
	.ts-product-categories-widget .widget-title-wrapper > .widget-title, 
	.comment_list_widget .comment-meta .author a,
	.widget-container ul > li a,
	section.widget_nav_menu > div > ul > li > a,
	.ts-heading h1,
	.ts-heading h2,
	.ts-heading h3,
	.ts-heading h4,
	.avatar-name a,
	h1 > a,
	h2 > a,
	h3 > a,
	h4 > a,
	h5 > a,
	.secondary-color,
	.feedburner-subscription .widget-title-wrapper > .widget-title,
	.widget-container.ts-product-categories-widget ul.product-categories li a,
	.widget-title,
	header.ts-header .header-top #lang_sel_click ul ul a,
	header.ts-header .header-currency ul li,
	body .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
	body .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tab > a,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover a,
	.vc_progress_bar .vc_single_bar .vc_label,
	.vc_pie_chart .vc_pie_chart_value,
	.ts-banner h2,
	.ts-banner h3,
	.ts-banner h4,
	.ts-banner .heading-big-body,
	.ts-banner .heading-big,
	.single article .tags-link > span:first-child,
	.single article .cats-link > span:first-child,
	.list-posts article .cats-link > span:first-child,
	.summary .meta-wrapper .cats-link > span:first-child,
	.summary .meta-wrapper .tags-link > span:first-child,
	.sku-wrapper,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
	.woocommerce p.stars a:hover,
	body div.product .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
	body div.product .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
	.woocommerce-cart .cart-collaterals .cart_totals table td, 
	.woocommerce-cart .cart-collaterals .cart_totals table th,
	.shipping-calculator-button,
	.woocommerce-billing-fields > h3,
	.theme-title h3, 
	.cross-sells > h2, 
	.upsells > h2,
	.related > h2,
	.cart_totals,
	.cart_totals h2,
	.ts-shortcode .shortcode-heading-wrapper .heading-title,
	.heading-shortcode,
	.comments-title .heading-title, 
	#comment-wrapper .heading-title,
	#order_review_heading,
	.list-posts article .entry-format .date-time,
	.blogs article .thumbnail-content .date-time,
	.single-post article .entry-format .date-time,
	.widget-container .post_list_widget li .author a:hover,
	.comment-author .author-name a,
	.woocommerce form.login, 
	.woocommerce form.register, 
	.woocommerce-page form.login, 
	.woocommerce-page form.register,
	.woocommerce .checkout #order_review table th,
	.woocommerce-page .checkout #order_review table th,
	.woocommerce-page .checkout #order_review table td,
	.woocommerce .checkout #order_review table td,
	.desc-big,
	.feedburner-subscription .widgettitle,
	h2.h2-big-2,
	.desc-bold-upper,
	.column-tabs .tabs li,
	.woocommerce .ts-product-deals-slider-wrapper.list .products .product .short-description,
	.ts-list-of-product-categories-wrapper .list-categories li a,
	.row-heading-tabs ul li,
	.row-heading-tabs ul li a,
	.ts-product-in-category-tab-wrapper .see-more-wrapper .see-more-button,
	/* Slider icon thumbnail */
	.images-thumbnails > .thumbnails .owl-controls .owl-nav > div,
	/* Portfolio */
	.portfolio-inner .icon-group a,
	.portfolio-info p,
	.single-portfolio .info-content .entry-title,
	.single-portfolio .ic-like,
	/* Team */
	.ts-team-member header > h3 a,
	/* Forum */
	.type-topic .bbp-topic-title > a,
	#bbpress-forums div.bbp-topic-author a.bbp-author-name, 
	#bbpress-forums div.bbp-reply-author a.bbp-author-name,
	.bbp-meta .bbp-topic-permalink,
	.bbp-topic-title-meta a,
	#bbpress-forums #bbp-single-user-details #bbp-user-navigation a,
	#favorite-toggle a, 
	#subscription-toggle a,
	/* Compare table */
	body table.compare-list th,
	body table.compare-list tr.title th,
	body table.compare-list tr.image th,
	body table.compare-list tr.price th,
	/* Lightbox theme sky */
	.ts-lightbox .feedburner-subscription *
	{
		color:<?php echo esc_html($ts_secondary_color) ?>;
	}
	body .rev_slider_wrapper .rev-btn:hover,
	.cart-list li .cart-item-wrapper a.remove,
	.woocommerce .widget_shopping_cart .cart_list li a.remove, 
	.woocommerce.widget_shopping_cart .cart_list li a.remove,
	body table.compare-list tr.remove td > a .remove:before,
	body .yith-woocompare-widget ul.products-list a.removebefore,
	body .pp_nav .pp_play:before, 
	body .pp_nav .pp_pause:before,
	body .pp_arrow_previous:before, 
	body .pp_arrow_next:before,
	body div.pp_woocommerce.pp_pic_holder .pp_arrow_previous:before, 
	body div.pp_woocommerce.pp_pic_holder .pp_arrow_next:before{
		color:<?php echo esc_html($ts_secondary_color) ?> !important;
	}
	.ts-blog-category .content-wrapper .item section:after{
		background-color:<?php echo esc_html($ts_secondary_color) ?>;
	}
	.ts-product-attribute > div.color a:before{
		border-color:<?php echo esc_html($ts_secondary_color) ?>;
	}
	.woocommerce .button.button-secondary,
	.woocommerce-page .button.button-secondary,
	.woocommerce #content .button.button-secondary,
	.woocommerce-page #content .button.button-secondary,
	.woocommerce .button.button-transparent:hover,
	.woocommerce-page .button.button-transparent:hover,
	.woocommerce #content .button.button-transparent:hover,
	.woocommerce-page #content .button.button-transparent:hover,
	body .button.button-transparent:hover,
	body #content .button.button-transparent:hover,
	body #content .button.button-secondary,
	body .button.button-secondary,
	.woocommerce .button.button-primary:hover,
	.woocommerce-page .button.button-primary:hover,
	.woocommerce #content .button.button-primary:hover,
	.woocommerce-page #content .button.button-primary:hover,
	body .button.button-primary:hover,
	body #content .button.button-primary:hover,
	body input.wpcf7-submit,
	body .rev_slider_wrapper .rev-btn,
	.pp_woocommerce div.product form.cart .button:hover, 
	.woocommerce #content div.product form.cart .button:hover, 
	.woocommerce div.product form.cart .button:hover, 
	.woocommerce-page #content div.product form.cart .button:hover, 
	.woocommerce-page div.product form.cart .button:hover,
	.social-sharing.style-2 .ts-social-sharing li a,
	.single-portfolio .ic-like:hover,
	.woocommerce form.login .button, 
	.woocommerce form.register .button, 
	.woocommerce-page form.login .button, 
	.woocommerce-page form.register .button,
	.woocommerce #payment #place_order:hover, 
	.woocommerce-page #payment #place_order:hover,
	/* Forum */
	#bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover,
	#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
	/* Quick view */
	body .ts-lightbox.pp_pic_holder a.pp_close:before,
	body div.pp_default a.pp_close:before,
	body div.pp_woocommerce.pp_pic_holder .pp_close:before,
	body div.pp_woocommerce.pp_pic_holder a.pp_expand:before,
	body div.pp_woocommerce.pp_pic_holder a.pp_contract:before,
	body div.pp_default a.pp_expand:before,
	body div.pp_default a.pp_contract:before,
	/* Compare table */
	body table.compare-list .add-to-cart td a:hover,
	#cboxClose,
	/* QUANTITY */
	.pp_woocommerce .quantity .minus:hover,
	.pp_woocommerce .quantity .plus:hover,
	.woocommerce #content .quantity .minus:hover, 
	.woocommerce #content .quantity .plus:hover, 
	.woocommerce .quantity .minus:hover, 
	.woocommerce .quantity .plus:hover, 
	.woocommerce-page #content .quantity .minus:hover, 
	.woocommerce-page #content .quantity .plus:hover, 
	.woocommerce-page .quantity .minus:hover, 
	.woocommerce-page .quantity .plus:hover,
	.pp_woocommerce .quantity .minus:focus,
	.pp_woocommerce .quantity .plus:focus,
	.woocommerce #content .quantity .minus:focus, 
	.woocommerce #content .quantity .plus:focus, 
	.woocommerce .quantity .minus:focus, 
	.woocommerce .quantity .plus:focus, 
	.woocommerce-page #content .quantity .minus:focus, 
	.woocommerce-page #content .quantity .plus:focus, 
	.woocommerce-page .quantity .minus:focus, 
	.woocommerce-page .quantity .plus:focus,
	#calendar_wrap caption{
		background-color:<?php echo esc_html($ts_secondary_color) ?>;
		color:<?php echo esc_html($ts_text_color_in_bg_second) ?>;
		border-color:<?php echo esc_html($ts_secondary_color) ?>;
	}
	/* Remove button */
	.woocommerce #content table.shop_table .product-remove a,
	.woocommerce table.shop_table .product-remove a, 
	.woocommerce-page #content table.shop_table .product-remove a, 
	.woocommerce-page table.shop_table .product-remove a,
	.button-light:hover,
	.button-fill-light:hover{
		background-color:<?php echo esc_html($ts_secondary_color) ?> !important;
		color:<?php echo esc_html($ts_text_color_in_bg_second) ?> !important;
		border-color:<?php echo esc_html($ts_secondary_color) ?> !important;
	}
	.woocommerce .button.button-secondary.transparent:hover,
	.woocommerce-page .button.button-secondary.transparent:hover,
	.woocommerce #content .button.button-secondary.transparent:hover,
	.woocommerce-page #content .button.button-secondary.transparent:hover,
	body .button.button-secondary.transparent:hover,
	body #content .button.button-secondary.transparent:hover,
	.woocommerce .button.button-transparent,
	.woocommerce-page .button.button-transparent,
	.woocommerce #content .button.button-transparent,
	.woocommerce-page #content .button.button-transparent,
	body .button.button-transparent,
	body #content .button.button-transparent{
		background-color:transparent;
		color:<?php echo esc_html($ts_secondary_color) ?>;
		border-color:<?php echo esc_html($ts_secondary_color) ?>;
	}
	/* BUTTON DOTS SLIDER */
	.owl-controls .owl-nav > div,
	.single-navigation > a{
		color:<?php echo esc_html($ts_nav_slider_icon_color) ?>;
		border-color:<?php echo esc_html($ts_nav_slider_border_color) ?>;
		background:transparent;
	}
	.ts-testimonial-wrapper.text-light .owl-controls .owl-nav > div:hover:before,
	.ts-testimonial-wrapper.text-light .owl-controls .owl-nav > div:hover,
	.ts-logo-slider-wrapper.style-light .owl-controls .owl-nav > div:hover,
	.ts-logo-slider-wrapper.style-light .owl-controls .owl-nav > div:hover:before,
	.owl-controls .owl-nav > div:hover,
	.single-navigation > a:hover,
	.ts-twitter-slider .owl-dots > div > span:hover:before,
	.ts-testimonial-wrapper .owl-dots > div > span:hover:before,
	.ts-twitter-slider .owl-dots > div.active > span:before,
	.ts-testimonial-wrapper .owl-dots > div.active > span:before,
	.ts-twitter-slider.text-light .owl-controls .owl-nav > div:hover,
	.ts-twitter-slider.text-light .owl-controls .owl-nav > div:hover:before{
		color:<?php echo esc_html($ts_primary_color) ?>;
		border-color:<?php echo esc_html($ts_primary_color) ?>;
		background:transparent;
	}
	/* Footer */
	footer .owl-controls .owl-nav > div{
		color:<?php echo esc_html($ts_nav_slider_border_color) ?>;
		border-color:<?php echo esc_html($ts_nav_slider_border_color) ?>;
		background:transparent;
	}
	footer .owl-controls .owl-nav > div:hover{
		color:<?php echo esc_html($ts_primary_color) ?>;
		border-color:<?php echo esc_html($ts_primary_color) ?>;
		background:transparent;
	}

	/* =============== 7. PRIMARY COLOR ================*/

	/* CUSTOM COLOR */
	.ts-social-icons .ts-tooltip,
	table thead th,
	.ts-dropcap.style-2,
	blockquote.blockquote-bg,
	.vc_pie_chart.important .vc_pie_chart_value,
	.vc_toggle_active .vc_toggle_icon:before,
	/* Slider icon thumbnail */
	.images-thumbnails > .thumbnails .owl-controls .owl-nav > div:hover,
	.list-posts article.post_format-post-format-quote .blockquote-meta,
	.widget-container .post_list_widget .blockquote-meta .author a:hover,
	.widget-container .post_list_widget .blockquote-meta .author a,
	.post_list_widget .blockquote-meta,
	.post_list_widget .blockquote-meta *,
	article.quote .blockquote-meta,
	article.quote .blockquote-meta *,
	.list-posts article.post_format-post-format-quote .blockquote-meta *,
	/* Forum */
	#bbpress-forums ul.bbp-replies > .bbp-header,
	#bbpress-forums ul.bbp-lead-topic .bbp-header, 
	#bbpress-forums ul.bbp-topics .bbp-header, 
	#bbpress-forums ul.bbp-forums .bbp-header, 
	#bbpress-forums ul.bbp-replies > .bbp-header,
	#bbpress-forums ul.bbp-search-results .bbp-header,
	#bbpress-forums .bbp-header #favorite-toggle a:hover,
	#bbpress-forums .bbp-header #subscription-toggle a:hover,
	#bbpress-forums .bbp-header div.bbp-topic-content a, 
	#bbpress-forums .bbp-header div.bbp-reply-content a,
	/* Portfolio */
	.portfolio-inner .icon-group a:hover,
	/* Price Table */
	.ts-price-table header,
	.ts-price-table header h3,
	/* Compare table */
	body > h1{
		color:<?php echo esc_html($ts_text_color_in_bg_primary) ?>;
	}
	.primary-color,
	.ts-dropcap,
	.ul-style li:before,
	.ol-style li:before,
	h1 > a:hover,
	h2 > a:hover,
	h3 > a:hover,
	h4 > a:hover,
	h5 > a:hover,
	.cat-links a:hover,
	.tag-links a:hover,
	.widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.woocommerce .widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.woocommerce-page .widget-container ul.product_list_widget .ts-wg-meta > a:hover,
	/* PRODUCT DETAIL */
	.order-number a,
	label a:hover,
	.widget-container ul > li a:hover,
	section.widget_nav_menu > div > ul > li > a:hover,
	.widget-container ul ul li > a:hover,
	.list-posts .heading-title a:hover,
	.post_list_widget .post-meta i,
	article .comment-count i,
	article .author i,
	p.lost_password a:hover,
	.products .product.product-category a:hover h3, 
	.woocommerce .products .product.product-category a:hover h3, 
	.woocommerce-page .products .product.product-category a:hover h3,
	.ts-tiny-account-wrapper:before,
	#lang_sel_click > ul > li:before,
	.header-currency .wcml_currency_switcher:before,
	header.ts-header .header-currency li:hover,
	header.ts-header #lang_sel_click ul li a:hover,
	header.ts-header .forgot-pass a:hover,
	.woocommerce .products .product .product-categories a:hover, 
	.woocommerce-page .products .product .product-categories a:hover,
	.woocommerce .widget-container il li .product-categories a:hover,
	.woocommerce-page ul li .widget-container .product-categories a:hover,
	.widget-container ul li .product-categories a:hover,
	.widget.ts-products-widget .product-categories a:hover,
	.woocommerce-page .widget.ts-products-widget .product-categories a:hover,
	.comment_list_widget .comment-meta .author a:hover,
	.woocommerce .widget_layered_nav ul li:hover a,
	.woocommerce .widget_layered_nav ul li.chosen a, 
	.woocommerce-page .widget_layered_nav ul li.chosen a,
	.ts-product-attribute > div:hover a,
	.ts-product-attribute > div.selected a,
	.widget-container.ts-product-categories-widget ul.product-categories span.icon-toggle:hover,
	.widget-container.widget_categories > ul li.cat-parent > span.icon-toggle:hover,
	.widget-container.ts-product-categories-widget ul.product-categories li.current > a,
	.widget-container.ts-product-categories-widget ul.product-categories li a:hover,
	.widget-container.widget_categories > ul li.current-cat > a,
	.widget-container.widget_categories > ul li a:hover,
	.avatar-name a:hover,
	.ts-testimonial-wrapper.text-light .testimonial-content h4.name a:hover,
	.ts-twitter-slider.text-light .twitter-content h4.name > a:hover,
	.woocommerce .ts-product-deals-slider-wrapper .products .product .product-categories a:hover,
	.woocommerce .ts-product-deals-slider-wrapper .products .center .product-name a:hover,
	.gridlist-toggle a:hover,
	.gridlist-toggle a.active,
	.woocommerce .woocommerce-ordering .orderby:hover > li .orderby-current, 
	.woocommerce-page .woocommerce-ordering .orderby:hover > li .orderby-current,
	.woocommerce .woocommerce-ordering .orderby li a.current, 
	.woocommerce-page .woocommerce-ordering .orderby li a.current,
	.woocommerce .woocommerce-ordering .orderby:hover > li:after, 
	.woocommerce-page .woocommerce-ordering .orderby:hover > li:after,
	.prod-cat-show-top-content-button a:hover,
	.prod-cat-show-top-content-button a:hover:after,
	.woocommerce .woocommerce-ordering .orderby ul li a:hover, 
	.woocommerce-page .woocommerce-ordering .orderby ul li a:hover,
	.social-sharing .print a:hover,
	.social-sharing .email a:hover,
	body div.product .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
	body div.product .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
	.widget-container .post_list_widget li .author a,
	.comment-author .author-name a:hover,
	.comments-area .datetime i, 
	.comments-area .reply i,
	.comments-area .reply:hover .comment-reply-link,
	.shipping-calculator-button:hover,
	.woocommerce .checkout #order_review table thead th,
	.woocommerce-page .checkout #order_review table thead th,
	article a.button-readmore:hover,
	/* Header */
	.ts-tiny-cart-wrapper .ic-cart:before,
	/* Header search */
	#ts-search-result-container ul li a:hover,
	.category-dropdown .select2-results .select2-highlighted,
	/* Text Hover header top */
	.header-top .my-account-wrapper .account-control > a:hover,
	.header-top .my-wishlist-wrapper a:hover,
	#lang_sel_click > ul > li > a:hover,
	.header-currency > div > a:hover,
	/* Menu phone */
	header.ts-header .mobile-menu li > a:hover,
	header.ts-header .mobile-menu li.current-menu-item > a,
	header.ts-header .mobile-menu li.current_page_item > a,
	.group-button-icon-header .shopping-cart-wrapper a.cart-control span.cart-number,
	/* Portfolio */
	.ts-portfolio-wrapper .filter-bar li:hover,
	.ts-portfolio-wrapper .filter-bar li.current,
	/* Team */
	.ts-team-member header > h3 a:hover,
	.ts-price-table header:after,
	/* Product detail */
	.pp_woocommerce div.product form.cart .variations td .reset_variations,
	.woocommerce #content div.product form.cart .variations td .reset_variations, 
	.woocommerce div.product form.cart .variations td .reset_variations, 
	.woocommerce-page #content div.product form.cart .variations td .reset_variations, 
	.woocommerce-page div.product form.cart .variations td .reset_variations,
	/* Product */
	.woocommerce .product .thumbnail-wrapper .button-in:hover a,
	.woocommerce .product .thumbnail-wrapper .button-in:hover,
	.button-in a:hover,
	.button-in:hover a,
	.woocommerce .product .thumbnail-wrapper .product-group-button .loop-add-to-cart a:hover,
	.woocommerce .product .thumbnail-wrapper .button-in:hover i:before,
	/* Product name */
	.widget-container .product_list_widget li a:hover,
	.woocommerce .widget-container .product_list_widget li a:hover,
	.woocommerce-page .widget-container .product_list_widget li a:hover,
	.widget.ts-products-widget .ts-wg-meta > a:hover,
	.woocommerce-page .widget.ts-products-widget .ts-wg-meta > a:hover,
	h3.product-name > a:hover, 
	h3.product-name:hover,
	.product-name a:hover,
	.group_table a:hover,
	/* Forum */
	#bbpress-forums .status-category > .bbp-forum-info > a.bbp-forum-title:hover,
	.type-forum .bbp-forum-title:hover,
	.bbp-topic-started-in > a:hover,
	#bbpress-forums .status-category > li > .bbp-forums-list > li a:hover,
	li.bbp-forum-freshness a:hover, 
	li.bbp-topic-freshness a:hover,
	.type-topic .bbp-topic-title > a:hover,
	#bbpress-forums div.bbp-topic-author a.bbp-author-name:hover, 
	#bbpress-forums div.bbp-reply-author a.bbp-author-name:hover,
	.bbp-meta .bbp-topic-permalink:hover,
	.bbp-topic-title-meta a:hover,
	#favorite-toggle a:hover,
	#subscription-toggle a:hover,
	.ts-list-of-product-categories-wrapper .list-categories li a:hover,
	/* Social */
	.ts-social-icons .ts-tooltip:before,
	.ts-social-icons .social-icons.style-3 li a.custom-icon:hover span,
	footer#colophon .ts-social-icons .social-icons.style-3 li a.custom-icon:hover span
	{
		color:<?php echo esc_html($ts_primary_color) ?>;
	}
	body .pp_nav .pp_play:hover:before, 
	body .pp_nav .pp_pause:hover:before,
	body .pp_arrow_previous:hover:before, 
	body .pp_arrow_next:hover:before,
	body div.pp_woocommerce.pp_pic_holder .pp_arrow_previous:hover:before, 
	body div.pp_woocommerce.pp_pic_holder .pp_arrow_next:hover:before,
	body .rev_slider_wrapper .ts-button-style-2-light:hover{
		color:<?php echo esc_html($ts_primary_color) ?> !important;
	}
	.my-account-wrapper .dropdown-container:before,
	#lang_sel_click ul ul:before,
	.header-currency ul:before,
	.ts-price-table header:after,
	/* Header */
	.shopping-cart-wrapper .dropdown-container:before{
		border-top-color:<?php echo esc_html($ts_primary_color) ?>;
	}
	.ts-blogs-widget-wrapper.no-image .post-date,
	blockquote:after,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a:after,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a:after, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a:after, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:after,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover a:after, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a:after, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover a:after, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover a:after,
	.excerpt-line-top-bottom:before,
	.excerpt-line-top-bottom:after,
	.text-middle-line:before,
	.text-middle-line:after,
	.ts-price-table.active-table .table-description,
	.blogs article .thumbnail-content .date-time span:first-child:after,
	.list-posts article .entry-format .date-time span:first-child:after,
	.single-post article .entry-format .date-time span:first-child:after,
	/* Header */
	.shopping-cart-wrapper .ts-tiny-cart-wrapper{
		border-color:<?php echo esc_html($ts_primary_color) ?>;
	}
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a:after,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a:after,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active a:after,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a:hover:after,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active a:after,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a:hover:after,
	.woocommerce .product .thumbnail-wrapper .product-group-button > div a:hover{
		border-color:<?php echo esc_html($ts_primary_color) ?> !important;
	}
	table thead th,
	blockquote.blockquote-bg,
	.post_list_widget .blockquote-meta,
	article.quote .ts-blockquote,
	.list-posts article.post_format-post-format-quote,
	.ts-dropcap.style-2,
	.vc_pie_chart.important .vc_pie_chart_value,
	.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range:before,
	.woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range:before,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
	/* Forum */
	#bbpress-forums ul.bbp-replies > .bbp-header,
	#bbpress-forums ul.bbp-lead-topic .bbp-header, 
	#bbpress-forums ul.bbp-topics .bbp-header, 
	#bbpress-forums ul.bbp-forums .bbp-header, 
	#bbpress-forums ul.bbp-replies > .bbp-header,
	#bbpress-forums ul.bbp-search-results .bbp-header,
	/* Slider icon thumbnail */
	.images-thumbnails > .thumbnails .owl-controls .owl-nav > div:hover,
	/* Portfolio */
	.portfolio-inner .icon-group a:hover,
	/* Team icon custom */
	.ts-team-member .image-thumbnail .social a.custom:hover,
	/* Price Table */
	.ts-price-table header,
	/* Compare table */
	body > h1,
	/* Social */
	.ts-social-icons .social-icons li:hover a.custom-icon,
	footer#colophon .ts-social-icons li:hover a.custom-icon,
	.ts-social-icons .social-icons.style-3 li a.custom-icon:hover i,
	footer#colophon .ts-social-icons .social-icons.style-3 li a.custom-icon:hover i,
	.ts-social-icons .social-icons a.custom-icon .ts-tooltip,
	/* Header */
	.ts-tiny-cart-wrapper .ic-cart:after
	{
		background-color:<?php echo esc_html($ts_primary_color) ?>;
	}
	.woocommerce .button.button-secondary:hover,
	.woocommerce-page .button.button-secondary:hover,
	.woocommerce #content .button.button-secondary:hover,
	.woocommerce-page #content .button.button-secondary:hover,
	body .button.button-secondary:hover,
	body #content .button.button-secondary:hover,
	.woocommerce .button.button-primary,
	.woocommerce-page .button.button-primary,
	.woocommerce #content .button.button-primary,
	.woocommerce-page #content .button.button-primary,
	body .button.button-primary,
	body #content .button.button-primary,
	body input.wpcf7-submit:hover,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tab.vc_active > a,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tab > a:hover,
	body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
	body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
	.vc_toggle_default.vc_toggle_active .vc_toggle_title h4,
	.vc_toggle_default .vc_toggle_title:hover h4,
	.pp_woocommerce div.product form.cart .button, 
	.woocommerce #content div.product form.cart .button, 
	.woocommerce div.product form.cart .button, 
	.woocommerce-page #content div.product form.cart .button, 
	.woocommerce-page div.product form.cart .button,
	.ts-feature-wrapper .feature-icon:hover,
	.woocommerce form.login .button:hover, 
	.woocommerce form.register .button:hover, 
	.woocommerce-page form.login .button:hover, 
	.woocommerce-page form.register .button:hover,
	.woocommerce #payment #place_order, 
	.woocommerce-page #payment #place_order,
	/* Quick view hover */
	body .ts-lightbox.pp_pic_holder a.pp_close:hover:before,
	body .pp_nav .pp_play:hover:before, 
	body .pp_nav .pp_pause:hover:before,
	body div.pp_default a.pp_close:hover:before,
	body div.pp_woocommerce.pp_pic_holder .pp_close:hover:before,
	body div.pp_woocommerce.pp_pic_holder a.pp_expand:hover:before,
	body div.pp_woocommerce.pp_pic_holder a.pp_contract:hover:before,
	body div.pp_default a.pp_expand:hover:before,
	body div.pp_default a.pp_contract:hover:before,
	/* Compare table */
	body table.compare-list .add-to-cart td a,
	#cboxClose:hover{
		background-color:<?php echo esc_html($ts_primary_color) ?>;
		color:<?php echo esc_html($ts_text_color_in_bg_primary) ?>;
		border-color:<?php echo esc_html($ts_primary_color) ?>;
	}
	/* Revoluition button */
	body .rev_slider_wrapper .ts-button-border-primary.rev-btn:hover,
	body .rev_slider_wrapper .ts-button-fill-primary.rev-btn,
	/* Remove button */
	.woocommerce #content table.shop_table .product-remove a:hover,
	.woocommerce table.shop_table .product-remove a:hover, 
	.woocommerce-page #content table.shop_table .product-remove a:hover, 
	.woocommerce-page table.shop_table .product-remove a:hover{
		background-color:<?php echo esc_html($ts_primary_color) ?> !important;
		color:<?php echo esc_html($ts_text_color_in_bg_primary) ?> !important;
		border-color:<?php echo esc_html($ts_primary_color) ?> !important;
	}
	body .rev_slider_wrapper .ts-button-border-primary.rev-btn,
	body .rev_slider_wrapper .ts-button-fill-primary.rev-btn:hover,
	.products .product.product-category .shop-now-button:hover{
		color:<?php echo esc_html($ts_primary_color) ?> !important;
		border-color:<?php echo esc_html($ts_primary_color) ?> !important;
		background:transparent !important;
	}

	/* INPUT COLOR */
	*,
	* :before,
	* :after,
	.header-v3 .search-wrapper input[type="text"],
	.header-v5 .search-wrapper input[type="text"],
	body .vc_separator.border-color .vc_sep_line,
	.quantity input[type="number"],
	.pp_woocommerce .quantity .minus,
	.pp_woocommerce .quantity .plus,
	.woocommerce #content .quantity .minus, 
	.woocommerce #content .quantity .plus, 
	.woocommerce .quantity .minus, 
	.woocommerce .quantity .plus, 
	.woocommerce-page #content .quantity .minus, 
	.woocommerce-page #content .quantity .plus, 
	.woocommerce-page .quantity .minus, 
	.woocommerce-page .quantity .plus,
	.pp_woocommerce .quantity input.qty,
	.woocommerce #content .quantity input.qty,
	.woocommerce .quantity input.qty, 
	.woocommerce-page #content .quantity input.qty, 
	.woocommerce-page .quantity input.qty,
	.woocommerce table.shop_attributes th, 
	.woocommerce-page table.shop_attributes th,
	.woocommerce table.shop_attributes td, 
	.woocommerce-page table.shop_attributes td,
	.woocommerce .widget_layered_nav ul, 
	.woocommerce-page .widget_layered_nav ul,
	.woocommerce table.shop_table, 
	.woocommerce-page table.shop_table,
	.woocommerce table.shop_table td, 
	.woocommerce-page table.shop_table td,
	.woocommerce table.shop_table th, 
	.woocommerce-page table.shop_table th,
	body .wpb_flexslider.flexslider,
	.pp_woocommerce div.product div.thumbnails a:hover img, 
	.woocommerce #content div.product div.thumbnails a:hover img, 
	.woocommerce div.product div.thumbnails a:hover img, 
	.woocommerce-page #content div.product div.thumbnails a:hover img, 
	.woocommerce-page div.product div.thumbnails a:hover img,
	.select2-container .select2-choice,
	.woocommerce table.wishlist_table thead th, 
	.woocommerce table.wishlist_table tbody td,
	.woocommerce p.stars a.star-1, 
	.woocommerce p.stars a.star-2, 
	.woocommerce p.stars a.star-3, 
	.woocommerce p.stars a.star-4, 
	.woocommerce p.stars a.star-5,
	.woocommerce #reviews #comments ol.commentlist li .comment-text,
	.woocommerce table.shop_attributes,
	.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, 
	.woocommerce-page .widget_price_filter .price_slider_wrapper .ui-widget-content,
	body .vc_tta.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-panels-container,
	body .vc_tta.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-panels-container,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-panels-container .vc_tta-panels, 
	body .vc_general.vc_tta-tabs.background_color .vc_tta-panels-container .vc_tta-panels,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tab > a, 
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li a,
	body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a,
	body .vc_tta.vc_tta-accordion .vc_tta-panels-container .vc_tta-panel-body,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a,
	.vc_toggle_default .vc_toggle_title h4,
	.vc_toggle .vc_toggle_icon,
	.woocommerce #reviews #comments ol.commentlist li ,
	.woocommerce-page #reviews #comments ol.commentlist li,
	body div.product .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a:hover,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a:hover,
	body div.product .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
	.ts-price-table.active-table .table-description ul li,
	.dataTables_wrapper,
	/* Forum */
	#bbpress-forums li.bbp-body ul.forum, 
	#bbpress-forums li.bbp-body ul.topic,
	#bbpress-forums ul.bbp-lead-topic, 
	#bbpress-forums ul.bbp-topics, 
	#bbpress-forums ul.bbp-forums, 
	#bbpress-forums ul.bbp-replies, 
	#bbpress-forums ul.bbp-search-results,
	#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content,
	#bbpress-forums div.bbp-forum-header, 
	#bbpress-forums div.bbp-topic-header, 
	#bbpress-forums div.bbp-reply-header,
	#bbpress-forums li.bbp-header, 
	#bbpress-forums li.bbp-footer,
	#bbpress-forums #bbp-single-user-details #bbp-user-navigation a,
	/* Lightbox theme sky */
	.ts-lightbox .feedburner-subscription input[type="text"],
	/* Menu phone */
	header.ts-header .mobile-menu li > a{
		border-color:<?php echo esc_html($ts_border_color) ?>;
	}
	.woocommerce .checkout #order_review table tfoot tr.cart-subtotal th, 
	.woocommerce-page .checkout #order_review table tfoot tr.cart-subtotal th, 
	.woocommerce .checkout #order_review table tfoot tr.cart-subtotal td, 
	.woocommerce-page .checkout #order_review table tfoot tr.cart-subtotal td{
		border-top-color:<?php echo esc_html($ts_border_color) ?>;
	}
	#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar,
	.woocommerce .widget_layered_nav ul li:before,
	.ts-product-attribute > div:before,
	.vc_pie_chart .vc_pie_chart_value,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tabs-container .vc_tta-tabs-list:before ,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tabs-container .vc_tta-tabs-list:before,
	body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title:before,
	body .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tabs-list:before,
	body .vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tabs-list:before,
	.vc_toggle_title:before,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs:before, 
	.woocommerce div.product .woocommerce-tabs ul.tabs:before, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs:before, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs:before,
	.single-portfolio .ic-like,
	.ts-price-table .table-description:before{
		background-color:<?php echo esc_html($ts_border_color) ?>;
	}
	.single-navigation a .product-info > div:after,
	.widget-title:after,
	body .vc_general.vc_tta-tabs.default_no_border .vc_tta-tabs-container .vc_tta-tabs-list:after,
	body .vc_general.vc_tta-tabs.default .vc_tta-tabs-container .vc_tta-tabs-list:after,
	.ts-shortcode .shortcode-heading-wrapper .heading-title:after,
	.heading-shortcode:after,
	.theme-title:after,
	.cross-sells > h2:after,
	.upsells > h2:after,
	.related > h2:after{
		color:<?php echo esc_html($ts_border_color) ?>;
	}
	/* REVOLUTION SLIDER */

	.tp-leftarrow.tparrows:after,
	.tp-rightarrow.tparrows:after,
	.wpb_gallery .wpb_flexslider .flex-direction-nav a:after,
	.theme-default .nivo-directionNav a:after,
	.ts-product-category-slider-wrapper.ts-slider .owl-controls .owl-nav > div:after{
		background-color:<?php echo esc_html($ts_revo_navigation_background_color) ?> !important;
	}
	.tp-leftarrow.tparrows:before,
	.tp-rightarrow.tparrows:before,
	.wpb_gallery .wpb_flexslider .flex-direction-nav a:before,
	.theme-default .nivo-directionNav a:before,
	.ts-product-category-slider-wrapper.ts-slider .owl-controls .owl-nav > div:before{
		color:<?php echo esc_html($ts_revo_navigation_text_color) ?> !important;
	}
	.tp-bullets .tp-bullet:not(.thumb):hover:before,
	.tp-bullets .tp-bullet.selected:not(.thumb):before{
		border-color:<?php echo esc_html($ts_revo_navigation_text_color) ?>;
	}

	/* ================ 11. BUTTON =================== */
	#to-top a:hover,
	a.button:hover,
	button:hover, 
	input[type^="submit"]:hover, 
	.shopping-cart p.buttons a:hover, 
	.woocommerce #content input.button:hover, 
	.woocommerce #respond input#submit:hover, 
	.woocommerce a.button:hover, 
	.woocommerce button.button:hover, 
	.woocommerce input.button:hover, 
	.woocommerce-page #content input.button:hover, 
	.woocommerce-page #respond input#submit:hover, 
	.woocommerce-page a.button:hover, 
	.woocommerce-page button.button:hover, 
	.woocommerce-page input.button:hover, 
	.woocommerce #content input.button.alt:hover, 
	.woocommerce #respond input#submit.alt:hover, 
	.woocommerce a.button.alt:hover, 
	.woocommerce button.button.alt:hover, 
	.woocommerce input.button.alt:hover, 
	.woocommerce-page #content input.button.alt:hover, 
	.woocommerce-page #respond input#submit.alt:hover, 
	.woocommerce-page a.button.alt:hover, 
	.woocommerce-page button.button.alt:hover, 
	.woocommerce-page input.button.alt:hover, 
	#content button.button:hover,
	.woocommerce .widget_price_filter .price_slider_amount .button:hover,
	.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
	.woocommerce .widget_price_filter .price_slider_amount .button:focus,
	.woocommerce-page .widget_price_filter .price_slider_amount .button:focus,
	.cart_totals a.checkout-button.button,
	.woocommerce .cart_totals a.checkout-button.button,
	.woocommerce-page .cart_totals a.checkout-button.button,
	.woocommerce #respond input#submit.alt.disabled,
	.woocommerce #respond input#submit.alt.disabled:hover,
	.woocommerce #respond input#submit.alt:disabled,
	.woocommerce #respond input#submit.alt:disabled:hover,
	.woocommerce #respond input#submit.alt:disabled[disabled],
	.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
	.woocommerce a.button.alt.disabled,
	.woocommerce a.button.alt.disabled:hover,
	.woocommerce a.button.alt:disabled,
	.woocommerce a.button.alt:disabled:hover,
	.woocommerce a.button.alt:disabled[disabled],
	.woocommerce a.button.alt:disabled[disabled]:hover,
	.woocommerce button.button.alt.disabled,
	.woocommerce button.button.alt.disabled:hover,
	.woocommerce button.button.alt:disabled,
	.woocommerce button.button.alt:disabled:hover,
	.woocommerce button.button.alt:disabled[disabled],
	.woocommerce button.button.alt:disabled[disabled]:hover,
	.woocommerce input.button.alt.disabled,
	.woocommerce input.button.alt.disabled:hover,
	.woocommerce input.button.alt:disabled,
	.woocommerce input.button.alt:disabled:hover,
	.woocommerce input.button.alt:disabled[disabled],
	.woocommerce input.button.alt:disabled[disabled]:hover,
	.pp_woocommerce div.product .summary .compare:hover, 
	.woocommerce div.product .summary .compare:hover, 
	.woocommerce-page div.product .summary .compare:hover, 
	.woocommerce #content div.product .summary .compare:hover, 
	.woocommerce-page #content div.product .summary .compare:hover,
	div.product .summary .yith-wcwl-add-to-wishlist a:hover,
	/* PAGINATION */
	.woocommerce #content nav.woocommerce-pagination ul li a.next:hover:before, 
	.woocommerce nav.woocommerce-pagination ul li a.next:hover:before, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.next:hover:before, 
	.woocommerce-page nav.woocommerce-pagination ul li a.next:hover:before,
	.woocommerce #content nav.woocommerce-pagination ul li a.prev:hover:before, 
	.woocommerce nav.woocommerce-pagination ul li a.prev:hover:before, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.prev:hover:before, 
	.woocommerce-page nav.woocommerce-pagination ul li a.prev:hover:before,
	.ts-pagination ul li a.prev:hover:before,
	.ts-pagination ul li a.next:hover:before,

	.woocommerce #content nav.woocommerce-pagination ul li a.next:focus:before, 
	.woocommerce nav.woocommerce-pagination ul li a.next:focus:before, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.next:focus:before, 
	.woocommerce-page nav.woocommerce-pagination ul li a.next:focus:before,
	.woocommerce #content nav.woocommerce-pagination ul li a.prev:focus:before, 
	.woocommerce nav.woocommerce-pagination ul li a.prev:focus:before, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.prev:focus:before, 
	.woocommerce-page nav.woocommerce-pagination ul li a.prev:focus:before,
	.ts-pagination ul li a.prev:focus:before,
	.ts-pagination ul li a.next:focus:before,
	.ts-pagination ul li a:hover,
	.ts-pagination ul li a:focus,
	.ts-pagination ul li span.current,
	.woocommerce #content nav.woocommerce-pagination ul li a:hover, 
	.woocommerce #content nav.woocommerce-pagination ul li span.current, 
	.woocommerce nav.woocommerce-pagination ul li a:hover, 
	.woocommerce nav.woocommerce-pagination ul li span.current, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 
	.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 
	.woocommerce-page nav.woocommerce-pagination ul li a:hover, 
	.woocommerce-page nav.woocommerce-pagination ul li span.current,
	.woocommerce #content nav.woocommerce-pagination ul li a:focus, 
	.woocommerce nav.woocommerce-pagination ul li a:focus, 

	.woocommerce #content nav.woocommerce-pagination ul li a.next:focus, 
	.woocommerce nav.woocommerce-pagination ul li a.next:focus 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.next:focus, 
	.woocommerce-page nav.woocommerce-pagination ul li a.next:focus,
	.woocommerce #content nav.woocommerce-pagination ul li a.prev:focus, 
	.woocommerce nav.woocommerce-pagination ul li a.prev:focus, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.prev:focus, 
	.woocommerce-page nav.woocommerce-pagination ul li a.prev:focus,

	.woocommerce #content nav.woocommerce-pagination ul li a.next:hover, 
	.woocommerce nav.woocommerce-pagination ul li a.next:hover, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.next:hover, 
	.woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
	.woocommerce #content nav.woocommerce-pagination ul li a.prev:hover, 
	.woocommerce nav.woocommerce-pagination ul li a.prev:hover, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.prev:hover, 
	.woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,

	.bbp-pagination-links a:hover, 
	.bbp-pagination-links span.current,
	/* End Pager */
	body .single-post .single-navigation > a:hover
	{
		background-color:<?php echo esc_html($ts_button_background_color_hover) ?>;
		color:<?php echo esc_html($ts_button_text_color_hover) ?>;
		border-color:<?php echo esc_html($ts_button_border_color_hover) ?>;
	}
	#to-top a,
	a.button,
	button,
	input[type^="submit"],
	.shopping-cart p.buttons a,
	.woocommerce #content input.button,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-page #content input.button,
	.woocommerce-page #respond input#submit,
	.woocommerce-page a.button,
	.woocommerce-page button.button,
	.woocommerce-page input.button,
	.woocommerce #content input.button.alt,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce-page #content input.button.alt,
	.woocommerce-page #respond input#submit.alt,
	.woocommerce-page a.button.alt,
	.woocommerce-page button.button.alt,
	.woocommerce-page input.button.alt,
	#content button.button,
	.woocommerce .widget_price_filter .price_slider_amount .button,
	.woocommerce-page .widget_price_filter .price_slider_amount .button,
	.pp_woocommerce div.product .summary .compare, 
	.woocommerce div.product .summary .compare, 
	.woocommerce-page div.product .summary .compare, 
	.woocommerce #content div.product .summary .compare, 
	.woocommerce-page #content div.product .summary .compare,
	div.product .summary .yith-wcwl-add-to-wishlist a,
	body .single-post .single-navigation > a{
		background-color:<?php echo esc_html($ts_button_background_color) ?>;
		color:<?php echo esc_html($ts_button_text_color) ?>;
		border-color:<?php echo esc_html($ts_button_border_color) ?>;
	}
	/* PAGINATION */
	.woocommerce #content nav.woocommerce-pagination ul li a.next:before, 
	.woocommerce nav.woocommerce-pagination ul li a.next:before, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.next:before, 
	.woocommerce-page nav.woocommerce-pagination ul li a.next:before,
	.woocommerce #content nav.woocommerce-pagination ul li a.prev:before, 
	.woocommerce nav.woocommerce-pagination ul li a.prev:before, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a.prev:before, 
	.woocommerce-page nav.woocommerce-pagination ul li a.prev:before,
	.ts-pagination ul li a.prev:before,
	.ts-pagination ul li a.next:before,
	.ts-pagination ul li a,
	.woocommerce #content nav.woocommerce-pagination ul li a, 
	.woocommerce #content nav.woocommerce-pagination ul li span,
	.woocommerce nav.woocommerce-pagination ul li a, 
	.woocommerce nav.woocommerce-pagination ul li span, 
	.woocommerce-page #content nav.woocommerce-pagination ul li a, 
	.woocommerce-page #content nav.woocommerce-pagination ul li span, 
	.woocommerce-page nav.woocommerce-pagination ul li a,
	.woocommerce-page nav.woocommerce-pagination ul li span,
	.bbp-pagination-links a{
		background-color:<?php echo esc_html($ts_button_background_color) ?>;
		color:<?php echo ts_calc_color($ts_button_text_color, '#353535', true) ?>;
		border-color:<?php echo esc_html($ts_button_border_color) ?>;
	}
	/* BREADCRUMB */
	.breadcrumb-title-wrapper{
		background-color:<?php echo esc_html($ts_breadcrumb_background_color) ?>;
	}
	.breadcrumb-title-wrapper .breadcrumb-title *,
	.breadcrumbs-container > span.brn_arrow:before{
		color:<?php echo esc_html($ts_breadcrumb_text_color) ?>;
	}
	.breadcrumb-title-wrapper .breadcrumb-title a,
	.breadcrumb-title-wrapper .breadcrumb-title span.current{
		color:<?php echo esc_html($ts_breadcrumb_text_color) ?>;
	}
	
	/* ============= 3. HEADER COLORS ============== */
	header.ts-header .header-top{
		background-color:<?php echo esc_html($ts_header_top_background_color) ?>;
		border-color:<?php echo esc_html($ts_header_top_line_color) ?>;
	}
	header.ts-header .header-top a,
	header.ts-header .header-top,
	header.ts-header .header-v6 .header-top .search-wrapper input[type="text"]{
		color:<?php echo esc_html($ts_header_top_text_color) ?>;
	}
	.info-desc > span:last-child:before,
	.header-top-right .group-meta-header > div:last-child:before,
	.header-top-right .group-meta-header > div:before{
		border-color:<?php echo esc_html($ts_header_top_text_color) ?>;
	}
	.group-meta-header:before{
		background-color:<?php echo esc_html($ts_header_top_text_color) ?>;
	}
	header.ts-header .header-middle{
		background-color:<?php echo esc_html($ts_header_middle_background_color) ?>;
	}
	header.ts-header .header-v6 .sticky-wrapper.is-sticky .header-sticky:before,
	header.ts-header .header-v5 .sticky-wrapper.is-sticky .header-sticky:before,
	header.ts-header .header-v3 .sticky-wrapper.is-sticky .header-sticky:before{
		background-color:<?php echo esc_html($ts_header_middle_background_color) ?>;
	}
	header.ts-header .header-bottom{
		background-color:<?php echo esc_html($ts_header_bottom_background_color) ?>;
		border-color:<?php echo esc_html($ts_menu_top_line_color) ?>;
	}
	header.ts-header .sticky-wrapper.is-sticky .header-sticky:before{
		background-color:<?php echo esc_html($ts_header_bottom_background_color) ?>;
	}

	/* SHOPPING CART HEADER */
	.shopping-cart-wrapper a.cart-control,
	.shopping-cart-wrapper .cart-total .amount{
		color:<?php echo esc_html($ts_header_cart_text_color) ?>;
	}

	/* HEADER SEARCH */
	.header-v1 .ts-search-by-category,
	#ts-search-result-container ul:before,
	#ts-search-result-container ul li,
	body .category-dropdown .select2-search input[type="text"],
	body .category-dropdown.select2-drop-active,
	body .category-dropdown.select2-drop{
		border-color:<?php echo esc_html($ts_header_search_border_color) ?>;
	}
	body .category-dropdown.select2-display-none,
	.header-v1 .ts-search-by-category select,
	.header-v1 .ts-search-by-category option,
	.header-v1 .ts-search-by-category div.select-category,
	body .category-dropdown .select2-results,
	body .category-dropdown .select2-drop,
	body .category-dropdown.select2-drop-active{
		background-color:<?php echo esc_html($ts_header_middle_background_color) ?>;
	}
	header.ts-header div.select-category .select2-arrow,
	header.ts-header div.select-category .select2-arrow b,
	header.ts-header div.select-category .select2-results li,
	.header-v1 .ts-search-by-category div.select-category > a,
	.header-v1 .ts-search-by-category select,
	.header-v1 .select2-choice > .select2-chosen,
	.category-dropdown.select2-drop,
	#ts-search-result-container ul li a{
		color:<?php echo esc_html($ts_header_search_categories_text_color) ?>;
	}
	header.ts-header .search-content input[type="text"]{
		color:<?php echo esc_html($ts_header_search_input_text_color) ?>;
	}
	header.ts-header .search-content input[type="text"],
	#ts-search-result-container ul:before{
		background:<?php echo esc_html($ts_header_middle_background_color) ?>;
	}

	/* HEADER PHONE */
	@media only screen and (max-width: 767px){
		header.ts-header .header-top {
			background-color: <?php echo esc_html($ts_header_top_background_color) ?>;
			border-color:<?php echo esc_html($ts_header_top_line_color) ?>;
		}
		header.ts-header .header-top a, 
		header.ts-header .header-top,
		.ts-mobile-menu-icon-toggle,
		.ts-group-meta-icon-toggle,
		.shopping-cart-wrapper.cart-mobile,
		.shopping-cart-wrapper.cart-mobile .amount{
			color: <?php echo esc_html($ts_header_top_text_color) ?>;
		}
		.shopping-cart-wrapper.cart-mobile .ts-tiny-cart-wrapper .ic-cart .ic{
			border-bottom-color:<?php echo esc_html($ts_header_top_text_color) ?>;
		}
		.shopping-cart-wrapper.cart-mobile .ts-tiny-cart-wrapper .ic-cart .ic:after{
			border-color:<?php echo esc_html($ts_header_top_text_color) ?>;
		}
	}

	/* ========== 4. MENU COLORS ========== */
	/* LEVEL 1 */
	/* Color Vertical Menu */
	.vertical-menu-wrapper .vertical-menu-heading,
	.widget-container.ts-menus-widget .widget-title{
		background-color:<?php echo esc_html($ts_vertical_menu_background_color) ?>;
		color:<?php echo esc_html($ts_vertical_menu_text) ?>;
	}
	.widget-container.ts-menus-widget .widget-title-wrapper a.block-control{
		color:<?php echo esc_html($ts_vertical_menu_text) ?>;
	}
	.vertical-menu-wrapper:hover .vertical-menu-heading{
		background-color:<?php echo esc_html($ts_vertical_menu_background_hover) ?>;
		color:<?php echo esc_html($ts_vertical_menu_text_hover) ?>;
	}
	/* End Color Vertical Menu */
	
	header.ts-header .menu-wrapper nav > ul.menu > li > a,
	header.ts-header .ts-menu > .menu > ul > li > a,
	.widget-container .vertical-menu > .menu > li > a{
		color:<?php echo esc_html($ts_menu_text_color) ?>;
	}
	header.ts-header.header-transparent .is-sticky ::-webkit-input-placeholder {
		color:<?php echo esc_html($ts_menu_text_color) ?>;
	}

	header.ts-header.header-transparent .is-sticky :-moz-placeholder { /* Firefox 18- */
		color:<?php echo esc_html($ts_menu_text_color) ?>;
	}

	header.ts-header.header-transparent .is-sticky ::-moz-placeholder {  /* Firefox 19+ */
		color:<?php echo esc_html($ts_menu_text_color) ?>;
	}

	header.ts-header.header-transparent .is-sticky :-ms-input-placeholder{  
		color:<?php echo esc_html($ts_menu_text_color) ?>;
	}
	header.ts-header .header-v3 .search-content input[type="text"],
	.group-button-icon-header .my-wishlist-wrapper a, 
	.group-button-icon-header .account-control, 
	.group-button-icon-header .my-account-wrapper .account-control > a{
		color:<?php echo esc_html($ts_menu_text_color) ?>;
	}
	.group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic{
		border-bottom-color:<?php echo esc_html($ts_menu_text_color) ?>;
	}
	.group-button-icon-header > div:after,
	.group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic:after{
		border-color:<?php echo esc_html($ts_menu_text_color) ?>;
	}
	header.ts-header .menu-wrapper nav > ul.menu > li:hover > a,
	header.ts-header .ts-menu > .menu > ul > li:hover > a,
	header.ts-header .menu-wrapper nav > ul.menu li.fa:hover:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.fa.current-menu-parent:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.fa.current_page_item:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.fa.current-menu-item:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.fa.current_page_parent:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.fa.current-menu-parent:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.fa.current-menu-ancestor:before,
	header.ts-header .menu-wrapper nav > ul.menu > li.current_page_item > a,
	header.ts-header .menu-wrapper nav > ul.menu > li.current-menu-item > a,
	header.ts-header .menu-wrapper nav > ul.menu > li.current_page_parent > a,
	header.ts-header .menu-wrapper nav > ul.menu > li.current-menu-parent > a,
	header.ts-header .menu-wrapper nav > ul.menu > li.current-menu-ancestor > a,
	header.ts-header .menu-wrapper nav > ul.menu > ul.sub-menu li.current-product_cat-ancestor > a,
	.ts-menu-drop-icon.active:before,
	.header-v3 .my-wishlist-wrapper a:hover, 
	.header-v3 .my-account-wrapper .account-control:hover > a{
		color:<?php echo esc_html($ts_menu_text_color_hover) ?>;
	}
	.group-button-icon-header .ts-tiny-cart-wrapper:hover .ic-cart .ic{
		border-bottom-color:<?php echo esc_html($ts_menu_text_color_hover) ?>;
	}
	.group-button-icon-header .ts-tiny-cart-wrapper:hover .ic-cart .ic:after{
		border-color:<?php echo esc_html($ts_menu_text_color_hover) ?>;
	}
	/* Vertical sub menu */
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li > a,
	header.ts-header .ts-menu .vertical-menu-wrapper > .menu > ul > li > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu li.fa:before,
	.widget-container .vertical-menu > ul.menu > li > a,
	.widget-container .vertical-menu > .menu > ul > li > a,
	.widget-container .vertical-menu > ul.menu li.fa:before{
		color:<?php echo esc_html($ts_sub_menu_text_color) ?>;
	}
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li:hover > a,
	header.ts-header .ts-menu .vertical-menu-wrapper > .menu > ul > li:hover > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu li.fa:hover:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.fa.current-menu-parent:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.fa.current_page_item:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.fa.current-menu-item:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.fa.current_page_parent:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.fa.current-menu-parent:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.fa.current-menu-ancestor:before,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.current_page_item > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.current-menu-item > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.current_page_parent > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.current-menu-parent > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.current-menu-ancestor > a,
	header.ts-header .menu-wrapper .vertical-menu-wrapper nav > ul.menu > li.current-product_cat-ancestor > a,
	.widget-container .vertical-menu > ul.menu > li:hover > a,
	.widget-container .vertical-menu > .menu > ul > li:hover > a,
	.widget-container .vertical-menu > ul.menu li.fa:hover:before,
	.widget-container .vertical-menu > ul.menu > li.fa.current-menu-parent:before,
	.widget-container .vertical-menu > ul.menu > li.fa.current_page_item:before,
	.widget-container .vertical-menu > ul.menu > li.fa.current-menu-item:before,
	.widget-container .vertical-menu > ul.menu > li.fa.current_page_parent:before,
	.widget-container .vertical-menu > ul.menu > li.fa.current-menu-parent:before,
	.widget-container .vertical-menu > ul.menu > li.fa.current-menu-ancestor:before,
	.widget-container .vertical-menu > ul.menu > li.current_page_item > a,
	.widget-container .vertical-menu > ul.menu > li.current-menu-item > a,
	.widget-container .vertical-menu > ul.menu > li.current_page_parent > a,
	.widget-container .vertical-menu > ul.menu > li.current-menu-parent > a,
	.widget-container .vertical-menu > ul.menu > li.current-menu-ancestor > a,
	.widget-container .vertical-menu > ul.menu > li.current-product_cat-ancestor > a,
	.ts-menu-drop-icon.active:before{
		color:<?php echo esc_html($ts_sub_menu_text_color_hover) ?>;
	}

	/* ==== 12.3 MENU PC SUB ==== */

	header.ts-header .menu-wrapper nav > ul.menu li ul.sub-menu > li,
	header.ts-header .menu-wrapper nav li.widget_nav_menu li, 
	header.ts-header .menu-wrapper nav div.list-link li, 
	header.ts-header .menu-wrapper nav > ul.menu li.ts-normal-menu ul.sub-menu li,
	header.ts-header .menu-wrapper .vertical-menu > ul.menu > li.menu-item > a{
		border-color:<?php echo esc_html($ts_sub_menu_item_line_color) ?>;
	}
	header.ts-header .menu-wrapper nav > ul.menu li ul.sub-menu:before,
	.widget-container .vertical-menu > ul.menu li ul.sub-menu:before{
		border-color:<?php echo esc_html($ts_sub_menu_text_color_hover) ?>;
	}
	header.ts-header .menu-wrapper nav > ul.menu > li.parent > a:after{
		color:<?php echo esc_html($ts_sub_menu_text_color_hover) ?>;
	}
	header.ts-header .menu-wrapper nav > ul.menu > li > ul.sub-menu,
	header.ts-header .menu-wrapper nav > ul.menu li ul.sub-menu ul.sub-menu:before,
	.widget-container .vertical-menu > ul.menu > li > ul.sub-menu,
	.widget-container .vertical-menu > ul.menu > li > ul.sub-menu ul.sub-menu:before,
	.vertical-menu-wrapper .vertical-menu{
		background-color:<?php echo esc_html($ts_sub_menu_background_color) ?>;
	}
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu > li > a,
	header.ts-header .menu-wrapper nav div.list-link li > a,
	header.ts-header .menu-wrapper nav > ul.menu li.widget_nav_menu li > a{
		color:<?php echo esc_html($ts_sub_menu_text_color) ?>;
	}
	/* Menu sub heading */

	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu h1,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu h2,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu h3,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu h4,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu h5,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu h6,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu .h1,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu .h2,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu .h3,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu .h4,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu .h5,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu .h6,
	.widget-container .vertical-menu > ul.menu ul.sub-menu h1,
	.widget-container .vertical-menu > ul.menu ul.sub-menu h2,
	.widget-container .vertical-menu > ul.menu ul.sub-menu h3,
	.widget-container .vertical-menu > ul.menu ul.sub-menu h4,
	.widget-container .vertical-menu > ul.menu ul.sub-menu h5,
	.widget-container .vertical-menu > ul.menu ul.sub-menu h6,
	.widget-container .vertical-menu > ul.menu ul.sub-menu .h1,
	.widget-container .vertical-menu > ul.menu ul.sub-menu .h2,
	.widget-container .vertical-menu > ul.menu ul.sub-menu .h3,
	.widget-container .vertical-menu > ul.menu ul.sub-menu .h4,
	.widget-container .vertical-menu > ul.menu ul.sub-menu .h5,
	.widget-container .vertical-menu > ul.menu ul.sub-menu .h6,
	h1.wpb_heading,
	h2.wpb_heading,
	h3.wpb_heading,
	h4.wpb_heading,
	h5.wpb_heading,
	h6.wpb_heading{
		color:<?php echo esc_html($ts_sub_menu_heading_color) ?>;
	}

	/* Menu sub text */

	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu > li > a,
	header.ts-header .menu-wrapper nav div.list-link li > a,
	header.ts-header .menu-wrapper nav > ul.menu li.widget_nav_menu li > a,
	header.ts-header .menu-wrapper .vertical-menu nav > ul.menu > li > a{
		color:<?php echo esc_html($ts_sub_menu_text_color) ?>;
	}
	/* Menu sub a hover */
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu > li > a:hover,
	header.ts-header .menu-wrapper nav div.list-link li > a:hover,
	header.ts-header .menu-wrapper nav > ul.menu li.widget_nav_menu li > a:hover,
	header.ts-header .menu-wrapper nav > ul.menu li.widget_nav_menu li.current-menu-item > a,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu li.current-menu-item > a,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu li.current_page_parent > a,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu li.current-menu-parent > a,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu li.current_page_item > a,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu li.current-menu-ancestor > a,
	header.ts-header .menu-wrapper nav > ul.menu ul.sub-menu li.current-product_cat-ancestor > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu > li > a:hover,
	.widget-container .vertical-menu div.list-link li > a:hover,
	.widget-container .vertical-menu > ul.menu li.widget_nav_menu li > a:hover,
	.widget-container .vertical-menu > ul.menu li.widget_nav_menu li.current-menu-item > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu li.current-menu-item > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu li.current_page_parent > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu li.current-menu-parent > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu li.current_page_item > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu li.current-menu-ancestor > a,
	.widget-container .vertical-menu > ul.menu ul.sub-menu li.current-product_cat-ancestor > a{
		color:<?php echo esc_html($ts_sub_menu_text_color_hover) ?>;
		background-color:<?php echo esc_html($ts_sub_menu_item_background_color_hover) ?>;
	}
	/* ========== 5. FOOTER COLORS ========== */

	/* Social */
	.ts-social-icons .social-icons li a,
	footer#colophon .ts-social-icons .social-icons a,
	.ts-social-icons .social-icons.style-3 li a i,
	footer#colophon .ts-social-icons .social-icons.style-3 li a i{
		background-color:<?php echo esc_html($ts_footer_social_background_color) ?>;
		color:<?php echo esc_html($ts_footer_social_icon_color) ?>;
	}
	<?php if( isset($data['ts_enable_footer_transparent_background']) && $data['ts_enable_footer_transparent_background'] == 1 ): ?>
		footer .end-footer,
		footer .footer-container{
			background:transparent;
		}
		.line-logo .logo-bg:before,
		footer .ts-testimonial-wrapper.loading:before,
		footer .thumbnails.loading:before,
		footer .thumbnail.loading:before,
		footer .ts-logo-slider-wrapper.loading .content-wrapper:before, 
		footer .ts-product .content-wrapper.loading:before,
		footer .ts-products-widget .ts-products-widget-wrapper.loading:before, 
		footer .ts-product-deals-widget .ts-product-deals-slider-wrapper.loading:before, 
		footer .ts-blogs-widget .ts-blogs-widget-wrapper.loading:before, 
		footer .ts-recent-comments-widget .ts-recent-comments-widget-wrapper.loading:before,
		footer .ts-twitter-slider.loading:before{
			background-color:<?php echo esc_html($ts_footer_background_color) ?>;
		}
	<?php elseif( isset($data['ts_enable_footer_transparent_background']) && $data['ts_enable_footer_transparent_background'] == 0 ): ?>
		footer .end-footer,
		.line-logo .logo-bg:before,
		footer .footer-container,
		footer .ts-testimonial-wrapper.loading:before,
		footer .thumbnails.loading:before,
		footer .thumbnail.loading:before,
		footer .ts-logo-slider-wrapper.loading .content-wrapper:before, 
		footer .ts-product .content-wrapper.loading:before,
		footer .ts-products-widget .ts-products-widget-wrapper.loading:before, 
		footer .ts-product-deals-widget .ts-product-deals-slider-wrapper.loading:before, 
		footer .ts-blogs-widget .ts-blogs-widget-wrapper.loading:before, 
		footer .ts-recent-comments-widget .ts-recent-comments-widget-wrapper.loading:before,
		footer .ts-twitter-slider.loading:before{
			background-color:<?php echo esc_html($ts_footer_background_color) ?>;
		}
	<?php endif; ?>
	footer#colophon,
	footer#colophon a,
	footer#colophon dt,
	.ts-social-icons .social-icons.style-3 li a span{
		color:<?php echo esc_html($ts_footer_text_color) ?>;
	}
	footer table td,
	footer table,
	.line-logo:before{
		border-color:<?php echo esc_html($ts_footer_border_line_color) ?>;
	}
	footer#colophon a:hover,
	footer#colophon h1,
	footer#colophon h2,
	footer#colophon h3,
	footer#colophon h4,
	footer#colophon h5,
	footer#colophon h6,
	footer#colophon .h1,
	footer#colophon .h2,
	footer#colophon .h3,
	footer#colophon .h4,
	footer#colophon .h5,
	footer#colophon .h6,
	footer#colophon h1.wpb_heading,
	footer#colophon h2.wpb_heading,
	footer#colophon h3.wpb_heading,
	footer#colophon h4.wpb_heading,
	footer#colophon h5.wpb_heading,
	footer#colophon h6.wpb_heading
	footer#colophon a:hover,
	footer#colophon .ts-blogs-widget-wrapper .post-date,
	footer#colophon .woocommerce ul.cart_list li span.amount, 
	footer#colophon .woocommerce ul.product_list_widget li span.amount, 
	.woocommerce-page footer#colophon ul.cart_list li span.amount, 
	.woocommerce-page footer#colophon ul.product_list_widget li span.amount,
	footer#colophon .ts-product-deals-widget .ts-product-deals-widget-wrapper span.amount,
	.woocommerce-page footer#colophon .ts-product-deals-widget .ts-product-deals-widget-wrapper span.amount,
	footer#colophon .ts-blogs-widget-wrapper ul li a,
	footer#colophon .ts-blogs-widget-wrapper ul li .comment,
	footer#colophon .ts-recent-comments-widget-wrapper ul li .date,
	footer#colophon .ts-recent-comments-widget-wrapper ul li a,
	.info-company li,
	footer .ts-feedburner-subscription-shortcode.style-2 .newsletter{
		color:<?php echo esc_html($ts_footer_heading_color) ?>;
	}
	
	/* ========== 6. PRODUCT COLORS ========== */
	.ts-product-deals-slider-wrapper .counter-wrapper > div,
	.counter-wrapper > div{
		background-color:<?php echo esc_html($ts_main_content_background_color) ?>;
		border-color:<?php echo esc_html($ts_border_color) ?>;
	}
	.counter-wrapper > div .number-wrapper .number{
		color:<?php echo esc_html($ts_secondary_color) ?>;
	}
	.counter-wrapper > div.days{
		background-color:<?php echo esc_html($ts_product_day_hotdeal_background) ?>;
		border-color:<?php echo esc_html($ts_product_day_hotdeal_background) ?>;
	}
	.counter-wrapper > div.days .number-wrapper .number,
	.counter-wrapper > div.days .ref-wrapper{
		color:<?php echo esc_html($ts_main_content_background_color) ?>;
	}
	/* RATING */
	.woocommerce .products .star-rating,
	.woocommerce-page .products .star-rating,
	.star-rating:before, 
	.pp_woocommerce .star-rating:before, 
	.woocommerce .star-rating:before, 
	.woocommerce-page .star-rating:before,
	.testimonial-content .rating:before{
		color:<?php echo esc_html($ts_rating_color) ?>;
	}
	.star-rating span:before,
	.pp_woocommerce .star-rating span:before, 
	.woocommerce .star-rating span:before, 
	.woocommerce-page .star-rating span:before,
	.testimonial-content .rating span:before{
		color:<?php echo esc_html($ts_rating_color) ?>;
	}
	/* PRODUCT NAME */
	.widget-container ul.product_list_widget li .ts-wg-meta > a,
	.woocommerce .widget-container ul.product_list_widget li .ts-wg-meta > a,
	.woocommerce-page .widget-container ul.product_list_widget .ts-wg-meta > a,
	.widget.ts-products-widget .ts-wg-meta > a,
	.woocommerce-page .widget.ts-products-widget .ts-wg-meta > a,
	h3.product-name > a, 
	h3.product-name,
	.product-name a,
	.single-navigation a .product-info,
	.group_table a,
	body table.compare-list tr.title td{
		color:<?php echo esc_html($ts_product_name_text_color) ?>;
	}
	/* BUTTON PRODUCT */
	/* Added */
	.woocommerce .product .product-wrapper a.added_to_cart,
	.woocommerce-page .product .product-wrapper a.added_to_cart,
	.woocommerce .product .product-wrapper a.button,
	.woocommerce-page .product .product-wrapper a.button,
	.woocommerce #content .product .product-wrapper a.added_to_cart,
	.woocommerce-page #content .product .product-wrapper a.added_to_cart,
	.woocommerce #content .product .product-wrapper a.button,
	.woocommerce-page #content .product .product-wrapper a.button,
	.ts-button-product,
	.meta-wrapper .button-in.wishlist a,
	.meta-wrapper .button-in.compare a,
	html body body table.compare-list tr.add-to-cart td a{
		background-color:<?php echo esc_html($ts_product_button_background_color) ?>;
		border-color:<?php echo esc_html($ts_product_button_border_color) ?>;
		color:<?php echo esc_html($ts_product_button_text_color) ?>;
	}
	/* Added hover */
	.woocommerce .product .product-wrapper .meta-wrapper a.added_to_cart:hover, 
	.woocommerce-page .product .product-wrapper .meta-wrapper a.added_to_cart:hover,
	.woocommerce .product .product-wrapper .meta-wrapper a.button:hover,
	.woocommerce-page .product .product-wrapper .meta-wrapper a.button:hover,
	.woocommerce .product .product-wrapper .meta-wrapper a.added_to_cart:focus, 
	.woocommerce-page .product .product-wrapper .meta-wrapper a.added_to_cart:focus,
	.woocommerce .product .product-wrapper .meta-wrapper a.button:focus,
	.woocommerce-page .product .product-wrapper .meta-wrapper a.button:focus,
	.woocommerce #content .product .product-wrapper .meta-wrapper a.added_to_cart:hover, 
	.woocommerce-page #content .product .product-wrapper .meta-wrapper a.added_to_cart:hover,
	.woocommerce #content .product .product-wrapper .meta-wrapper a.button:hover,
	.woocommerce-page #content .product .product-wrapper .meta-wrapper a.button:hover,
	.woocommerce #content .product .product-wrapper .meta-wrapper a.added_to_cart:focus, 
	.woocommerce-page #content .product .product-wrapper .meta-wrapper a.added_to_cart:focus,
	.woocommerce #content .product .product-wrapper .meta-wrapper a.button:focus,
	.woocommerce-page #content .product .product-wrapper .meta-wrapper a.button:focus,
	.ts-button-product:hover,
	.ts-button-product:focus,
	.meta-wrapper .button-in.wishlist a:hover,
	.meta-wrapper .button-in.compare a:hover,
	.ts-product-deals-widget .loop-add-to-cart a:hover{
		background-color:<?php echo esc_html($ts_product_button_background_color_hover) ?>;
		border-color:<?php echo esc_html($ts_product_button_border_color_hover) ?>;
		color:<?php echo esc_html($ts_product_button_text_color_hover) ?>;
	}

	/* PRODUCT LABEL */
	.woocommerce .products .product .product-label .onsale,
	.woocommerce-page .products .product .product-label .onsale,
	.pp_woocommerce div.product .images .product-label span.onsale,
	.woocommerce #content div.product .images .product-label span.onsale,
	.woocommerce div.product .images .product-label span.onsale,
	.woocommerce-page #content div.product .images .product-label span.onsale,
	.woocommerce-page div.product .images .product-label span.onsale
	{
		color:<?php echo esc_html($ts_product_sale_label_text_color) ?>;
		background:<?php echo esc_html($ts_product_sale_label_background_color) ?>;
	}
	.woocommerce .products .product .product-label .featured,
	.woocommerce-page .products .product .product-label .featured,
	.pp_woocommerce div.product .images .product-label span.featured,
	.woocommerce #content div.product .images .product-label span.featured,
	.woocommerce div.product .images .product-label span.featured,
	.woocommerce-page #content div.product .images .product-label span.featured,
	.woocommerce-page div.product .images .product-label span.featured{
		color:<?php echo esc_html($ts_product_feature_label_text_color) ?>;
		background:<?php echo esc_html($ts_product_feature_label_background_color) ?>;
	}
	.woocommerce .products .product .product-label .out-of-stock,
	.woocommerce-page .products .product .product-label .out-of-stock,
	.pp_woocommerce div.product .images .product-label span.out-of-stock,
	.woocommerce #content div.product .images .product-label span.out-of-stock,
	.woocommerce div.product .images .product-label span.out-of-stock,
	.woocommerce-page #content div.product .images .product-label span.out-of-stock,
	.woocommerce-page div.product .images .product-label span.out-of-stock{
		color:<?php echo esc_html($ts_product_outstock_label_text_color) ?>;
		background:<?php echo esc_html($ts_product_outstock_label_background_color) ?>;
	}
	/* AMOUNT */

	.amount,
	.cart-list .quantity,
	.woocommerce ul.cart_list li .quantity, 
	.woocommerce-page ul.cart_list li .quantity,
	.woocommerce .products .product .price,
	.woocommerce-page .products .product .price,
	.woocommerce .products .product .amount,
	.woocommerce-page .products .product .amount,
	.woocommerce #content div.product p.price, 
	.woocommerce #content div.product span.price, 
	.woocommerce div.product p.price, 
	.woocommerce div.product span.price, 
	.woocommerce-page #content div.product p.price, 
	.woocommerce-page #content div.product span.price, 
	.woocommerce-page div.product p.price, 
	.woocommerce-page div.product span.price,
	.single-navigation a .product-info .price,
	/* Compare table */
	body table.compare-list tr.price td{
		color:<?php echo esc_html($ts_product_price_text_color) ?>;
	}
		
	/* ========== 7. WOOCOMMERCE MESSAGE COLORS ========== */
	.woocommerce-message,
	.woocommerce .woocommerce-message,
	.woocommerce-page .woocommerce-message,
	.alert.alert-success,
	div.wpcf7-mail-sent-ok,
	.vc_color-alert-success.vc_message_box{
		background:<?php echo esc_html($ts_message_background_color) ?>;
		color:<?php echo esc_html($ts_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_message_border_color) ?>;
	}
	.woocommerce-message a,
	.woocommerce .woocommerce-message a,
	.woocommerce-page .woocommerce-message a{
		color:<?php echo esc_html($ts_message_text_color) ?>;
	}
	.woocommerce-message:before,
	.woocommerce .woocommerce-message:before,
	.woocommerce-page .woocommerce-message:before,
	.alert.alert-success:before{
		color:<?php echo esc_html($ts_message_text_color) ?>;
	}
	.woocommerce-info,
	.woocommerce .woocommerce-info,
	.woocommerce-page .woocommerce-info,
	.alert.alert-info,
	.vc_color-alert-info.vc_message_box{
		background:<?php echo esc_html($ts_info_message_background_color) ?>;
		color:<?php echo esc_html($ts_info_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_info_message_border_color) ?>;
	}
	.woocommerce-info a, 
	.woocommerce .woocommerce-info a, 
	.woocommerce-page .woocommerce-info a,
	.woocommerce-info:before,
	.woocommerce .woocommerce-info:before,
	.woocommerce-page .woocommerce-info:before,
	.alert.alert-info:before{
		color:<?php echo esc_html($ts_info_message_text_color) ?>;
	}
	.woocommerce-error,
	.woocommerce .woocommerce-error,
	.woocommerce-page .woocommerce-error,
	.alert.alert-error,
	div.wpcf7-validation-errors,
	div.wpcf7-mail-sent-ng,
	.vc_color-alert-danger.vc_message_box{
		background:<?php echo esc_html($ts_error_message_background_color) ?>;
		border-color:<?php echo esc_html($ts_error_message_border_color) ?>;
		color:<?php echo esc_html($ts_error_message_text_color) ?>;
	}
	.woocommerce-error a,
	.woocommerce .woocommerce-error a,
	.woocommerce-page .woocommerce-error a,
	.woocommerce-error:before,
	.woocommerce .woocommerce-error:before,
	.woocommerce-page .woocommerce-error:before,
	.alert.alert-error:before{
		color:<?php echo esc_html($ts_error_message_text_color) ?>;
	}
	.alert.alert-warning,
	div.wpcf7-spam-blocked,
	.vc_color-alert-warning.vc_message_box,
	.checkout-login-coupon-wrapper .woocommerce-info, 
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info{
		background:<?php echo esc_html($ts_warning_message_background_color) ?>;
		color:<?php echo esc_html($ts_warning_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_warning_message_border_color) ?>;
	}
	.alert.alert-warning:before,
	.alert.alert-warning a,
	div.wpcf7-spam-blocked a,
	.vc_color-alert-warning.vc_message_box a,
	.checkout-login-coupon-wrapper .woocommerce-info a, 
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info a,
	.checkout-login-coupon-wrapper .woocommerce-info:before, 
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info:before{
		color:<?php echo esc_html($ts_warning_message_text_color) ?>;
	}
	.woocommerce-message a.button,
	.woocommerce .woocommerce-message a.button, 
	.woocommerce-page .woocommerce-message a.button{
		background:<?php echo esc_html($ts_message_background_color) ?>;
		color:<?php echo esc_html($ts_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_message_text_color) ?>;
	}
	.woocommerce-message a.button:hover,
	.woocommerce .woocommerce-message a.button:hover, 
	.woocommerce-page .woocommerce-message a.button:hover{
		background:<?php echo esc_html($ts_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_message_text_color) ?>;
	}
	.woocommerce-error a.button,
	.woocommerce .woocommerce-error a.button,
	.woocommerce-page .woocommerce-error a.button{
		background:<?php echo esc_html($ts_error_message_background_color) ?>;
		color:<?php echo esc_html($ts_error_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_error_message_border_color) ?>;
	}
	.woocommerce-error a.button:hover,
	.woocommerce .woocommerce-error a.button:hover,
	.woocommerce-page .woocommerce-error a.button:hover{
		background:<?php echo esc_html($ts_error_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_error_message_border_color) ?>;
	}
	.woocommerce-info a.button,
	.woocommerce .woocommerce-info a.button,
	.woocommerce-page .woocommerce-info a.button{
		background:<?php echo esc_html($ts_info_message_background_color) ?>;
		color:<?php echo esc_html($ts_info_message_text_color) ?>;
		border-color:<?php echo esc_html($ts_info_message_border_color) ?>;
	}
	.woocommerce-info a.button:hover,
	.woocommerce .woocommerce-info a.button:hover,
	.woocommerce-page .woocommerce-info a.button:hover{
		background:<?php echo esc_html($ts_info_message_border_color) ?>;
		border-color:<?php echo esc_html($ts_info_message_border_color) ?>;
	}
	/* ============= 8. FULLWIDTH LAYOUT ============== */
	<?php if( isset($data['ts_layout_fullwidth']) && $data['ts_layout_fullwidth'] == 1 ): ?>
	.page-container,
	.breadcrumb-title-wrapper .breadcrumb-content,
	.container{
		width: 100%;
	}
	.page-fullwidth-template .ts-row-boxed{
		max-width: 100%;
	}
	<?php endif; ?>
	
	/* ============= 9. RESPONSIVE ============== */
	<?php if( isset($data['ts_responsive']) && $data['ts_responsive'] == 0 ): ?>
	/* NO RESPONSIVE */
	@media only screen and (max-width: 1240px){
		html.full-page,
		html.full-page body {
			overflow:visible !important;
		}
		body,
		.page-container,
		.breadcrumb-title-wrapper .breadcrumb-content,
		.container,
		html.full-page #page{
			width: 1240px;
		}
		.vc_row[data-vc-full-width='true']{
			width: 1240px !important;
		}
		.page-fullwidth-template .ts-row-boxed,
		body.boxed header.ts-header,
		body.boxed #main,
		body.boxed footer#colophon,
		body.boxed header.ts-header .header-sticky{
			max-width: 1240px;
		}
	}
	.ts-col-1, .ts-col-2, .ts-col-3, .ts-col-4, .ts-col-5, .ts-col-6, .ts-col-7, .ts-col-8, .ts-col-9, .ts-col-10, .ts-col-11, .ts-col-12, .ts-col-1, .ts-col-2, .ts-col-3, .ts-col-4, .ts-col-5, .ts-col-6, .ts-col-7, .ts-col-8, .ts-col-9, .ts-col-10, .ts-col-11, .ts-col-12, .ts-col-13, .ts-col-14, .ts-col-15, .ts-col-16, .ts-col-17, .ts-col-18, .ts-col-19, .ts-col-20, .ts-col-21, .ts-col-22, .ts-col-23, .ts-col-24 {
		float: left;
	}
	.ts-col-24 {
		width: 100%;
	}
	.ts-col-23 {
		width: 95.83333333%;
	}
	.ts-col-22 {
		width: 91.66666667%;
	}
	.ts-col-21 {
		width: 87.5%;
	}
	.ts-col-20 {
		width: 83.33333333%;
	}
	.ts-col-19 {
		width: 79.16666667%;
	}
	.ts-col-18 {
		width: 75%;
	}
	.ts-col-17 {
		width: 70.83333333%;
	}
	.ts-col-16 {
		width: 66.66666667%;
	}
	.ts-col-15 {
		width: 62.5%;
	}
	.ts-col-14 {
		width: 58.33333333%;
	}
	.ts-col-13 {
		width: 54.16666667%;
	}
	.ts-col-12 {
		width: 50%;
	}
	.ts-col-11 {
		width: 45.83333333%;
	}
	.ts-col-10 {
		width: 41.66666667%;
	}
	.ts-col-9 {
		width: 37.5%;
	}
	.ts-col-8 {
		width: 33.33333333%;
	}
	.ts-col-7 {
		width: 29.16666667%;
	}
	.ts-col-6 {
		width: 25%;
	}
	.ts-col-5 {
		width: 20.83333333%;
	}
	.ts-col-4 {
		width: 16.66666667%;
	}
	.ts-col-3 {
		width: 12.5%;
	}
	.ts-col-2 {
		width: 8.33333333%;
	}
	.ts-col-1 {
		width: 4.16666667%;
	}
	/* Overwrite visual */
	.vc_col-sm-1, .vc_col-sm-2, .vc_col-sm-3, .vc_col-sm-4, .vc_col-sm-5, .vc_col-sm-6, .vc_col-sm-7, .vc_col-sm-8, .vc_col-sm-9, .vc_col-sm-10, .vc_col-sm-11, .vc_col-sm-12 {
		float: left;
	}
	.vc_col-sm-12 {
		width: 100%;
	}
	.vc_col-sm-11 {
		width: 91.66666667%;
	}
	.vc_col-sm-10 {
		width: 83.33333333%;
	}
	.vc_col-sm-9 {
		width: 75%;
	}
	.vc_col-sm-8 {
		width: 66.66666667%;
	}
	.vc_col-sm-7 {
		width: 58.33333333%;
	}
	.vc_col-sm-6 {
		width: 50%;
	}
	.vc_col-sm-5 {
		width: 41.66666667%;
	}
	.vc_col-sm-4 {
		width: 33.33333333%;
	}
	.vc_col-sm-3 {
		width: 25%;
	}
	.vc_col-sm-2 {
		width: 16.66666667%;
	}
	.vc_col-sm-1 {
		width: 8.33333333%;
	}
	.vc_col-sm-pull-12 {
		right: 100%;
	}
	.vc_col-sm-pull-11 {
		right: 91.66666667%;
	}
	.vc_col-sm-pull-10 {
		right: 83.33333333%;
	}
	.vc_col-sm-pull-9 {
		right: 75%;
	}
	.vc_col-sm-pull-8 {
		right: 66.66666667%;
	}
	.vc_col-sm-pull-7 {
		right: 58.33333333%;
	}
	.vc_col-sm-pull-6 {
		right: 50%;
	}
	.vc_col-sm-pull-5 {
		right: 41.66666667%;
	}
	.vc_col-sm-pull-4 {
		right: 33.33333333%;
	}
	.vc_col-sm-pull-3 {
		right: 25%;
	}
	.vc_col-sm-pull-2 {
		right: 16.66666667%;
	}
	.vc_col-sm-pull-1 {
		right: 8.33333333%;
	}
	.vc_col-sm-pull-0 {
		right: auto;
	}
	.vc_col-sm-push-12 {
		left: 100%;
	}
	.vc_col-sm-push-11 {
		left: 91.66666667%;
	}
	.vc_col-sm-push-10 {
		left: 83.33333333%;
	}
	.vc_col-sm-push-9 {
		left: 75%;
	}
	.vc_col-sm-push-8 {
		left: 66.66666667%;
	}
	.vc_col-sm-push-7 {
		left: 58.33333333%;
	}
	.vc_col-sm-push-6 {
		left: 50%;
	}
	.vc_col-sm-push-5 {
		left: 41.66666667%;
	}
	.vc_col-sm-push-4 {
		left: 33.33333333%;
	}
	.vc_col-sm-push-3 {
		left: 25%;
	}
	.vc_col-sm-push-2 {
		left: 16.66666667%;
	}
	.vc_col-sm-push-1 {
		left: 8.33333333%;
	}
	.vc_col-sm-push-0 {
		left: auto;
	}
	.vc_col-sm-offset-12 {
		margin-left: 100%;
	}
	.vc_col-sm-offset-11 {
		margin-left: 91.66666667%;
	}
	.vc_col-sm-offset-10 {
		margin-left: 83.33333333%;
	}
	.vc_col-sm-offset-9 {
		margin-left: 75%;
	}
	.vc_col-sm-offset-8 {
		margin-left: 66.66666667%;
	}
	.vc_col-sm-offset-7 {
		margin-left: 58.33333333%;
	}
	.vc_col-sm-offset-6 {
		margin-left: 50%;
	}
	.vc_col-sm-offset-5 {
		margin-left: 41.66666667%;
	}
	.vc_col-sm-offset-4 {
		margin-left: 33.33333333%;
	}
	.vc_col-sm-offset-3 {
		margin-left: 25%;
	}
	.vc_col-sm-offset-2 {
		margin-left: 16.66666667%;
	}
	.vc_col-sm-offset-1 {
		margin-left: 8.33333333%;
	}
	.vc_col-sm-offset-0 {
		margin-left: 0%;
	}
	
	/* =========== CUSTOM DEFAULT =========== */
	/* Begin min 768px */
		header.ts-header.header-text-light .header-middle{
			background:transparent;
		}
		body:not(.ts_desktop) header.ts-header.header-transparent .header-middle,
		header.ts-header.header-transparent .sticky-wrapper:not(.is-sticky) .header-middle,
		header.ts-header.header-transparent .header-template > .header-middle,
		header.ts-header.header-transparent:not(.has-sticky) .header-middle{
			padding-top:20px;
			padding-bottom:20px;
		}
		/* Header text light (v3 + v5) */
		/* Fix loading header with sticky menu */
		body:not(.ts_desktop) header.header-text-light .header-v3 .logo-wrapper,
		header.header-text-light .header-v3 .sticky-wrapper:not(.is-sticky) .logo-wrapper,
		header.header-text-light .header-v3 .header-template > .header-middle .logo-wrapper,
		header.header-text-light:not(.has-sticky) .header-v3 .logo-wrapper{
			top:50px;
		}
		body:not(.ts_desktop) header.header-text-light .menu-wrapper nav > ul.menu > li > a,
		body:not(.ts_desktop) header.header-text-light .ts-menu > .menu > ul > li > a,
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header .my-wishlist-wrapper a, 
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header .account-control, 
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header .my-account-wrapper .account-control > a,
		body:not(.ts_desktop) header.header-text-light .search-content input[type="text"],
		header.header-text-light .sticky-wrapper:not(.is-sticky) .menu-wrapper nav > ul.menu > li > a,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .ts-menu > .menu > ul > li > a,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header .my-wishlist-wrapper a, 
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header .account-control, 
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header .my-account-wrapper .account-control > a,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .search-content input[type="text"],
		header.header-text-light:not(.has-sticky) .menu-wrapper nav > ul.menu > li > a,
		header.header-text-light:not(.has-sticky) .ts-menu > .menu > ul > li > a,
		header.header-text-light:not(.has-sticky) .group-button-icon-header .my-wishlist-wrapper a, 
		header.header-text-light:not(.has-sticky) .group-button-icon-header .account-control, 
		header.header-text-light:not(.has-sticky) .group-button-icon-header .my-account-wrapper .account-control > a,
		header.header-text-light:not(.has-sticky) .search-content input[type="text"],
		/* Fix color menu no sticky ipad */
		header.header-text-light .header-template > .header-middle .menu-wrapper nav > ul.menu > li > a,
		header.header-text-light .header-template > .header-middle .ts-menu > .menu > ul > li > a,
		header.header-text-light .header-template > .header-middle .group-button-icon-header .my-wishlist-wrapper a, 
		header.header-text-light .header-template > .header-middle .group-button-icon-header .account-control, 
		header.header-text-light .header-template > .header-middle .group-button-icon-header .my-account-wrapper .account-control > a,
		header.header-text-light .header-template > .header-middle .search-content input[type="text"]{
			color:#fff;
		}
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic,
		header.header-text-light .header-template > .header-middle .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic,
		header.header-text-light:not(.has-sticky) .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic{
			border-bottom-color: #fff;
		}
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic:after,
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header > div:after,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic:after,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header > div:after,
		header.header-text-light .header-template > .header-middle .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic:after,
		header.header-text-light .header-template > .header-middle .group-button-icon-header > div:after,
		header.header-text-light:not(.has-sticky) .group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic:after,
		header.header-text-light:not(.has-sticky) .group-button-icon-header > div:after{
			border-color:#fff
		}
		body:not(.ts_desktop) header.header-text-light .group-button-icon-header > div:after,
		header.header-text-light .sticky-wrapper:not(.is-sticky) .group-button-icon-header > div:after,
		header.header-text-light .header-template > .header-middle .group-button-icon-header > div:after,
		header.header-text-light:not(.has-sticky) .group-button-icon-header > div:after{
			opacity:1;
		}
		body:not(.ts_desktop) header.header-text-light .header-v3 .search-wrapper input[type="submit"],
		body:not(.ts_desktop) header.header-text-light .header-v5 .search-wrapper input[type="submit"],
		header.header-text-light .header-v3 .sticky-wrapper:not(.is-sticky) .search-wrapper input[type="submit"],
		header.header-text-light .header-v5 .sticky-wrapper:not(.is-sticky) .search-wrapper input[type="submit"],
		header.header-text-light .header-v3.header-template > .header-middle .search-wrapper input[type="submit"],
		header.header-text-light .header-v5.header-template > .header-middle .search-wrapper input[type="submit"],
		header.header-text-light:not(.has-sticky) .header-v3 .search-wrapper input[type="submit"],
		header.header-text-light:not(.has-sticky) .header-v5 .search-wrapper input[type="submit"]{
			background:url(<?php echo get_template_directory_uri() . '/images/image.png'; ?>) -47px 3px no-repeat !important;
			opacity:1;
			transition:none;
			-webkit-transition:none;
			-moz-transition:none;
		}
		body:not(.ts_desktop) header.header-text-light .header-v3 .search-wrapper input[type="submit"]:hover,
		body:not(.ts_desktop) header.header-text-light .header-v5 .search-wrapper input[type="submit"]:hover,
		header.header-text-light .header-v3 .sticky-wrapper:not(.is-sticky) .search-wrapper input[type="submit"]:hover,
		header.header-text-light .header-v5 .sticky-wrapper:not(.is-sticky) .search-wrapper input[type="submit"]:hover,
		header.header-text-light.header-v3 .header-template > .header-middle .search-wrapper input[type="submit"]:hover,
		header.header-text-light.header-v5 .header-template > .header-middle .search-wrapper input[type="submit"]:hover,
		header.header-text-light:not(.has-sticky) .header-v3 .search-wrapper input[type="submit"]:hover,
		header.header-text-light:not(.has-sticky) .header-v5 .search-wrapper input[type="submit"]:hover{
			background-position:-69px 3px !important;
		}
		header.header-text-light .sticky-wrapper:not(.is-sticky) ::-webkit-input-placeholder {
			color: #ffffff;
		}
		header.header-text-light .header-template > .header-middle ::-webkit-input-placeholder {
			color: #ffffff;
		}
		header.header-text-light:not(.has-sticky) ::-webkit-input-placeholder {
			color: #ffffff;
		}
		body:not(.ts_desktop) header.header-text-light ::-webkit-input-placeholder {
			color: #ffffff;
		}

		header.header-text-light .sticky-wrapper:not(.is-sticky) :-moz-placeholder { /* Firefox 18- */
			color: #ffffff;
		}
		header.header-text-light .header-template > .header-middle :-moz-placeholder { /* Firefox 18- */
			color: #ffffff;
		}
		header.header-text-light:not(.has-sticky) :-moz-placeholder { /* Firefox 18- */
			color: #ffffff;
		}
		body:not(.ts_desktop) header.header-text-light :-moz-placeholder { /* Firefox 18- */
			color: #ffffff;
		}

		header.header-text-light .sticky-wrapper:not(.is-sticky) ::-moz-placeholder {  /* Firefox 19+ */
			color: #ffffff;
		}
		header.header-text-light .header-template > .header-middle ::-moz-placeholder {  /* Firefox 19+ */
			color: #ffffff;
		}
		header.header-text-light:not(.has-sticky) ::-moz-placeholder {  /* Firefox 19+ */
			color: #ffffff;
		}
		body:not(.ts_desktop) header.header-text-light ::-moz-placeholder {  /* Firefox 19+ */
			color: #ffffff;
		}

		header.header-text-light .sticky-wrapper:not(.is-sticky) :-ms-input-placeholder {  
			color: #ffffff;
		}
		header.header-text-light .header-template > .header-middle :-ms-input-placeholder {  
			color: #ffffff;
		}
		header.header-text-light:not(.has-sticky) :-ms-input-placeholder {  
			color: #ffffff;
		}
		body:not(.ts_desktop) header.header-text-light :-ms-input-placeholder {  
			color: #ffffff;
		}
	/* End Begin min 768px */
	/* Begin 2000 > 991 */
		/* Header */
		.group-meta-header{
			display:block !important;
		}
		/* Widget Filter Color */
		/* 1 sidebar */
		.ts-col-18 .widget-container.product-filter-by-color ul li{
			margin:0 4px 4px 0;
		}
		.ts-col-18 .widget-container.product-filter-by-color ul li a,
		.ts-col-18 .widget-container.product-filter-by-color ul li a span{
			width:24px;
			height:24px;
			line-height:24px;
		}
		.woocommerce .ts-col-18 .widget_layered_nav ul li a, 
		.woocommerce .ts-col-18 .widget_layered_nav ul li span,
		.ts-col-18 .woocommerce .widget_layered_nav ul li a, 
		.ts-col-18 .woocommerce .widget_layered_nav ul li span{
			font-size:12px;
		}
		/* Filter size */
		.ts-col-18 .woocommerce .widget_layered_nav ul li, 
		.woocommerce-page .ts-col-18 .widget_layered_nav ul li{
			width:50%;
		}
		.ts-col-18 .woocommerce .widget_layered_nav ul li:nth-child(3n+1), 
		.woocommerce-page .ts-col-18 .widget_layered_nav ul li:nth-child(3n+1){
			clear:none;
		}
		.ts-col-18 .woocommerce .widget_layered_nav ul li:nth-child(2n+1), 
		.woocommerce-page .ts-col-18 .widget_layered_nav ul li:nth-child(2n+1){
			clear:both;
		}
		/* Shop Page 2 sidebar */
		.ts-col-12 .product-category-top-content .widget-container{
			width:100%;
			float:none;
		}
		.ts-col-12 .woocommerce .woocommerce-ordering, 
		.woocommerce-page .ts-col-12 .woocommerce-ordering{
			float:left;
			clear:both;
		}
		/* Detail Product 2 Siderbar */
		.woocommerce #content .ts-col-12 div.product div.images-thumbnails, 
		.woocommerce .ts-col-12 div.product div.images-thumbnails, 
		.woocommerce-page #content .ts-col-12 div.product div.images-thumbnails, 
		.woocommerce-page .ts-col-12 div.product div.images-thumbnails{
			width:100%;
		}
		.woocommerce #content .ts-col-12 div.product div.summary, 
		.woocommerce .ts-col-12 div.product div.summary, 
		.woocommerce-page #content .ts-col-12 div.product div.summary, 
		.woocommerce-page .ts-col-12 div.product div.summary{
			width:100%;
			padding-left:0 /* rtl */
		}
		.woocommerce .ts-col-12 div.product .woocommerce-tabs .panel{
			padding:22px 20px 25px 20px
		}
	/* End 2000 > 991 */
	@media 
	only screen and (max-width: 1240px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:130px !important;
		}
	}
	@media 
	only screen and (max-width: 767px){
		body .rev_slider_wrapper .rev-btn{
			border-width:1px !important;
		}
	}
	<?php elseif( isset($data['ts_responsive']) && $data['ts_responsive'] == 1 ): ?>
	
	@media 
	only screen and (min-width: 1050px){
		/* Home page 6 */
		html.full-page{
			margin-top:0 !important;
		}
		html.full-page body.admin-bar header.ts-header.header-transparent:not(.is-sticky) .header-middle{
			margin-top:32px;
		}
		/* Shortcode banner */
		html.full-page .ts-banner .banner-content{
			margin-top:2%;
		}
	}
	@media 
	only screen and (min-width: 991px){
		/* Header */
		.group-meta-header{
			display:block !important;
		}
	}
	@media 
	only screen and (max-width: 1240px)	and (min-width: 1150px){
		/* FIX CUSTOM WIDTH FOR COLUMNS VISUAL */
		#main-content .ts-large-one-third .ts-banner .banner-bg{
			margin-left:-10%;
			margin-right:-10%;
		}
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:130px !important;
		}
	}
	@media 
	only screen and (max-width: 1149px)	and (min-width: 1051px){
		/* FIX CUSTOM WIDTH FOR COLUMNS VISUAL */
		#main-content .ts-large-one-third .ts-banner .banner-bg{
			margin-left:-15%;
			margin-right:-15%;
		}
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:120px !important;
		}
	}
	@media 
	only screen and (max-width: 1050px)	and (min-width: 901px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:105px !important;
		}
	}
	@media 
	only screen and (max-width: 900px)	and (min-width: 768px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:90px !important;
		}
	}
	@media 
	only screen and (max-width: 767px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:75px !important;
		}
		body .rev_slider_wrapper .rev-btn{
			border-width:1px !important;
		}
	}
	@media 
	only screen and (max-width: 650px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:60px !important;
		}
	}
	@media 
	only screen and (max-width: 500px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:45px !important;
		}
	}
	@media 
	only screen and (max-width: 400px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:35px !important;
		}
	}
	@media 
	only screen and (max-width: 300px){
		/* Revolution Button */
		body .rev_slider_wrapper .rev-btn{
			min-width:auto !important;
		}
	}
	@media 
	only screen and (max-width: 5000px)	and (min-width: 991px){
		/* Header */
		.group-meta-header{
			display:block !important;
		}
		/* Widget Filter Color */
		/* 1 sidebar */
		.ts-col-18 .widget-container.product-filter-by-color ul li{
			margin:0 4px 4px 0;
		}
		.ts-col-18 .widget-container.product-filter-by-color ul li a,
		.ts-col-18 .widget-container.product-filter-by-color ul li a span{
			width:24px;
			height:24px;
			line-height:24px;
		}
		.woocommerce .ts-col-18 .widget_layered_nav ul li a, 
		.woocommerce .ts-col-18 .widget_layered_nav ul li span,
		.ts-col-18 .woocommerce .widget_layered_nav ul li a, 
		.ts-col-18 .woocommerce .widget_layered_nav ul li span{
			font-size:12px;
		}
		/* Filter size */
		.ts-col-18 .woocommerce .widget_layered_nav ul li, 
		.woocommerce-page .ts-col-18 .widget_layered_nav ul li{
			width:50%;
		}
		.ts-col-18 .woocommerce .widget_layered_nav ul li:nth-child(3n+1), 
		.woocommerce-page .ts-col-18 .widget_layered_nav ul li:nth-child(3n+1){
			clear:none;
		}
		.ts-col-18 .woocommerce .widget_layered_nav ul li:nth-child(2n+1), 
		.woocommerce-page .ts-col-18 .widget_layered_nav ul li:nth-child(2n+1){
			clear:both;
		}
		/* Shop Page 2 sidebar */
		.ts-col-12 .product-category-top-content .widget-container{
			width:100%;
			float:none;
		}
		.ts-col-12 .woocommerce .woocommerce-ordering, 
		.woocommerce-page .ts-col-12 .woocommerce-ordering{
			float:left;
			clear:both;
		}
		/* Detail Product 2 Siderbar */
		.woocommerce #content .ts-col-12 div.product div.images-thumbnails, 
		.woocommerce .ts-col-12 div.product div.images-thumbnails, 
		.woocommerce-page #content .ts-col-12 div.product div.images-thumbnails, 
		.woocommerce-page .ts-col-12 div.product div.images-thumbnails{
			width:100%;
		}
		.woocommerce #content .ts-col-12 div.product div.summary, 
		.woocommerce .ts-col-12 div.product div.summary, 
		.woocommerce-page #content .ts-col-12 div.product div.summary, 
		.woocommerce-page .ts-col-12 div.product div.summary{
			width:100%;
			padding-left:0 /* rtl */
		}
		.woocommerce .ts-col-12 div.product .woocommerce-tabs .panel{
			padding:22px 20px 25px 20px
		}
	}
	<?php endif; ?>
	
	/* ============= 10. FONT SIZE ============== */
	html, 
	body,
	.woocommerce .order_details li, 
	.woocommerce-page .order_details li, 
	.woocommerce-page table.my_account_orders th,
	.woocommerce table.my_account_orders td, 
	.woocommerce-page table.my_account_orders td,
	.comment_list_widget .comment-body,
	#bbpress-forums,
	.woocommerce ul.products li.product .price del,
	.woocommerce ul.products li.product .price,
	.woocommerce-page ul.products li.product .price del,
	.shopping-cart-wrapper .form-content > label,
	#calendar_wrap th, 
	#calendar_wrap td,
	.woocommerce .widget-container .price_slider_amount .price_label,
	.woocommerce-page .widget-container .price_slider_amount .price_label,
	#ts-search-result-container ul li a,
	.shopping-cart-wrapper a.cart-control span.amount,
	body .rev_slider_wrapper .rev-btn,
	#lang_sel_click > ul li a,
	.header-currency ul li a,
	select option,
	.comment_list_widget .comment-meta .author,
	body .vc_general.vc_tta-tabs.background_color .vc_tta-tab > a,
	body .vc_general.vc_tta-tabs.top_border .vc_tta-tab > a,
	body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a,
	body .vc_general.vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a,
	.vc_toggle_default .vc_toggle_title h4,
	.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a, 
	.woocommerce-page div.product .woocommerce-tabs ul.tabs li a,
	.vc_progress_bar .vc_single_bar .vc_label,
	.woocommerce-product-rating .woocommerce-review-link,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
	.yith-wcwl-share h4.yith-wcwl-share-title,
	.post_list_widget .blockquote-bg,
	.portfolio-inner .figcaption,
	.feature-content .feature-header,
	.woocommerce-cart .cart-collaterals .cart_totals table td, 
	.woocommerce-cart .cart-collaterals .cart_totals table th,
	.cart-collaterals .cart_totals > h2,
	.woocommerce table.wishlist_table,
	body table.compare-list tr.image td, 
	body table.compare-list tr.price td,
	h3 > label,
	body .vc_tta.vc_general,
	header.ts-header .header-v3 .menu-wrapper .ts-menu,
	.ts-banner,
	/* Forum */
	#bbpress-forums div.bbp-forum-title h3, 
	#bbpress-forums div.bbp-topic-title h3, 
	#bbpress-forums div.bbp-reply-title h3,
	/* COMPARE TABLE */
	body table.compare-list,
	body table.compare-list tr.title td
	{
		font-size:<?php echo esc_html($ts_font_size_body) ?>px;
		line-height:<?php echo esc_html($ts_line_height_body) ?>px;
	}
	.breadcrumb-title-wrapper .breadcrumb-title *{
		font-size:<?php echo esc_html($ts_font_size_body) - 1 ?>px; /* - 1 font-body */
	}
	.product-group-button .button-tooltip{
		font-size:<?php echo esc_html($ts_font_size_body) - 2 ?>px !important; /* - 2 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px !important;; /* - 4 line-height body */
	}
	body input,
	body select,
	html input[type^="search"],
	html input[type^="text"], 
	html input[type^="email"],
	html input[type^="password"],
	body .select2-search input[type="text"],
	.chosen-container,
	.chosen-container-single .chosen-search input[type=text],
	.woocommerce #content table.shop_table td.actions .coupon .input-text, 
	.woocommerce table.shop_table td.actions .coupon .input-text, 
	.woocommerce-page #content table.shop_table td.actions .coupon .input-text, 
	.woocommerce-page table.shop_table td.actions .coupon .input-text,
	#bbpress-forums #bbp-your-profile fieldset input, 
	#bbpress-forums #bbp-your-profile fieldset textarea,
	.bbp-login-form .bbp-username input, 
	.bbp-login-form .bbp-email input, 
	.bbp-login-form .bbp-password input,
	.chosen-container a.chosen-single,
	.woocommerce-checkout .form-row .chosen-container-single .chosen-single,
	.woocommerce form .form-row input.input-text, 
	.woocommerce form .form-row textarea, 
	.woocommerce-page form .form-row input.input-text, 
	.woocommerce-page form .form-row textarea,
	.woocommerce #content table.cart td.actions .coupon .input-text, 
	.woocommerce table.cart td.actions .coupon .input-text, 
	.woocommerce-page #content table.cart td.actions .coupon .input-text, 
	.woocommerce-page table.cart td.actions .coupon .input-text,
	body .select2-container .select2-choice,
	.ts-twitter-slider.text-light .twitter-content .date-time,
	.ts-product-attribute > div,
	.ts-testimonial-wrapper.text-light .testimonial-content .byline
	{
		font-size:<?php echo esc_html($ts_font_size_body) ?>px;
	}
	.woocommerce div.product .single-navigation .product-info span.price,
	.woocommerce-page div.product .single-navigation .product-info span.price,
	div.product .single-navigation .product-info .price del,
	div.product .single-navigation .product-info .price ins{
		font-size:<?php echo esc_html($ts_font_size_body); ?>px !important;
		line-height:<?php echo esc_html($ts_line_height_body) ?>px !important;
	}
	.woocommerce .woocommerce-ordering .orderby li, 
	.woocommerce-page .woocommerce-ordering .orderby li,
	.shopping-cart-wrapper a.cart-control,
	.shopping-cart-wrapper .dropdown-container,
	.gridlist-toggle a#grid:before,
	.gridlist-toggle a#list:before{
		line-height:<?php echo esc_html($ts_line_height_body) ?>px;
	}
	body #pp_full_res{
		line-height:<?php echo esc_html($ts_line_height_body) ?>px !important;
	}
	ol li, 
	ul li {
		line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px;/* - 4 line-height body */
	}
	dt, 
	dd,
	.woocommerce form .form-row label, 
	.woocommerce-page form .form-row label{
		line-height:<?php echo esc_html($ts_line_height_body) - 6 ?>px;/* - 6 line-height body */
	}
	.ts-testimonial-wrapper.text-light .testimonial-content,
	.ts-twitter-slider.text-light .twitter-content,
	.ts-price-table .desc-price{
		font-size:<?php echo esc_html($ts_font_size_body) + 2 ?>px; /* + 2 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) + 6 ?>px; /* + 6 line-height body */
	}
	ul.product_list_widget li > a,
	h3.product-name > a,
	h3.product-name,
	.single-navigation a .product-info span{
		font-size:<?php echo esc_html($ts_font_size_body) ?>px;
		line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px; /* - 4 line-height body */
	}
	.woocommerce .ts-product-deals-slider-wrapper.list h3.product-name,
	.woocommerce .ts-product-deals-slider-wrapper.list h3.product-name > a{
		font-size:<?php echo esc_html($ts_font_size_body) + 4 ?>px; /* + 4 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) - 2 ?>px; /* - 2 line-height body */
	}
	.woocommerce .ts-product-deals-slider-wrapper.list .amount{
		font-size:<?php echo esc_html($ts_font_size_body) + 6 ?>px; /* + 6 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) ?>px;
	}
	.woocommerce .ts-product-deals-slider-wrapper.list .product .product-categories a{
		font-size:<?php echo esc_html($ts_font_size_body) - 1 ?>px; /* - 1 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) - 6 ?>px; /* - 6 line-height body */
	}
	/* When active responsive option */
	@media 
	only screen and (max-width: 991px)	and (min-width: 768px){
		/* SHORTCODE */
		/* Shortcode Hot Deal */
		.woocommerce .ts-product-deals-slider-wrapper.list h3.product-name, 
		.woocommerce .ts-product-deals-slider-wrapper.list h3.product-name > a{
			font-size:<?php echo esc_html($ts_font_size_body) ?>px;
			line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px; /* - 4 line-height body */
		}
		.woocommerce .ts-product-deals-slider-wrapper.list .amount{
			font-size:<?php echo esc_html($ts_font_size_body) + 2 ?>px; /* + 2 font-body */
			line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px; /* - 4 line-height body */
		}
	}
	h4 > a,
	.ts-team-member header > h3,
	.ts-team-member header > h3 a{
		font-size:<?php echo esc_html($ts_font_size_body) ?>px;
		line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px; /* - 4 line-height body */
	}
	h1,.h1,
	.fix-size-heading h2,
	#main .ts-feedburner-subscription-shortcode .widget-title,
	.banner-content h1
	{
		font-size:<?php echo esc_html($ts_font_size_heading_1) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_1) ?>px;
	}
	.ts-heading h1,
	h2,.h2,
	h1.wpb_heading,
	.banner-content h2,
	.breadcrumb-title-wrapper .breadcrumb-title h1,
	#main .ts-feedburner-subscription-shortcode.style-3 .widgettitle
	{
		font-size:<?php echo esc_html($ts_font_size_heading_2) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_2) ?>px;
	}
	.ts-heading h2,
	h3,
	.h3,
	h2.wpb_heading,
	.banner-content h3,
	.ts-lightbox .feedburner-subscription .widgettitle
	{
		font-size:<?php echo esc_html($ts_font_size_heading_3) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_3) ?>px;
	}
	.ts-shortcode.ts-blogs .shortcode-heading-wrapper .heading-title,
	.ts-shortcode.content-no-border .shortcode-heading-wrapper .heading-title,
	.heading-shortcode,
	.comments-title .heading-title,
	#comment-wrapper .heading-title,
	.cross-sells > h2,
	.upsells > h2,
	.related > h2,
	.theme-title,
	.theme-title > h3, 
	.woocommerce-billing-fields > h3,
	body .vc_general.vc_tta-tabs.default_no_border .vc_tta-tab > a,
	#main .ts-feedburner-subscription-shortcode .widgettitle,
	footer .ts-feedburner-subscription-shortcode.style-2 .widgettitle
	{
		font-size:<?php echo esc_html($ts_font_size_heading_6) + 2 ?>px; /* + 2 font-h6 */
		line-height:<?php echo esc_html($ts_line_height_heading_6) ?>px;
	}
	body div.ppt,
	.widget.ts-products-widget > .widgettitle,
	.woocommerce #reviews h3#reply-title, 
	.woocommerce-page #reviews h3#reply-title,
	.woocommerce #reviews #comments > h2, 
	.woocommerce-page #reviews #comments > h2,
	.widget_shopping_cart_content p.total strong,
	body .vc_general.vc_tta-tabs.default .vc_tta-tabs-container .vc_tta-tab > a,
	.widget-title,
	body .ts-footer-block .vc_col-sm-3 .widget .widgettitle,
	body .ts-footer-block .vc_col-sm-4 .widget .widgettitle,
	.ts-shortcode .shortcode-heading-wrapper .heading-title,
	.woocommerce-account div.woocommerce h3,
	.single-portfolio .info-content .entry-title,
	#bbpress-forums #bbp-user-wrapper h2.entry-title,
	.column-tabs .heading-tab h3{
		font-size:<?php echo esc_html($ts_font_size_heading_6) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_6) ?>px;
	}
	.widget-container.ts-menus-widget .widget-title{
		font-size:<?php echo esc_html($ts_font_size_heading_6) - 1 ?>px; /* - 1 font-h6 */
	}
	.blogs article h3.heading-title a,
	.list-posts .entry-content .entry-title{
		font-size:<?php echo esc_html($ts_font_size_heading_6) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_6) ?>px;
	}
	h4,.h4,
	.ts-heading h3,
	h3.wpb_heading,
	.banner-content h4,
	.woocommerce-account div.woocommerce h2,
	.woocommerce .wishlist-title h2,
	.vc_pie_chart .vc_pie_chart_value{
		font-size:<?php echo esc_html($ts_font_size_heading_4) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_4) ?>px;
	}

	h5,.h5,
	.ts-heading h4,
	h4.wpb_heading,
	h5.wpb_heading{
		font-size:<?php echo esc_html($ts_font_size_heading_5) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_5) ?>px;
	}
	h6,.h6,
	.vc_message_box .h4,
	h6.wpb_heading,
	.product-category-top-content .widget-title-wrapper > .widget-title,
	.portfolio-inner .figcaption h3,
	.ts-feature-wrapper .feature-header h3,
	.ts-milestone h3.subject,
	#order_review_heading,
	body table.compare-list th,
	table.compare-list tr.image th, 
	table.compare-list tr.title th, 
	table.compare-list tr.price th, 
	table.compare-list tr.add-to-cart th,
	body > h1,
	.ts-testimonial-wrapper.text-light .testimonial-content h4 > a,
	.ts-twitter-slider.text-light .twitter-content h4 > a{
		font-size:<?php echo esc_html($ts_font_size_heading_6) ?>px;
		line-height:<?php echo esc_html($ts_line_height_heading_6) ?>px;
	}
	table label {
		font-size:<?php echo esc_html($ts_font_size_body) ?>px;
	}
	legend {
		font-size:<?php echo esc_html($ts_font_size_body) + 4 ?>px; /* + 4 font-body */
	}
	blockquote {
		font-size:<?php echo esc_html($ts_font_size_body) + 2 ?>px; /* + 2 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) ?>px;
	}
	/*----------------------------------------------------------------*/
	/*- HEADER -------------------------------------------------------*/
	.info-desc span,
	.my-account-wrapper .account-control > a,
	.my-wishlist-wrapper a,
	#lang_sel_click > ul > li > a,
	.header-currency .wcml_currency_switcher > a{
		font-size:<?php echo esc_html($ts_font_size_body) - 1 ?>px; /* - 1 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) ?>px;
	}
	.my-account-wrapper .dropdown-container{
		line-height:<?php echo esc_html($ts_line_height_body) ?>px;
	}

	/*----------------------------------------------------------------*/
	/*- MENU ---------------------------------------------------------*/
	header.ts-header .mobile-menu-wrapper li a{
		font-size:<?php echo esc_html($ts_font_size_menu) ?>px;
		line-height:<?php echo esc_html($ts_line_height_menu) ?>px;
	}
	header.ts-header .menu-wrapper nav.pc-menu > ul.menu > li.parent > a >.menu-label:after{;
		font-size:<?php echo esc_html($ts_font_size_menu) ?>px;
		line-height:<?php echo esc_html($ts_font_size_menu) ?>px;
	}
	header.ts-header .menu-wrapper nav > ul.menu > li > a,
	header.ts-header .ts-menu > .menu > ul > li > a,
	.widget-container .vertical-menu > .menu > li > a,
	header.ts-header .menu-wrapper nav > ul.menu li:before,
	.vertical-menu-wrapper .vertical-menu-heading,
	header.ts-header .vertical-menu-wrapper .vertical-menu-heading:before{
		font-size:<?php echo esc_html($ts_font_size_menu) ?>px;
		line-height:<?php echo esc_html($ts_line_height_menu) ?>px;
	}
	.group-button-icon-header .my-account-wrapper a:before,
	.group-button-icon-header .my-wishlist-wrapper a:before,
	.group-button-icon-header .ts-tiny-cart-wrapper .ic-cart .ic{
		font-size:<?php echo esc_html($ts_font_size_menu) + 1 ?>px; /* + 1 font-menu */
		line-height:<?php echo esc_html($ts_line_height_menu) ?>px;
	}
	header.ts-header .menu-wrapper nav > ul.menu > li ul a,
	header.ts-header .menu-wrapper nav.vertical-menu > ul.menu > li > a,
	.widget-container nav.vertical-menu > ul.menu > li > a{
		font-size:<?php echo esc_html($ts_font_size_menu) ?>px;
		line-height:<?php echo esc_html($ts_line_height_menu) ?>px;
	}
	header.ts-header .menu-wrapper nav > ul.menu li .menu-desc{
		font-size:<?php echo esc_html($ts_font_size_menu) - 2 ?>px; /* - 2 font-menu */
		line-height:<?php echo esc_html($ts_line_height_menu) - 2 ?>px; /* - 2 line-height menu */
	}
	/* WIDGET CUSTOM MENU FOR MEGAMENU */
	header.ts-header .menu-wrapper nav li.widget > .widgettitle,
	header.ts-header .menu-wrapper nav div.list-link > .widgettitle,
	.widget-container .vertical-menu li.widget > .widgettitle,
	.widget-container .vertical-menu div.list-link > .widgettitle{
		font-size:<?php echo esc_html($ts_font_size_menu) ?>px;
		line-height:<?php echo esc_html($ts_line_height_menu) ?>px;
	}

	/*----------------------------------------------------------------*/
	/*- PRODUCT ------------------------------------------------------*/
	.woocommerce #content div.product .product p.price, 
	.woocommerce #content div.product .product span.price, 
	.woocommerce div.product .product p.price, 
	.woocommerce div.product .product span.price, 
	.woocommerce-page #content div.product .product p.price, 
	.woocommerce-page #content div.product .product span.price, 
	.woocommerce-page div.product .product p.price, 
	.woocommerce-page div.product .product span.price,
	.amount,
	.quantity,
	.total-title{
		font-size:<?php echo esc_html($ts_font_size_body) + 2 ?>px; /* + 2 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px; /* - 4 line-height body */
	}
	.total-title{
		font-size:<?php echo esc_html($ts_font_size_body) + 1 ?>px; /* + 1 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) - 6 ?>px; /* - 6 line-height body */
	}
	div.product div[itemprop="offers"] .price .amount, 
	div.product .single_variation .amount, 
	.woocommerce-page div.product div[itemprop="offers"] .price .amount, 
	.woocommerce div.product .single_variation .amount{
		font-size:<?php echo esc_html($ts_font_size_body) + 12 ?>px; /* + 12 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) + 6 ?>px; /* + 6 line-height body */
	}

	.products .product.product-category h3, 
	.woocommerce .products .product.product-category h3, 
	.woocommerce-page .products .product.product-category h3{
		font-size:<?php echo esc_html($ts_font_size_body) + 10 ?>px; /* + 10 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) + 4 ?>px; /* + 4 line-height body */
	}
	.products .product.product-category .count, 
	.woocommerce .products .product.product-category .count, 
	.woocommerce-page .products .product.product-category .count{
		font-size:16px;
		line-height:20px;
		font-size:<?php echo esc_html($ts_font_size_body) + 2 ?>px; /* + 2 font-body */
		line-height:<?php echo esc_html($ts_line_height_body) - 4 ?>px; /* - 4 line-height body */
	}
	/*- BUTTON --------*/
	.woocommerce a.button.added:before, 
	.woocommerce button.button.added:before, 
	.woocommerce input.button.added:before, 
	.woocommerce #respond input#submit.added:before, 
	.woocommerce #content input.button.added:before, 
	.woocommerce-page a.button.added:before, 
	.woocommerce-page button.button.added:before, 
	.woocommerce-page input.button.added:before, 
	.woocommerce-page #respond input#submit.added:before, 
	.woocommerce-page #content input.button.added:before,
	.woocommerce .product .product-wrapper .meta-wrapper .loop-add-to-cart a:first-child:before{
		font-size:<?php echo esc_html($ts_font_size_button) ?>px;
		line-height:<?php echo esc_html($ts_line_height_button) ?>px;
	}
	a.ts-button,
	a.button,
	button, 
	input[type^="submit"], 
	.shopping-cart p.buttons a, 
	.woocommerce #content input.button, 
	.woocommerce #respond input#submit, 
	.woocommerce a.button, 
	.woocommerce button.button, 
	.woocommerce input.button, 
	.woocommerce-page #content input.button, 
	.woocommerce-page #respond input#submit, 
	.woocommerce-page a.button, 
	.woocommerce-page button.button, 
	.woocommerce-page input.button, 
	.woocommerce #content input.button.alt, 
	.woocommerce #respond input#submit.alt, 
	.woocommerce a.button.alt, 
	.woocommerce button.button.alt, 
	.woocommerce input.button.alt, 
	.woocommerce-page #content input.button.alt, 
	.woocommerce-page #respond input#submit.alt, 
	.woocommerce-page a.button.alt, 
	.woocommerce-page button.button.alt,
	.woocommerce-page input.button.alt, 
	#content button.button,
	.woocommerce .widget_price_filter .price_slider_amount .button,
	.woocommerce-page .widget_price_filter .price_slider_amount .button,
	.pp_woocommerce div.product .summary .compare:before, 
	.woocommerce div.product .summary .compare:before, 
	.woocommerce-page div.product .summary .compare:before, 
	.woocommerce #content div.product .summary .compare:before, 
	.woocommerce-page #content div.product .summary .compare:before,
	div.product .summary .yith-wcwl-add-to-wishlist a:before,
	body .single-post .single-navigation > a,
	.woocommerce #content table.shop_table input, 
	.woocommerce table.shop_table input, 
	.woocommerce-page #content table.shop_table input, 
	.woocommerce-page table.shop_table input,
	/* Forum */
	#bbpress-forums #bbp-single-user-details #bbp-user-navigation a,
	/* Compare */
	body table.compare-list .add-to-cart td a{
		font-size:<?php echo esc_html($ts_font_size_button) ?>px;
		line-height:<?php echo esc_html($ts_line_height_button) ?>px;
	}
	
	/* ============= 11. PRODUCT HOVER ============== */
	<?php if( isset($data['ts_effect_hover_product_style'])): ?>
		<?php if( $data['ts_effect_hover_product_style'] == 'style-1' && $data['ts_enable_rtl'] == 0 ): ?>
			.product-group-button .button-tooltip{
				padding:3px 5px;
				position:absolute;
				text-transform:none;
				display:inline-block;
				min-width:80px;
				opacity:0;
				text-align:center;
				visibility:hidden;
				border-radius:2px;
				-webkit-border-radius:2px;
				-moz-border-radius:2px;
				top:50%;
				right:20px;
				margin-top:-13px;
				background:#3f3f3f !important;
				color:#fff !important;
			}
			.product-group-button .button-tooltip:after{
				width: 0;
				height: 0;
				position:absolute;
				right:-5px;
				top:50%;
				content:"";
				transform:translate(0,-50%);
				-webkit-transform:translate(0,-50%);
				-moz-transform:translate(0,-50%);
				-ms-transform:translate(0,-50%);
				border-top: 5px solid transparent;
				border-left: 6px solid #3f3f3f;
				border-bottom: 5px solid transparent;
			}
			.product-group-button > div a:hover .button-tooltip{
				opacity:1;
				visibility:visible;
				right:30px;
				transition: all 300ms ease-in-out 0s;
				-moz-transition: all 300ms ease-in-out 0s;
				-webkit-transition: all 300ms ease-in-out 0s;
			}
			.product-group-button{
				width:30px;
				height:auto;
				top:auto;
				right:-5px; /*rtl */
				bottom:5px;
				transition: right 400ms ease 0s;
				-moz-transition: right 400ms ease 0s;
				-webkit-transition: right 400ms ease 0s;
			}
			.woocommerce .product .thumbnail-wrapper .product-group-button > div,
			.woocommerce .product .thumbnail-wrapper .product-group-button > div a{
				border:0 !important;
			}
			.product-group-button.four-button{
				top:50%;
				bottom:auto;
				margin-top:-61px;
			}
			.product-group-button.three-button{
				top:50%;
				bottom:auto;
				margin-top:-46px;
			}
			.thumbnail-wrapper:hover .product-group-button{
				z-index:5;
				right:5px;
			}
			.product-group-button.two-button{
				right:-5px;
				bottom:5px;
				transition: right 400ms ease 0s;
				-moz-transition: right 400ms ease 0s;
				-webkit-transition: right 400ms ease 0s;
			}
			.product-group-button > div{
				margin-bottom:1px;
			}
			.product-group-button > *:last-child{
				margin-bottom:0 !important;
			}
		<?php endif; ?>
		<?php if( $data['ts_effect_hover_product_style'] == 'style-1' && $data['ts_enable_rtl'] == 1 ): ?>
			.product-group-button .button-tooltip{
				padding:3px 5px;
				position:absolute;
				text-transform:none;
				display:inline-block;
				min-width:80px;
				opacity:0;
				text-align:center;
				visibility:hidden;
				border-radius:2px;
				-webkit-border-radius:2px;
				-moz-border-radius:2px;
				top:50%;
				left:20px;
				margin-top:-13px;
				background:#3f3f3f !important;
				color:#fff !important;
			}
			.product-group-button .button-tooltip:after{
				width: 0;
				height: 0;
				position:absolute;
				left:-5px;
				top:50%;
				content:"";
				transform:translate(0,-50%);
				-webkit-transform:translate(0,-50%);
				-moz-transform:translate(0,-50%);
				-ms-transform:translate(0,-50%);
				border-top: 5px solid transparent;
				border-right: 6px solid #3f3f3f;
				border-bottom: 5px solid transparent;
			}
			.product-group-button > div a:hover .button-tooltip{
				opacity:1;
				visibility:visible;
				left:30px;
				transition: all 300ms ease-in-out 0s;
				-moz-transition: all 300ms ease-in-out 0s;
				-webkit-transition: all 300ms ease-in-out 0s;
			}
			.product-group-button{
				width:30px;
				height:auto;
				top:auto;
				left:-5px; /*rtl */
				bottom:5px;
				transition: left 400ms ease 0s;
				-moz-transition: left 400ms ease 0s;
				-webkit-transition: left 400ms ease 0s;
			}
			.woocommerce .product .thumbnail-wrapper .product-group-button > div,
			.woocommerce .product .thumbnail-wrapper .product-group-button > div a{
				border:0 !important;
			}
			.product-group-button.four-button{
				top:50%;
				bottom:auto;
				margin-top:-61px;
			}
			.product-group-button.three-button{
				top:50%;
				bottom:auto;
				margin-top:-46px;
			}
			.thumbnail-wrapper:hover .product-group-button{
				z-index:5;
				left:5px;
			}
			.product-group-button.two-button{
				left:-5px;
				bottom:5px;
				transition: left 400ms ease 0s;
				-moz-transition: left 400ms ease 0s;
				-webkit-transition: left 400ms ease 0s;
			}
			.product-group-button > div{
				margin-bottom:1px;
			}
			.product-group-button > *:last-child{
				margin-bottom:0 !important;
			}
		<?php endif; ?>
		<?php if( $data['ts_effect_hover_product_style'] == 'style-2' ): ?>
			.product-group-button .button-tooltip{
				padding:3px 5px;
				position:absolute;
				text-transform:none;
				display:inline-block;
				min-width:80px;
				opacity:0;
				text-align:center;
				visibility:hidden;
				border-radius:2px;
				-webkit-border-radius:2px;
				-moz-border-radius:2px;
				bottom:100%;
				left:50%;
				transform:translate(-50%,0);
				-webkit-transform:translate(-50%,0);
				-moz-transform:translate(-50%,0);
				-ms-transform:translate(-50%,0);
				background:#ffffff !important;
				color:#3f3f3f !important;
			}
			.product-group-button .button-tooltip:after{
				width: 0;
				height: 0;
				position:absolute;
				bottom:-6px;
				left:50%;
				content:"";
				transform:translate(-50%,0);
				-webkit-transform:translate(-50%,0);
				-moz-transform:translate(-50%,0);
				-ms-transform:translate(-50%,0);
				border-left: 5px solid transparent;
				border-right: 5px solid transparent;
				border-top: 7px solid #ffffff;
			}
			.product-group-button > div a:hover .button-tooltip{
				opacity:1;
				visibility:visible;
				transform:translate(-50%,-10px);
				-webkit-transform:translate(-50%,-10px);
				-moz-transform:translate(-50%,-10px);
				-ms-transform:translate(-50%,-10px);
				transition: all 300ms ease-in-out 0s;
				-moz-transition: all 300ms ease-in-out 0s;
				-webkit-transition: all 300ms ease-in-out 0s;
			}
			.thumbnail-wrapper:before{
				content:"";
				left:0;
				right:0;
				bottom:0;
				top:0;
				position:absolute;
				opacity:0;
				z-index:3;
				background:rgba(0,0,0,0.7);
				transition:all 500ms ease 0s;
				-webkit-transition:all 500ms ease 0s;
				-moz-transition:all 500ms ease 0s;
			}
			.thumbnail-wrapper:hover:before{
				opacity:1;
			}
			.product-group-button{
				top:50%;
				left:50%;
				width:152px;
				text-align:center;
				height:34px;
				transform:translate(-50%,-50%);
				-webkit-transform:translate(-50%,-50%);
				-moz-transform:translate(-50%,-50%);
				-ms-transform:translate(-50%,-50%);
				background:transparent !important;
			}
			.product-group-button.three-button{
				width:114px
			}
			.product-group-button.one-button{
				width:38px;
			}
			.thumbnail-wrapper:hover .product-group-button{
				z-index:5;
			}
			.thumbnail-wrapper:hover .product-group-button > div{
				-webkit-animation-duration: 400ms;
				-moz-animation-duration: 400ms;
				animation-duration: 400ms;
				-webkit-animation-fill-mode: both;
				-moz-animation-fill-mode: both;
				animation-fill-mode: both;
				
				-webkit-animation-name: run_button_thumbnail;
				-moz-animation-name: run_button_thumbnail;
				animation-name: run_button_thumbnail;
				
				backface-visibility:hidden;
				-moz-backface-visibility:hidden;
				-webkit-backface-visibility:hidden;
			}
			.thumbnail-wrapper:hover .product-group-button > div:nth-child(2){
				animation-delay: 100ms;
				-webkit-animation-delay: 100ms;
				-moz-animation-delay:100ms;
			}
			.thumbnail-wrapper:hover .product-group-button > div:nth-child(3){
				animation-delay: 200ms;
				-webkit-animation-delay: 200ms;
				-moz-animation-delay:200ms;
			}
			.thumbnail-wrapper:hover .product-group-button > div:nth-child(4){
				animation-delay: 300ms;
				-webkit-animation-delay: 300ms;
				-moz-animation-delay:300ms;
			}
			@-webkit-keyframes run_button_thumbnail {
				from {
					opacity:0;
					transform:translate(0,20px);
					-moz-transform:translate(0,20px);
					-webkit-transform:translate(0,20px);
					-ms-transform:translate(0,20px);
				}
				to {
					opacity:1;
					transform:translate(0,0);
					-moz-transform:translate(0,0);
					-webkit-transform:translate(0,0);
					-ms-transform:translate(0,0);
				}
			}

			@-moz-keyframes run_button_thumbnail {
				from {
					opacity:0;
					transform:translate(0,20px);
					-moz-transform:translate(0,20px);
					-webkit-transform:translate(0,20px);
					-ms-transform:translate(0,20px);
				}
				to {
					opacity:1;
					transform:translate(0,0);
					-moz-transform:translate(0,0);
					-webkit-transform:translate(0,0);
					-ms-transform:translate(0,0);
				}
			}
			@keyframes run_button_thumbnail {
				from {
					opacity:0;
					transform:translate(0,20px);
					-moz-transform:translate(0,20px);
					-webkit-transform:translate(0,20px);
					-ms-transform:translate(0,20px);
				}
				to {
					opacity:1;
					transform:translate(0,0);
					-moz-transform:translate(0,0);
					-webkit-transform:translate(0,0);
					-ms-transform:translate(0,0);
				}
			}
			.woocommerce .product .thumbnail-wrapper .product-group-button > div a{
				background:transparent !important;
				border-width:2px !important;
				border-style:solid !important;
				border-color:#fff;
				color:#fff;
				width:34px;
				height:34px;
			}
			.woocommerce .product .thumbnail-wrapper .product-group-button > div{
				width:34px;
				height:34px;
			}
			.product-group-button > *{
				margin:0 2px;
			}
			@media only screen and (max-width: 1239px){
				.woocommerce .product .thumbnail-wrapper .button-in:hover a, 
				.woocommerce .product .thumbnail-wrapper .button-in:hover, 
				.button-in a:hover{
					background-color:<?php echo esc_html($ts_primary_color) ?> !important;
					color:<?php echo esc_html($ts_text_color_in_bg_primary) ?> !important;
					border-color:<?php echo esc_html($ts_primary_color) ?> !important;
				}
				.woocommerce .product .thumbnail-wrapper .button-in:hover a i:before, 
				.woocommerce .product .thumbnail-wrapper .button-in:hover i:before, 
				.button-in a:hover i:before{
					color:<?php echo esc_html($ts_text_color_in_bg_primary) ?> !important;
				}
			}
			<?php if( $data['ts_enable_rtl'] == 0 ): ?>
				@media only screen and (max-width: 1239px){
					.thumbnail-wrapper:hover .product-group-button > div{
						-webkit-animation: none;
						-moz-animation: none;
						animation: none;
					}
					.woocommerce .product .product-wrapper .thumbnail-wrapper .product-group-button{
						left:auto;
						width:30px;
					}
					.thumbnail-wrapper:before{
						opacity:1;
						width:30px;
						height:30px;
						left:auto;
						right:0;
						bottom:0;
						top:auto;
					}
					.woocommerce .product .thumbnail-wrapper .product-group-button > div a{
						border:0 !important;
						width:30px;
						height:30px;
					}
					.woocommerce .product .thumbnail-wrapper .product-group-button > div{
						width:30px;
						height:30px;
					}
				}
			<?php elseif( $data['ts_enable_rtl'] == 1 ): ?>
				@media only screen and (max-width: 1239px){
					.thumbnail-wrapper:hover .product-group-button > div{
						-webkit-animation: none;
						-moz-animation: none;
						animation: none;
					}
					.woocommerce .product .product-wrapper .thumbnail-wrapper .product-group-button{
						right:auto;
						left:0;
						width:30px;
					}
					.thumbnail-wrapper:before{
						opacity:1;
						width:30px;
						height:30px;
						left:0;
						right:auto;
						bottom:0;
						top:auto;
					}
					.woocommerce .product .thumbnail-wrapper .product-group-button > div a{
						border:0 !important;
						width:30px;
						height:30px;
					}
					.woocommerce .product .thumbnail-wrapper .product-group-button > div{
						width:30px;
						height:30px;
					}
				}
			<?php endif; ?>
		
		<?php endif; ?>
		
	<?php endif; ?>
	
	/* Custom CSS */
	<?php 
	if( !empty($ts_custom_css_code) ){
		echo html_entity_decode( trim( $ts_custom_css_code ) );
	}
	?>