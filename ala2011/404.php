<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<div class="inner">
<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
	<h1>Whoops!</h1>
	<p>You've found a page that has yet to be described.</p>
	<p><a href="<?php echo get_option('home'); ?>">Take me home &raquo;</a></p>
</div><!--inner-->
<?php get_footer(); ?>