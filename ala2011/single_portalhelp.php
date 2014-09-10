<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<header id="page-header">
	<div class="inner">
		<nav id="breadcrumb"><ol><li class="last">Spatial portal help</li></ol></nav>
	
		<h1><?php the_title(); ?></h1>
	</div>
</header>
<div class="inner">
		
	<div class="col-wide">
		<section>
		<?php //get the page content
			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; endif; ?>
		</section>
	</div><!--close col-wide-->
		
	<div class="col-narrow last">
		<div class="boxed attached">
			<section>
				<div id="narrow-search">
					<form id="search-form" action="http://bie.ala.org.au/search" method="get" name="search-form"><label for="q">Search</label>
					<input id="search" class="filled" title="Search" type="text" name="q" placeholder="Search spatial portal help" />
					<input type='hidden' name='fq' value='categories:spatial_portal_help' />
					<span class="search-button-wrapper"><button id="search-button" value="Search" type="submit"><img src="<?php bloginfo("template_directory");?>/images/button_search-grey.png" alt="Search" width="27" height="27" /></button></span>
					</form>
				</div>
			</section>
		
			<h2>Help topics</h2>
			<nav id="sp-help">
			<?php add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'spatial-portal-help', 'menu_class' => '','items_wrap' => '<ol>%3$s</ol>' ) );?>
			</nav>
		</div>
	</div><!--close col-narrow-->
</div><!--inner-->	
<?php get_footer(); ?>
