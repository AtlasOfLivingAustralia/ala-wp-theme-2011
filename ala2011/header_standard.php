<?php
/**
 * @package WordPress
 * @subpackage ALA_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="MdnA79C1YfZ6Yx2qYOXWi_TYFfUvEJOQAmHNaeEWIts" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="The Atlas of Living Australia provides tools to enable users of biodiversity information to find, access, combine and visualise data on Australian plants, animals and all Australian biota" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp-styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/buttons.css" type="text/css" media="screen" />
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" /> 
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/jquery.autocomplete.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/search.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/skin.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/sf.css" />
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/html5.js"></script>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.dimensions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.mousewheel.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/hoverintent-min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/superfish/superfish.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.autocomplete.js"></script>
	<script type="text/javascript">

		// initialise plugins

		jQuery(function(){
            jQuery('ul.sf').superfish( {
				delay:500,
				autoArrows:false,
				dropShadows:false
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
			
			jQuery("ul.button-tabs").tabs("div.panes > ul"), { history: true,effect: 'fade' };
			jQuery("ul.tabs").tabs("div.tabs-panes-noborder > section"), { history: true,effect: 'fade' };
		});
	</script>

</head>
<?php
	$bodyclass = get_post_custom_values('bodyclass',$post->ID, true);
	if (!$bodyclass) {
		$bodyclass = '';
	}
?>
<body id="page-<?php echo get_topPageID(); ?>" <?php body_class($bodyclass);?>>
<header id="site-header"> 
	<div class="inner">
		<h1 title="Atlas of Living Australia"><a href="<?php echo get_option('home'); ?>" title="Atlas of Living Australia home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="315" height="33" alt="" /></a></h1>
		<section id="nav-search">
			<section id="header-search">
				<form id="search-form" action="http://bie.ala.org.au/search" method="get" name="search-form"><label for="search">Search</label>
				<input id="search" class="filled" title="Search" type="text" name="q" placeholder="Search the Atlas" />
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
