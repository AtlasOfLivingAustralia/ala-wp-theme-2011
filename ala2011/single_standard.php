<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<div class="inner">
<?php 
	$category = get_the_category();
	$category_id = $category[1]->cat_ID;
	if ($category_id == 72) {
		$category_name = $category[0]->cat_name;
		$category_id = $category[0]->cat_ID;
		$category_link = get_category_link( $category_id );
	} else {
		$category_name = $category[1]->cat_name;
		$category_id = $category[1]->cat_ID;
		$category_link = get_category_link( $category_id );
	}
?>
	<nav id="breadcrumb"><ol><li><a href="<?php echo get_option('home'); ?>">Home</a></li><li><a href="<?php echo get_permalink(24219);?>">Blogs &amp; news</a></li><li><a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a></li><li class="last"><?php the_title();?></li></ol></nav>
	<h1><?php the_title(); ?></h1>
		
	<div class="col-wide">		
	<?php //get the page content
		if (have_posts()) : while (have_posts()) : the_post(); ?>
			<span class="date padding-bottom"><?php the_time('j F, Y') ?></span>
			<?php the_content(); ?>
			<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
			<?php comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
	</div><!--col-one-->
	<div class="col-narrow last">
<?php
	$args=array(
		'post_type' => 'post',
		'category_name' => $category_name,
		'posts_per_page' => 10
	);
	$my_query = new WP_Query( $args );
		if( $my_query->have_posts() ) { ?>
		<nav class="post-list">
			<h2>Recent <?php echo $category_name; ?> posts</h2>
			<ul>
			<?php while ( $my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>
		</nav>
	<?php }
?>
		<nav>
			<h2>More categories</h2>
			<ol>
				<?php wp_list_categories('child_of=72&title_li='); ?>
			</ol>
		</nav>
	</div><!--col narrow-->
</div><!--inner-->		

<?php get_footer(); ?>
