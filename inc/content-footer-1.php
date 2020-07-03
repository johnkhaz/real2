<?php $logo = get_option( 'custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png' ); ?>

<footer class="footer footer-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<ul class="social-links">
					<?php
						$protocols = array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype' );
						
						for( $i = 1; $i < 5; $i++ ){
							if( get_option("footer_social_url_$i") ) {
								echo '<li>
									      <a href="' . esc_url( get_option( "footer_social_url_$i" ), $protocols ) . '" target="_blank">
										      <i class="' . get_option( "footer_social_icon_$i" ) . '"></i>
									      </a>
									  </li>';
							}
						} 
					?>
				</ul>
			</div>
		
			<div class="col-sm-4 text-center">
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
		
			<div class="col-sm-4 text-right">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img alt="Logo" src="<?php echo esc_url( $logo ); ?>">
				</a>
			</div>	
		</div>
	</div>
</footer>