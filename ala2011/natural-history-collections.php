<?php
/**
 * Template Name: NHC
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
			
		});
	</script>

  <script type="text/javascript" src="http://collections.ala.org.au/js/application.js"></script>
  <script type="text/javascript" src="http://collections.ala.org.au/js/collectory.js"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="layout" content="ala"/>
	<!--meta name="viewport" content="initial-scale=1.0, user-scalable=no" /-->
	
	<!--<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAJdniJYdyzT6MyTJB-El-5RQumuBjAh1ZwCPSMCeiY49-PS8MIhSVhrLc20UWCGPHYqmLuvaS_b_FaQ"></script>
	ABQIAAAAJdniJYdyzT6MyTJB-El-5RQumuBjAh1ZwCPSMCeiY49-PS8MIhSVhrLc20UWCGPHYqmLuvaS_b_FaQ-->
	<script type="text/javascript" src="http://collections.ala.org.au/js/OpenLayers/OpenLayers.js"></script>

	<script type="text/javascript" src="http://collections.ala.org.au/js/map.js"></script>

	<script type="text/javascript">
	  var altMap = true;
	  $(document).ready(function() {
		$("ul.button-tabs").tabs("div.panes > div"), { history: true,effect: 'fade' };
		//greyInitialValues();
		<!-- calling initMap() here rather than in onload() causes instability -->
	  });
	</script>
    
</head>

<body class="page-template-landing_wo_search-php" id="page-collections-map" onload="initMap('http://collections.ala.org.au')">
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
	<ul class="sf"><li class="nav-species"><a href="http://test.ala.org.au/australias-species/" >Species</a></li><li class="nav-locations"><a href="http://test.ala.org.au/species-by-location/" >Locations</a></li><li class="nav-collections selected"><a href="http://test.ala.org.au/natural-history-collections/" >Collections</a></li><li class="nav-mapping"><a href="http://test.ala.org.au/mapping-analysis/" >Mapping & analysis</a></li><li class="nav-datasets"><a href="http://test.ala.org.au/data-sets/" >Data sets</a></li><li class="nav-blogs"><a href="http://test.ala.org.au/blogs-news/" >Blogs</a></li><li class="nav-getinvolved"><a href="http://test.ala.org.au/get-involved/" >Get involved</a></li><li class="nav-about"><a href="http://test.ala.org.au/about-home/" >About the Atlas</a><ul><li><a href="http://test.ala.org.au/about-home/atlas-background/" >bkAtlas Background</a></li><li><a href="http://test.ala.org.au/about-home/our-data/" >bkOur Data</a></li><li><a href="http://test.ala.org.au/about-home/our-data-providers/" >bkOur Data Providers</a></li><li><a href="http://test.ala.org.au/about-home/how-we-integrate-data/" >bkHow we Integrate Data</a></li><li><a href="http://test.ala.org.au/about-home/downloadable-tools/" >bkDownloadable Tools</a></li><li><a href="http://test.ala.org.au/about-home/digitisation-guidance/" >bkDigitisation Guidance</a></li><li><a href="http://test.ala.org.au/about-home/communications-centre/" >bkCommunications Centre</a></li><li><a href="http://test.ala.org.au/about-home/terms-of-use/" >bkTerms of Use</a></li><li><a href="http://test.ala.org.au/about-home/contact-us/" >bkContact Us</a></li></ul></li></ul>
<!-- WP Menubar 4.8: end menu nav-site, template Superfish, CSS  -->
</nav>
<header id="page-header">
	<div class="inner">
		<nav id="breadcrumb">
			<ol>
				<li><a href="http://test.ala.org.au">Home</a></li> 
				<li class="last">Natural history collections</li>
			</ol>
		</nav>		
		<section id="content-search">
			<h1>Natural history collections</h1>
			<p>Learn about the institution, the collections they hold and view records of specimens that have been databased.</p>
		</section>
	</div><!--inner-->
</header> 
<div class="inner">

	<div class="col-narrow">
		<h2>Currently viewing</h2>
		<ul class="filter-buttons">
			<li class="all selected" id="all" onclick="toggleButton(this);return false;">
				<a href=""><h3>All collections</h3></a>
			</li>
			<li class="fauna" id="fauna" onclick="toggleButton(this);return false;">
				<a href=""><h3>Fauna</h3> Mammals, birds, reptiles, fish, amphibians and invertebrates.</a>
			</li>
			<li class="insects" id="entomology" onclick="toggleButton(this);return false;">
				<a href=""><h3>Insects</h3> Insects, spiders, mites and some other arthropods.</a>
			</li>
			<li class="microbes" id="microbes" onclick="toggleButton(this);return false;">
				<a href=""><h3>Microorganisms</h3> Protists, bacteria, viruses, microfungi and microalgae.</a>
			</li>
			<li class="plants" id="plants" onclick="toggleButton(this);return false;">
				<a href=""><h3>Plants</h3> Vascular plants, algae, fungi, lichens and bryophytes.</a>
			</li>
		</ul>
	</div><!--col-narrow-->

	<div class="col-wide last" id="nav-tabs">
		<ul class="button-tabs">
			<li><a class="button" href="#map">Map</a></li>
			<li><a class="button" href="#list">List</a></li>
		</ul>
	</div>
	
    <div class="panes"><!-- wrap map and list-->
        <div class="col-wide last" id="map">
            <section>
				<p><strong><span id="numFilteredCollections">141 collections.</span></strong> <span id='numVisible'>All</span> are currently visible on the map. <img src="http://collections.ala.org.au/images/map/orange-dot-multiple.png" width="20" height="20"/>indicates there are multiple collections at this location.</p>
				<div id="map-container">
					<div id="map_canvas"><img src="<?php bloginfo('template_directory'); ?>/images/nhc-map.png" /></div>
				</div>
            </section>
        </div><!--col-wide-->

        <div class="col-wide last"id="list">
            <section id="names">
				<p><strong><span id="numFilteredCollections">141</span> collections</strong> listed by parent institution (where applicable). <!--ONLY SHOW IF TRUE Collections not shown on the map (due to lack of location information) are marked <img src="http://collections.ala.org.au/images/map/nomap.gif"/>.--></p>
				<ul id="filtered-list">
					<li><a href="http://collections.ala.org.au/public/show/co43">Agricultural Scientific Collections Unit</a></li>
					<li><a href="http://collections.ala.org.au/public/show/co85">Animal Health Division Culture Collection</a></li>
					<li><a href="<?php echo get_permalink('25570');?>">Australian Antarctic Division</a>
						<ul>
							<li><a href="<?php echo get_permalink('25582');?>">Australian Antarctic Division Herbarium</a></li>
						</ul>
					</li>
					<li><a href="http://collections.ala.org.au/public/show/co134">Australian Biological Tissue Collection</a></li>
					<li><a href="http://collections.ala.org.au/public/show/co81">Australian Collection of Antarctic Microorganisms</a></li>
					<li><a href="http://collections.ala.org.au/public/show/co82">Australian Collection of Microorganisms</a></li>
					<li><a href="http://collections.ala.org.au/public/show/co86">Australian Inoculants Research Group</a></li>
					<li><a href="http://collections.ala.org.au">Australian Museum</a>
						<ul>
							<li><a href="http://collections.ala.org.au/public/show/co116">Australian Museum Arachnology Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co9">Australian Museum Entomology Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co10">Australian Museum Herpetology Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co112">Australian Museum Ichthyology Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co114">Australian Museum Malacology Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co80">Australian Museum Mammalogy Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co113">Australian Museum Marine Invertebrate Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co11">Australian Museum Ornithology Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co136">Australian Museum Palaeontology Collection</a></li>
						</ul>
					</li>
					<li><a href="http://collections.ala.org.au">Commonwealth Scientific and Industrial Research Organisation</a>
						<ul>
							<li><a href="http://collections.ala.org.au/public/show/co90">Australian National Algae Culture Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co21">Australian National Fish Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co12">Australian National Herbarium</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co13">Australian National Insect Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co87">Australian National Reference Laboratory in Medical Mycology</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co16">Australian National Wildlife Collection</a></li>
							<li><a href="http://collections.ala.org.au/public/show/co97">CSIRO Food &amp; Nutritional Sciences</a></li>
						</ul>
					</li>
                  <li><a href="http://collections.ala.org.au/public/show/co133">Australian Plant DNA Bank</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co17">Australian Tropical Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co93">Biocatalytic Microbe Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co175">Biosecurity Queensland Cairns Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co20">Charles Sturt University Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co5">DAFWA - Invertebrate Reference Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co4">DAFWA - Plant Pathology Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co164">Downing Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co27">Edith Cowan University The Robert Brown Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co95">Fish Disease Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co30">Forestry Commission of NSW Insect Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co29">Forestry Tasmania, Tasmanian Forest Insect Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co14">Gauba Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co98">IFM Quality Services Pty. Ltd.</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co99">IMVS Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co78">IMVS Mycology Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co31">James Cook University Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co69">John Ray Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co66">John T. Waterhouse Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co32">Kings Park and Botanic Garden Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co33">La Trobe University Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co35">Macleay Museum - Entomology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co102">Microbial Gene Research and Resources Facility</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co101">Microbiological Diagnostic Unit Public Health Laboratory</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co105">Microbiology Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co36">Monash University Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co103">Murdoch University Algal Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co37">Murdoch University Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co139">Museum and Art Gallery of the Northern Territory Amphibian Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co142">Museum and Art Gallery of the Northern Territory Annelid Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co138">Museum and Art Gallery of the Northern Territory Bird Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co41">Museum and Art Gallery of the Northern Territory Entomology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co42">Museum and Art Gallery of the Northern Territory Ichthyology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co141">Museum and Art Gallery of the Northern Territory Malacology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co137">Museum and Art Gallery of the Northern Territory Mammal Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co140">Museum and Art Gallery of the Northern Territory Reptile Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co115">Museum Victoria Arachnology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co39">Museum Victoria Entomology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co117">Museum Victoria Herpetology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co40">Museum Victoria Ichthyology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co118">Museum Victoria Mammalogy Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co119">Museum Victoria Marine Invertebrates Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co120">Museum Victoria Ornithology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co65">N.C.W. Beadle Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co73">National Collection of Fungi, Knoxfield Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co54">National Herbarium of New South Wales</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co55">National Herbarium of Victoria</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co104">Neurospora crassa Mutants</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co46">New South Wales Plant Pathology Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co44">North Coast Regional Botanic Gardens Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co129">Northern Territory Economic Insect Reference Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co25">Northern Territory Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co24">Northern Territory Herbarium (Alice Springs)</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co84">Patent Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co91">Phytoplasma DNA Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co162">Queen Victoria Museum and Art Gallery - Annelids</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co170">Queen Victoria Museum and Art Gallery - Arachnids</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co158">Queen Victoria Museum and Art Gallery - Birds</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co34">Queen Victoria Museum and Art Gallery - Entomology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co159">Queen Victoria Museum and Art Gallery - Herpetology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co156">Queen Victoria Museum and Art Gallery - Ichthyology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co157">Queen Victoria Museum and Art Gallery - Mammals</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co161">Queen Victoria Museum and Art Gallery - Molluscs</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co130">Queensland Forestry Research Institute</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co49">Queensland Herbarium </a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co153">Queensland Museum Amphibians</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co148">Queensland Museum Arachnid Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co151">Queensland Museum Birds</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co135">Queensland Museum Crustaceans</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co146">Queensland Museum Echinoderms</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co50">Queensland Museum Entomology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co51">Queensland Museum Fishes</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co150">Queensland Museum Mammals</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co147">Queensland Museum Molluscs</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co155">Queensland Museum Palaeontology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co143">Queensland Museum Protozoans</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co152">Queensland Museum Reptiles</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co144">Queensland Museum Sessile Marine Invertebrates</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co154">Queensland Museum Tropical Marine Invertebrates</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co145">Queensland Museum Worms</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co53">Queensland Plant Pathology Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co52">Queensland Primary Industries Insect Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co7">Queensland Primary Industries Mareeba - Entomology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co166">South Australian Museum Australian Biological Tissue Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co125">South Australian Museum Herpetology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co57">South Australian Museum Ichthyology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co126">South Australian Museum Mammalogy Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co165">South Australian Museum Marine Invertebrates Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co127">South Australian Museum Ornithology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co128">South Australian Museum Parasitology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co56">South Australian Museum Terrestrial Invertebrate Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co172">Southern Cross University Medicinal Plant Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co58">State Forests of New South Wales Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co48">State Herbarium of South Australia</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co131">Tasmanian Agricultural Insect Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co60">Tasmanian Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co111">Tasmanian Museum and Art Gallery Faunal Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co72">The Janet Cosh Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co64">The University of Melbourne Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co61">The University of Melbourne, Land and Food Resources (Burnley) - Entomology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co68">University of Queensland Insect Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co70">University of Tasmania - Entomology</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co106">University of the Sunshine Coast Microbial Library</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co71">University of Western Australia Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co107">University of Western Australia Microbiology Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co132">Victorian Agricultural Insect Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co74">Waite Insect and Nematode Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co109">Western Australian Culture Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co75">Western Australian Herbarium</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co124">Western Australian Museum Arachnology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co121">Western Australian Museum Bird Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co76">Western Australian Museum Entomology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co77">Western Australian Museum Fish Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co122">Western Australian Museum Herpetology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co123">Western Australian Museum Mammal Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co110">Westmead Medical Mycology Collection</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co92">WHO/FAO/OIE Collaborating Centre for Reference and Research on Leptospirosis</a></li>
                  <li><a href="http://collections.ala.org.au/public/show/co169">Wine Microorganism Culture Collection</a></li>
              </ul>
          </section>
        </div><!--col-wide-->
	</div><!--panes-->
</div><!--inner-->
<?php get_footer(); ?>