<?php
/**
 * Template Name: Landing subpage
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
get_header(); 
	$hed = get_post_meta($post->ID,'hed', true);
?>
<header id="page-header">
	<div class="inner">
	<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
	<?php if ($hed) { ?>
		<h1><?php echo $hed; ?></h2>
	<?php } else { ?>
		<h1><?php the_title(); ?></h1>
	<?php } ?>
	</div><!--inner-->
</header>
<div class="inner">
	<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div><!--inner-->
<?php get_footer(); ?>