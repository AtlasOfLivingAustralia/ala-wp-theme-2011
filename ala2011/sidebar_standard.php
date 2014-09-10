<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	
		
			<?php
			// If CHILD_OF is not NULL, then this page has a parent
			// Therefore, list siblings i.e. subpages of this page's parent
			$parent = $post->post_parent;
			
			$children = get_pages('child_of='.$post->ID);
			if( count( $children ) != 0 ) { ?>
				
				<h2>Related content</h2>
				<ul>
				<?php wp_list_pages('title_li=&sort_column=menu_order&depth=1&child_of='.$post->ID); ?>
				</ul>
				
			<?php } else {
				if ( $parent != 0 ) { ?>
				<h2>Related content</h2>
				<ul>
				<?php wp_list_pages('title_li=&sort_column=menu_order&depth=1&child_of='.$parent); ?>
				</ul>
			<?php	}
			}?>