<?php
/**
 * Template Name: Default no sidebar
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); 
$hed = get_post_meta($post->ID,'hed', true);
?>
<div class="inner">
	<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
	<?php if ($hed) { ?>
		<h1><?php echo $hed; ?></h2>
	<?php } else { ?>
		<h1><?php the_title(); ?></h1>
	<?php } ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
</div><!--close inner-->
<?php get_footer(); ?>