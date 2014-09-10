<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>
	<div id="header">
		<div id="breadcrumb"><a href="<?php echo get_option('home'); ?>">Home</a> Search results</div>
		<h1>Search results</h1>
	</div><!--close header-->
	<div id="column-one">
		
	</div>
	<div id="column-two">
	<div class="section">
        <?php s4w_search_results(); ?>
</div><!--close section-->
		</div><!--close column-one-->	

<?php get_footer(); ?>