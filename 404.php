<?php
	get_header();
	the_post();
?>

<section class="header header-9">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="text-white margin-bottom">404</h2>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-white"><?php esc_html_e( 'Home', 'launchkit' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();			