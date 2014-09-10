<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

$content_width = 450;

automatic_feed_links();

function myfeed_request($qv) {
 if (isset($qv['feed']))
	$qv['post_type'] = get_post_types();
 return $qv;
}
add_filter('request', 'myfeed_request');

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

if ( function_exists ('register_sidebar')) { 
    register_sidebar ('theme'); 
}
//add_theme_support('menus');
if ( function_exists('register_nav_menus') ) {
	register_nav_menus( array(
		'nav-home' => __( 'Home Navigation', 'ala2011' ),
		'footer-site' => __( 'Footer Site Navigation', 'ala2011' ),
		'spatial-portal-help' => __( 'Spatial Portal help nav', 'ala2011' )
	) );
}

function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
}

function do_loginscript()
{
	$server = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://"; 
//	if ($_SERVER["SERVER_PORT"] != "80") { 
//		$server .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]; 
//	}  else  { 	
		$server .= $_SERVER["SERVER_NAME"]; 
//	}   
	$loggedIn = 'https://auth.ala.org.au/cas/login?service='. $server.'/wp-login.php?redirect_to='.$server.'/my-profile/'; 
	echo $loggedIn;
}

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	$anc = get_post_ancestors( $post->ID );
	foreach($anc as $ancestor) {
		if(is_page() && $ancestor == $pid) {
			return true;
		}
	}
	if(is_page()&&(is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};

function wt_get_ID_by_page_name($page_name)
{
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}

//applies the page class based on customField entry
function get_columns($pageID) {
	$custom_fields = get_post_custom($pageID); 
	$columns = $custom_fields['columnClass'];
	
	$colNum = $columns[0];
	return $colNum;
	
};

function get_parentID() {
	global $post;
	if (is_page() && $post->post_parent ) {
		echo $parentId = $post->post_parent;
	} else {
		echo $parentId = $post->ID;
	}	
}

//returns the top level page--used primarily for setting the body id
function get_topPageID($sectionID) {
	global $post;
	if ($sectionID) {
		$post_ancestors = get_post_ancestors($sectionID);
	} else {
		$post_ancestors = get_post_ancestors($post);
	}
	if (count($post_ancestors)) {
		$top_page = array_pop($post_ancestors);
	} elseif (is_page()) {
		$top_page = $post->ID;
	} 
	
	if ($top_page == 25482) {
		$top_page = 'collections-sub';
	}
	
	return $top_page;
}

//returns whether a page is a child of a particular page or not--used primarily for selecting templates in page.php
function is_child($pageID) { 
	global $post; 
	if( is_page() && ($post->post_parent==$pageID) ) {
		return true;
	} else { 
		return false; 
	}
}


//returns if a page is a child or grandchild of a particular page--used primarily for selecting templates in page.php
function is_childOrGrandchild($pageID) { 
	global $post;
	if( is_page() && ($post->post_parent==$pageID) ) {
		return true;
	} else {
		$anc = get_post_ancestors( $post->ID );
		foreach($anc as $ancestor) {
			if(is_page() && $ancestor == $pageID) {
				return true;
			}
		}
	}
}

function the_slug($pageId) {
	$post_data = get_post($pageId, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

function breadcrumb($sectionID) {
  $name = 'Home'; //text for the 'Home' link
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<nav id="breadcrumb"><ol>';
 
    global $post;
    $home = get_bloginfo('url');
    echo '<li><a href="' . $home . '">' . $name . '</a></li> ';
 
	if ( is_page() && !$post->post_parent ) {
      echo '<li class="last">' . get_the_title() . '</li>';
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ';
      echo '<li class="last">' . get_the_title() . '</li>';
	  
    } elseif ( is_404() ) {
      echo $currentBefore . 'Error 404' . $currentAfter;
    } elseif ( $sectionID ) {
		//$post_data = get_post($sectionID, ARRAY_A);
		//$parent_id = $post_data['post_parent'];
		$parent_id = $sectionID;
		$breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ';
      echo '<li class="last">' . get_the_title() . '</li>';
	}
 
    echo '</ol></nav>';
 
  }
}
//adds classes to visual editor drop down
function addTinyMCELinkClasses( $wp ) {
	$wp .= ',' . get_bloginfo('stylesheet_directory') . '/tinymce.css';
	return $wp;
}

if ( function_exists( 'add_filter' ) ) {
	add_filter( 'mce_css', 'addTinyMCELinkClasses' );
}

//add Post Thumbnail support
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 70, 82, true ); // Normal post thumbnails
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumb-med', 152, 200, true );
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumb-lg', 316, 200, true );
}
//template directory shortcode
function template_directory_path()
{
	$templatedirectory = get_bloginfo('template_directory');
	return $templatedirectory;
}
add_shortcode('directory-path', 'template_directory_path');
//home nav buttons shortcode
function home_nav_buttons()
{
	$homenav = wp_nav_menu( array( 'theme_location' => 'nav-home', 'container' => '', 'menu_class' => '', 'items_wrap' => '<ol>%3$s</ol>', 'echo' => '0', 'link_before' => '<h2>', 'link_after' => '</h2>' ) );
	return $homenav;
}
add_shortcode('home-nav-buttons', 'home_nav_buttons');

//in-page search shortcode
function inpage_search($atts)
{
	extract( shortcode_atts( array(
		'action' => 'bie.ala.org.au/search',
	), $atts ) );
	
	global $post;
	$id=$post->ID;
	$placeholder = get_post_meta($id,'Placeholder',true);
	$searchtext = get_post_meta($id,'SearchText',true);
	$form = '<form id="search-form" action="http://'.$action.'" method="get" name="search-form"><label for="search">Search</label>';
	$form .= '<input id="search" title="Search" type="text" name="q" placeholder="' . $placeholder . '" />';
	$form .= '<span class="search-button-wrapper"><button id="search-button" class="search-button" value="Search" type="submit"><img src="' . get_bloginfo("template_directory") . '/images/button_search.png" alt="Search" width="27" height="27" /></button></span></form>';
	$form .= '<p>' . $searchtext;
	
	return $form;
}
add_shortcode('inpage-search', 'inpage_search');

//latest news shortcode
function latest_news()
{
	global $post;
	$my_query = new WP_Query();
			$args=array(
				'post_type' => 'post',
				'category_name' => 'blogs-news',
				'posts_per_page' => 1
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
				
			$output .= '<article>';
			$output .= '<span class="eyebrow"><a href="'. $category_link .'">' . $category_name . '</a></span>';
			$output .= '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
			$output .= '<time datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('j F, Y') . '</time>';
			$output .= '</article>';
				
			 endwhile;
			}
			wp_reset_query();
	return $output;
}
add_shortcode('latest-news', 'latest_news');

//Add 10 posts to page fron a category
function list_posts_from_category($categoryname)
{
	extract( shortcode_atts( array(
		'categoryname' => '',
	), $categoryname ) );
	
	global $post;
	$my_query = new WP_Query();
			$args=array(
				'post_type' => 'post',
				'category_name' => $categoryname,
				'posts_per_page' => 10
			);
			$my_query->query($args);
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post();		
			$output .= '<article>';
			$output .= '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
			$output .= '<time datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('j F, Y') . '</time>';
			if ( has_post_thumbnail()) { 
				$blog_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), thumbnail);		
				$output .= '<a href="'. get_permalink($post->ID) . '"><img src="'.$blog_thumb_url[0].'" class="alignleft thumbnail" width="70" height="82" /></a>';
			}
			$output .= '<p>' . get_the_excerpt() . '</p>';
			$output .= '</article>';
			
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
			 endwhile;
			 
			$output .= '<p><a href="' . $category_link .'">View all articles in ' . $category_name . ' &raquo;</a></p>';
			}
			wp_reset_query();
	return $output;
}
add_shortcode('list-posts-from-category', 'list_posts_from_category');

//log in or register shortcode
function login_or_register()
{ $server = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	if ($_SERVER["SERVER_PORT"] != "80")
	{				
		$server .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
	} 
	else 
	{
		$server .= $_SERVER["SERVER_NAME"];
	}

	$html = '<p>You must be logged in to use the data set uploader. Please <a href="https://auth.ala.org.au/cas/login?service='. $server .'/wp-login.php?redirect_to='.$server . '/get-involved/upload-data-sets/">log in</a> or <a href="https://auth.ala.org.au/emmet/selfRegister.html">register</a>.</p><p>Read the FAQ on <a href="/faq/data-sharing/data-upload-templates/">Data upload templates</a>.';
	return $html;
}
add_shortcode('login-or-register', 'login_or_register');

//internal link shortcode
function link_to($pagename)
{
	extract( shortcode_atts( array(
		'pagename' => '',
	), $pagename ) );

	$pageID = wt_get_ID_by_page_name("{$pagename}");
	$href = get_permalink($pageID);
	return $href;	
}
add_shortcode('linkto', 'link_to');

//list pages in section shortcode
function section_pages($atts)
{
	extract( shortcode_atts( array(
		'jumplink' => '',
		'linkname' => '',
	), $atts ) );
	
	global $post;
	$ID = $post->ID;
	$thispage = '<li><a href="#'.$jumplink.'">'.$linkname.'</a></li>';
	$pages = wp_list_pages('title_li=&sort_column=menu_order&depth=1&child_of='.$ID.'&echo=0');
	return $thispage.$pages;
}
add_shortcode('section-pages', 'section_pages');

//list pages in section (including children) shortcode
function list_pages_by_ID($atts)
{
	extract( shortcode_atts( array(
		'parent' => '',
	), $atts ) );
	
	global $post;
	$ID = $post->ID;
	$pages .= '<ul>';
	$pages .= wp_list_pages('title_li=&sort_column=menu_order&child_of='.$parent.'&echo=0');
	$pages .= '</ul>';
	return $pages;
}
add_shortcode('list-pages-by-ID', 'list_pages_by_ID');


function simonbattersby_shortcode_format($content){
$content = preg_replace('/(<p>)\s*(<article)/','<article',$content);
$content =  preg_replace('/(<\/article>)\s*(<\/p>)/', '</article>', $content);
$content = preg_replace('/(<p>)\s*(<ul)/','<ul',$content);
$content =  preg_replace('/(<\/ul>)\s*(<\/p>)/', '</ul>', $content);
return $content;
}

add_filter('the_content','simonbattersby_shortcode_format',11);
//comments
function atlas_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php $default = get_bloginfo('template_directory') . '/images/avatar.png';
		 echo get_avatar($comment,$size='48',$default ); ?>
		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date('j M Y'),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
         <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php } ?>
<?php 
// Add a default avatar to Settings > Discussion
if ( !function_exists('fb_addgravatar') ) {
	function fb_addgravatar( $avatar_defaults ) {
		$myavatar = get_bloginfo('template_directory') . '/images/avatar.png';
		$avatar_defaults[$myavatar] = 'Atlas default';

		return $avatar_defaults;
	}

	add_filter( 'avatar_defaults', 'fb_addgravatar' );
} ?>

<?php
/**
 * TwentyTen functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyten_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyten_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'twentyten_setup' );

if ( ! function_exists( 'twentyten_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyten_setup() in a child theme, add your own twentyten_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_setup() {

	
}
endif;


/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since Twenty Ten 1.0
 * @return int
 */
function twentyten_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyten_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 *
 * @since Twenty Ten 1.0
 * @return string "Continue Reading" link
 */
function twentyten_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading&nbsp;<span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyten_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string An ellipsis
 */
function twentyten_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyten_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function twentyten_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= twentyten_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 *
 * Galleries are styled by the theme in Twenty Ten's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 *
 * @since Twenty Ten 1.2
 */
add_filter( 'use_default_gallery_style', '__return_false' );


if ( ! function_exists( 'twentyten_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using Twenty Ten 1.2 in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default Twenty Ten styling.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

if ( ! function_exists( 'twentyten_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'twentyten_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

?>
