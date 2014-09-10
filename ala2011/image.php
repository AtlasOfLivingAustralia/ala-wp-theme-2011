<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
	

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="header">
		<h1><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a></h1>
	</div><!--close header-->
	<div id="column-one" class="full-width">
	<h2><?php the_title(); ?></h2>

		<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a></p>
		<p><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></p>



	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
