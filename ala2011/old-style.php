<?php
/**
 * Template Name: Old style
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
define('WP_USE_THEMES', false); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="MdnA79C1YfZ6Yx2qYOXWi_TYFfUvEJOQAmHNaeEWIts" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="The Atlas of Living Australia provides tools to enable users of biodiversity information to find, access, combine and visualise data on Australian plants and animals" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style2010.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style2011.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/buttons.css" type="text/css" media="screen" />
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" /> 
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/sf.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://www.ala.org.au/wp-content/themes/ala/css/highlights.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="http://www.ala.org.au/wp-content/themes/ala/css/jquery.autocomplete.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://www.ala.org.au/wp-content/themes/ala/css/search.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://www.ala.org.au/wp-content/themes/ala/css/skin.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/html5.js"></script>
	
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.dimensions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.mousewheel.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/hoverintent-min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/superfish/superfish.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.autocomplete.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/uservoice.js"></script>
	<script language="JavaScript" type="text/javascript" src="http://www.ala.org.au/wp-content/themes/ala/scripts/jquery.jcarousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.ala.org.au/wp-content/themes/ala/scripts/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
	<script type="text/javascript" src="http://www.ala.org.au/wp-content/themes/ala/scripts/fancybox/jquery.fancybox-1.3.1.pack.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("a#asterisk").fancybox({
				'hideOnContentClick' : false,
				'titleShow' : false,
				'autoDimensions' : false,
				'width' : 600,
				'height' : 350
			});
			$("a.pop-up").fancybox({
				'hideOnContentClick' : false,
				'titleShow' : false,
				'autoDimensions' : false,
				'width' : 550,
				'height' : 100
			});
		});
	</script>
	<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf').superfish( {
				delay:500,
				autoArrows:false,
				dropShadows:false
			});
		/**
 * We use the initCallback callback
 * to assign functionality to the controls
 */
function mycarousel_initCallback(carousel) {
    jQuery('.jcarousel-control a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });
 
    jQuery('#mycarousel-next').bind('click', function() {
        carousel.next();
        return false;
    });
 
    jQuery('#mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};
 
// Ride the carousel...
jQuery(document).ready(function() {
    jQuery("#mycarousel").jcarousel({
        scroll: 6,
        initCallback: mycarousel_initCallback
        // This tells jCarousel NOT to autobuild prev/next buttons
        //buttonNextHTML: null,
        //buttonPrevHTML: null
    });
});
            
            jQuery("form#search-form input#search").autocomplete('http://bie.ala.org.au/search/auto.jsonp', {
                extraParams: {limit: 100},
                dataType: 'jsonp',
                parse: function(data) {
                    var rows = new Array();
                    data = data.autoCompleteList;
                    for(var i=0; i<data.length; i++){
                        rows[i] = { 
                            data:data[i],
                            value: data[i].matchedNames[0],
                            result: data[i].matchedNames[0]
                        };
                    }
                    return rows;
                },
                matchSubset: false,
                formatItem: function(row, i, n) {
                    return row.matchedNames[0];
                },
                cacheLength: 10,
                minChars: 3,
                scroll: false,
                max: 10,
                selectFirst: false
            });
			jQuery("form#search-inpage input#search").autocomplete('http://bie.ala.org.au/search/auto.jsonp', {
                extraParams: {limit: 100},
                dataType: 'jsonp',
                parse: function(data) {
                    var rows = new Array();
                    data = data.autoCompleteList;
                    for(var i=0; i<data.length; i++){
                        rows[i] = { 
                            data:data[i],
                            value: data[i].matchedNames[0],
                            result: data[i].matchedNames[0]
                        };
                    }
                    return rows;
                },
                matchSubset: false,
                formatItem: function(row, i, n) {
                    return row.matchedNames[0];
                },
                cacheLength: 10,
                minChars: 3,
                scroll: false,
                max: 10,
                selectFirst: false
            });
		});
	</script>
<?php
	$columns = get_post_custom_values('columnClass',$post->ID, true);
	if (!$columns) {
		$columns = 'two-column-left';
	}
?>
<?php if ( is_page('74') ) { ?>
<body id="page-74" <?php body_class($columns);?>>
<?php } else { ?>
<!--<body id="page-<?php //echo get_topPageID(''); ?>" <?php //body_class($columns);?>>-->
<body id="page-97" class="home page page-id-97 page-template-default two-column-right">
<?php } ?>
<div id="wrapper">
	<header id="site-header"> 
		<div class="inner">
			<h1 title="Atlas of Living Australia"><a href="<?php echo get_option('home'); ?>" title="Atlas of Living Australia home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="315" height="33" alt="" /></a></h1>
			<section id="nav-search">
				<section id="header-search">
					<form id="search-form-2011" action="http://bie.ala.org.au/search" method="get" name="search-form"><label for="search">Search</label>
					<input id="search-2011" class="filled" title="Search" type="text" name="q" placeholder="Search the Atlas" />
					<span class="search-button-wrapper"><button id="search-button" class="search-button" value="Search" type="submit"><img src="<?php bloginfo("template_directory") ?>/images/button_search-grey.png" alt="Search" width="12" height="12" /></button></span></form>
				</section>
				<nav>
					<ol>
						<li><a href="<?php echo get_option('home'); ?>" title="Atlas of Living Australia home">Home</a></li>
						<li><a href="<?php echo get_permalink(95); ?>" title="My profile">My profile</a></li>
				<?php if (is_user_logged_in() ) { ?>
						<li class="last"><a href="<?php bloginfo('template_directory'); ?>/Logout.php">Log out</a></li>
				<?php } else { ?>
						<li class="last"><a href="<?php do_loginscript(); ?>">Log in</a></li>
				<?php } ?>
					</ol>
				</nav>
			</section>
		</div>
	</header>

	<nav id="nav-site">
		<?php do_action('wp_menubar','nav-site'); ?>
	</nav>
	<div id="content">
		<div id="header">
			<div class="hrgroup">
				<h2>The Atlas has delivered essential infrastructure and a suite of powerful tools to support research, natural resource management, policy and education.</h2>
			</div>
		</div><!--close header-->
		
		<div class="section buttons">
			<div class="get-started">
				<h2><a href="http://www.ala.org.au/support/get-started/">Get Started <span>with examples, forums, videos and frequently asked questions</span></a></h2>
			</div>
			<div class="explore">
				<h2><a href="http://www.ala.org.au/explore/">Explore <span>information on species, maps, collections and&nbsp;regions</span></a></h2>
			</div>										
			<div class="share last">					
				<h2><a href="http://www.ala.org.au/share/">Share <span>sightings, photos and information</span></a></h2>
			</div>	
		</div><!--close buttons-->
		<div class="hr-1">&nbsp;</div>
		<div id="column-one">
			<div class="section highlights no-margin-top"><!--New & Noteworthy-->
				<h2>New &amp; Noteworthy</h2>
				<ul id="mycarousel" class="jcarousel-skin">
									<style type="text/css">
						.jcarousel-prev-horizontal { 
							right:69px;
						}
					</style>
<li><a href="http://volunteer.ala.org.au/" rel="bookmark" title="Link to Volunteer Portal"><img src="http://www.ala.org.au/wp-content/themes/ala/images/vp-thumb.jpg" width="91" height="91" alt="" />Volunteer Portal</a></li>


					<li><a href="http://collections.ala.org.au/public/map" rel="bookmark" title="Link to Natural History Collections"><img src="http://www.ala.org.au/wp-content/themes/ala/images/naturalhistorycollections_thumb.jpg" width="91" height="91" alt="" />Natural History Collections</a></li>
																		<li><a href="http://www.ala.org.au/support/get-started/explore-your-area/" rel="bookmark" title="Link to Explore Your Area"><a href="http://biocache.ala.org.au/explore/your-area"><img src="http://www.ala.org.au/wp-content/uploads/2011/07/your_area.gif" alt="" width="91" height="91" /></a>Explore Your Area</a></li>
						
																			<li><a href="http://www.ala.org.au/about/program-of-projects/aboln/" rel="bookmark" title="Link to Australian Barcode of Life Network (ABOLN) / Molecular Data"><img src="http://www.ala.org.au/wp-content/uploads/2009/01/aboln-logo.png" alt="" title="ABOLN" width="91" height="91" />Australian Barcode of Life Network (ABOLN) / Molecular Data</a></li>
						
																			<li><a href="http://www.ala.org.au/tools-services/identification-tools/about-identify-life/" rel="bookmark" title="Link to About Identify Life"><img src="http://www.ala.org.au/wp-content/uploads/2011/07/Identify_Life_thumb.png" alt="" width="91" height="91" />About Identify Life</a></li>
						
																			<li><a href="http://www.ala.org.au/about/international-collaborations/gbif/" rel="bookmark" title="Link to GBIF"><img src="http://www.ala.org.au/wp-content/uploads/2010/11/GBIF_logo_leaf.gif" alt="" width="91" height="91" />GBIF</a></li>
						
																			<li><a href="http://www.ala.org.au/explore/themes/wattles/" rel="bookmark" title="Link to Wattles"><img src="http://www.ala.org.au/wp-content/uploads/2010/06/wattles_thumb.jpg" alt="" title="wattles_thumb" width="91" height="91"  />Wattles</a></li>
						
																			<li><a href="http://www.ala.org.au/explore/themes/frogs-fungi/" rel="bookmark" title="Link to Iconic Species"><img src="/wp-content/uploads/2010/09/eastern-grey-kangaroo-91.jpg" alt="Eastern grey kangaroo" title="Eastern grey kangaroo" width="91" height="91" class="alignnone size-full wp-image-6049" />Iconic Species</a></li>
						
																			<li><a href="http://www.ala.org.au/explore/themes/birds/" rel="bookmark" title="Link to Shorebirds"><img src="http://www.ala.org.au/wp-content/uploads/2010/06/shorebirds_thumb.jpg" alt="" title="shorebirds_thumb" width="91" height="91"  />Shorebirds</a></li>
						
																			<li><a href="http://www.ala.org.au/about/program-of-projects/citizen-science/" rel="bookmark" title="Link to Citizen Science"><img src="http://www.ala.org.au/wp-content/uploads/2010/07/tsday08-cockatoo-91v2.jpg" alt="Carnaby&#039;s Black Cockatoo" title="Carnaby&#039;s Black Cockatoo" width="91" height="91" class="alignnone size-full wp-image-3067" />Citizen Science</a></li>
						
																			<li><a href="http://www.ala.org.au/explore/themes/upcoming-biodiversity-events/" rel="bookmark" title="Link to Biodiversity Events"><img src="/wp-content/uploads/2010/08/JM10010365-copy.jpg" alt="Biodiversity Events" title="Biodiversity Events" width="91" height="91" class="alignnone size-full wp-image-15601" />Biodiversity Events</a></li>
						
																			<li><a href="http://www.ala.org.au/explore/themes/thrips/" rel="bookmark" title="Link to Thrips"><img src="/wp-content/uploads/2010/10/Thrpalmi_91px_thumbnail.jpg" alt="Thrips theme" title="Go to the Thrips theme" width="91" height="91" class="alignnone size-full wp-image-9238" />Thrips</a></li>
						
										</ul>
				<div class="jcarousel-control"> 
				  <ul>
					<li><a href="#">1</a></li>
											
					<li><a href="#">7</a></li>
											
					<li><a href="#">13</a></li>
										
				  </ul>
				</div> 
			</div><!--close section hightlights-->
		</div><!--close column-one-->
		<div id="column-two"><!--Newsletter, RSS-->
			<div class="section news no-margin-top"><!--News & Events-->
				<h2 class="left">Atlas updates</h2><p class="right"><a href="http://www.ala.org.au/about/communications-centre/atlas-blog/" title="More Atlas updates">More updates</a></p>
				<div class="hr-1 no-margin-bottom">&nbsp;</div>
							<ul class="article">
									<li><span class="date">6 January, 2012</span>
					<h3><a href="http://www.ala.org.au/atlas-blog/%e2%80%a8which-environmental-layers-should-i-use-in-my-biodiversity-model/">?Which environmental layers should I use in my biodiversity model?</a></h3></li>
				
									<li><span class="date">6 January, 2012</span>
					<h3><a href="http://www.ala.org.au/atlas-blog/international-barcode-of-life-conference-presentations-now-online-2/">International Barcode of Life Conference presentations now online</a></h3></li>
				
								  </ul>
								
							</div><!--close news-->
		</div><!--close column-two-->
		<div class="hr">&nbsp;</div>
		<div class="section full-width padding-left">
			<div class="col-8 pad-right">
									<h2>About the Atlas</h2>
<p>The Atlas of Living Australia is a national initiative focused on making Australia’s biodiversity information more accessible and useable online. It is a partnership between CSIRO, Australian museums, herbaria and other biological collections, and the Australian Government. <a title="Learn more about the Atlas" href="/about/">Learn more »</a></p>
						</div><!--close section-->
			<div class="col-4">
				<p style="text-align:center;"><img src="http://www.ala.org.au/wp-content/themes/ala/images/agi-ncris.png" width="189" height="96" alt="" /></p>
			</div>
		</div>
</div><!--close content-->

<footer>
	<?php add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); ?>
	<nav id="nav-footer-site">
	<?php wp_nav_menu( array( 'theme_location' => 'footer-site', 'menu_class' => '','items_wrap' => '<ol>%3$s</ol>' ) ); ?>
	</nav>
	<nav id="fat-footer">
	<?php do_action('wp_menubar','fat-footer'); ?>
	</nav>
	<section class="copyright">
		<div class="img-left"><a href="http://creativecommons.org/licenses/by/3.0/au/" title="External link to Creative Commons"><img src="<?php bloginfo('template_directory'); ?>/images/creativecommons.png" width="88" height="31" alt="" /></a></div><p>This site is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/au/" title="External link to Creative Commons">Creative Commons Attribution 3.0 Australia License</a>.<Br />Provider content may be covered by other <a href="<?php echo get_permalink(24277);?>" title="Terms of Use">Terms of Use</a>.</p><div class="img-right"><img src="<?php bloginfo('template_directory'); ?>/images/agi-s.png" width="167" height="46" alt="Atlas of Living Australia, an Australian Government Initiative" /></div>
	</section>
</footer><!--close footer-->
</div><!--close wrapper-->
<?php wp_footer(); ?>
</body>
</html>