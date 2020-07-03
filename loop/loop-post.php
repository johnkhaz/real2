<?php $class = ( is_active_sidebar( 'primary' ) ) ? 'col-md-9' : 'col-md-10 col-md-offset-1'; ?>

<section class="blog">
	<div class="container">
		<div class="row">
			
			<div class="<?php echo esc_attr( $class ); ?> news-1">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						
						/**
						 * Get blog posts by blog layout.
						 */
						get_template_part( 'loop/content', 'post' );
					
					endwhile;	
					else : 
						
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part( 'loop/content', 'none' );
						
					endif;
					
					/**
					* Post pagination, use ebor_pagination() first and fall back to default
					*/
					echo function_exists( 'ebor_pagination' ) ? ebor_pagination() : posts_nav_link();
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