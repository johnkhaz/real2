<?php 
	get_header(); 
	$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
	echo ebor_archive_header( get_option( 'blog_title', 'News & Updates' ), get_option( 'blog_background' ), $author->display_name );
	get_template_part( 'loop/loop', 'post' );
	get_footer();		