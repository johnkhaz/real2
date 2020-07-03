<?php $logo = get_option( 'custom_logo_light', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png' ); ?>

<nav class="nav-3">
	<div class="container">
		<div class="row">
		
			<div class="col-xs-8">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if( $logo ) : ?>
						<img alt="<?php esc_attr( bloginfo( 'name' ) ); ?>" class="logo" src="<?php echo esc_url( $logo ); ?>" />
					<?php else : ?>
						<h5 class="text-logo dark font4"><?php get_bloginfo( 'name' ); ?></h5>
					<?php endif; ?>
				</a>
			</div>
		
			<div class="col-xs-4 text-right">
				
				<?php if( get_option( 'cta_url' ) ) : ?>
					<a class="btn btn-xs" href="<?php echo esc_url( get_option( 'cta_url' ) ); ?>">
						<?php echo wp_kses( get_option( 'cta_text', 'Build Yours »' ), ebor_allowed_tags() ); ?>
					</a>
				<?php endif; ?>
				
				<div class="mobile-toggle">
					<div class="upper"></div>
					<div class="middle"></div>
					<div class="lower"></div>
				</div>
				
			</div>
			
		</div>
	
		<div class="row">
		
			<div class="col-sm-9">
				<?php
					if ( has_nav_menu( 'icons' ) ){
					    wp_nav_menu( 
					    	array(
						        'theme_location'    => 'icons',
						        'depth'             => 1,
						        'container'         => false,
						        'container_class'   => false,
						        'menu_class'        => 'icon-menu',
						        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						        'walker'            => new ebor_bootstrap_navwalker()
					        )
					    );  
					}
				?>
			</div>
		
			<div class="col-sm-3 text-right">
				<?php
					if ( has_nav_menu( 'primary' ) ){
					    wp_nav_menu( 
					    	array(
						        'theme_location'    => 'primary',
						        'depth'             => 1,
						        'container'         => false,
						        'container_class'   => false,
						        'menu_class'        => 'menu'
					        )
					    );  
					}
				?>
			</div>
			
		</div>
	</div>
</nav>