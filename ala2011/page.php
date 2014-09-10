<?php
	$post = $wp_query->post;
	if ( is_page('home') ) {
		include(TEMPLATEPATH . '/home.php');
		
	} else { //default
		include(TEMPLATEPATH . '/page_standard.php');
	}
?>
