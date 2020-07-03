<?php $logo = get_option( 'custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png' ); ?>

<footer class="footer footer-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<?php
					if ( has_nav_menu( 'footer' ) ){
					    wp_nav_menu( 
					    	array(
						        'theme_location'    => 'footer',
						        'depth'             => 1,
						        'container'         => false,
						        'container_class'   => false,
						        'menu_class'        => 'menu',
					        )
					    );  
					}
				?>
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img alt="Logo" src="<?php echo esc_url( $logo ); ?>">
				</a>
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
</footer>