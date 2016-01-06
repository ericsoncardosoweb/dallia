<?php 
$rand_id = '-'.rand(0, 1000); 
$placeholder_text = esc_html__('Search', 'gon');

if( ts_has_woocommerce() ){
	$placeholder_text = esc_html__('Search for products', 'gon');
}

if( is_404() ){
	$placeholder_text = esc_html__('You can back to homepage or seach anything', 'gon');
}
?>
<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform<?php echo esc_attr($rand_id); ?>">
	<div class="search-table">
		<div class="search-field search-content">
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s<?php echo esc_attr($rand_id); ?>" placeholder="<?php echo esc_attr($placeholder_text); ?>" autocomplete="off" />
			<?php if( ts_has_woocommerce() ): ?>
			<input type="hidden" name="post_type" value="product" />
			<?php endif; ?>
		</div>
		<div class="search-button">
			<input type="submit" id="searchsubmit<?php echo esc_attr($rand_id); ?>" value="<?php esc_html_e('Search', 'gon'); ?>" />
		</div>
	</div>
</form>