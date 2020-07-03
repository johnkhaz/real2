<?php 
	get_header(); 
	
	$term = get_queried_object();
	echo ebor_archive_header( get_option( 'team_title', 'Our Team' ), get_option( 'team_background' ), $term->name );
?>

<section class="blog">
	<div class="container">
		<div class="row">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part( 'loop/content', 'team' );
				
				endwhile;	
				else : 
					
					/**
					 * Display no posts message if none are found.
					 */
					get_template_part( 'loop/content', 'none' );
					
				endif;
			?>
		</div>
	</div><!--end of container-->
</section>

<?php get_footer();		