<?php
/**
 * Template Name: Blogs & news
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
define('WP_USE_THEMES', false);
get_header(); ?>

<div class="inner">
	<section>
	<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
	<h1><?php the_title(); ?></h1>
		<?php 
	
			$sticky = get_option( 'sticky_posts' );
			//rsort( $sticky );
		//	$sticky = array_slice( $sticky, 0, 7);
			$args=array(
				'post_type' => 'post',
				'category_name' => 'blogs-news',
				//'category__not_in' => '75',
				'posts_per_page' => 7,
		//		'post__in' => $sticky, 
				'ignore_sticky_posts' => 1
			);
			$my_query = new WP_Query( $args );
			if( $my_query->have_posts() ) {
				while ( $my_query->have_posts()) : $my_query->the_post(); 
				
				if ( has_post_thumbnail()) { 
					$do_not_duplicate[] = $post->ID;
					$articleclass = count($do_not_duplicate);
					
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
				<article class="article-<?php echo $articleclass; ?>">
				<?php 
					if ($articleclass == 1) { $thumbsize = 'thumb-lg'; //$imgsize = 'width="316" height="200"';
					}
					if ( ($articleclass == 4) || ($articleclass == 5) ) { $thumbsize = 'thumb-med'; //$imgsize = 'width="152" height="200"'; 
					}
					if ( ($articleclass == 2) || ($articleclass == 3) || ($articleclass == 6) || ($articleclass == 7) ) { $thumbsize = 'thumbnail'; //$imgsize = 'width="70" height="82"';
					}
					$blog_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $thumbsize);
				
					echo '<a title="dave-test" href="'. get_permalink($post->ID) . '"><img src="'.$blog_thumb_url[0].'" class="alignleft ' . $thumbsize . '" '. $imgsize . ' /></a>'; 
					?>
					<span class="eyebrow"><a href="<?php echo $category_link; ?>"><?php echo $category_name ?></a></span>
					<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F, Y'); ?></time>
				</article>
			
			<?php }
			 endwhile;
			}
			if ( count($do_not_duplicate) < 7 ) {
				$my_query = new WP_Query();
				$args=array(
					'post_type' => 'post',
					'category_name' => 'blogs-news',
					//'category__not_in' => '75',
					'posts_per_page' => '-1',
					'post__not_in' => $do_not_duplicate,
					'ignore_sticky_posts' => 1
				);
				$my_query->query($args);
				if( $my_query->have_posts() ) {
					while ( $my_query->have_posts()) : $my_query->the_post();
						if ( has_post_thumbnail()) { 
							$has_thumb[] = $post->ID;
						}
					endwhile;
				}
				wp_reset_query();
				$remaining = 7 - count($do_not_duplicate);
				$args=array(
				'post_type' => 'post',
				'category_name' => 'blogs-news',
				//'category__not_in' => '75',
				'post__in' => $has_thumb,
				'posts_per_page' => $remaining
				);
				$my_query = new WP_Query( $args );
				if( $my_query->have_posts() ) {
					
					$count = count($do_not_duplicate) + 1;
					while ( $my_query->have_posts()) : $my_query->the_post();
					
					$articleclass = $count++;
					if (in_array($post->ID, $do_not_duplicate)) { 
						continue;
					} else {
						if ( has_post_thumbnail()) { 
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
							$do_not_duplicate[] = $post->ID;?>
							<article class="article-<?php echo $articleclass; ?>">
							<?php 
							if ($articleclass == 1) { $thumbsize = 'thumb-lg'; //$imgsize = 'width="316" height="200"';
							}
							if ( ($articleclass == 4) || ($articleclass == 5) ) { $thumbsize = 'thumb-med'; //$imgsize = 'width="152" height="200"'; 
							}
							if ( ($articleclass == 2) || ($articleclass == 3) || ($articleclass == 6) || ($articleclass == 7) ) { $thumbsize = 'thumbnail'; //$imgsize = 'width="70" height="82"';
							}
							$blog_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $thumbsize);
							
								echo '<a href="'. get_permalink($post->ID) . '"><img src="'.$blog_thumb_url[0].'" class="alignleft ' . $thumbsize . '" '. $imgsize . ' /></a>';
							?>
								<span class="eyebrow"><a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a></span>
								<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
								<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F, Y'); ?></time>
							</article>
					<?php }
					}
			endwhile;
				}
			}
		?>
	
	</section>
	<nav class="nav-categories">
		<ol>
			<?php wp_list_categories('child_of=72'); ?>
		</ol>
	</nav>
	<div id="articles" class="three-column">
		<section>
		<?php
			$my_query = new WP_Query();
			$args=array(
				'post_type' => 'post',
				'category_name' => 'blogs-news',
				'category__not_in' => '75',
				'posts_per_page' => '10',
				'post__not_in' => $do_not_duplicate,
				'ignore_sticky_posts' => 1
			);
			$my_query->query($args);
			global $skipposts;
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post();
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
			<article>
				<span class="eyebrow"><a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a></span>
				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F, Y'); ?></time>
			</article>
				
			<?php endwhile;
			}
			wp_reset_query();
		?>
		</section>
		<section>
		<?php
			$my_query = new WP_Query();
			$args=array(
				'post_type' => 'post',
				'category_name' => 'communications',
				'posts_per_page' => '10',
				'ignore_sticky_posts' => 1
			);
			$my_query->query($args);
			global $skipposts;
			if( $my_query->have_posts() ) { ?>
			<h1>From the communications desk</h1>
			<?php while ($my_query->have_posts()) : $my_query->the_post();?>
			<article>
				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F, Y'); ?></time>
			</article>
			<?php endwhile;
			}
		?>
			<p>More from the <a href="/category/blogs-news/communications/">communications desk</a></p>
		</section>
		<section class="social last">
			<ul>
				<li><a href="<?php echo get_option('home'); ?>/feed" title="RSS"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" width="40" height="40" alt="RSS" /></a></li>
				<li><a href="https://twitter.com/#!/atlaslivingaust" title="Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="40" height="40" alt="Twitter" /></a></li>
				<li><a href="http://alerts.ala.org.au/notification/myAlerts" title="My alerts"><img src="<?php bloginfo('template_directory'); ?>/images/alerts.png" width="40" height="40" alt="My alerts" /></a></li>
			</ul>
		</section>
	</div>
</div><!--inner-->
	
<?php get_footer(); ?>
