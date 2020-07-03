<?php
	get_header();
	the_post();
?>

<section class="blog">
	<div class="container">
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1">
				<?php
					get_template_part( 'loop/content', 'post' );
					
					if( comments_open() ) {
						comments_template();
					}
				?>
			</div>
		
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php get_footer();		