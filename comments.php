<?php
	/**
	 * comments.php
	 * @author TommusRhodus
	 * @since 1.0.0
	 */
	$custom_comment_form = array(
		'fields' => apply_filters( 'comment_form_default_fields', array(
		    'author' => '<input type="text" id="author" name="author" placeholder="' . esc_html__( 'Name *', 'launchkit' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" />',
		    'email'  => '<input name="email" type="text" id="email" placeholder="' . esc_html__( 'Email *', 'launchkit' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '" />',
		    'url'    => '<input name="url" type="text" id="url" placeholder="' . esc_html__( 'Website', 'launchkit' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" />' )
		),
		'comment_field' => '<textarea name="comment" placeholder="' . esc_html__( 'Your Comment Here', 'launchkit' ) . '" id="comment" aria-required="true" rows="3"></textarea>',
		'cancel_reply_link' => esc_html__( 'Cancel' , 'launchkit' ),
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'label_submit' => esc_html__( 'Submit' , 'launchkit' )
	);
?>

<div class="comments">

	<h5 class="uppercase"><?php comments_number( esc_html__( '0 Comments', 'launchkit' ), esc_html__( '1 Comment', 'launchkit' ), esc_html__( '% Comments', 'launchkit' ) ); ?></h5>

	<?php
		if( have_comments() ){
			echo '<ul id="singlecomments" class="comments-list">';
			wp_list_comments( 'type=comment&callback=ebor_custom_comment' );
			echo '</ul>';
		}
		paginate_comments_links();
	?>

	<hr>

	<h5 class="uppercase"><?php esc_html_e( 'Leave A Comment', 'launchkit' ); ?></h5>

	<?php comment_form( $custom_comment_form ); ?>

</div><!--end of comments-->
