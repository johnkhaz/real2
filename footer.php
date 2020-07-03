<?php 
	/**
	 * First, we need to check if we're going to override the header layout (with post meta)
	 * Or if we're going to display the global choice from the theme options.
	 * This is what ebor_get_header_layout is in charge of.
	 * 
	 * Oh yeah, exactly the same for the footer as well.
	 */
	get_template_part( 'inc/content-footer', ebor_get_footer_layout() ); 
?>	

</div>

<?php wp_footer(); ?>
</body>
</html>