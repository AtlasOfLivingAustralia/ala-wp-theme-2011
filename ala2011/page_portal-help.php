<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
		<div id="header">
			<h1><?php the_title(); ?></h1>
		</div><!--close header-->
		<div id="column-one">
			<ul class="nav-vertical">
			<?php remove_filter('the_content', 'wpautop');?>
			<?php
				$args=array(
					'post_type' => 'post',
					'cat' => 37,
					//'cat' => 46
					'p' => 9449
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php the_content();?>
				<?php endwhile;
				} wp_reset_query(); 
				add_filter('the_content', 'wpautop');
				?>
			</ul>
		</div><!--close column-one-->
		
		<div id="column-two">
		<div class="section">
		<div id="portal_search">
			<form method="get" id="search-portal" action="http://bie.ala.org.au/search">
			<label for="q">Search</label>
			<input type="text" class="filled" value="<?php echo wp_specialchars($s, 1); ?>" name="q" id="q" placeholder="Search Spatial Portal Help" />
			<input type='hidden' name='fq' value='categories:spatial_portal_help' />
			<span class="search-button-wrapper"><input type="submit" class="search-button" id="searchsubmit" alt="Search" value="Search" /></span>
			</form>
		</div>
		</div>
			<div class="section">
		<?php
			$args=array(
				'post_type' => 'post',
				'cat' => 37,
				//'cat' => 46
				'p' => 9449
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post();
				$id = $my_query->post->ID; ?>
				<h2 id="<?php echo the_slug($id);?>"><?php the_title(); ?></h2>
				<?php the_content();?>
				<!--<p><a href="#wrapper">Top</a></p>-->
			<?php endwhile;
			} wp_reset_query(); 
		?>
			</div><!--close section-->
		</div><!--close column-one-->
	
<?php get_footer(); ?>
