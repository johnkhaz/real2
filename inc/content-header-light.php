<?php $logo = get_option( 'custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png' ); ?>
		
<div class="nav-container">
	<nav class="nav-1 fixed">
		<div class="navbar">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-8">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link">
							<?php if( $logo ) : ?>
								<img alt="<?php esc_attr( bloginfo( 'name' ) ); ?>" class="logo" src="<?php echo esc_url( $logo ); ?>" />
							<?php else : ?>
								<h5 class="text-logo dark font4"><?php get_bloginfo( 'name' ); ?></h5>
							<?php endif; ?>
						</a>
					</div>
			
					<div class="col-md-3 text-right col-sm-6 col-md-push-6 col-xs-4">
						
						<?php if( get_option( 'cta_url' ) ) : ?>
							<a class="btn btn-filled" href="<?php echo esc_url( get_option( 'cta_url' ) ); ?>">
								<?php echo wp_kses( get_option( 'cta_text', 'Build Yours »' ), ebor_allowed_tags() ); ?>
							</a>
						<?php endif; ?>
						
						<div class="mobile-toggle">
							<div class="upper"></div>
							<div class="middle"></div>
							<div class="lower"></div>
						</div>
						
					</div>
			
					<div class="col-md-6 text-center col-md-pull-3 col-sm-12 col-xs-12">
						<?php
							if ( has_nav_menu( 'primary' ) ){
							    wp_nav_menu( 
							    	array(
								        'theme_location'    => 'primary',
								        'depth'             => 3,
								        'container'         => false,
								        'container_class'   => false,
								        'menu_class'        => 'menu',
								        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								        'walker'            => new ebor_framework_medium_rare_bootstrap_navwalker()
							        )
							    );  
							}
						?>
					</div>
		
				</div>
			</div>
		</div>
	</nav>
</div>