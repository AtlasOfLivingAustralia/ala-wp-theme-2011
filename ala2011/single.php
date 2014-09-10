<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php
	$post = $wp_query->post;
	if ( in_category('37') ) {
		include(TEMPLATEPATH . '/single_portalhelp.php');
		
	} 
	else { //default
		include(TEMPLATEPATH . '/single_standard.php');
	}
?>

<?php get_footer(); ?>
