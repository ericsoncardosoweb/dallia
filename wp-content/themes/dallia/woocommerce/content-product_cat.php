<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count
$woocommerce_loop['loop']++;
?>
<section <?php wc_product_cat_class('product-category product'); ?>>

	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

	<?php
		/**
		 * woocommerce_before_subcategory_title hook
		 *
		 * @hooked woocommerce_subcategory_thumbnail - 10
		 */
		do_action( 'woocommerce_before_subcategory_title', $category );
	?>
	
	<div class="meta-wrapper">
		<?php if( !isset($show_title) || (isset($show_title) && $show_title) ): ?>
		<div class="category-name">
			<h3 class="heading-title"><?php echo esc_html($category->name); ?></h3>
		</div>
		<?php endif; ?>
		<?php 
			if ( $category->count > 0 ){
				echo apply_filters( 'woocommerce_subcategory_count_html', '<div class="count">' . sprintf( _n( '%s Product', '%s Products', $category->count, 'gon' ), $category->count ) . '</div>', $category );
			}
		?>
		<div class="button">
			<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>" class="button shop-now-button"><?php esc_html_e('Shop Now', 'gon'); ?></a>
		</div>
	</div>
	
	<?php
		/**
		 * woocommerce_after_subcategory_title hook
		 */
		do_action( 'woocommerce_after_subcategory_title', $category );
	?>

	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>

</section>