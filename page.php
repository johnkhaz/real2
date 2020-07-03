<?php
	get_header();
	the_post();
	
	$url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	echo ebor_archive_header( get_the_title(), esc_url( $url ) );
?>

<section class="text terms-1">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 blog-snippet">
				<?php
					the_content();
					wp_link_pages();
				?>
			</div>
		</div>
	</div>
</section>			

<?php get_footer();			