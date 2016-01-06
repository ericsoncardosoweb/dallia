<?php 
if( !class_exists('WooCommerce') ){
	return;
}

class TS_Custom_Product_Category{

	function __construct(){
		if( is_admin() ){
			add_action( 'product_cat_add_form_fields', array($this, 'add_category_fields'), 19 );
			add_action( 'product_cat_edit_form_fields', array($this, 'edit_category_fields'), 10, 2 );
			add_action( 'created_term', array($this, 'save_category_fields'), 10, 3 );
			add_action( 'edit_term', array($this, 'save_category_fields'), 10, 3 );
		}
		
		/* Allow HTML in Category Descriptions */
		remove_filter('pre_term_description', 'wp_filter_kses');
		remove_filter('pre_link_description', 'wp_filter_kses');
		remove_filter('pre_link_notes', 'wp_filter_kses');
		remove_filter('term_description', 'wp_kses_data');
	}
	
	function add_category_fields(){
		global $ts_default_sidebars;
		$sidebar_options = array();
		foreach( $ts_default_sidebars as $key => $_sidebar ){
			$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
		}
		?>
		<div class="form-field">
			<label for="product_cat_bg_breadcrumbs"><?php esc_html_e( 'Breadcrumbs Background Image', 'gon' ); ?></label>
			<div id="product_cat_bg_breadcrumbs">
				<?php echo wc_placeholder_img( 'thumbnail' ); ?>
			</div>
			<div class="upload-button">
				<input type="hidden" name="wc_placeholder_img_src" id="wc_placeholder_img_src" value="<?php echo esc_url( wc_placeholder_img_src() ); ?>" />
				<input type="hidden" name="product_cat_bg_breadcrumbs_id" id="product_cat_bg_breadcrumbs_id" value="" />
				<button type="button" class="product_cat_bg_breadcrumbs_upload_button button"><?php esc_html_e('Upload/Add image', 'gon') ?></button>
				<button type="button" class="product_cat_bg_breadcrumbs_remove_button button"><?php esc_html_e('Remove image', 'gon') ?></button>
			</div>
		</div>
		
		<div class="form-field">
			<label for="layout"><?php esc_html_e( 'Layout', 'gon' ); ?></label>
			<select name="layout" id="layout">
				<option value=""><?php esc_html_e('Default', 'gon') ?></option>
				<option value="0-1-0"><?php esc_html_e('Fullwidth', 'gon') ?></option>
				<option value="1-1-0"><?php esc_html_e('Left Sidebar', 'gon') ?></option>
				<option value="0-1-1"><?php esc_html_e('Right Sidebar', 'gon') ?></option>
				<option value="1-1-1"><?php esc_html_e('Left & Right Sidebar', 'gon') ?></option>
			</select>
		</div>
		
		<div class="form-field">
			<label for="left_sidebar"><?php esc_html_e( 'Left Sidebar', 'gon' ); ?></label>
			<select name="left_sidebar" id="left_sidebar">
				<option value=""><?php esc_html_e('Default', 'gon') ?></option>
				<?php foreach( $sidebar_options as $sidebar_id => $sidebar_name ): ?>
					<option value="<?php echo esc_attr($sidebar_id); ?>"><?php echo esc_html($sidebar_name); ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		
		<div class="form-field">
			<label for="right_sidebar"><?php esc_html_e( 'Right Sidebar', 'gon' ); ?></label>
			<select name="right_sidebar" id="right_sidebar">
				<option value=""><?php esc_html_e('Default', 'gon') ?></option>
				<?php foreach( $sidebar_options as $sidebar_id => $sidebar_name ): ?>
					<option value="<?php echo esc_attr($sidebar_id); ?>"><?php echo esc_html($sidebar_name); ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<?php
	}
	
	function edit_category_fields( $term, $taxonomy ){
		global $ts_default_sidebars;
		$sidebar_options = array();
		foreach( $ts_default_sidebars as $key => $_sidebar ){
			$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
		}
	
		$bg_breadcrumbs_id = get_woocommerce_term_meta($term->term_id, 'bg_breadcrumbs_id', true);
		$layout = get_woocommerce_term_meta($term->term_id, 'layout', true);
		$left_sidebar = get_woocommerce_term_meta($term->term_id, 'left_sidebar', true);
		$right_sidebar = get_woocommerce_term_meta($term->term_id, 'right_sidebar', true);
		?>
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php esc_html_e( 'Breadcrumbs Background Image', 'gon' ); ?></label></th>
			<td>
				<div id="product_cat_bg_breadcrumbs">
					<?php 
					if( empty($bg_breadcrumbs_id) ){
						echo wc_placeholder_img( 'thumbnail' ); 
					}
					else{
						echo wp_get_attachment_image( $bg_breadcrumbs_id, 'thumbnail' );
					}
					?>
				</div>
				<div class="upload-button">
					<input type="hidden" name="wc_placeholder_img_src" id="wc_placeholder_img_src" value="<?php echo esc_url( wc_placeholder_img_src() ); ?>" />
					<input type="hidden" name="product_cat_bg_breadcrumbs_id" id="product_cat_bg_breadcrumbs_id" value="<?php echo esc_attr($bg_breadcrumbs_id) ?>" />
					<button type="button" class="product_cat_bg_breadcrumbs_upload_button button"><?php esc_html_e('Upload/Add image', 'gon') ?></button>
					<button type="button" class="product_cat_bg_breadcrumbs_remove_button button"><?php esc_html_e('Remove image', 'gon') ?></button>
				</div>
			</td>
		</tr>
		
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php esc_html_e( 'Layout', 'gon' ); ?></label></th>
			<td>
				<select name="layout" id="layout">
					<option value="" <?php selected($layout, ''); ?>><?php esc_html_e('Default', 'gon') ?></option>
					<option value="0-1-0" <?php selected($layout, '0-1-0'); ?>><?php esc_html_e('Fullwidth', 'gon') ?></option>
					<option value="1-1-0" <?php selected($layout, '1-1-0'); ?>><?php esc_html_e('Left Sidebar', 'gon') ?></option>
					<option value="0-1-1" <?php selected($layout, '0-1-1'); ?>><?php esc_html_e('Right Sidebar', 'gon') ?></option>
					<option value="1-1-1" <?php selected($layout, '1-1-1'); ?>><?php esc_html_e('Left & Right Sidebar', 'gon') ?></option>
				</select>
			</td>
		</tr>
		
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php esc_html_e( 'Left Sidebar', 'gon' ); ?></label></th>
			<td>
				<select name="left_sidebar" id="left_sidebar">
					<option value="" <?php selected($left_sidebar, ''); ?>><?php esc_html_e('Default', 'gon') ?></option>
					<?php foreach( $sidebar_options as $sidebar_id => $sidebar_name ): ?>
						<option value="<?php echo esc_attr($sidebar_id); ?>" <?php selected($left_sidebar, $sidebar_id); ?>><?php echo esc_html($sidebar_name); ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php esc_html_e( 'Right Sidebar', 'gon' ); ?></label></th>
			<td>
				<select name="right_sidebar" id="right_sidebar">
					<option value="" <?php selected($right_sidebar, ''); ?>><?php esc_html_e('Default', 'gon') ?></option>
					<?php foreach( $sidebar_options as $sidebar_id => $sidebar_name ): ?>
						<option value="<?php echo esc_attr($sidebar_id); ?>" <?php selected($right_sidebar, $sidebar_id); ?>><?php echo esc_html($sidebar_name); ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<?php
	}
	
	function save_category_fields( $term_id, $tt_id, $taxonomy ){
		if( isset($_POST['product_cat_bg_breadcrumbs_id']) ){
			update_woocommerce_term_meta( $term_id, 'bg_breadcrumbs_id', esc_attr( $_POST['product_cat_bg_breadcrumbs_id'] ) );
		}
	
		if( isset($_POST['layout']) ){
			update_woocommerce_term_meta( $term_id, 'layout', esc_attr( $_POST['layout'] ) );
		}
		
		if( isset($_POST['left_sidebar']) ){
			update_woocommerce_term_meta( $term_id, 'left_sidebar', esc_attr( $_POST['left_sidebar'] ) );
		}
		
		if( isset($_POST['right_sidebar']) ){
			update_woocommerce_term_meta( $term_id, 'right_sidebar', esc_attr( $_POST['right_sidebar'] ) );
		}
	}
}
new TS_Custom_Product_Category();
?>