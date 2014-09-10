<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); 
$hed = get_post_meta($post->ID,'hed', true);
?>
<div class="inner">
	<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
	<div class="col-wide">
		<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
	<?php if ($hed) { ?>
		<h1><?php echo $hed; ?></h2>
	<?php } else { ?>
		<h1><?php the_title(); ?></h1>
	<?php } ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="col-narrow last">
		<?php get_sidebar(); ?>
	</div>
</div><!--close inner-->
<?php get_footer(); ?>
