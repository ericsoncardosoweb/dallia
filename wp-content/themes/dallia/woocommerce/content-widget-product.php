<?php global $product; $show_rating = true; ?>
<li>
	<a class="ts-wg-thumbnail" href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo $product->get_image(); ?>
	</a>
	<div class="ts-wg-meta">
		<?php ts_template_loop_categories(); ?>
		<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<?php echo $product->get_title(); ?>
		</a>
		<span class="price"><?php echo $product->get_price_html(); ?></span>
		<?php if ( ! empty( $show_rating ) ) echo $product->get_rating_html(); ?>
	</div>
</li>