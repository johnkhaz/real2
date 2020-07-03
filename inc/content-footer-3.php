<?php $logo = get_option( 'custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png' ); ?>

<footer class="footer footer-3">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-3 col-sm-4">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img alt="Logo" src="<?php echo esc_url( $logo ); ?>">
				</a>	
			</div>
		
			<div class="col-md-2 col-sm-4">
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
		
			<div class="col-md-2 col-sm-4">
				<?php
					if ( has_nav_menu( 'footer2' ) ){
					    wp_nav_menu( 
					    	array(
						        'theme_location'    => 'footer2',
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
	
		<div class="col-md-6 col-md-offset-3">
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
</footer>