<?php 
/*** Activate Theme ***/
function ts_theme_activation(){
	global $pagenow;
	if( is_admin() && 'themes.php' == $pagenow && isset($_GET['activated']) )
	{
		if( get_option( 'shop_single_image_size' ) === false ){
			/* Single Image */
			update_option( 'shop_single_image_size', array( 'width' => '550', 'height' => '669', 'crop' => 1 ) );
			/* Thumbnail Image */
			update_option( 'shop_thumbnail_image_size', array( 'width' => '110', 'height' => '133', 'crop' => 1 ) );
			/* Category Image */
			update_option( 'shop_catalog_image_size', array( 'width' => '330', 'height' => '402', 'crop' => 1 ) );
		}
		
		if( get_option( 'yith_woocompare_image_size' ) === false ){
			update_option( 'yith_woocompare_image_size', array( 'width' => '300', 'height' => '420', 'crop' => 1 ) );
		}
	}
}
add_action('admin_init','ts_theme_activation');


/*** Theme Setup ***/
function ts_theme_setup(){
	/* Add editor-style.css file*/
	add_editor_style();
	
	/* Add Theme Support */
	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'quote', 'video' ) );		
	
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'title-tag' );
	
	$defaults = array(
		'default-color'         => ''
		,'default-image'        => ''
	);
	add_theme_support( 'custom-background', $defaults );
	
	add_theme_support( 'woocommerce' );
	
	if ( ! isset( $content_width ) ){ $content_width = 1200; }
	
	/* Translation */
	load_theme_textdomain( 'gon', get_template_directory() . '/languages' );
	
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) ){
		require_once( $locale_file );
	}
	
	/* Register Menu Location */
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation', 'gon' ),
	) );
	register_nav_menus( array(
		'vertical' => esc_html__( 'Vertical Navigation', 'gon' ),
	) );
	register_nav_menus( array(
		'mobile' => esc_html__( 'Mobile Navigation', 'gon' ),
	) );
	
	/* Mobile Detect */
	if( class_exists('Mobile_Detect') ){
		$detect = new Mobile_Detect;
		$_is_tablet = $detect->isTablet();
		$_is_mobile = $detect->isMobile() && !$_is_tablet;
		define( 'TS_IS_MOBILE', $_is_mobile );
		define( 'TS_IS_TABLET', $_is_tablet );
	}
}
add_action( 'after_setup_theme', 'ts_theme_setup');


/*** Add Image Size ***/
function ts_add_image_size(){
	global $smof_data;
	$menu_icon_width = isset($smof_data['ts_menu_thumb_width'])?(int)$smof_data['ts_menu_thumb_width']:16;
	$menu_icon_height = isset($smof_data['ts_menu_thumb_height'])?(int)$smof_data['ts_menu_thumb_height']:16;
	add_image_size('ts_menu_icon_thumb', $menu_icon_width, $menu_icon_height, true);
	
	add_image_size('ts_blog_shortcode_thumb', 590, 352, true);
	add_image_size('ts_blog_thumb', 1180, 704, true);
	add_image_size('ts_product_cat_thumb', 500, 970, true);
	
	$product_deal_thumb_width = 400;
	$product_deal_thumb_height = 486;
	$shop_catalog_image_size = get_option('shop_catalog_image_size', false);
	if( is_array($shop_catalog_image_size) ){
		$product_deal_thumb_width = absint( $shop_catalog_image_size['width'] * 1.21 );
		$product_deal_thumb_height = absint( $shop_catalog_image_size['height'] * 1.21 );
	}
	
	add_image_size('ts_product_deal_thumb', $product_deal_thumb_width, $product_deal_thumb_height, true);
}
ts_add_image_size();

/*** Register google font ***/
function ts_register_google_font( $iframe = false ){				
	global $smof_data;
	$fonts = array();
	
	if( $smof_data['ts_body_font_enable_google_font'] ){
		$fonts[] = array(
					'name'	=> $smof_data['ts_body_font_google']	
					,'bold'	=> '300,400,500,600,700,800,900'
				);
	}
	
	if( $smof_data['ts_secondary_body_font_enable_google_font'] ){
		$fonts[] = array(
					'name'	=> $smof_data['ts_secondary_body_font_google']	
					,'bold'	=> '300,400,500,600,700,800,900'
				);
	}
	
	if( $smof_data['ts_menu_font_enable_google_font'] ){
		$fonts[] = array(
					'name'	=> $smof_data['ts_menu_font_google']	
					,'bold'	=> '300,400,500,600,700,800,900'
				);
	}
	
	if( $smof_data['ts_sub_menu_font_enable_google_font'] ){
		$fonts[] = array(
					'name'	=> $smof_data['ts_sub_menu_font_google']	
					,'bold'	=> '300,400,500,600,700,800,900'
				);
	}
	
	/* Default fonts */
	$fonts[] = array(
				'name'	=> 'Lato'
				,'bold'	=> '300,400,500,600,700,800,900'
			);
	
	$fonts[] = array(
				'name'	=> 'Raleway'
				,'bold'	=> '300,400,500,600,700,800,900'
			);
	
	foreach( $fonts as $font ){
		ts_load_google_font( $font['name'], $font['bold'], $iframe );
	}
}

function ts_load_google_font( $font_name = '', $font_bold = '300,400,500,600,700,800,900', $iframe = false ){
	if( strlen($font_name) > 0 ){
		$font_name_id = sanitize_title( $font_name );
		
		$font_url = add_query_arg( 'family', urlencode( $font_name . ':' . $font_bold . '&subset=latin,latin-ext' ), '//fonts.googleapis.com/css');
		if( !$iframe ){
			wp_enqueue_style( "gg-{$font_name_id}", $font_url );		
		}
		else{
			echo '<link rel="stylesheet" type="text/css" id="gg_'.$font_name_id.'" media="all" href="'.$font_url.'" />';	
		}
	}
}

/*** Register Front End Scripts  ***/
function ts_register_scripts(){
	global $smof_data, $ts_page_datas;
	ts_register_google_font();
	
	wp_deregister_style( 'font-awesome' );
	wp_deregister_style( 'yith-wcwl-font-awesome' );
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'font-awesome' );
	
	wp_register_style( 'ts-reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'ts-reset' );
	
	wp_enqueue_style( 'ts-style', get_stylesheet_uri() );
	
	if( isset($smof_data['ts_responsive']) && (int) $smof_data['ts_responsive'] == 1 ){
		wp_register_style( 'ts-responsive', get_template_directory_uri() . '/css/responsive.css' );
		wp_enqueue_style( 'ts-responsive' );
	}
	
	wp_deregister_style( 'owl.carousel' );
	wp_register_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'owl.carousel' );
	
	wp_register_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' );
	wp_enqueue_style( 'prettyPhoto' );
	
	wp_deregister_style( 'select2' );
	wp_register_style( 'select2', get_template_directory_uri() . '/css/select2.css' );
	wp_enqueue_style( 'select2' );
	
	if( isset($ts_page_datas['ts_full_page']) && $ts_page_datas['ts_full_page'] ){
		wp_register_style( 'fullPage', get_template_directory_uri() . '/css/jquery.fullPage.css' );
		wp_enqueue_style( 'fullPage' );
	}
	
	if( isset($smof_data['ts_enable_rtl']) && $smof_data['ts_enable_rtl'] ){
		wp_register_style( 'ts-rtl', get_template_directory_uri() . '/css/rtl.css' );
		wp_enqueue_style( 'ts-rtl' );
	}
	
	wp_deregister_script( 'ts-include-scripts' );
	wp_register_script( 'ts-include-scripts', get_template_directory_uri().'/js/include_scripts.js', array('jquery'), null, true);
	wp_enqueue_script( 'ts-include-scripts' );
	
	wp_deregister_script( 'owl.carousel' );
	wp_register_script( 'owl.carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array(), null, true);
	wp_enqueue_script( 'owl.carousel' );
	
	wp_deregister_script( 'ts-script' );
	wp_register_script( 'ts-script', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);
	wp_enqueue_script( 'ts-script' );
	
	if( isset($ts_page_datas['ts_full_page']) && $ts_page_datas['ts_full_page'] ){
		wp_register_script( 'fullPage', get_template_directory_uri().'/js/jquery.fullPage.min.js', array(), null, true);
		wp_enqueue_script( 'fullPage' );
	}
	
	if( is_singular('product') && $smof_data['ts_prod_cloudzoom'] ){
		wp_deregister_script( 'cloud-zoom' );
		wp_register_script( 'cloud-zoom', get_template_directory_uri().'/js/cloud-zoom.js', array('jquery'), null, true);
		wp_enqueue_script( 'cloud-zoom' );
	}
	
	if( is_singular('product') && isset($smof_data['ts_prod_thumbnails_style']) && $smof_data['ts_prod_thumbnails_style'] == 'vertical' ){
		wp_deregister_script( 'jquery.caroufredsel' );
		wp_register_script( 'jquery.caroufredsel', get_template_directory_uri().'/js/jquery.carouFredSel-6.2.1.min.js', array(), null, true);
		wp_enqueue_script( 'jquery.caroufredsel' );
	}
	
	wp_register_script( 'cart-variation', get_template_directory_uri().'/js/add-to-cart-variation.min.js', array(), null, true);
	wp_enqueue_script('cart-variation');
	
	wp_deregister_script( 'select2' );
	wp_register_script( 'select2', get_template_directory_uri().'/js/select2.min.js', array(), null, true);
	wp_enqueue_script('select2');
	
	if( is_single() && get_option( 'thread_comments' ) ){ 	
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action('wp_enqueue_scripts', 'ts_register_scripts', 1000);

function ts_register_custom_style(){
	$upload_dir = wp_upload_dir();
	$filename = trailingslashit($upload_dir['baseurl']) . strtolower(str_replace(' ', '', wp_get_theme()->get('Name'))) . '.css';
	if( is_ssl() ){
		$filename = str_replace('http://', 'https://', $filename);
	}
	$filename_dir = trailingslashit($upload_dir['basedir']) . strtolower(str_replace(' ', '', wp_get_theme()->get('Name'))) . '.css';

	if( file_exists( $filename_dir ) ){ 
		wp_enqueue_style('ts-dynamic-css', $filename);
	}
	else{
		ob_start();
		include_once get_template_directory() . '/framework/dynamic_style.php';
		$dynamic_css = ob_get_contents();
		ob_end_clean();
		wp_add_inline_style( 'ts-style', $dynamic_css );
	}
}
add_action('wp_enqueue_scripts', 'ts_register_custom_style', 9999);


/*** Register Back End Scripts ***/
function ts_register_admin_scripts(){
	wp_enqueue_media();
	
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'font-awesome' );
	
	wp_register_style( 'ts-admin-style', get_template_directory_uri() . '/css/admin_style.css' );
	wp_enqueue_style( 'ts-admin-style' );
	
	wp_register_script( 'ts-admin-script', get_template_directory_uri().'/js/admin_main.js', array('jquery'), null, true);
	wp_enqueue_script( 'ts-admin-script' );
}
add_action('admin_enqueue_scripts', 'ts_register_admin_scripts');

/* Remove WP Version Param From Any Enqueued Scripts */
if( !function_exists('ts_remove_wp_ver_css_js') ){
	function ts_remove_wp_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) ){
			$src = esc_url( remove_query_arg( 'ver', $src ) );
		}
		return $src;
	}
}
add_filter( 'style_loader_src', 'ts_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'ts_remove_wp_ver_css_js', 9999 );

/*** Register Javascript Global Variable***/
function ts_register_javascript_global_variable(){
	global $smof_data;
	
	$smooth_scroll = 0;
	
	$window = false;
	$chrome = false;
	
	if( !empty($_SERVER['HTTP_USER_AGENT']) ){
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$window  = (bool)preg_match('/Windows/i', $user_agent );
		$chrome  = (bool)preg_match('/Chrome/i', $user_agent );
	}
	
	if( $smof_data['ts_smooth_scroll'] && !wp_is_mobile() && $window && $chrome ){
		$smooth_scroll = 1;
	}
	
	?>
	<script type="text/javascript">
		<?php if( defined('ICL_LANGUAGE_CODE') ): ?>
			var _ts_ajax_uri = '<?php echo admin_url('admin-ajax.php?lang='.ICL_LANGUAGE_CODE, 'relative'); ?>';
		<?php else: ?>
			var _ts_ajax_uri = '<?php echo admin_url('admin-ajax.php', 'relative'); ?>';
		<?php endif; ?>
		var _ts_enable_sticky_header = <?php echo (int)$smof_data['ts_enable_sticky_header']; ?>;
		var _ts_enable_responsive = <?php echo (int)$smof_data['ts_responsive']; ?>;
		var _ts_enable_smooth_scroll = <?php echo (int)$smooth_scroll; ?>;
		var _ts_enable_ajax_search = <?php echo isset($smof_data['ts_ajax_search'])?(int)$smof_data['ts_ajax_search']:1; ?>;
	</script>
	<?php
	/* Custom JS */
	
	if( $smof_data['ts_custom_javascript_code'] ){
		echo '<script type="text/javascript">';
		echo stripslashes( trim( $smof_data['ts_custom_javascript_code'] ) );
		echo '</script>';
	}
	
	echo stripslashes( trim( $smof_data['ts_google_analytics_code'] ) );
}
add_action('wp_footer', 'ts_register_javascript_global_variable');

	
/*** Array Attribute Compare ***/
if( !function_exists ('ts_array_atts') ){
	function ts_array_atts($pairs, $atts) {
		$atts = (array)$atts;
		$out = array();
		foreach($pairs as $name => $default) {
			if ( array_key_exists($name, $atts) ){
				if( is_array($atts[$name]) && is_array($default) ){
					$out[$name] = ts_array_atts($default,$atts[$name]);
				}
				else{
					$out[$name] = $atts[$name];
				}
			}
			else{
				$out[$name] = $default;
			}	
		}
		return $out;
	}
}

/*** Vertical Menu Heading ***/
if( !function_exists ('ts_get_vertical_menu_heading') ){
	function ts_get_vertical_menu_heading(){
		$locations = get_nav_menu_locations();
		if( isset($locations['vertical']) ){
			$menu = wp_get_nav_menu_object($locations['vertical']);
			if( isset( $menu->name ) ){
				return $menu->name;
			}
			else{
				return esc_html__('Shop by category', 'gon');
			}
		}
		return '';
	}
}

/*** Get excerpt ***/
if( !function_exists ('ts_string_limit_words') ){
	function ts_string_limit_words($string, $word_limit){
		$words = explode(' ', $string, ($word_limit + 1));
		if( count($words) > $word_limit ){
			array_pop($words);
		}
		return implode(' ', $words);
	}
}

if( !function_exists ('ts_the_excerpt_max_words') ){
	function ts_the_excerpt_max_words( $word_limit = -1, $post = '', $strip_tags = true, $extra_str = '', $echo = true ) {
		if( $post ){
			$excerpt = ts_get_the_excerpt_by_id($post->ID);
		}
		else{
			$excerpt = get_the_excerpt();
		}
			
		if( $strip_tags ){
			$excerpt = wp_strip_all_tags($excerpt);
			$excerpt = strip_shortcodes($excerpt);
		}
			
		if( $word_limit != -1 )
			$result = ts_string_limit_words($excerpt, $word_limit);
		else
			$result = $excerpt;
		
		$result .= $extra_str;
			
		if( $echo ){
			echo do_shortcode($result);
		}
		return $result;
	}
}

if( !function_exists('ts_get_the_excerpt_by_id') ){
	function ts_get_the_excerpt_by_id( $post_id = 0 )
	{
		global $wpdb;
		$query = "SELECT post_excerpt, post_content FROM $wpdb->posts WHERE ID = %d LIMIT 1";
		$result = $wpdb->get_results( $wpdb->prepare($query, $post_id), ARRAY_A );
		if( $result[0]['post_excerpt'] ){
			return $result[0]['post_excerpt'];
		}
		else{
			return $result[0]['post_content'];
		}
	}
}

/* Get User Role */
if( !function_exists('ts_get_user_role') ){
	function ts_get_user_role( $user_id ){
		global $wpdb;
		$user = get_userdata( $user_id );
		$capabilities = $user->{$wpdb->prefix . 'capabilities'};
		if( empty($capabilities) ){
			return '';
		}
		if ( !isset( $wp_roles ) ){
			$wp_roles = new WP_Roles();
		}
		foreach ( $wp_roles->role_names as $role => $name ) {
			if ( array_key_exists( $role, $capabilities ) ) {
				return $role;
			}
		}
		return '';
	}
}

/*** Page Layout Columns Class ***/

if( !function_exists('ts_page_layout_columns_class') ){
	function ts_page_layout_columns_class($page_column){
		$data = array();
		
		$layout_config = explode("-",$page_column);
		$left_sidebar = (int)$layout_config[0];
		$right_sidebar = (int)$layout_config[2];
		$main_class = ($left_sidebar + $right_sidebar) == 2 ?'ts-col-12':( ($left_sidebar + $right_sidebar) == 1 ?'ts-col-18':'ts-col-24' );			
		
		$data['left_sidebar'] = $left_sidebar;
		$data['right_sidebar'] = $right_sidebar;
		$data['main_class'] = $main_class;
		$data['left_sidebar_class'] = 'ts-col-6';
		$data['right_sidebar_class'] = 'ts-col-6';
		
		return $data;
	}
}

/*** Show Page Slider ***/
function ts_show_page_slider(){
	global $ts_page_datas;
	$revolution_exists = ( class_exists('RevSlider') && class_exists('UniteFunctionsRev') );
	switch( $ts_page_datas['ts_page_slider'] ){
		case 'revslider':
			if( $revolution_exists && $ts_page_datas['ts_rev_slider'] ){
				$rev_db = new RevSliderDB();
				$response = $rev_db->fetch(RevSliderGlobals::$table_sliders, 'id='.$ts_page_datas['ts_rev_slider']);
				if( !empty($response) ){
					RevSliderOutput::putSlider($ts_page_datas['ts_rev_slider'], '');
				}
			}
		break;
		default:
		break;
	}
}

/*** Is Active WooCommmerce ***/
if( !function_exists('ts_has_woocommerce') ){
	function ts_has_woocommerce(){
		$_actived = apply_filters('active_plugins', get_option('active_plugins'));
		if( in_array("woocommerce/woocommerce.php", $_actived) || class_exists('WooCommerce') ){
			return true;
		}
		return false;
	}
}

/*** Breadcrumbs ***/
if(!function_exists('ts_breadcrumbs')){
	function ts_breadcrumbs() {
		global $smof_data;
		
		if( ts_has_woocommerce() ){
			if( function_exists('woocommerce_breadcrumb') && function_exists('is_woocommerce') && is_woocommerce() ){
				woocommerce_breadcrumb(array('wrap_before'=>'<div class="breadcrumbs"><div class="breadcrumbs-container">','delimiter'=>'<span>&#47;</span>','wrap_after'=>'</div></div>'));
				return;
			}
		}
		
		if( function_exists('bbp_breadcrumb') && function_exists('is_bbpress') && is_bbpress() ){
			$args = array(
				'before' 			=> '<div class="breadcrumbs"><div class="breadcrumbs-container">'
				,'after' 			=> '</div></div>'
				,'sep' 				=> ( is_rtl() || ( isset($smof_data['ts_enable_rtl']) && $smof_data['ts_enable_rtl'] ) )?'\\':'/'
				,'sep_before' 		=> '<span class="brn_arrow">'
				,'sep_after' 		=> '</span>'
				,'current_before' 	=> '<span class="current">'
				,'current_after' 	=> '</span>'
			);
			
			bbp_breadcrumb( $args );
			/* Remove bbpress breadcrumbs */
			add_filter('bbp_no_breadcrumb', '__return_true', 999);
			return;
		}
 
		$delimiter = '<span class="brn_arrow">/</span>';
		if( is_rtl() || ( isset($smof_data['ts_enable_rtl']) && $smof_data['ts_enable_rtl'] ) ){
			$delimiter = '<span class="brn_arrow">\</span>';
		}
	  
		$front_id = get_option( 'page_on_front' );
		if ( !empty( $front_id ) ) {
			$home = get_the_title( $front_id );
		} else {
			$home = esc_html__( 'Home', 'gon' );
		}
		$ar_title = array(
					'search' 		=> esc_html__('Search results for ', 'gon')
					,'404' 			=> esc_html__('Error 404', 'gon')
					,'tagged' 		=> esc_html__('Tagged ', 'gon')
					,'author' 		=> esc_html__('Articles posted by ', 'gon')
					,'page' 		=> esc_html__('Page', 'gon')
					,'portfolio' 	=> esc_html__('Portfolio', 'gon')
					);
	  
		$before = '<span class="current">'; /* tag before the current crumb */
		$after = '</span>'; /* tag after the current crumb */
		global $wp_rewrite;
		$rewriteUrl = $wp_rewrite->using_permalinks();
		if ( !is_home() && !is_front_page() || is_paged() ) {
	 
			echo '<div class="breadcrumbs"><div class="breadcrumbs-container">';
	 
			global $post;
			$homeLink = esc_url( home_url('/') ); 
			echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
	 
			if ( is_category() ) {
				global $wp_query;
				$cat_obj = $wp_query->get_queried_object();
				$thisCat = $cat_obj->term_id;
				$thisCat = get_category($thisCat);
				$parentCat = get_category($thisCat->parent);
				if ( $thisCat->parent != 0 ) { 
					echo get_category_parents($parentCat, true, ' ' . $delimiter . ' '); 
				}
				echo $before . single_cat_title('', false) . $after;
		 
			}
			elseif ( is_search() ) {
				echo $before . $ar_title['search'] . '"' . get_search_query() . '"' . $after;
		 
			}elseif ( is_day() ) {
				echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
				echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
				echo $before . get_the_time('d') . $after;
		 
			}elseif ( is_month() ) {
				echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
				echo $before . get_the_time('F') . $after;
		 
			}elseif ( is_year() ) {
				echo $before . get_the_time('Y') . $after;
		 
			}elseif ( is_single() && !is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$post_type = get_post_type_object(get_post_type());
					$slug = $post_type->rewrite;
					$post_type_name = $post_type->labels->singular_name;
				if( strcmp('Portfolio Item', $post_type->labels->singular_name) == 0 ){
					$post_type_name = $ar_title['portfolio'];
				}
				if( $rewriteUrl ){
					echo '<a href="' . $homeLink . $slug['slug'] . '/">' . $post_type_name . '</a> ' . $delimiter . ' ';
				}else{
					echo '<a href="' . $homeLink . '?post_type=' . get_post_type() . '">' . $post_type_name . '</a> ' . $delimiter . ' ';
				}
				
				echo $before . get_the_title() . $after;
			    } else {
					$cat = get_the_category(); $cat = $cat[0];
					echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
					echo $before . get_the_title() . $after;
			    }
		 
			}elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				$post_type_name = $post_type->labels->singular_name;
			    if( strcmp('Portfolio Item', $post_type->labels->singular_name) == 0 ){
					$post_type_name = $ar_title['portfolio'];
			    }
				if ( is_tag() ) {
					echo $before . $ar_title['tagged'] . '"' . single_tag_title('', false) . '"' . $after;
				}
				elseif( is_taxonomy_hierarchical(get_query_var('taxonomy')) ){
					if($rewriteUrl){
						echo '<a href="' . $homeLink . $slug['slug'] . '/">' . $post_type_name . '</a> ' . $delimiter . ' ';
					}else{
						echo '<a href="' . $homeLink . '?post_type=' . get_post_type() . '">' . $post_type_name . '</a> ' . $delimiter . ' ';
					}			
					
					$curTaxanomy = get_query_var('taxonomy');
					$curTerm = get_query_var( 'term' );
					$termNow = get_term_by( 'name', $curTerm, $curTaxanomy );
					$pushPrintArr = array();
					if( $termNow !== false ){
						while ((int)$termNow->parent != 0){
							$parentTerm = get_term((int)$termNow->parent,get_query_var('taxonomy'));
							array_push($pushPrintArr,'<a href="' . get_term_link((int)$parentTerm->term_id,$curTaxanomy) . '">' . $parentTerm->name . '</a> ' . $delimiter . ' ');
							$curTerm = $parentTerm->name;
							$termNow = get_term_by( 'name', $curTerm, $curTaxanomy );
						}
					}
					$pushPrintArr = array_reverse($pushPrintArr);
					array_push($pushPrintArr,$before  . get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) )->name  . $after);
					echo implode($pushPrintArr);
				}else{
					echo $before . $post_type_name . $after;
				}
		 
			}elseif( is_attachment() ) {
				if( (int)$post->post_parent > 0 ){
					$parent = get_post($post->post_parent);
					$cat = get_the_category($parent->ID);
					if( count($cat) > 0 ){
						$cat = $cat[0];
						echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
					}
					echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
				}
				echo $before . get_the_title() . $after;
			} elseif ( is_page() && !$post->post_parent ) {
				echo $before . get_the_title() . $after;
		 
			} elseif ( is_page() && $post->post_parent ) {
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_post($parent_id);
					$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
					$parent_id  = $page->post_parent;
			    }
				$breadcrumbs = array_reverse($breadcrumbs);
				foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
		 
			} elseif ( is_tag() ) {
				echo $before . $ar_title['tagged'] . '"' . single_tag_title('', false) . '"' . $after;
		 
			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata($author);
				echo $before . $ar_title['author'] . $userdata->display_name . $after;
		 
			} elseif ( is_404() ) {
				echo $before . $ar_title['404'] . $after;
			}
		 
			if ( get_query_var('paged') ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_page_template() ||  is_post_type_archive() || is_archive() ){ 
					echo $before .' ('; 
				}
				echo $ar_title['page'] . ' ' . get_query_var('paged');
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_page_template() ||  is_post_type_archive() || is_archive() ){ 
					echo ')'. $after; 
				}
			}
			else{ 
				if ( get_query_var('page') ) {
					if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_page_template() ||  is_post_type_archive() || is_archive() ){ 
						echo $before .' ('; 
					}
					echo $ar_title['page'] . ' ' . get_query_var('page');
					if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_page_template() ||  is_post_type_archive() || is_archive() ){ 
						echo ')'. $after; 
					}
				}
			}
			echo '</div></div>';
	 
	    }
		
		wp_reset_postdata();
	}
}

function ts_breadcrumbs_title( $show_breadcrumb = false, $show_page_title = false, $page_title = '', $extra_class_title = '' ){
	global $smof_data;
	if( $show_breadcrumb || $show_page_title ){
		$breadcrumb_bg = '';
		$extra_class = 'breadcrumb-' . $smof_data['ts_breadcrumb_layout'];
		if( $smof_data['ts_enable_breadcrumb_background_image'] && $smof_data['ts_breadcrumb_layout'] != 'v3' ){
			if( $smof_data['ts_bg_breadcrumbs'] == '' ){ /* No Override */
				$breadcrumb_bg = get_template_directory_uri() . '/images/bg_breadcrumb_'.$smof_data['ts_breadcrumb_layout'].'.jpg';
			}	
			else{
				$breadcrumb_bg = esc_url( $smof_data['ts_bg_breadcrumbs'] );
			}
		}
		
		$style = '';
		if( $breadcrumb_bg != '' ){
			$style = 'style="background-image: url('. $breadcrumb_bg .')"';
			if( isset($smof_data['ts_breadcrumb_bg_parallax']) && $smof_data['ts_breadcrumb_bg_parallax'] ){
				$extra_class .= ' ts-breadcrumb-parallax';
			}
		}
		echo '<div class="breadcrumb-title-wrapper '.$extra_class.'" '.$style.'><div class="breadcrumb-content"><div class="breadcrumb-title">';
			if( $show_page_title ){
				echo '<h1 class="heading-title page-title entry-title '.$extra_class_title.'">'.$page_title.'</h1>';
			}
			if( $show_breadcrumb ){
				ts_breadcrumbs();
			}
		echo '</div></div></div>';
	}
}

/*** Pagination ***/
if( !function_exists('ts_pagination') ){
	function ts_pagination( $query = null ){
		global $wp_query;
		$max_num_pages = $wp_query->max_num_pages;
		$paged = $wp_query->get( 'paged' );
		if( $query != null ){
			$max_num_pages = $query->max_num_pages;
			$paged = $query->get( 'paged' );
		}
		if( !$paged ){
			$paged = 1;
		}
		?>
		<nav class="ts-pagination">
			<?php
			echo paginate_links( array(
				'base'         	=> esc_url_raw( str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false ) ) )
				,'format'       => ''
				,'add_args'     => ''
				,'current'      => max( 1, $paged )
				,'total'        => $max_num_pages
				,'prev_text'    => '&larr;'
				,'next_text'    => '&rarr;'
				,'type'         => 'list'
				,'end_size'     => 3
				,'mid_size'     => 3
			) );
			?>
		</nav>
		<?php
	}
}

/*** Logo ***/
if( !function_exists('ts_theme_logo') ){
	function ts_theme_logo(){
		global $smof_data;
		$logo_image = isset($smof_data['ts_logo'])?esc_url($smof_data['ts_logo']):'';
		$logo_image_sticky = isset($smof_data['ts_logo_sticky'])?esc_url($smof_data['ts_logo_sticky']):'';
		$logo_text = isset($smof_data['ts_text_logo'])?stripslashes(esc_attr($smof_data['ts_text_logo'])):'';
		
		if( empty($logo_image_sticky) ){
			$logo_image_sticky = $logo_image;
		}
		?>
		<div class="logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
			<!-- Main logo -->
			<?php if( strlen($logo_image) > 0 ): ?>
				<img src="<?php echo esc_url($logo_image); ?>" alt="<?php echo !empty($logo_text) ? esc_attr($logo_text) : get_bloginfo('name'); ?>" title="<?php echo !empty($logo_text) ? esc_attr($logo_text) : get_bloginfo('name'); ?>" class="normal-logo" />
			<?php endif; ?>
			
			<?php if( strlen($logo_image_sticky) > 0 ): ?>
				<img src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php echo !empty($logo_text) ? esc_attr($logo_text) : get_bloginfo('name'); ?>" title="<?php echo !empty($logo_text) ? esc_attr($logo_text) : get_bloginfo('name'); ?>" class="normal-logo sticky-logo" />
			<?php endif; ?>
			
			<!-- Logo Text -->
			<?php 
			if( strlen($logo_image) == 0 ){
				echo esc_html($logo_text); 
			}
			?>
			</a>
		</div>
		<?php
	}
}

/*** Favicon ***/
if( !function_exists('ts_theme_favicon') ){
	function ts_theme_favicon(){
		if( function_exists('wp_site_icon') && function_exists('has_site_icon') && has_site_icon() ){
			return;
		}
		global $smof_data;
		$favicon = isset($smof_data['ts_favicon'])?esc_url($smof_data['ts_favicon']):'';
		if( strlen($favicon) > 0 ):
		?>
			<link rel="shortcut icon" href="<?php echo esc_url($favicon);?>" />
		<?php
		endif;
	}
}

/*** Save Of Options - Save Dynamic css ***/
add_action('of_save_options_after', 'ts_update_dynamic_css', 10000);
if( !function_exists('ts_update_dynamic_css') ){
	function ts_update_dynamic_css( $data = array() ){
		
		if( !is_array($data) ){
			return -1;
		}
		if(is_array($data['data'])){
			$data = $data['data'];	
		}
		else{
			return -1;
		}
	
		$upload_dir = wp_upload_dir();
		$filename_dir = trailingslashit($upload_dir['basedir']) . strtolower(str_replace(' ', '', wp_get_theme()->get('Name'))) . '.css';
		ob_start();
		include get_template_directory() . '/framework/dynamic_style.php';
		$dynamic_css = ob_get_contents();
		ob_end_clean();
		
		global $wp_filesystem;
		if( empty( $wp_filesystem ) ) {
			require_once( ABSPATH .'/wp-admin/includes/file.php' );
			WP_Filesystem();
		}
		
		$creds = request_filesystem_credentials($filename_dir, '', false, false, array());
		if( ! WP_Filesystem($creds) ){
			return false;
		}

		if( $wp_filesystem ) {
			$wp_filesystem->put_contents(
				$filename_dir,
				$dynamic_css,
				FS_CHMOD_FILE
			);
		}
	}
}

/*** Add header dynamic css ***/
add_action('wp_head', 'ts_add_header_dynamic_css', 1000);
if( !function_exists('ts_add_header_dynamic_css') ){
	function ts_add_header_dynamic_css( $is_iframe = false ){
		if( !$is_iframe ){
			return;
		}
		$upload_dir = wp_upload_dir();
		$filename_dir = trailingslashit($upload_dir['basedir']) . strtolower(str_replace(' ', '', wp_get_theme()->get('Name'))) . '.css';
		$filename = trailingslashit($upload_dir['baseurl']) . strtolower(str_replace(' ', '', wp_get_theme()->get('Name'))) . '.css';
		if( is_ssl() ){
			$filename = str_replace('http://', 'https://', $filename);
		}
		if( file_exists($filename_dir) ){
			echo '<link rel="stylesheet" type="text/css" media="all" href="'. $filename .'" />';
		}
	}
}

/*** Social Sharing ***/
if( !function_exists('ts_template_social_sharing') ){
	function ts_template_social_sharing(){
		get_template_part('templates/social-sharing');
	}
}

/*** Product Search Form by Category ***/
if( !function_exists('ts_get_search_form_by_category') ){
	function ts_get_search_form_by_category(){
		$search_for_product = ts_has_woocommerce();
		if( $search_for_product ){
			$taxonomy = 'product_cat';
			$post_type = 'product';
			$placeholder_text = esc_html__('Search for products', 'gon');
		}
		else{
			$taxonomy = 'category';
			$post_type = 'post';
			$placeholder_text = esc_html__('Search', 'gon');
		}
		
		$options = '<option value="">'.esc_html__('All categories', 'gon').'</option>';
		$options .= ts_search_by_category_get_option_html($taxonomy, 0, 0);
		
		$rand = rand(0, 1000);
		$form = '<div class="ts-search-by-category">
		<form method="get" id="searchform' . $rand . '" action="' . esc_url( home_url( '/'  ) ) . '">
		 <select class="select-category" name="term">' . $options . '</select>
		 <div class="search-content">
			 <input type="text" value="' . get_search_query() . '" name="s" id="s' . $rand . '" placeholder="' . $placeholder_text . '" autocomplete="off" />
			 <input type="submit" title="Search" id="searchsubmit' . $rand . '" value="' . esc_attr__( 'Search', 'gon' ) . '" />
			 <input type="hidden" name="post_type" value="' . $post_type . '" />
			 <input type="hidden" name="taxonomy" value="' . $taxonomy . '" />
		 </div>
		</form></div>';
		
		echo $form;
	}
}

if( !function_exists('ts_search_by_category_get_option_html') ){
	function ts_search_by_category_get_option_html($taxonomy = 'product_cat', $parent = 0, $level = 0){
		$options = '';
		$spacing = '';
		for( $i = 0; $i < $level * 3 ; $i++ ){
			$spacing .= '&nbsp;';
		}
		
		$args = array(
			'number'     	=> ''
			,'hide_empty'	=> 1
			,'orderby'		=>'name'
			,'order'		=>'asc'
			,'parent'		=> $parent
		);
		
		$select = '';
		$categories = get_terms($taxonomy, $args);
		if( is_search() &&  isset($_GET['term']) && $_GET['term'] != '' ){
			$select = $_GET['term'];
		}
		$level++;
		if( is_array($categories) ){
			foreach( $categories as $cat ){
				$options .= '<option value="' . $cat->slug . '" ' . selected($select, $cat->slug, false) . '>' . $spacing . $cat->name . '</option>';
				$options .= ts_search_by_category_get_option_html($taxonomy, $cat->term_id, $level);
			}
		}
		
		return $options;
	}
}

/* Ajax search */
add_action( 'wp_ajax_ts_ajax_search', 'ts_ajax_search' );
add_action( 'wp_ajax_nopriv_ts_ajax_search', 'ts_ajax_search' );
if( !function_exists('ts_ajax_search') ){
	function ts_ajax_search(){
		global $wpdb, $post, $smof_data;
		
		$search_for_product = ts_has_woocommerce();
		if( $search_for_product ){
			$taxonomy = 'product_cat';
			$post_type = 'product';
		}
		else{
			$taxonomy = 'category';
			$post_type = 'post';
		}
		
		$num_result = isset($smof_data['ts_ajax_search_number_result'])? (int)$smof_data['ts_ajax_search_number_result']: 10;
		
		$search_string = $_POST['search_string'];
		$category = isset($_POST['category'])? $_POST['category']: '';
		
		$args = array(
			'post_type'			=> $post_type
			,'post_status'		=> 'publish'
			,'s'				=> $search_string
			,'posts_per_page'	=> $num_result
		);
		
		if( $search_for_product ){
			$args['meta_query'] = array(
				array(
					'key' => '_visibility'
					,'value' => array('catalog', 'visible')
					,'compare' => 'IN'
				)
			);
		}
		
		if( $category != '' ){
			$args['tax_query'] = array(
				array(
					'taxonomy'  => $taxonomy
					,'terms'	=> $category
					,'field'	=> 'slug'
				)
			);
		}
		
		$results = new WP_Query($args);
		
		if( $results->have_posts() ){
			$html = '<ul>';
			while( $results->have_posts() ){
				$results->the_post();
				$link = get_permalink($post->ID);
				$html .= '<li><a href="'.$link.'">'. ts_search_highlight_string($post->post_title, $search_string) .'</a></li>';
			}
			wp_reset_postdata();
			
			$html .= '</ul>';
			
			$return = array();
			$return['html'] = $html;
			$return['search_string'] = $search_string;
			die( json_encode($return) );
		}
		
		die('');
	}
}

if( !function_exists('ts_search_highlight_string') ){
	function ts_search_highlight_string($string, $search_string){
		$new_string = '';
		$pos_left = stripos($string, $search_string);
		if( $pos_left !== false ){
			$pos_right = $pos_left + strlen($search_string);
			$new_string_right = substr($string, $pos_right);
			$search_string_insensitive = substr($string, $pos_left, strlen($search_string));
			$new_string_left = stristr($string, $search_string, true);
			$new_string = $new_string_left . '<span class="hightlight">' . $search_string_insensitive . '</span>' . $new_string_right;
		}
		else{
			$new_string = $string;
		}
		return $new_string;
	}
}

/* Custom Sidebar */
add_action( 'sidebar_admin_page', 'ts_custom_sidebar_form' );
function ts_custom_sidebar_form(){
?>
	<form action="<?php echo admin_url( 'widgets.php' ); ?>" method="post" id="ts-form-add-sidebar">
        <input type="text" name="sidebar_name" id="sidebar_name" placeholder="Custom Sidebar Name" />
        <button class="button-primary" id="ts-add-sidebar">Add Sidebar</button>
    </form>
<?php
}

function ts_get_custom_sidebars(){
	$option_name = 'ts_custom_sidebars';
    return get_option($option_name);
}

add_action('wp_ajax_ts_add_custom_sidebar', 'ts_add_custom_sidebar');
function ts_add_custom_sidebar(){
	if( isset($_POST['sidebar_name']) ){
		$option_name = 'ts_custom_sidebars';
		if( !get_option($option_name) || get_option($option_name) == '' ){
			delete_option($option_name);
		}
		
		$sidebar_name = $_POST['sidebar_name'];
		
		if( get_option($option_name) ){
			$custom_sidebars = ts_get_custom_sidebars();
			if( !in_array($sidebar_name, $custom_sidebars) ){
				$custom_sidebars[] = $sidebar_name;
			}
			$result1 = update_option($option_name, $custom_sidebars);
		}
		else{
			$custom_sidebars[] = $sidebar_name;
			$result2 = add_option($option_name, $custom_sidebars);
		}
		
		if( $result1 ){
			die('Updated');
		}
		elseif( $result2 ){
			die('Added');
		}
		else{
			die('Error');
		}
	}
	die('');
}

add_action('wp_ajax_ts_delete_custom_sidebar', 'ts_delete_custom_sidebar');
function ts_delete_custom_sidebar(){
	if( isset($_POST['sidebar_name']) ){
		$option_name = 'ts_custom_sidebars';
		$del_sidebar = trim($_POST['sidebar_name']);
		$custom_sidebars = ts_get_custom_sidebars();
		foreach( $custom_sidebars as $key => $value ){
			if( $value == $del_sidebar ){
				unset($custom_sidebars[$key]);
				break;
			}
		}
		$custom_sidebars = array_values($custom_sidebars);
		update_option($option_name, $custom_sidebars);
		die('Deleted');
	}
	die('');
}

/* Post Video Popup */
add_action('wp_ajax_ts_load_post_video', 'ts_post_video_popup_content');
add_action('wp_ajax_nopriv_ts_load_post_video', 'ts_post_video_popup_content');
if( !function_exists('ts_post_video_popup_content') ){
	function ts_post_video_popup_content(){
		if( isset($_GET['post_id']) ){
			$post_id = $_GET['post_id'];
			$video_url = get_post_meta($post_id, 'ts_video_url', true);
			if( $video_url !== '' ){
				if( shortcode_exists('ts_video') ){
					$video = do_shortcode('[ts_video src="'.$video_url.'"]');
					die($video);
				}
				else{
					die('You need to activate ThemeSky plugin');
				}
			}
		}
		die('Can not load video');
	}
}

/* Calculate Color */
if( !function_exists('ts_hex2rgb') ){
	function ts_hex2rgb($hex){
		if( substr( $hex, 0, 1 ) == "#" ){
			$hex = substr( $hex, 1 );
		}
		if( strlen($hex) == 6 ){
			$R = substr($hex, 0, 2);
			$G = substr($hex, 2, 2);
			$B = substr($hex, 4, 2);
		}
		else{
			$R = substr($hex, 0, 1);
			$G = substr($hex, 1, 1);
			$B = substr($hex, 2, 1);
		}

		$R = hexdec($R);
		$G = hexdec($G);
		$B = hexdec($B);

		$RGB['R'] = $R;
		$RGB['G'] = $G;
		$RGB['B'] = $B;

		return $RGB;
	}
}

if( !function_exists('ts_rgb2hex') ){
	function ts_rgb2hex($rgb) {
	   $hex = "#";
	   $hex .= str_pad(dechex($rgb['R']), 2, dechex($rgb['R']), STR_PAD_LEFT);
	   $hex .= str_pad(dechex($rgb['G']), 2, dechex($rgb['G']), STR_PAD_LEFT);
	   $hex .= str_pad(dechex($rgb['B']), 2, dechex($rgb['B']), STR_PAD_LEFT);

	   return $hex;
	}
}

if( !function_exists('ts_calc_color') ){
	function ts_calc_color($first_color = '', $second_color = '', $add = true){
		if( strrpos($first_color, '#') !== false && strrpos($second_color, '#') !== false ){
			$rgb_first_color = ts_hex2rgb($first_color);
			$rgb_second_color = ts_hex2rgb($second_color);
			if( $add ){
				$rgb_first_color['R'] += $rgb_second_color['R'];
				$rgb_first_color['G'] += $rgb_second_color['G'];
				$rgb_first_color['B'] += $rgb_second_color['B'];
			}
			else{
				$rgb_first_color['R'] -= $rgb_second_color['R'];
				$rgb_first_color['G'] -= $rgb_second_color['G'];
				$rgb_first_color['B'] -= $rgb_second_color['B'];
			}
			return ts_rgb2hex($rgb_first_color);
		}
		else{
			return $first_color;
		}
	}
}

/* Add User Extra Fields */
if( is_admin() ){
	add_action( 'show_user_profile', 'ts_user_extra_fields' );
	add_action( 'edit_user_profile', 'ts_user_extra_fields' );
}
if( !function_exists('ts_user_extra_fields') ){
	function ts_user_extra_fields( $user ){
		$author_box_bg = get_the_author_meta( 'author_box_bg', $user->ID );
		?>
		<h3><?php esc_html_e('Extra profile information', 'gon'); ?></h3>
		<table class="form-table">
			<tr>
				<th><label for="author_box_bg"><?php esc_html_e('Author box background', 'gon'); ?></label></th>
				<td class="ts-meta-box-field">
					<div class="field">
						<input type="text" class="upload_field" name="author_box_bg" id="author_box_bg" value="<?php echo esc_attr( $author_box_bg ); ?>" />
						<input type="button" class="ts_meta_box_upload_button" value="Select Image" />
						<input type="button" class="ts_meta_box_clear_image_button" value="Clear Image" <?php echo !empty($author_box_bg)?'':'disabled' ?> />
						<p class="description"><?php esc_html_e('Set background of author box on blog', 'gon'); ?></p>
						<img class="preview-image" src="<?php echo esc_url($author_box_bg) ?>" />
					</div>
				</td>
			</tr>
		</table>
		<?php
	}
}

add_action( 'personal_options_update', 'ts_save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'ts_save_extra_user_profile_fields' );
if( !function_exists('ts_save_extra_user_profile_fields') ){
	function ts_save_extra_user_profile_fields( $user_id ) {
		if( !current_user_can( 'edit_user', $user_id ) ){ 
			return false; 
		}
		if( isset($_POST['author_box_bg']) ){
			update_user_meta( $user_id, 'author_box_bg', $_POST['author_box_bg'] );
		}
	}
}

/* Install Required Plugins */
add_action( 'tgmpa_register', 'ts_register_required_plugins' );
function ts_register_required_plugins(){
	$plugin_dir_path = get_stylesheet_directory() . '/framework/plugins/';
	/**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        array(
            'name'               => 'ThemeSky', // The plugin name.
            'slug'               => 'themesky', // The plugin slug (typically the folder name).
            'source'             => $plugin_dir_path . 'themesky.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'Gon Importer', // The plugin name.
            'slug'               => 'gon-importer', // The plugin slug (typically the folder name).
            'source'             => $plugin_dir_path . 'gon-importer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'WooCommerce', // The plugin name.
            'slug'               => 'woocommerce', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/woocommerce.2.4.12.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '2.4.12', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'WPBakery Visual Composer', // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => $plugin_dir_path . 'js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '4.9', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'Revolution Slider', // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => $plugin_dir_path . 'revslider.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '5.1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'Contact Form 7', // The plugin name.
            'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/contact-form-7.4.3.1.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '4.3.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'YITH WooCommerce Wishlist', // The plugin name.
            'slug'               => 'yith-woocommerce-wishlist', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.2.0.13.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '2.0.13', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
		,array(
            'name'               => 'YITH WooCommerce Compare', // The plugin name.
            'slug'               => 'yith-woocommerce-compare', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/yith-woocommerce-compare.2.0.5.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '2.0.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )

    );

    /*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
    $config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

    tgmpa( $plugins, $config );
}
?>