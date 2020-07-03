<?php $logo = get_option( 'custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png' ); ?>

<footer class="footer footer-with-widgets">

	<div class="container pb80">
    
        <div class="row">
        	<?php
        		if( is_active_sidebar( 'footer1' ) && !( is_active_sidebar( 'footer2' ) ) && !( is_active_sidebar( 'footer3' ) ) && !( is_active_sidebar( 'footer4' ) ) ){
        			echo '<div class="col-sm-12">';
        				dynamic_sidebar( 'footer1' );
        			echo '</div>';
        		}
        			
        		if( is_active_sidebar( 'footer2' ) && !( is_active_sidebar( 'footer3' ) ) && !( is_active_sidebar( 'footer4' ) ) ){
        			echo '<div class="col-sm-6">';
        				dynamic_sidebar( 'footer1' );
        			echo '</div><div class="col-sm-6">';
        				dynamic_sidebar( 'footer2' );
        			echo '</div><div class="clear"></div>';
        		}
        			
        		if( is_active_sidebar( 'footer3' ) && !( is_active_sidebar( 'footer4' ) ) ){
        			echo '<div class="col-md-4 col-sm-6">';
        				dynamic_sidebar( 'footer1' );
        			echo '</div><div class="col-md-4 col-sm-6">';
        				dynamic_sidebar( 'footer2' );
        			echo '</div><div class="col-md-4 col-sm-6">';
        				dynamic_sidebar( 'footer3' );
        			echo '</div><div class="clear"></div>';
        		}
        		
        		if( ( is_active_sidebar( 'footer4' ) ) ){
        			echo '<div class="col-md-3 col-sm-6">';
        				dynamic_sidebar( 'footer1' );
        			echo '</div><div class="col-md-3 col-sm-6">';
        				dynamic_sidebar( 'footer2' );
        			echo '</div><div class="col-md-3 col-sm-6">';
        				dynamic_sidebar( 'footer3' );
        			echo '</div><div class="col-md-3 col-sm-6">';
        				dynamic_sidebar( 'footer4' );
        			echo '</div><div class="clear"></div>';
        		}
        	?>
        </div>
    </div>

	<div class="container footer-6">
		<div class="row">
			<div class="col-md-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img alt="Logo" src="<?php echo esc_url( $logo ); ?>">
				</a>
			</div>
			<div class="col-md-6 text-right">
				<p class="sub">
					<?php echo wp_kses_post( get_option( 'copyright', '<a href="http://www.tommusrhodus.com">LaunchKit Premium WordPress Theme by TommusRhodus</a>' ) ); ?>
				</p>
			</div>		
		</div>
	
	</div>
</footer>