<?php
	get_header();
	the_post();
	
	$url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	
	if(!( $url[0] )) {
		$url[0] = false;
	}
	
	echo ebor_archive_header( get_the_title(), $url[0], get_post_meta( $post->ID, '_ebor_the_subtitle', true ) );
?>

<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php get_template_part( 'loop/content', 'post' ); ?>
			</div><!--end 9 col-->
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php 
	get_template_part( 'loop/loop-portfolio', 'related' );
	get_footer();		