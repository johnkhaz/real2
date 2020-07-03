<div class="col-md-6">
	<div class="choice">
	
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
		
		<div class="desc">
			<?php 
				the_title( '<h6>', '</h6>' );
				ebor_the_subtitle( '<p>', '</p>' );
			?>
			<div class="buttons-holder">
				<a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'View Now', 'launchkit' ); ?></a>
			</div>
		</div>
		
	</div>
</div>