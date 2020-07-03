<div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-snippet' ); ?>>
	<h6 class="light text-center">
		<?php 
			the_time( get_option( 'date_format' ) ); 
			if( is_sticky() ) {
				echo ' &bull; ' . esc_html__( 'Sticky Post', 'launchkit' );
			}
		?>
	</h6>
	<?php 
		the_title( '<h3 class="text-center"><a href="'. get_permalink() .'">', '</a></h3>' );
		if( is_search() ){
			the_excerpt();
		} else {
			the_content( esc_html__( 'Read More', 'launchkit' ) );
		}
		wp_link_pages();
		if( is_single() ) {
			the_tags( '<div class="post-tags">', ' ','</div>' );
		}
	?>
</div><!--end snippet-->