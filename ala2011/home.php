<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<?php
		if (have_posts()) : while (have_posts()) : the_post(); 
		remove_filter( 'the_content', 'wpautop' );	
	?>
		<?php the_content(); ?>
	<?php endwhile; endif; 
		add_filter( 'the_content', 'wpautop' );
	?>

<?php get_footer(); ?>

