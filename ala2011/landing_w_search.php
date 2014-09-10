<?php
/**
 * Template Name: Landing with search
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
get_header(); ?>
<header id="page-header">
	<div class="inner">
	<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
	<?php remove_filter( 'the_content', 'wpautop' ); ?>
		<section id="content-search">
			<h1><?php the_title(); ?></h1>
			<form id="search-form" action="http://bie.ala.org.au/search" method="get" name="search-form"><label for="search">Search</label>
			<input id="search" class="filled" title="Search" type="text" name="q" placeholder="Search <?php the_title(); ?>" />
			<span class="search-button-wrapper"><button id="search-button" class="search-button" value="Search" type="submit"><img src="<?php bloginfo("template_directory");?>/images/button_search.png" alt="Search" width="27" height="27" /></button></span></form>
	<?php 
		$id=$post->ID;
		$searchtext = get_post_meta($id,'SearchText',true);
		if ($searchtext) {
			echo '<p>' . $searchtext . '</p>';
		}
		add_filter( 'the_content', 'wpautop' ); 
	?>
		</section>
	</div><!--inner-->
</header>
<div class="inner">
	<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div><!--inner-->
<?php get_footer(); ?>