<?php 
add_action('widgets_init', 'ts_product_filter_by_color_load_widget');

function ts_product_filter_by_color_load_widget()
{
	register_widget('TS_Product_Filter_By_Color_Widget');
}

class TS_Product_Filter_By_Color_Widget extends WP_Widget{

	function TS_Product_Filter_By_Color_Widget(){
		$widgetOps = array('classname' => 'product-filter-by-color', 'description' => esc_html__('Shows list of product colors which let you filter product when viewing product categories. You have to have product attribute with slug "color"', 'gon'));
		parent::__construct('ts_product_filter_by_color', esc_html__('TS - Product Filter By Color','gon'), $widgetOps);
	}
	
	function widget( $args, $instance ) {
		extract($args);
		
		if( !(ts_has_woocommerce() || is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product')) ){
			return;
		}
		
		$title = apply_filters('widget_title', $instance['title']);
		$query_type = $instance['query_type'];
		
		global $_chosen_attributes, $_attributes_array;
		
		$current_term 	= $_attributes_array && is_tax( $_attributes_array ) ? get_queried_object()->term_id : '';
		$current_tax 	= $_attributes_array && is_tax( $_attributes_array ) ? get_queried_object()->taxonomy : '';
		
		$attr_slug = 'color';
		$taxonomy 		= wc_attribute_taxonomy_name($attr_slug);
		if ( !taxonomy_exists($taxonomy) ){
			return;
		}
		$terms = get_terms( $taxonomy, array('hide_empty' => 1) );
		
		if ( count($terms) > 0 ) {
			ob_start();
			$found = false;
			
			echo $before_widget;
			
			if( $title ){
				echo $before_title . $title . $after_title;
			}
			
			/* Force found when option is selected - do not force found on taxonomy attributes */
			if ( ! $_attributes_array || ! is_tax( $_attributes_array ) ){
				if ( is_array( $_chosen_attributes ) && array_key_exists( $taxonomy, $_chosen_attributes ) ){
					$found = true;
				}
			}
			
			

				/* List display */
				echo "<ul>";

				foreach ( $terms as $term ) {

					/* Get count based on current view - uses transients */
					$transient_name = 'wc_ln_count_' . md5( sanitize_key( $taxonomy ) . sanitize_key( $term->term_taxonomy_id ) );

					if ( false === ( $_products_in_term = get_transient( $transient_name ) ) ) {

						$_products_in_term = get_objects_in_term( $term->term_id, $taxonomy );

						set_transient( $transient_name, $_products_in_term );
					}

					$option_is_set = ( isset( $_chosen_attributes[ $taxonomy ] ) && in_array( $term->term_id, $_chosen_attributes[ $taxonomy ]['terms'] ) );

					/* If this is an AND query, only show options with count > 0 */
					if ( $query_type == 'and' ) {

						$count = sizeof( array_intersect( $_products_in_term, WC()->query->filtered_product_ids ) );

						/* skip the term for the current archive */
						if ( $current_term == $term->term_id )
							continue;

						if ( $count > 0 && $current_term !== $term->term_id )
							$found = true;

						if ( $count == 0 && ! $option_is_set )
							continue;

					/* If this is an OR query, show all options so search can be expanded */
					} else {

						/* skip the term for the current archive */
						if ( $current_term == $term->term_id )
							continue;

						$count = sizeof( array_intersect( $_products_in_term, WC()->query->unfiltered_product_ids ) );

						if ( $count > 0 )
							$found = true;

					}

					$arg = 'filter_' . sanitize_title( $attr_slug );

					$current_filter = ( isset( $_GET[ $arg ] ) ) ? explode( ',', $_GET[ $arg ] ) : array();

					if ( ! is_array( $current_filter ) )
						$current_filter = array();

					$current_filter = array_map( 'esc_attr', $current_filter );

					if ( ! in_array( $term->term_id, $current_filter ) )
						$current_filter[] = $term->term_id;

					/* Base Link decided by current page */
					if ( defined( 'SHOP_IS_ON_FRONT' ) ) {
						$link = home_url( '/' );
					} elseif ( is_post_type_archive( 'product' ) || is_page( wc_get_page_id('shop') ) ) {
						$link = get_post_type_archive_link( 'product' );
					} else {
						$link = get_term_link( get_query_var('term'), get_query_var('taxonomy') );
					}

					/* All current filters */
					if ( $_chosen_attributes ) {
						foreach ( $_chosen_attributes as $name => $data ) {
							if ( $name !== $taxonomy ) {

								/* exclude query arg for current term archive term */
								while ( in_array( $current_term, $data['terms'] ) ) {
									$key = array_search( $current_term, $data );
									unset( $data['terms'][$key] );
								}

								if ( ! empty( $data['terms'] ) )
									$link = add_query_arg( sanitize_title( str_replace( 'pa_', 'filter_', $name ) ), implode(',', $data['terms']), $link );

								if ( $data['query_type'] == 'or' )
									$link = add_query_arg( sanitize_title( str_replace( 'pa_', 'query_type_', $name ) ), 'or', $link );
							}
						}
					}

					/* Min/Max */
					if ( isset( $_GET['min_price'] ) )
						$link = add_query_arg( 'min_price', $_GET['min_price'], $link );

					if ( isset( $_GET['max_price'] ) )
						$link = add_query_arg( 'max_price', $_GET['max_price'], $link );

					/* Current Filter = this widget */
					if ( isset( $_chosen_attributes[ $taxonomy ] ) && is_array( $_chosen_attributes[ $taxonomy ]['terms'] ) && in_array( $term->term_id, $_chosen_attributes[ $taxonomy ]['terms'] ) ) {

						$class = 'class="chosen"';

						/* Remove this term is $current_filter has more than 1 term filtered */
						if ( sizeof( $current_filter ) > 1 ) {
							$current_filter_without_this = array_diff( $current_filter, array( $term->term_id ) );
							$link = add_query_arg( $arg, implode( ',', $current_filter_without_this ), $link );
						}

					} else {

						$class = '';
						$link = add_query_arg( $arg, implode( ',', $current_filter ), $link );

					}

					/* Search Arg */
					if ( get_search_query() )
						$link = add_query_arg( 's', get_search_query(), $link );

					/* Post Type Arg */
					if ( isset( $_GET['post_type'] ) )
						$link = add_query_arg( 'post_type', $_GET['post_type'], $link );

					/* Query type Arg */
					if ( $query_type == 'or' && ! ( sizeof( $current_filter ) == 1 && isset( $_chosen_attributes[ $taxonomy ]['terms'] ) && is_array( $_chosen_attributes[ $taxonomy ]['terms'] ) && in_array( $term->term_id, $_chosen_attributes[ $taxonomy ]['terms'] ) ) )
						$link = add_query_arg( 'query_type_' . sanitize_title( $attr_slug ), 'or', $link );

					$datas = get_metadata( 'woocommerce_term', $term->term_id, "ts_product_color_config", true );
					if( strlen($datas) > 0 ){
						$datas = unserialize($datas);	
					}else{
						$datas = array(
									'ts_color_color' 				=> "#ffffff"
									,'ts_color_image' 				=> 0
								);
				
					}						
						
					echo '<li ' . $class . '>';

					echo ( $count > 0 || $option_is_set ) ? '<a title="'. $term->name .'" href="' . esc_url($link) . '">' : '<span>';

					
					if( absint($datas['ts_color_image']) > 0  ){
						echo wp_get_attachment_image( absint($datas['ts_color_image']), 'ts_prod_color_thumb', true, array('title'=>$term->name, 'alt'=>$term->name) );
						
					}else{
						echo "<span style='background-color:{$datas['ts_color_color']}'>{$term->name}</span>";
					}					

					echo ( $count > 0 || $option_is_set ) ? '</a>' : '</span>';
					
					echo ' <small class="count">' . $count . '</small>';
					
					echo '</li>';

				}

				echo "</ul>";
			
			echo $after_widget;
			
			if( $found ){
				echo ob_get_clean();
			}
			else{
				ob_end_clean();
			}
		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['query_type'] =  $new_instance['query_type'];	
		return $instance;
	}

	function form( $instance ) {
		
		$defaults = array(
			'title' => 'Filter By Color' 
			,'query_type' => 'and'
		);
	
		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = esc_attr($instance['title']);
		$query_type = esc_attr($instance['query_type']);
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'gon'); ?>: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('query_type'); ?>"><?php esc_html_e('Query Type:', 'gon'); ?></label>
			<select id="<?php echo $this->get_field_id('query_type'); ?>" name="<?php echo $this->get_field_name('query_type'); ?>">
				<option value="and" <?php selected($query_type, 'and'); ?>><?php esc_html_e( 'AND', 'gon' ); ?></option>
				<option value="or" <?php selected($query_type, 'or'); ?>><?php esc_html_e( 'OR', 'gon' ); ?></option>
			</select>
		</p>	
		<?php 
	}
	
}
?>