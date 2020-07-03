<?php 
	get_header(); 
	echo ebor_archive_header( get_option( 'blog_title', 'News & Updates' ), get_option( 'blog_background' ) );
	get_template_part( 'loop/loop', 'post' );
	get_footer();		