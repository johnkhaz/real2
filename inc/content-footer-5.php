<?php $logo = get_option( 'custom_logo_light', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png' ); ?>

<footer class="footer footer-5 bg-dark">
	<div class="container">
	
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img alt="Logo" src="<?php echo esc_url( $logo ); ?>">
				</a>
				<?php echo wp_kses_post( get_option( 'call_to_action_footer', '<p class="lead">Book today and receive a free Activity Tracker!</p><a class="btn btn-filled" href="#">Book Now</a>' ) ); ?>
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="lower">
					<p class="sub">
						<?php 
							echo wp_kses_post( 
								str_replace( 
									array( '*copy*', '*current_year*' ), 
									array( '&copy;', date( 'Y' ) ), 
									get_option( 'copyright', '*copy* *current_year* LaunchKit. By <a href="http://www.tommusrhodus.com">TommusRhodus</a>') 
								) 
							); 
						?>
					</p>	
				</div>
			</div>
		</div>
		
	</div>
</footer>