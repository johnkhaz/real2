<div class="col-sm-4 text-center feature image-holder">
	<a href="<?php the_permalink(); ?>">
	
		<div class="background-image-holder overlay">
			<?php the_post_thumbnail( 'full', array( 'class' => 'background-image' ) ); ?>
		</div>
		
		<div class="container ebor-portfolio">
			<?php 
				the_title( '<h4 class="text-white">', '</h4>' ); 
				ebor_the_subtitle( '<p class="text-white">', '</p>' ); 
			?>
		</div>
		
	</a>
</div>