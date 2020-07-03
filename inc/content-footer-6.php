<?php $logo = get_option( 'custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png' ); ?>

<footer class="footer footer-6">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 col-sm-6">
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img alt="Logo" src="<?php echo esc_url($logo); ?>">
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
		
			<div class="col-md-2 col-sm-3 col-xs-6">
				<?php
					if ( has_nav_menu( 'footer' ) ){

						$locations = get_nav_menu_locations();
						$menu_id = $locations['footer'];
						$nav_menu = wp_get_nav_menu_object($menu_id);
						
						echo '<h6>'. $nav_menu->name .'</h6>';
						
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
		
			<div class="col-md-2 col-sm-3 col-xs-6">
				<?php
					if ( has_nav_menu( 'footer2' ) ){

						$locations = get_nav_menu_locations();
						$menu_id   = $locations['footer2'];
						$nav_menu  = wp_get_nav_menu_object($menu_id);
						
						echo '<h6>'. $nav_menu->name .'</h6>';
						
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
	
	</div>
</footer>