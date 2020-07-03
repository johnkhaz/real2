<?php
	get_header();
	the_post();
	
	if( has_post_thumbnail() ){
		$url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		echo ebor_archive_header( get_the_title(), esc_url( $url ), get_the_time( get_option( 'date_format' ) ) );
	}
	
	$class = ( is_active_sidebar( 'primary' ) ) ? 'col-md-9' : 'col-md-10 col-md-offset-1';
?>

<section class="blog">
	<div class="container">
		<div class="row">
			
			<div class="<?php echo esc_attr( $class ); ?>">
				<?php
					get_template_part( 'loop/content', 'post' );
					
					if( comments_open() ) {
						comments_template();
					}
				?>
			</div>
			
			<?php 
				if( is_active_sidebar( 'primary' ) ) {
					get_sidebar(); 
				}
			?>
		
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php get_footer();		