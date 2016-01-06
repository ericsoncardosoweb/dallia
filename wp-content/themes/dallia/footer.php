<div class="clear"></div>
</div><!-- #main .wrapper -->
<div class="clear"></div>
	<?php if( !is_page_template('page-templates/blank-page-template.php') ): ?>
	<footer id="colophon">
		<div class="footer-container">
			<div class="first-footer-area footer-area">
				<div class="container no-padding">
					<div class="ts-col-24">
						<?php 
						if( is_active_sidebar('footer-widget-area') ){
							dynamic_sidebar('footer-widget-area');
						}
						?>
					</div>
				</div>
			</div>

			<div class="end-footer footer-area">
				<div class="container no-padding">
					<div class="ts-col-24">
						<?php 
						if( is_active_sidebar('footer-copyright-widget-area') ){
							dynamic_sidebar('footer-copyright-widget-area');
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php endif; ?>
</div><!-- #page -->

<?php 
global $smof_data;
if( ( !wp_is_mobile() && $smof_data['ts_back_to_top_button'] ) || ( wp_is_mobile() && $smof_data['ts_back_to_top_button_on_mobile'] ) ): 
?>
<div id="to-top" class="scroll-button">
	<a class="scroll-button" href="javascript:void(0)" title="<?php esc_html_e('Back to Top', 'gon'); ?>"><?php esc_html_e('Back to Top', 'gon'); ?></a>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>