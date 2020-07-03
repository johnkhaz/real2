<div class="col-sm-4 feature">
	<?php  
		the_post_thumbnail( 'full' );
		the_title( '<h5><a href="'. get_permalink() .'">', '</a></h5>' );
		the_content();
	?>
</div>