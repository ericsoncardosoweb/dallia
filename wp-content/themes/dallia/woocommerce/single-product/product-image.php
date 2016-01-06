<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product, $smof_data;

$vertical_thumbnail = isset($smof_data['ts_prod_thumbnails_style']) && $smof_data['ts_prod_thumbnails_style'] == 'vertical';
?>
<div class="images-thumbnails">

	<?php
		if( $vertical_thumbnail ){
			do_action( 'woocommerce_product_thumbnails' ); 
		}
		
		echo '<div class="images">';
		
		do_action('ts_before_product_image');
		
		if ( has_post_thumbnail() ) {

			$image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_link  = wp_get_attachment_url( get_post_thumbnail_id() );
			$image       = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => $image_title
				) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}
			if( $smof_data['ts_prod_cloudzoom'] == 1 ){
				if( wp_is_mobile() ){
					echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image cloud-zoom zoom" title="%s"  id=\'product_zoom\' data-rel="position:\'inside\',showTitle:0,titleOpacity:0.5,lensOpacity:0.5,fixWidth:362,fixThumbWidth:72,fixThumbHeight:72,adjustX: 0, adjustY:0">%s</a>', $image_link, $image_title, $image ), $post->ID );
				}else{
					echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image cloud-zoom zoom on_pc" title="%s"  id=\'product_zoom\' data-rel="position:\'inside\',showTitle:0,titleOpacity:0.5,lensOpacity:0.5,fixWidth:362,fixThumbWidth:72,fixThumbHeight:72, adjustY:-4">%s</a>', $image_link, $image_title, $image ), $post->ID );
				} 
			}
			else{
				echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_title, $image ), $post->ID );
			}

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), esc_html__( 'Placeholder', 'gon' ) ), $post->ID );

		}
		
		echo '</div>';
	?>

	<?php 
	if( !$vertical_thumbnail ){
		do_action( 'woocommerce_product_thumbnails' ); 
	}
	?>

</div>
