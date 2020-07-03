<?php 
	get_header(); 
	
	global $wp_query;
	$total_results = $wp_query->found_posts;
	$items = ( $total_results == '1' ) ? esc_html__( ' Item', 'launchkit' ) : esc_html__( ' Items', 'launchkit' ); 
	
	echo ebor_archive_header( get_search_query(), get_option( 'blog_background' ), esc_html__( 'Found ' , 'launchkit' ) . $total_results . $items );
	
	get_template_part( 'loop/loop', 'post' );
	
	get_footer();		