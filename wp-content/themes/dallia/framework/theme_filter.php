<?php
/*** Comment ***/
function ts_list_comments( $comment, $args, $depth ){
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>"  class="comment">
			<div class="comment-inner">
				<div class="comment-detail">														
					<div class="comment-text"><?php comment_text(); ?></div>
					
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'gon' ); ?></em>
					<?php endif; ?>
					
					<div class="comment-meta">
						<?php edit_comment_link( esc_html__( '(Edit)', 'gon' ), ' ' ); ?>
					</div>
				</div>
				<div class="comment-author">
					<div class="avatar">
						<?php echo get_avatar( $comment, 68, 'mystery' ); ?>
					</div>
					<div class="author-info">
						<span class="author-name">
						<?php echo sprintf( '<cite class="fn"><a href="%1$s" rel="external nofollow" class="url">%2$s</a></cite>', get_comment_author_url(), get_comment_author() ); ?>
						</span>
						<span class="datetime"><i class="fa fa-calendar"></i><?php echo get_comment_date(); ?></span>
						<?php if( !( $depth == 0 || $args['max_depth'] <= $depth ) ): ?>
						<span class="reply"><i class="fa fa-mail-reply"></i><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></span>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php esc_html_e( 'Pingback:', 'gon' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'gon' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}

function ts_comment_form( $args = array(), $post_id = null ){
	global $user_identity;

	if( null === $post_id ){
		$post_id = get_the_ID();
	}
	
	$allowed_html = array(
		'span'	=> array( 'class' => array() )
		,'a' 	=> array( 'href' => array(), 'title' => array() )
	);

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$comment_author = '';
	$comment_author_email = '';
	$comment_author_url = '';
	
	extract(array_filter(array(
		'comment_author'		=>	esc_attr($commenter['comment_author'])
		,'comment_author_email'	=>	esc_attr($commenter['comment_author_email'])
		,'comment_author_url'	=>	esc_attr($commenter['comment_author_url'])
	)), EXTR_OVERWRITE);
	
	$fields =  array(
		'author' => '<label>'.wp_kses( __('Your Name <span class="required">*</span>','gon'), $allowed_html ).'</label><p class="comment-form-author">' . '<input id="author" class="input-text" name="author" type="text" value="' .$comment_author. '" size="30"' . $aria_req . ' />' . '</p>'
		,'email'  => '<label>'.wp_kses( __('Email Address <span class="required">*</span>','gon'), $allowed_html ).'</label><p class="comment-form-email"><input id="email" class="input-text" name="email" type="text" value="' . $comment_author_email . '" size="30"' . $aria_req . '/>' . '</p>'
		,'url'    => '<label>'.esc_html__('Website','gon').'</label><p class="comment-form-url"><input id="url" class="input-text" name="url" type="text" value="' . $comment_author_url . '" size="30"/>' . '</p>'
	);

	$required_text = sprintf( ' ' . wp_kses( __('Required fields are marked %s','gon'), $allowed_html ), '<span class="required">*</span>' );
	$defaults = array(
		'fields'               => apply_filters( 'comment_form_default_fields', $fields )
		,'fields_before'		   => '<div class="info-wrapper">'
		,'fields_after'		   => '</div>'
		,'comment_field'        => '<div class="message-wrapper"><label>'.esc_html__('Your message', 'gon').'</label><p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p></div>'
		,'must_log_in'          => '<p class="must-log-in">' .  sprintf( wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.','gon' ), $allowed_html ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>'
		,'logged_in_as'         => '<p class="logged-in-as">' . sprintf( wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>','gon' ), $allowed_html ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>'
		,'comment_notes_before' => ''
		,'comment_notes_after'  => ''
		,'id_form'              => 'commentform'
		,'id_submit'            => 'submit'
		,'title_reply'          => esc_html__( 'Leave a comment', 'gon' )
		,'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'gon')
		,'cancel_reply_link'    => esc_html__( 'Cancel reply', 'gon' )
		,'label_submit'         => esc_html__( 'Submit', 'gon' )
	);

	$args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );

	?>
		<?php if ( comments_open() ) : ?>
			<?php do_action( 'comment_form_before' ); ?>
			<section id="comment-wrapper">
				<header class="heading-wrapper">
					<h2 class="heading-title"><?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?> <small><?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?></small></h2>
				</header>
				
				<?php 
					if( get_option( 'comment_registration' ) && !is_user_logged_in() ):
						echo  $args['must_log_in'];
						do_action( 'comment_form_must_log_in_after' );
					else: 
				?>
					<form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>">
						<?php 
							do_action( 'comment_form_top' );
							if ( is_user_logged_in() ){
								echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
								do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
							}
							else{
								echo  $args['comment_notes_before'];
								echo  $args['fields_before'];
								do_action( 'comment_form_before_fields' );
								foreach ( (array) $args['fields'] as $name => $field ) {
									echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
								}
								echo  $args['fields_after'];								
							}
							echo apply_filters( 'comment_form_field_comment', $args['comment_field'] );
							echo  $args['comment_notes_after'];
							if ( !is_user_logged_in() ){ 
								do_action( 'comment_form_after_fields' ); 
							}
						?>
						<p class="form-submit">
							<button class="button button-secondary" type="submit" id="<?php echo esc_attr( $args['id_submit'] ); ?>"><?php echo esc_attr( $args['label_submit'] ); ?></button>

							<?php comment_id_fields( $post_id ); ?>
						</p>
						<?php do_action( 'comment_form', $post_id ); ?>
					</form>
				<?php endif; ?>
			</section>
			<?php do_action( 'comment_form_after' ); ?>
		<?php else : ?>
			<?php do_action( 'comment_form_comments_closed' ); ?>
		<?php endif; ?>
<?php
}

add_filter('document_title_separator', create_function('', 'return "|";'));

/* Remove bbpress title */
remove_filter('wp_title', 'bbp_title', 10, 3);

/* Body classes filter */
add_filter('body_class', 'ts_body_classes_filter');
function ts_body_classes_filter( $classes ){
	global $smof_data;
	
	$classes[] = isset($smof_data['ts_layout_style'])?$smof_data['ts_layout_style']:'';
	
	if( isset($smof_data['ts_layout_fullwidth']) && $smof_data['ts_layout_fullwidth'] ){
		$classes[] = 'layout-fullwidth';
	}
	
	if( is_rtl() || ( isset($smof_data['ts_enable_rtl']) && $smof_data['ts_enable_rtl'] ) ){
		$classes[] = 'rtl';
	}
	
	if( !wp_is_mobile() ){
		$classes[] = 'ts_desktop';
	}
	
	return $classes;
}
?>