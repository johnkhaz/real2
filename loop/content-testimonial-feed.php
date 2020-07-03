<div class="col-sm-6 text-center testimonial">
	<?php 
		the_content(); 
		the_post_thumbnail( 'thumbnail' );
		the_title( '<p><em>- ', '</em></p>' );
	?>
</div>