<li>
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
			<?php 
				the_content(); 
				the_post_thumbnail( 'thumbnail' );
				the_title( '<p><em>- ', '</em></p>' );
			?>
		</div>
	</div>
</li>