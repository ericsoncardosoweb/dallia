<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="en-US"> <![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<?php global $smof_data, $ts_page_datas; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<?php if( isset($smof_data['ts_responsive']) && $smof_data['ts_responsive'] == 1 ): ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<?php endif; ?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php 
	ts_theme_favicon();
	wp_head(); 
	?>
</head>
<?php
$header_classes = array();
if( isset($ts_page_datas['ts_header_transparent']) && $ts_page_datas['ts_header_transparent'] ){
	$header_classes[] = 'header-transparent';
	if( isset($ts_page_datas['ts_header_text_color']) ){
		$header_classes[] = 'header-text-'.$ts_page_datas['ts_header_text_color'];
	}
}

if( isset($smof_data['ts_enable_sticky_header']) && $smof_data['ts_enable_sticky_header'] ){
	$header_classes[] = 'has-sticky';
}
?>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php if( !is_page_template('page-templates/blank-page-template.php') ): ?>

		<!-- Page Slider -->
		<?php if( is_page() && isset($ts_page_datas) ): ?>
			<?php if( $ts_page_datas['ts_page_slider'] && $ts_page_datas['ts_page_slider_position'] == 'before_header' ): ?>
			<div class="top-slideshow">
				<div class="top-slideshow-wrapper">
					<?php ts_show_page_slider(); ?>
				</div>
			</div>
			<?php endif; ?>
		<?php endif; ?>
		
		<header class="ts-header <?php echo esc_attr(implode(' ', $header_classes)); ?>">
			<div class="header-container">
				<?php 
				$extra_class = array();
				if( $smof_data['ts_enable_tiny_shopping_cart'] == 0 ){
					$extra_class[] = 'hidden-cart';
				}
				else{
					$extra_class[] = 'show-cart';
				}

				if( $smof_data['ts_enable_search'] == 0 ){
					$extra_class[] = 'hidden-search';
				}
				else{
					$extra_class[] = 'show-search';
				}

				if( class_exists('YITH_WCWL') && $smof_data['ts_enable_tiny_wishlist'] ){
					$extra_class[] = 'show-wishlist';
				}
				else{
					$extra_class[] = 'hidden-wishlist';
				}

				if( $smof_data['ts_enable_tiny_account'] == 0 ){
					$extra_class[] = 'hidden-myaccount';
				}
				else{
					$extra_class[] = 'show-myaccount';
				}
				?>
				<div class="header-template header-<?php echo esc_attr($smof_data['ts_header_layout']); ?> <?php echo esc_attr(implode(' ', $extra_class)); ?>">

					<div class="header-top visible-phone">
						<div class="header-top-right">
						
							<span class="ts-mobile-menu-icon-toggle visible-phone"><i class="fa fa-bars"></i></span>
							
							<span class="ts-group-meta-icon-toggle visible-phone"><i class="fa fa-cog"></i></span>
							
							<?php if( $smof_data['ts_enable_tiny_shopping_cart'] ): ?>
							<div class="shopping-cart-wrapper cart-mobile visible-phone"><?php echo ts_tiny_cart(); ?></div>
							<?php endif; ?>
							
							<div class="group-meta-header">
								<?php if( $smof_data['ts_header_currency'] ): ?>
								<div class="header-currency"><?php ts_woocommerce_multilingual_currency_switcher(); ?></div>
								<?php endif; ?>
								
								<?php if( $smof_data['ts_header_language'] ): ?>
								<div class="header-language"><?php ts_wpml_language_selector(); ?></div>
								<?php endif; ?>
								
								<?php if( class_exists('YITH_WCWL') && $smof_data['ts_enable_tiny_wishlist'] ): ?>
								<div class="my-wishlist-wrapper"><?php echo ts_tini_wishlist(); ?></div>
								<?php endif; ?>
								
								<?php if( $smof_data['ts_enable_tiny_account'] ): ?>
								<div class="my-account-wrapper"><?php echo ts_tiny_account(); ?></div>
								<?php endif; ?>
							</div>
							
						</div>
					</div>
					<div class="mobile-menu-wrapper">
						<?php 
						if ( has_nav_menu( 'mobile' ) ) {
							wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'main-menu mobile-menu', 'theme_location' => 'mobile' ) );
						}else{
							wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'main-menu mobile-menu', 'theme_location' => 'primary') );
						}
						?>
					</div>
					<div class="header-middle header-sticky">
					
						<div class="logo-wrapper rs-visible-logo-v5"><?php echo ts_theme_logo(); ?></div>
						
						<div class="container">
						
							<div class="logo-wrapper rs-hidden-logo-v5"><?php echo ts_theme_logo(); ?></div>
							
							<div class="menu-wrapper hidden-phone">				
								<div class="ts-menu">
									<?php 					
										if ( has_nav_menu( 'primary' ) ) {
											wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'main-menu pc-menu ts-mega-menu-wrapper','theme_location' => 'primary','walker' => new TS_Walker_Nav_Menu() ) );
										}
										else{
											wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'main-menu pc-menu ts-mega-menu-wrapper' ) );
										}
									?>
								</div>
							</div>
							
							<?php if( $smof_data['ts_enable_search'] ): ?>
							<div class="search-wrapper">
								<div class="ts-search-by-category"><?php get_search_form(); ?></div>
							</div>
							<?php endif; ?>
							
							<div class="group-button-icon-header hidden-phone">
								<?php if( $smof_data['ts_enable_tiny_shopping_cart'] ): ?>
								<div class="shopping-cart-wrapper"><?php echo ts_tiny_cart(); ?></div>
								<?php endif; ?>
								
								<?php if( class_exists('YITH_WCWL') && $smof_data['ts_enable_tiny_wishlist'] ): ?>
								<div class="my-wishlist-wrapper"><?php echo ts_tini_wishlist(); ?></div>
								<?php endif; ?>
								
								<?php if( $smof_data['ts_enable_tiny_account'] ): ?>
								<div class="my-account-wrapper"><?php echo ts_tiny_account(); ?></div>
								<?php endif; ?>
							</div>
							
						</div>
							
					</div>
				</div>
				
			</div>
			
			<div class="mobile-menu hidden-phone">
				<div class="ic-menu-phone"></div>
				<div class="mobile-menu-content"></div>
			</div>
		</header>
		
	<?php endif; ?>

	<div id="main" class="wrapper">