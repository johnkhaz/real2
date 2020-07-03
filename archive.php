<?php 
	get_header(); 
	$term = get_queried_object();
	echo ebor_archive_header( get_option( 'blog_title', 'News & Updates' ), get_option( 'blog_background' ), $term->name );
	get_template_part( 'loop/loop', 'post' );
	get_footer();		