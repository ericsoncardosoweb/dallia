<?php
/**
 * Single Product Thumbnails
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce, $smof_data;

$attachment_ids = $product->get_gallery_attachment_ids();

$vertical_thumbnail = isset($smof_data['ts_prod_thumbnails_style']) && $smof_data['ts_prod_thumbnails_style'] == 'vertical';

if ( $attachment_ids ) {
	if( is_array($attachment_ids) && has_post_thumbnail() && $smof_data['ts_prod_cloudzoom'] == 1 ){
		array_unshift($attachment_ids, get_post_thumbnail_id());
	}
	$count_product = count($attachment_ids);
	?>
	<div class="thumbnails ts-slider <?php echo ( $count_product > 1 )?'loading':''; ?>">
		<ul class="product-thumbnails">
		<?php
		$loop = 0;
		$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 3 );

		foreach ( $attachment_ids as $attachment_id ) {

			$classes = array( 'zoom' );

			if ( $loop == 0 || $loop % $columns == 0 )
				$classes[] = 'first';

			if ( ( $loop + 1 ) % $columns == 0 )
				$classes[] = 'last';

			$image_link = wp_get_attachment_url( $attachment_id );

			if ( ! $image_link )
				continue;
			
			$image_class = esc_attr( implode( ' ', $classes ) );
			if( $smof_data['ts_prod_cloudzoom'] == 1 ){
				$image_title 	= esc_attr( $product->get_title() );
				$thumb_size 	= apply_filters( 'single_product_large_thumbnail_size', 'shop_single' );
				$image       	= wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ),array( 'alt' => $image_title, 'title' => $image_title ) );
				$image_src   	= wp_get_attachment_image_src( $attachment_id, $thumb_size );
				$image_class 	= $image_class." cloud-zoom-gallery ";
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<li><a href="%s" class="%s" title="%s"  data-rel="useZoom: \'product_zoom\', smallImage: \'%s\'">%s</a></li>', $image_link, $image_class, $image_title, $image_src[0], $image ), $attachment_id, $post->ID, $image_class );
			}
			else{
				$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) );
				$image_title = esc_attr( get_the_title( $attachment_id ) );
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<li><a href="%s" class="%s" title="%s" data-rel="prettyPhoto[product-gallery]">%s</a></li>', $image_link, $image_class, $image_title, $image ), $attachment_id, $post->ID, $image_class );
			}

			$loop++;
		}
	?>
		</ul>
		
		<?php if( $vertical_thumbnail ): ?>
		<div class="owl-controls">
			<div class="owl-nav">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>
		</div>
		<?php endif; ?>
		
	</div>
	<?php
}