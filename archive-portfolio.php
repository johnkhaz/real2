<?php 
	get_header(); 
	echo ebor_archive_header( get_option( 'portfolio_title', 'Our Portfolio' ), get_option( 'portfolio_background' ) );
?>

<section class="features features-18">
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			
			/**
			 * Get blog posts by blog layout.
			 */
			get_template_part( 'loop/content-portfolio', 'full' );
		
		endwhile;	
		else : 
			
			/**
			 * Display no posts message if none are found.
			 */
			get_template_part( 'loop/content', 'none' );
			
		endif;
	?>
</section>

<?php get_footer();		