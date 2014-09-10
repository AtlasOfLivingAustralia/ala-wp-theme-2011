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
<meta name="description" content="The Atlas of Living Australia provides tools to enable users of biodiversity information to find, access, combine and visualise data on Australian plants and animals" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp-styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/buttons.css" type="text/css" media="screen" />
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" /> 
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/jquery.autocomplete.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/search.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/skin.css" />
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/html5.js"></script>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.dimensions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.mousewheel.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.autocomplete.js"></script>
	<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			jQuery( "#toggle" ).click(function() {
				jQuery( ".alerts" ).addClass( "hide" );
					return false;
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
		});
	</script>
</head>

<body id="page-<?php echo get_topPageID(); ?>" <?php body_class();?>>
<header id="site-header"> 
	<div class="inner">
		<h1 title="Atlas of Living Australia"><a href="<?php echo get_option('home'); ?>" title="Atlas of Living Australia home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="315" height="33" alt="" /></a></h1>
		<nav>
			<ol>
				<li><a href="<?php echo get_permalink(95); ?>" title="My profile">My profile</a></li>
		<?php if (is_user_logged_in() ) { ?>
				<li class="last"><a href="<?php bloginfo('template_directory'); ?>/Logout.php">Log out</a></li>
		<?php } else { ?>
				<li class="last"><a href="<?php do_loginscript(); ?>">Log in</a></li>
		<?php } ?>
			</ol>
		</nav>
	</div>
</header>
<header id="page-header">
<?php 
	$alerts = get_post_meta($post->ID,'alert', true);
	if ($alerts) {
		echo '<div class="alerts">';
		//foreach ($alerts as $alert) { 
			echo '<div class="alert"><strong>' . $alerts . '</strong> <button id="toggle" class="small negative">X</button></div>';
		//}
		echo '</div>';
	 }
?>
	<div class="inner">
