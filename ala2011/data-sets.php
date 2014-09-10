<?php
/**
 * Template Name: Data sets
 *
 * Selectable from a dropdown menu on the edit page screen.
 */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="MdnA79C1YfZ6Yx2qYOXWi_TYFfUvEJOQAmHNaeEWIts" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="The Atlas of Living Australia provides tools to enable users of biodiversity information to find, access, combine and visualise data on Australian plants and animals" />
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
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/iframe.js"></script>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.dimensions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.mousewheel.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/hoverintent-min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/superfish/superfish.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.autocomplete.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/uservoice.js"></script>
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
			
			jQuery("ul.tabs").tabs("div.panes > ul"), { history: true, effect: 'fade' };
		});
	</script>

  <script type="text/javascript" src="http://collections.ala.org.au/js/application.js"></script>
  <script type="text/javascript" src="http://collections.ala.org.au/js/collectory.js"></script> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="layout" content="ala"/>   
    <link rel="stylesheet" type="text/css" media="screen" href="http://biocache.ala.org.au/static/css/search.css"/>
    <script type="text/javascript" src="http://collections.ala.org.au/js/datasets.js"></script>
    <script type="text/javascript" src="http://collections.ala.org.au/js/jquery.json-2.2.min.js"></script>
    <script type="text/javascript" src="http://collections.ala.org.au/js/jquery.ba-bbq.min.js"></script>
    <script type="text/javascript" src="http://collections.ala.org.au/js/jQueryRotateCompressed.2.1.js"></script>
    <script type="text/javascript" src="http://collections.ala.org.au/js/debug.js"></script>


    <script type="text/javascript">
      var altMap = true;
      $(document).ready(function() {
        $('#nav-tabs > ul').tabs();
        greyInitialValues();
        loadResources("http://collections.ala.org.au","http://biocache.ala.org.au/");
        $('select#per-page').change(onPageSizeChange);
        $('select#sort').change(onSortChange);
        $('select#dir').change(onDirChange);
      });
    </script>
  
</head>

<body class="page-template-landing_wo_search-php" id="page-datasets" onload="">
<header id="site-header"> 
	<div class="inner">
		<h1 title="Atlas of Living Australia"><a href="http://test.ala.org.au" title="Atlas of Living Australia home"><img src="http://test.ala.org.au/wp-content/themes/ala2011/images/logo.png" width="315" height="33" alt="" /></a></h1>
		<section id="nav-search">
			<section id="header-search">
				<form id="search-form" action="http://bie.ala.org.au/search" method="get" name="search-form"><label for="search">Search</label>
				<input id="search" class="filled" title="Search" type="text" name="q" placeholder="Search the Atlas" />
				<span class="search-button-wrapper"><button id="search-button" class="search-button" value="Search" type="submit"><img src="http://test.ala.org.au/wp-content/themes/ala2011/images/button_search-grey.png" alt="Search" width="12" height="12" /></button></span></form>
			</section>
			<nav>
				<ol>
					<li><a href="http://test.ala.org.au" title="Atlas of Living Australia home">Home</a></li>
					<li class="last"><a href="https://auth.ala.org.au/cas/login?service=http://test.ala.org.au/wp-login.php?redirect_to=http://test.ala.org.au/my-profile/">Log in</a></li>
				</ol>
			</nav>
		</section>
	</div>
</header>
<nav id="nav-site">
	<!-- WP Menubar 4.8: start menu nav-site, template Superfish, CSS  -->
	<ul class="sf"><li class="nav-species"><a href="http://test.ala.org.au/australias-species/" >Species</a></li><li class="nav-locations"><a href="http://test.ala.org.au/species-by-location/" >Locations</a></li><li class="nav-collections"><a href="http://test.ala.org.au/natural-history-collections/" >Collections</a></li><li class="nav-mapping"><a href="http://test.ala.org.au/mapping-analysis/" >Mapping & analysis</a></li><li class="nav-datasets selected"><a href="http://test.ala.org.au/data-sets/" >Data sets</a></li><li class="nav-blogs"><a href="http://test.ala.org.au/blogs-news/" >Blogs</a></li><li class="nav-getinvolved"><a href="http://test.ala.org.au/get-involved/" >Get involved</a></li><li class="nav-about"><a href="http://test.ala.org.au/about-home/" >About the Atlas</a><ul><li><a href="http://test.ala.org.au/about-home/atlas-background/" >bkAtlas Background</a></li><li><a href="http://test.ala.org.au/about-home/our-data/" >bkOur Data</a></li><li><a href="http://test.ala.org.au/about-home/our-data-providers/" >bkOur Data Providers</a></li><li><a href="http://test.ala.org.au/about-home/how-we-integrate-data/" >bkHow we Integrate Data</a></li><li><a href="http://test.ala.org.au/about-home/downloadable-tools/" >bkDownloadable Tools</a></li><li><a href="http://test.ala.org.au/about-home/digitisation-guidance/" >bkDigitisation Guidance</a></li><li><a href="http://test.ala.org.au/about-home/communications-centre/" >bkCommunications Centre</a></li><li><a href="http://test.ala.org.au/about-home/terms-of-use/" >bkTerms of Use</a></li><li><a href="http://test.ala.org.au/about-home/contact-us/" >bkContact Us</a></li></ul></li></ul>

<!-- WP Menubar 4.8: end menu nav-site, template Superfish, CSS  -->
</nav>
<header id="page-header">
	<div class="inner">
		<nav id="breadcrumb">
			<ol>
				<li><a href="http://test.ala.org.au">Home</a></li> 
				<li class="last">Data sets</li>
			</ol>
		</nav>		
		<section id="content-search">
			<h1>Data sets</h1>
			<p>Much of the content in the Atlas, such as occurrence records, environmental data, images and the conservation status of species, comes from data sets provided by collecting institutions, individual collectors and community groups.</p>
		</section>
	</div><!--inner-->
</header><!--banner--> 
<noscript>
	<p class="noscriptmsg">You don't have javascript enabled. This page will not work without javascript.</p>
</noscript> 
<div class="inner">
	<div class="col-narrow">
        <h2>Refine Results</h2>

        <div id="currentFilterHolder" class="currentfacets">
			<h3>Current Filters</h3>
			<ul>
				<li>Resource type: <strong>Website</strong> <a href="#" onclick="removeFilter('resourceType','website',this);return false;" class="button small negative removeLink" title="remove filter">X</a></li>
				<li>Integration status: <strong>Data available</strong> <a href="#" onclick="removeFilter('resourceType','website',this);return false;" class="button small negative removeLink" title="remove filter">X</a></li>
			</ul>
        </div>

        <ul class="facets">
			<li>License type
				<ul>
					<li><a href="">Custom license</a> (192)</li>
					<li><a href="">No information</a> (86)</li>
					<li><a href="">CC BY-NC</a> (27)</li>
					<li><a href="">CC BY</a> (17)</li>
					<li><a href="">CC BY-NC-SA</a> (6)</li>
					<li><a href="">CC BY-SA</a> (6)</li>
				</ul>
			</li>
			<li>License version
				<ul>
					<li><a href="">No information</a> (278)</li>
					<li><a href="">CC 3.0</a> (41)</li>
					<li><a href="">CC 2.5</a> (15)</li>
				</ul>
			</li>
			<li>Content type
				<ul>
					<li><a href="">Scientific names</a> (102)</li>
					<li><a href="">Images</a> (99)</li>
					<li><a href="">Common names</a> (87)</li>
					<li><a href="">Point occurrence data</a> (72)</li>
					<li><a href="">Description</a> (64)</li>
					<li><a class="button">+ show more</a></li>
				</ul>
			</li>
			<li>Institution
				<ul>
					<li><a href="">No information</a> (304)</li>
					<li><a href="">CSIRO</a> (8)</li>
					<li><a href="">Australian Museum</a> (4)</li>
					<li><a href="">DSEWPaC</a> (3)</li>
					<li><a href="">James Cook University</a> (2)</li>
					<li><a class="button">+ show more</a></li>
				</ul>
			</li>
        </ul>
     </div>

    <div class="col-wide last">
		<section id="results-options">
			<span class="alignleft">
				<span id="resultsReturned"><strong>332</strong> data sets found.</span>
				<input type="text" name="dr-search" id="dr-search" placeholder="Search within results" /> <a class="button" title="Search within results" id="dr-search-link">Search</a>
			</span>
			<span class="alignright">
				<a class="button caution" href="javascript:reset()" title="Remove all filters and sorting options">Reset list</a>
				<a href="#" id="downloadLink" class="button" title="Download metadata for datasets as a CSV file">Download</a>
			</span>
		</section>

        <section id="sort-options">
			<label for="per-page">Results per page</label>
			<select name="per-page" id="per-page" >
				<option value="10" >10</option>
				<option value="20" selected="selected" >20</option>
				<option value="50" >50</option>
				<option value="100" >100</option>
			</select>

            Sort by
			<select name="sort" id="sort" >
				<option value="name" >name</option>
				<option value="type" >type</option>
				<option value="license" >license</option>
			</select>
            Sort order
            <select name="dir" id="dir" >
				<option value="ascending" >ascending</option>
				<option value="descending" >descending</option>
			</select>
        </section><!--search controls-->

        <section class="results">
			<h2>Results</h2>
			<article>
				<header>
					<h3><a class="button small">&ndash;</a> <a href="http://collections.ala.org.au/public/showDataResource/dr382">ABRS Flora of Australia Online</a></h3>
					<dl>
						<dt>Type of resource:</dt>
							<dd>website</dd>
						<dt>License:</dt>
							<dd>other</dd>
						<dt>License version:</dt>
							<dd><a class="external" target="_blank" href="http://www.environment.gov.au/biodiversity/abrs/online-resources/flora/main/index.html">Website</a></dd>
					</dl>
				</header>
				<section style="">
					<p>This series, of a planned 60+ volumes, describes the flowering plants, pines, ferns, mosses, liverworts and lichens to the species level.</p>
					<dl>
						<dt>Content includes:</dt>
							<dd>description</dd>
							<dd>distribution maps</dd>
							<dd>distribution text</dd>
							<dd>habitat</dd>
							<dd>identification keys</dd>
							<dd>references</dd>
							<dd>scientific names</dd>
							<dd>taxonomy</dd>
						</dt>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">&ndash;</a> <a href="http://collections.ala.org.au/public/showDataResource/dr525">Amphibian Research Centre</a></h3>
					<dl>
						<dt>Type of resource:</dt>
							<dd>website</dd>
						<dt>License:</dt>
							<dd>other</dd>
						<dt>License version:</dt>
							<dd><a class="external" target="_blank" href="http://frogs.org.au">Website</a></dd>
					</dl>
				</header>
				<section style="">
					<p>The Centre breeds endangered frogs, supplies frog rearing materials and information and is a base for operations of the Victoria Frog Group. The website contains many images of frogs.</p>
					<dl>
						<dt>Content includes:</dt>
							<dd>scientific names</dd><dd>common names</dd><dd>images</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr383">Ants Down Under</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr432">Ants Down Under</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr523">Arachne</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr498">Art of the Scott Sisters- Australian Museum</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr501">Aussie Bee</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr520">Australasian Arachnology</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr423">Australasian Bird Image Database</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
			<article>
				<header>
					<h3><a class="button small">+</a> <a href="http://collections.ala.org.au/public/showDataResource/dr597">Australia.gov.au - Australian Fauna</a></h3>
					<dl>
						<dt>Type of resource:</dt>
						<dd>website</dd>
						<dt>License:</dt>
						<dd>other</dd>
						<dt>License version:</dt>
						<dd><a class="external" target="_blank" href="http://db.angfa.org.au/">Website</a></dd>
					</dl>
				</header>
				<section style="display:none;">
					<p>This database is used to record the results of Aquatic Surveys taken by ANGFA members throughout Australia, New Guinea and nearby Islands.</p>
					<dl>
						<dt>Content includes:</dt><dd>common names</dd><dd>scientific names</dd><dd>distribution maps</dd><dd>references</dd>
					</dl>
				</section>
			</article>
        </section>

        <nav class="pagination">
			<ol>
				<li id="prevPage">&laquo Previous</li>
				<li class="currentPage">1</li>
				<li><a href="javascript:gotoPage(2);">2</a></li>
				<li><a href="javascript:gotoPage(3);">3</a></li>
				<li><a href="javascript:gotoPage(4);">4</a></li>
				<li><a href="javascript:gotoPage(5);">5</a></li>
				<li><a href="javascript:gotoPage(6);">6</a></li>
				<li><a href="javascript:gotoPage(7);">7</a></li>
				<li><a href="javascript:gotoPage(8);">8</a></li>
				<li><a href="javascript:gotoPage(9);">9</a></li>
				<li id="nextPage"><a href="javascript:nextPage();">Next &raquo</a></li>
			</ol>
        </nav>
	</div><!--col-wide-->
</div><!--inner-->
<?php get_footer(); ?>