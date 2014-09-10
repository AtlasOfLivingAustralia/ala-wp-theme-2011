<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="inner">
	<nav id="breadcrumb"><ol><li><a href="<?php echo get_option('home'); ?>">Home</a></li><li><a href="<?php echo get_permalink(24219);?>">Blogs &amp; news</a></li><li class="last"><?php single_tag_title(); ?></a></li></ol></nav>
	<h1>Blogs &amp; news / <?php single_tag_title(); ?></h1>
	
	<div class="col-wide">
	
	<?php $count = 1; ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	<article>
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
		<time><?php the_time('j F, Y') ?></time>
		<?php if ( has_post_thumbnail()) { 
			if ( $count < 5 ) { $thumbsize = 'thumbnail'; $imgsize = 'width="70" height="82"'; }
			$blog_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $thumbsize);
						
			echo '<a href="'. get_permalink($post->ID) . '"><img src="'.$blog_thumb_url[0].'" class="alignleft ' . $thumbsize . '" '. $imgsize . ' /></a>';
	} ?><?php the_excerpt();?>
	<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
	</article>
	<?php $count = $count++; ?>	
	<?php endwhile;
		endif;
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
			
		?>
	</div>
	<div class="col-narrow last">
		<nav>
			<h2>More tags</h2>
			<ol>
				<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
			</ol>
		</nav>
	</div>
</div><!--inner-->
<?php get_footer(); ?>
