<?php
/**
 * Template Name: Species page
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
			
			jQuery("ul.tabs").tabs("div.tabs-panes > section"), { history: true, effect: 'fade' };
		});
	</script>
</head>

<body id="" class="species">
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
								<li class="last"><a href="http://test.ala.org.au/wp-content/themes/ala2011/Logout.php">Log out</a></li>
							</ol>
			</nav>
		</section>
	</div>
</header>

<nav id="nav-site">
	<!-- WP Menubar 4.8: start menu nav-site, template Superfish, CSS  -->
<ul class="sf"><li class="nav-species selected"><a href="http://test.ala.org.au/australias-species/" >Species</a></li><li class="nav-locations"><a href="http://test.ala.org.au/species-by-location/" >Locations</a></li><li class="nav-collections"><a href="http://test.ala.org.au/natural-history-collections/" >Collections</a></li><li class="nav-mapping"><a href="http://test.ala.org.au/mapping-analysis/" >Mapping & analysis</a></li><li class="nav-datasets"><a href="http://test.ala.org.au/data-sets/" >Data sets</a></li><li class="nav-blogs"><a href="http://test.ala.org.au/blogs-news/" >Blogs</a></li><li class="nav-getinvolved"><a href="http://test.ala.org.au/get-involved/" >Get involved</a></li><li class="nav-about"><a href="http://test.ala.org.au/about-home/" >About the Atlas</a><ul><li><a href="http://test.ala.org.au/about-home/atlas-background/" >bkAtlas Background</a></li><li><a href="http://test.ala.org.au/about-home/our-data/" >bkOur Data</a></li><li><a href="http://test.ala.org.au/about-home/our-data-providers/" >bkOur Data Providers</a></li><li><a href="http://test.ala.org.au/about-home/how-we-integrate-data/" >bkHow we Integrate Data</a></li><li><a href="http://test.ala.org.au/about-home/downloadable-tools/" >bkDownloadable Tools</a></li><li><a href="http://test.ala.org.au/about-home/digitisation-guidance/" >bkDigitisation Guidance</a></li><li><a href="http://test.ala.org.au/about-home/communications-centre/" >bkCommunications Centre</a></li><li><a href="http://test.ala.org.au/about-home/terms-of-use/" >bkTerms of Use</a></li><li><a href="http://test.ala.org.au/about-home/contact-us/" >bkContact Us</a></li></ul></li></ul>
<!-- WP Menubar 4.8: end menu nav-site, template Superfish, CSS  -->
</nav>
<header id="page-header">
	<div class="inner">
		<nav id="breadcrumb"><ol><li><a href="http://test.ala.org.au">Home</a></li> <li><a href="<?php echo get_permalink('24214'); ?>">Australia&#8217;s species</a></li> <li class="last"><i>Dacelo novaeguineae</i></li></ol></nav>
		<hgroup> 
			<h1><i>Dacelo novaeguineae</i> <span>(Hermann, 1783)</span></h1>
			<h2>Laughing Kookaburra</h2> 
		</hgroup> 
	</div>
</header>
<div class="inner">
	<div class="col-narrow">
		<div class="boxed attached">
			<section class="meta">
				<dl>
					<dt>Name source</dt>
						<dd><a href="http://www.environment.gov.au/biodiversity/abrs/online-resources/fauna/afd/taxa/Dacelo%20%28Dacelo%29%20novaeguineae" target="_blank" class="external">Australian Faunal Directory</a></dd>
					<dt>Rank</dt>
						<dd style="text-transform: capitalize;">species</dd>
					<dt>Data links</dt>
						<dd><a href="#lsidText" id="lsid" class="button" title="Life Science Identifier (pop-up)">LSID</a></dd>
						<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601.json" class="button" title="JSON web service">JSON</a></dd>
				</dl>
				
				<div style="display:none;">
					<div id="lsidText">
						<h2><a href="http://lsids.sourceforge.net/" target="_blank">Life Science Identifier (LSID):</a></h2>
						<p><a href="http://lsid.tdwg.org/summary/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601" target="_blank">urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601</a></p>
						<p>LSIDs are persistent, location-independent,resource identifiers for uniquely naming biologically significant resources including species names, concepts, occurrences, genes or proteins, or data objects that encode information about them. To put it simply, LSIDs are a way to identify and locate pieces of biological information on the web.</p>
					</div>
				</div>
			</section>
			<section class="status">
				<h2>Species presence</h2>
				<div><span class="native">&nbsp;</span>Recorded In Australia</div>
				<div><span class="nonnative">&nbsp;</span>Not recorded In Australia</div>
                <div><span class="terrestrial">&nbsp;</span>Terrestrial Habitats</div>
                <div><span class="terrestrial-aquatic">&nbsp;</span>Terrestrial aquatic habitats</div>
                <div><span class="marine">&nbsp;</span>Marine Habitats</div>
			</section>
			<section class="status">
				<h2>Conservation status</h2>
                <div><a href="http://www.ala.org.au/about/program-of-projects/sds/threatened-species-codes/#International" title="Threatened Species Codes - details" target="_blank"><span class="green">IUCN<!--LC--></span>Least Concern</a></div>
				<div><a href="http://www.ala.org.au/about/program-of-projects/sds/threatened-species-codes/#International" title="Threatened Species Codes - details" target="_blank"><span class="yellow">NT<!--LC--></span>Vulnerable</a></div>
				<div><a href="http://www.ala.org.au/about/program-of-projects/sds/threatened-species-codes/#International" title="Threatened Species Codes - details" target="_blank"><span class="red">WA<!--LC--></span>Extinct in the wild</a></div>
			</section>
		</div>
	</div><!--col-narrow-->
	<div class="col-wide last">
		<nav class="classification">
			<h2>Classification</h2>
			<ol>
                <li><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:4647863b-760d-4b59-aaa1-502c8cdf8d3c" title="kingdom">Animalia</a></li>
                <li><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:065f1da4-53cd-40b8-a396-80fa5c74dedd" title="phylum">Chordata</a></li>
                <li><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:5ed80139-31bb-48a8-9f57-42d8015dacbb" title="class">Aves</a></li>
                <li><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:a18a5e21-41a4-426b-bfb8-53d47d598fcf" title="order">Coraciiformes</a></li>
                <li><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:499fe386-adf2-435c-b52d-3367453329e8" title="family">Alcedinidae</a></li>
                <li><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:7d7390dc-4f2f-4bed-b575-7cb16d6df56b" title="genus"><i>Dacelo</i></a></li>
                <li><i>Dacelo novaeguineae</i></li>
            </ol>
		</nav>
		<div class="four-column">
			<section class="double" id="divMap">
				<h2>Occurrence records</h2>
				<div class="bg-white">
					<img id="mapImage" src="http://spatial.ala.org.au/output/sampling/urn_lsid_biodiversity.org.au_afd.taxon_5b72fb29-0318-43f8-bc0a-58b879b17601.png" class="distroImg" width="316" alt="occurrence map"/>
					<img id="mapLegend" src="http://spatial.ala.org.au/output/sampling/legend_urn_lsid_biodiversity.org.au_afd.taxon_5b72fb29-0318-43f8-bc0a-58b879b17601.png" class="distroLegend" alt="map legend"/>
				</div>
				<p><a class="button" href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601">Records list</a> <a class="button" href="http://spatial.ala.org.au/?q=lsid:urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601" title="View interactive map">Map &amp; analyse records</a></p>
			</section>
			<section class="last">
				<a href="0" title=""><img src="http://bie.ala.org.au/repo/1013/128/1284064/smallRaw.jpg" class="overviewImage" alt="" /></a>
                <cite>Image by: Ian Sanderson
                <br/>Rights: Attribution-NonCommercial License<br/>Source: <a href="http://www.flickr.com/photos/iansand/3096843303/" target="_blank" onclick="javascript:window.location.href='http://www.flickr.com/photos/iansand/3096843303/';">Flickr EOL</a></cite>
				<a href="" class="button orange">Record a sighting</a>
			</section>
		</div>
		<section class="clearfix">
			<h2>Description</h2>
			<p>The Laughing Kookaburra is a stocky bird of about 45 cm (18 in) in length, with a large head, a prominent brown eye, and a very large bill. The sexes are very similar, although the female averages larger and has less blue to the rump than the male. They have a white or cream-colored body and head with a dark brown stripe through each eye and more faintly over the top of the head. ... <cite>source: <a href="http://en.wikipedia.org/wiki/Laughing_Kookaburra" target="_blank" title="Laughing Kookaburra" class="external">Wikipedia</a></cite></p>
			<p>The Laughing Kookaburra is a stocky bird with large head and a short neck and blunt tail. Beak is fairly long and sturdy. The wings are brown with blue mottling, the back is brown and the tail reddish. The males have a patch of blue-green feathers in the center of the rump - this less noticeable on the females.... <cite>source: <a href="http://www.ozanimals.com/Bird/Laughing-Kookaburra/Dacelo/novaeguineae.html" target="_blank" class="external" title="Laughing Kookaburra (Dacelo novaeguineae)">OZ Animals</a></cite></p>
		</section>
		<section>
			<ul class="tabs">
				<li><a href="#">Resources</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Names</a></li>
				<li><a href="#">Classification</a></li>
				<li><a href="#">Records</a></li>
				<li><a href="#">Literature</a></li>
			</ul>
			<div class="tabs-panes">
				<section id="resources">
					<h2>Online resources</h2>
					<ul>
						<li><a href="http://www.auswildlife.com/birds/#206" target="_blank" class="infosource">Aus Wild Life</a>
							<ul>
								<li>Names, Images, Images</li>
							</ul>
						</li>
						<li><a href="http://www.environment.gov.au/biodiversity/abrs/online-resources/fauna/afd/taxa/Dacelo%20%28Dacelo%29%20novaeguineae" target="_blank" class="infosource">Australian Faunal Directory</a>
							<ul>
								<li>Names</li>
							</ul>
						</li>
						<li><a href="http://www.birdsinbackyards.net/species/Dacelo-novaeguineae" target="_blank" class="infosource">Birds in Backyards</a>
							<ul>
								<li>Distribution, Habitat, Diet, Reproduction, Distribution Map, Similar Species, Images</li>
								<li><span class="truncate">Laughing Kookaburras are found throughout eastern Australia. They have been introduced to Tasmania, the extreme south-west of Western Australia, and New Zealand. Replaced by the Blue-winged Kookaburra ...</span><a href="http://www.birdsinbackyards.net/species/Dacelo-novaeguineae" target="_blank">more</a></li>
							</ul>
						</li>
						<li><a href="http://www.catalogueoflife.org/commonNames" target="_blank" class="infosource">Catalogue of Life: 2010 Annual Checklist</a>
							<ul>
								<li>Names</li>
							</ul>
						</li>
						<li><a href="http://www.environment.sa.gov.au" target="_blank" class="infosource">Department of Environment and Natural Resources</a>
							<ul>
								<li>Names</li>
							</ul>
						</li>
						<li><a href="http://www.environment.nsw.gov.au" target="_blank" class="infosource">Department of Environment, Climate Change and Water</a>
							<ul>
								<li>Names</li>
							</ul>
						</li>
						<li><a href="http://www.flickr.com/photos/arthur_chapman/4884180726/" target="_blank" class="infosource">Flickr EOL</a>
							<ul>
								<li>Video Page Url, Images</li>
							</ul>
						</li>
						<li><a href="http://www.marine.csiro.au/mirrorsearch/ir_search.list_species?sp_id=ave10004370" target="_blank" class="infosource">Interim Register of Marine and Non-marine Genera</a>
							<ul>
								<li>Status</li>
							</ul>
						</li>
						<li><a href="http://www.iucn.org/" target="_blank" class="infosource">International Union for Conservation of Nature</a>
							<ul>
								<li>Names, Status</li>
							</ul>
						</li>
						<li><a href="http://ibc.lynxeds.com/species/laughing-kookaburra-dacelo-novaeguineae" target="_blank" class="infosource">Internet Bird Collection</a>
							<ul>
								<li>Family Common Name, Video Page Url, Images</li>
							</ul>
						</li>
						<li><a href="http://natureshare.org.au/species/368_dacelo_novaeguineae/" target="_blank" class="infosource">Nature Share</a>
							<ul>
								<li>Images, Images</li>
							</ul>
						</li>
						<li><a href="http://www.ozanimals.com/Bird/Laughing-Kookaburra/Dacelo/novaeguineae.html" target="_blank" class="infosource">OZ Animals</a>
							<ul>
								<li>Names, Description, Distribution, Morphology, Habitat, Diet, Reproduction, Image License</li>
							</ul>
						</li>
						<li><a href="http://en.wikipedia.org/wiki/Laughing_Kookaburra" target="_blank" class="infosource">Wikipedia</a>
							<ul>
								<li>Description, Distribution, Reference, Images, Images</li>
								<li><span class="truncate">The Laughing Kookaburra is a stocky bird of about 45 cm (18 in) in length, with a large head, a prominent brown eye, and a very large bill. The sexes are very similar, although the female averages larger...</span> <a href="http://en.wikipedia.org/wiki/Laughing_Kookaburra" target="_blank">more</a></li>
							</ul>
						</li>
					</ul>
				</section>
				<section id="gallery">
					<h2>Images</h2>
					<ul>
						<li><a class="thumbImage" rel="thumbs" title="Kookaburra Again Again" href="images/1284064.jpg" id="thumb0"><img src="http://bie.ala.org.au/repo/1013/128/1284064/thumbnail.jpg" alt="Flickr EOL" title="" width="100px" height="100px" /></a>
						<div id="thumbDiv0" style="display:none;">
							Kookaburra Again Again<br/>
							Image by: Ian Sanderson<br/>
							Locality: Sydney<br/>
							Licence: http://creativecommons.org/licenses/by-nc/2.0/<br/>
							Rights: Attribution-NonCommercial License<br/>
							<cite>Source: <a href="http://www.flickr.com/photos/iansand/3096843303/" target="_blank">Flickr EOL</a></cite>
							<p class="imageRank-1284064">Is this image representative of species? <a class="button positive isrepresent" href="javascript:rankThisImage('urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601','http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fiansand%2F3096843303%2F','1013','1284064',false,true,'Dacelo novaeguineae');">YES</a> <a class="button negative isnotrepresent" href="javascript:rankThisImage('urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601','http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fiansand%2F3096843303%2F','1013','1284064',false,false,'Dacelo novaeguineae');">NO</a>
							</p>   	            	                           
						</div></li>
					</ul>
                    <h2>Videos</h2>
					<ul>
						<li><a class="screenshotThumb" title="" href="http://ibc.lynxeds.com/video/laughing-kookaburra-dacelo-novaeguineae/several-views-bird-finally-eating-earthworm" target="_blank"><img src="http://bie.ala.org.au/repo/1017/158/1580167/screenshot.jpg" alt="Internet Bird Collection" title="" width="120px" height="120px" style="width:120px;height:120px;padding-right:3px;"/></a><p>Video by: Matt Weeks<br/>
								Licence: http://ibc.lynxeds.com/content/about-us<br/>
								Rights: Matt Weeks<br/>
								Source: <a href="http://ibc.lynxeds.com/video/laughing-kookaburra-dacelo-novaeguineae/several-views-bird-finally-eating-earthworm" target="_blank">Internet Bird Collection</a>
							</p>
						</li>
					</ul>
				</section>
				<section id="names">
					<h2>Names and sources</h2>
                    <table class="borders">
						<thead>
							<tr>
								<th>Accepted name</th>
								<th>Source</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><i>Dacelo novaeguineae</i> (Hermann, 1783)</td>
								<td>
									<ul>
										<li><a href="http://www.environment.gov.au/biodiversity/abrs/online-resources/fauna/afd/taxa/Dacelo%20%28Dacelo%29%20novaeguineae" target="blank">Australian Faunal Directory</a></li>
									</ul>
								</td>
							</tr>
                    	</tbody>
                    </table>
					<script type="text/javascript">
						function rankThisCommonName(guid, documentId, blackList, positive, name) {
							var url = "/rankTaxonCommonNameWithUser?guid="+guid+"&blackList="+blackList+"&positive="+positive+"&name="+name;
							var linkId = 'cnRank-'+documentId;
							$('#cnRank-'+documentId).html('Sending your ranking....');
							var jqxhr = $.getJSON(url, function(data){
								$('#cnRank-'+documentId).each(function(index) {
									$(this).html('Thanks for your help!');
								});
							}).error(function(jqXHR, textStatus, errorThrown) {
								// catch ajax errors (requiers JQuery 1.5+) - usually 500 error
								$('#cnRank-'+documentId).html('An error occurred: ' + errorThrown + " (" + jqXHR.status + ")");
							});
						}
                    </script>
                    <table class="borders">
						<thead>
							<tr>
								<th>Common name</th>
								<th>Source</th>
							</tr>
						</thead>
						<tbody>
                    	<tr>
                            <td>Laughing Kookaburra
								<div id='cnRank-752186156' class="rankCommonName">
									Is this a preferred common name for this species?
									   <a class="button isrepresent" href="#" onclick="rankThisCommonName('urn%3Alsid%3Abiodiversity.org.au%3Aafd.taxon%3A5b72fb29-0318-43f8-bc0a-58b879b17601','752186156',false,true,'Laughing Kookaburra');return false;">YES</a>
									   
									   <a class="button isnotrepresent" href="#" onclick="rankThisCommonName('urn%3Alsid%3Abiodiversity.org.au%3Aafd.taxon%3A5b72fb29-0318-43f8-bc0a-58b879b17601','752186156',false,false,'Laughing Kookaburra');return false;">NO</a>
								</div>                    
                            </td>
                            <td>
								<ul>
									<li><a href="http://www.environment.gov.au/biodiversity/abrs/online-resources/fauna/afd/taxa/5b72fb29-0318-43f8-bc0a-58b879b17601" target="blank">Australian Faunal Directory</a></li>
									<li><a href="http://www.ozanimals.com/Bird/Laughing-Kookaburra/Dacelo/novaeguineae.html" target="blank">OZ Animals</a></li>
									<li><a href="http://www.catalogueoflife.org/commonNames" target="blank">Catalogue of Life: 2010 Annual Checklist</a></li>
									<li><a href="http://www.auswildlife.com/birds/#206" target="blank">Aus Wild Life</a></li>
									<li><a href="http://bie.ala.org.au/uploads/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b176011314578341549" target="blank">ALA website image uploads</a></li>
									<li><a href="http://www.environment.sa.gov.au" target="blank">Department of Environment and Natural Resources</a></li>
									<li><a href="http://www.environment.nsw.gov.au" target="blank">Department of Environment, Climate Change and Water</a></li>
									<li><a href="http://www.iucn.org/" target="blank">International Union for Conservation of Nature</a></li>
								</ul>
                            </td>
                    	</tr>
                    	<tr>
                            <td>Kookaburra 
								<div id='cnRank--1389397107' class="rankCommonName">
										Is this a preferred common name for this species?
									   <a class="button isrepresent" href="#" onclick="rankThisCommonName('urn%3Alsid%3Abiodiversity.org.au%3Aafd.taxon%3A5b72fb29-0318-43f8-bc0a-58b879b17601','-1389397107',false,true,'Kookaburra');return false;">YES</a> <a class="button isnotrepresent" href="#" onclick="rankThisCommonName('urn%3Alsid%3Abiodiversity.org.au%3Aafd.taxon%3A5b72fb29-0318-43f8-bc0a-58b879b17601','-1389397107',false,false,'Kookaburra');return false;">NO</a>
								</div>                    
                            </td>
                            <td>
                                <ul>
									<li><a href="http://www.iucn.org/" target="blank">International Union for Conservation of Nature</a></li>
                                </ul> 
                            </td>
                    	</tr>
						<tr>
                            <td>Bushman's Clock 
								<div id='cnRank-633979980' class="rankCommonName">
										Is this a preferred common name for this species?
									   <a class="button isrepresent" href="#" onclick="rankThisCommonName('urn%3Alsid%3Abiodiversity.org.au%3Aafd.taxon%3A5b72fb29-0318-43f8-bc0a-58b879b17601','633979980',false,true,'Bushman\'s Clock');return false;">YES</a>
									   <a class="button isnotrepresent" href="#" onclick="rankThisCommonName('urn%3Alsid%3Abiodiversity.org.au%3Aafd.taxon%3A5b72fb29-0318-43f8-bc0a-58b879b17601','633979980',false,false,'Bushman\'s Clock');return false;">NO</a>
								</div>                            
                            </td>
                            <td>
                                <ul>
                                    <li><a href="http://www.ozanimals.com/Bird/Laughing-Kookaburra/Dacelo/novaeguineae.html" target="blank">OZ Animals</a></li>
                                </ul> 
                            </td>
                    	</tr>
						</tbody>
					</table>
				</section>
				<section id="classification">
					<div class="section">
                    <h2>Scientific classification</h2>
                    <div id="isAustralianSwitch"></div>
                    <dl id="classificationList">
                    	<dt>Kingdom</dt>
						<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:4647863b-760d-4b59-aaa1-502c8cdf8d3c#classification" title="kingdom">ANIMALIA</a></dd>
						<dl>
							<dt>Phylum</dt>
							<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:065f1da4-53cd-40b8-a396-80fa5c74dedd#classification" title="phylum">CHORDATA</a></dd>
							<dl>
								<dt>Class</dt>
								<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:5ed80139-31bb-48a8-9f57-42d8015dacbb#classification" title="class">AVES</a></dd>
								<dl>
									<dt>Order</dt>
									<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:a18a5e21-41a4-426b-bfb8-53d47d598fcf#classification" title="order">CORACIIFORMES</a></dd>
									<dl>
										<dt>Family</dt>
										<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:499fe386-adf2-435c-b52d-3367453329e8#classification" title="family">ALCEDINIDAE</a></dd>
										<dl>
											<dt>Subfamily</dt>
											<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:e61f7b68-9f84-469f-804d-f84f3a60969b#classification" title="subfamily">Halcyoninae</a></dd>
											<dl>
												<dt>Genus</dt>
												<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:7d7390dc-4f2f-4bed-b575-7cb16d6df56b#classification" title="genus"><i>Dacelo</i></a></dd>
												<dl>
													<dt>Subgenus</dt>
													<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:dae6de48-3938-4d13-b336-66137019cf90#classification" title="subgenus"><i>Dacelo (Dacelo)</i></a></dd>
													<dl>
														<dt id="currentTaxonConcept">Species</dt>
														<dd><span><i>Dacelo (Dacelo) novaeguineae</i> : Laughing Kookaburra</span> <span id="recordedIn"><img src="<?php bloginfo('template_directory'); ?>/images/status_native-sm.png" alt="Recorded in Australia" title="Recorded in Australia" width="21" height="21" alt="" /></span></dd>
														<dl class="childClassification">
															<dt class="recorded">Subspecies</dt>
															<dd><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:0106ae88-ccce-4073-8a73-4571d0d83345#classification"><i>Dacelo (Dacelo) novaeguineae minor</i></a> <span id="recordedIn"><img src="<?php bloginfo('template_directory'); ?>/images/status_native-sm.png" alt="Recorded in Australia" title="Recorded in Australia" width="21" height="21" alt="" /></span></dd>
						
															<dd class="recorded"><a href="/species/urn:lsid:biodiversity.org.au:afd.taxon:285bc1ae-c2a9-4b69-bedf-799589cd530c#classification"><i>Dacelo (Dacelo) novaeguineae novaeguineae</i></a> <span id="recordedIn"><img src="<?php bloginfo('template_directory'); ?>/images/status_native-sm.png" alt="Recorded in Australia" title="Recorded in Australia" width="21" height="21" alt="" /></span></dd>
														</dl>
													</dl>
												</dl>
											</dl>
										</dl>
									</dl>
								</dl>
							</dl>
						</dl>
					</dl>
				</section>
				<section id="records">
					<section id="occurrenceRecords">
						<h2>Occurrence Records</h2>
						<p><a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601">View list of all <span id="occurenceCount">152,403</span> occurrence records for this taxon</a></p>
						<div id="recordBreakdowns">
							<h3>Collections that hold specimens</h3>
							<ul><li><a href="http://collections.ala.org.au/public/show/co11">Australian Museum Ornithology Collection</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co11&amp;fq=basis_of_record:PreservedSpecimen">213 records</a>)</li><li><a href="http://collections.ala.org.au/public/show/co16">Australian National Wildlife Collection</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co16&amp;fq=basis_of_record:PreservedSpecimen">198 records</a>)</li><li><a href="http://collections.ala.org.au/public/show/co120">Museum Victoria Ornithology Collection</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co120&amp;fq=basis_of_record:PreservedSpecimen">106 records</a>)</li><li><a href="http://collections.ala.org.au/public/show/co121">Western Australian Museum Bird Collection</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co121&amp;fq=basis_of_record:PreservedSpecimen">50 records</a>)</li><li><a href="http://collections.ala.org.au/public/show/co158">Queen Victoria Museum and Art Gallery - Birds</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co158&amp;fq=basis_of_record:PreservedSpecimen">36 records</a>)</li><li><a href="http://collections.ala.org.au/public/show/co111">Tasmanian Museum and Art Gallery Faunal Collection</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co111&amp;fq=basis_of_record:PreservedSpecimen">12 records</a>)</li><li><a href="http://collections.ala.org.au/public/show/co127">South Australian Museum Ornithology Collection</a> (<a href="http://biocache.ala.org.au//occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=collection_uid:co127&amp;fq=basis_of_record:PreservedSpecimen">1 records</a>)</li></ul>
							
							<h3>By State & Territory</h3>
							<ul style="float:left;"><li>New South Wales: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:New South Wales">49,387 records</a></li><li>Victoria: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:Victoria">30,181 records</a></li><li>Queensland: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:Queensland">28,561 records</a></li><li>Australian Capital Territory: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:Australian Capital Territory">15,452 records</a></li><li>South Australia: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:South Australia">9,959 records</a></li><li>Western Australia: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:Western Australia">9,824 records</a></li><li>Tasmania: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=state:Tasmania">4,926 records</a></li></ul>
							<div id="state_chart_div" style="width:400px; height:200px; overflow:hidden; float:right;"><div id="chartArea" style="margin:-50px 0 0 -90px;"><svg id="chart" width="630" height="300"><defs id="defs"></defs><g><rect x="0" y="0" width="630" height="300" stroke="none" stroke-width="0" fill="#fffef7"></rect><g><g><text text-anchor="start" x="119" y="68.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">New South Wales</text></g><rect x="102" y="58" width="12" height="12" stroke="none" stroke-width="0" fill="#3366cc"></rect><g><text text-anchor="start" x="119" y="87.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Victoria</text></g><rect x="102" y="77" width="12" height="12" stroke="none" stroke-width="0" fill="#dc3912"></rect><g><text text-anchor="start" x="119" y="106.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Queensland</text></g><rect x="102" y="96" width="12" height="12" stroke="none" stroke-width="0" fill="#ff9900"></rect><g><text text-anchor="start" x="119" y="125.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Australian Capital</text><text text-anchor="start" x="119" y="141.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Territory</text></g><rect x="102" y="115" width="12" height="12" stroke="none" stroke-width="0" fill="#109618"></rect><g><text text-anchor="start" x="119" y="160.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">South Australia</text></g><rect x="102" y="150" width="12" height="12" stroke="none" stroke-width="0" fill="#990099"></rect><g><text text-anchor="start" x="119" y="179.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Western Australia</text></g><rect x="102" y="169" width="12" height="12" stroke="none" stroke-width="0" fill="#0099c6"></rect><g><text text-anchor="start" x="119" y="198.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Tasmania</text></g><rect x="102" y="188" width="12" height="12" stroke="none" stroke-width="0" fill="#dd4477"></rect></g><g><path d="M397,151L397,59A92,92,0,0,1,476.7580145631219,196.85476107176694L397,151" stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text text-anchor="start" x="432.96457648182275" y="124.26723832752924" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">33.3%</text></g><g><path d="M397,151L377.9369494191102,60.99666615868924A92,92,0,0,1,397,59L397,151" stroke="#ffffff" stroke-width="1" fill="#dd4477"></path></g><g><path d="M397,151L343.1731976105827,76.38984422660266A92,92,0,0,1,377.9369494191102,60.99666615868924L397,151" stroke="#ffffff" stroke-width="1" fill="#0099c6"></path></g><g><path d="M397,151L317.33735980326907,104.97974623183623A92,92,0,0,1,343.1731976105827,76.38984422660266L397,151" stroke="#ffffff" stroke-width="1" fill="#990099"></path></g><g><path d="M397,151L305.7866276097394,163.00502799645415A92,92,0,0,1,317.3373598032691,104.97974623183617L397,151" stroke="#ffffff" stroke-width="1" fill="#109618"></path><text text-anchor="start" x="319.05862340506695" y="143.1683108254711" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">10.4%</text></g><g><path d="M397,151L376.04599420274644,240.58197162961233A92,92,0,0,1,305.7866276097394,163.00502799645412L397,151" stroke="#ffffff" stroke-width="1" fill="#ff9900"></path><text text-anchor="start" x="333.0508632843932" y="197.26774296062408" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">19.3%</text></g><g><path d="M397,151L476.7580145631219,196.85476107176694A92,92,0,0,1,376.0459942027464,240.5819716296123L397,151" stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text text-anchor="start" x="405.92525006337104" y="216.06233922673005" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">20.4%</text></g></g><g></g></svg></div></div>
							
							<h3 class="clearfix">By month</h3>
							<ul><li>January: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:01">13,625 records</a></li><li>February: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:02">10,599 records</a></li><li>March: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:03">11,476 records</a></li><li>April: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:04">12,010 records</a></li><li>May: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:05">9,828 records</a></li><li>June: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:06">9,669 records</a></li><li>July: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:07">11,574 records</a></li><li>August: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:08">12,872 records</a></li><li>September: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:09">13,994 records</a></li><li>October: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:10">15,301 records</a></li><li>November: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:11">13,761 records</a></li><li>December: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=month:12">12,508 records</a></li></ul>
							<div id="month_chart_div"><div id="chartArea" style="margin:0 0 12px 0;overflow:hidden;"><svg id="chart" width="630" height="300" style="margin-top:-50px;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_0"><rect x="102" y="58" width="426" height="185"></rect></clipPath></defs><g><rect x="0" y="0" width="630" height="300" stroke="none" stroke-width="0" fill="#fffef7"></rect><g><rect x="102" y="58" width="426" height="185" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="102" y="58" width="1" height="185" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="208" y="58" width="1" height="185" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="315" y="58" width="1" height="185" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="421" y="58" width="1" height="185" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="527" y="58" width="1" height="185" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g clip-path="url(#_ABSTRACT_RENDERER_ID_0)"><g><rect x="103" y="61" width="298" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="77" width="137" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="92" width="184" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="107" width="212" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="123" width="96" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="138" width="88" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="153" width="189" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="169" width="258" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="184" width="317" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="199" width="387" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="215" width="305" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="103" y="230" width="238" height="9" stroke="none" stroke-width="0" fill="#3366cc"></rect></g><g><rect x="102" y="58" width="1" height="185" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="315" y="285.2" font-family="Arial" font-size="12" font-style="italic" stroke="none" stroke-width="0" fill="#222222">Count</text></g><g><text text-anchor="middle" x="102.5" y="260.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">8,000</text></g><g><text text-anchor="middle" x="208.75" y="260.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">10,000</text></g><g><text text-anchor="middle" x="315" y="260.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">12,000</text></g><g><text text-anchor="middle" x="421.25" y="260.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">14,000</text></g><g><text text-anchor="middle" x="527.5" y="260.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">16,000</text></g><g><text text-anchor="middle" x="19.866666666666667" y="150.5" font-family="Arial" font-size="12" font-style="italic" transform="rotate(-90 19.866666666666667 150.5)" stroke="none" stroke-width="0" fill="#222222">Month</text></g><g><text text-anchor="end" x="92.33333333333334" y="70.36666666666667" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">January</text></g><g><text text-anchor="end" x="92.33333333333334" y="85.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">February</text></g><g><text text-anchor="end" x="92.33333333333334" y="101.03333333333335" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">March</text></g><g><text text-anchor="end" x="92.33333333333334" y="116.36666666666667" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">April</text></g><g><text text-anchor="end" x="92.33333333333334" y="131.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">May</text></g><g><text text-anchor="end" x="92.33333333333334" y="147.03333333333333" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">June</text></g><g><text text-anchor="end" x="92.33333333333334" y="162.36666666666667" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">July</text></g><g><text text-anchor="end" x="92.33333333333334" y="177.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">August</text></g><g><text text-anchor="end" x="92.33333333333334" y="193.03333333333333" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">September</text></g><g><text text-anchor="end" x="92.33333333333334" y="208.36666666666667" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">October</text></g><g><text text-anchor="end" x="92.33333333333334" y="223.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">November</text></g><g><text text-anchor="end" x="92.33333333333334" y="239.03333333333333" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">December</text></g></g></g></g><g></g></svg></div></div>
							
							<h3 class="clearfix">By decade</h3>
							<ul style="float:left;"><li>before 1850: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[* TO 1850-01-01T12:00:00Z]">1 records</a></li><li>1860-1870: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1860-01-01T12:00:00Z TO 1870-01-01T12:00:00Z]">4 records</a></li><li>1870-1880: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1870-01-01T12:00:00Z TO 1880-01-01T12:00:00Z]">2 records</a></li><li>1880-1890: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1880-01-01T12:00:00Z TO 1890-01-01T12:00:00Z]">3 records</a></li><li>1890-1900: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1890-01-01T12:00:00Z TO 1900-01-01T12:00:00Z]">47 records</a></li><li>1900-1910: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1900-01-01T12:00:00Z TO 1910-01-01T12:00:00Z]">34 records</a></li><li>1910-1920: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1910-01-01T12:00:00Z TO 1920-01-01T12:00:00Z]">23 records</a></li><li>1920-1930: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1920-01-01T12:00:00Z TO 1930-01-01T12:00:00Z]">21 records</a></li><li>1930-1940: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1930-01-01T12:00:00Z TO 1940-01-01T12:00:00Z]">47 records</a></li><li>1940-1950: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1940-01-01T12:00:00Z TO 1950-01-01T12:00:00Z]">66 records</a></li><li>1950-1960: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1950-01-01T12:00:00Z TO 1960-01-01T12:00:00Z]">724 records</a></li><li>1960-1970: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1960-01-01T12:00:00Z TO 1970-01-01T12:00:00Z]">311 records</a></li><li>1970-1980: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1970-01-01T12:00:00Z TO 1980-01-01T12:00:00Z]">1,602 records</a></li><li>1980-1990: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1980-01-01T12:00:00Z TO 1990-01-01T12:00:00Z]">11,007 records</a></li><li>1990-2000: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[1990-01-01T12:00:00Z TO 2000-01-01T12:00:00Z]">48,160 records</a></li><li>2000-2010: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[2000-01-01T12:00:00Z TO 2010-01-01T12:00:00Z]">82,646 records</a></li><li>2010-2020: <a href="http://biocache.ala.org.au/occurrences/taxa/urn:lsid:biodiversity.org.au:afd.taxon:5b72fb29-0318-43f8-bc0a-58b879b17601?fq=occurrence_year:[2010-01-01T12:00:00Z TO 2020-01-01T12:00:00Z]">2,724 records</a></li></ul>
							<div id="occurrence_year_chart_div" style="width:400px; height:200px; overflow:hidden; float:right;"><div id="chartArea" style="margin:-50px 0 0 -90px;"><svg id="chart" width="630" height="300"><defs id="defs"></defs><g><rect x="0" y="0" width="630" height="300" stroke="none" stroke-width="0" fill="#fffef7"></rect><g><g><text text-anchor="start" x="119" y="68.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">1950-1960</text></g><rect x="102" y="58" width="12" height="12" stroke="none" stroke-width="0" fill="#994499"></rect><g><text text-anchor="start" x="119" y="87.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">1960-1970</text></g><rect x="102" y="77" width="12" height="12" stroke="none" stroke-width="0" fill="#22aa99"></rect><g><text text-anchor="start" x="119" y="106.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">1970-1980</text></g><rect x="102" y="96" width="12" height="12" stroke="none" stroke-width="0" fill="#aaaa11"></rect><g><text text-anchor="start" x="119" y="125.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">1980-1990</text></g><rect x="102" y="115" width="12" height="12" stroke="none" stroke-width="0" fill="#6633cc"></rect><g><text text-anchor="start" x="119" y="144.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">1990-2000</text></g><rect x="102" y="134" width="12" height="12" stroke="none" stroke-width="0" fill="#e67300"></rect><g><text text-anchor="start" x="119" y="163.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2000-2010</text></g><rect x="102" y="153" width="12" height="12" stroke="none" stroke-width="0" fill="#8b0707"></rect><g><text text-anchor="start" x="119" y="182.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2010-2020</text></g><rect x="102" y="172" width="12" height="12" stroke="none" stroke-width="0" fill="#651067"></rect><g><text text-anchor="start" x="119" y="201.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Other</text></g><rect x="102" y="191" width="12" height="12" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><path d="M397,151L397,59A92,92,0,0,1,399.83840942961905,59.04379612059962L397,151" stroke="#ffffff" stroke-width="1" fill="#994499"></path></g><g><path d="M397,151L399.83840942961905,59.04379612059962A92,92,0,0,1,401.05699890214066,59.089495921804286L397,151" stroke="#ffffff" stroke-width="1" fill="#22aa99"></path></g><g><path d="M397,151L401.05699890214066,59.089495921804286A92,92,0,0,1,407.31812635746616,59.58043826143465L397,151" stroke="#ffffff" stroke-width="1" fill="#aaaa11"></path></g><g><path d="M397,151L407.31812635746616,59.58043826143464A92,92,0,0,1,447.5345614837858,74.12179700564357L397,151" stroke="#ffffff" stroke-width="1" fill="#6633cc"></path></g><g><path d="M397,151L447.5345614837858,74.12179700564357A92,92,0,0,1,441.709920441727,231.40536682395305L397,151" stroke="#ffffff" stroke-width="1" fill="#e67300"></path><text text-anchor="start" x="441.5684223986812" y="157.49856354949742" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">32.7%</text></g><g><path d="M397,151L396.0275909523224,59.00513916177712A92,92,0,0,1,397,59L397,151" stroke="#ffffff" stroke-width="1" fill="#cccccc"></path></g><g><path d="M397,151L385.3776962093995,59.73707184952373A92,92,0,0,1,396.0275909523224,59.00513916177712L397,151" stroke="#ffffff" stroke-width="1" fill="#651067"></path></g><g><path d="M397,151L441.709920441727,231.40536682395305A92,92,0,1,1,385.3776962093994,59.737071849523744L397,151" stroke="#ffffff" stroke-width="1" fill="#8b0707"></path><text text-anchor="start" x="321.0644941142311" y="174.37536386772499" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">56.1%</text></g></g><g></g></svg></div></div>
						</div>
					</section>
					<section class="recordMapOtherSource">
						<h2>Record maps from other sources</h2>
						<a href="http://www.birdsinbackyards.net/species/Dacelo-novaeguineae">
							<img src="http://bie.ala.org.au/repo/1008/165/1656502/raw.gif" alt="3rd party distribution map"/>
						</a>
						<br/>
						<cite>Source:
							<a href="http://www.birdsinbackyards.net/species/Dacelo-novaeguineae" target="blank">Birds in Backyards</a>
						</cite>
					</section>
				</section>
				<section id="literature">
                    <h2>Name references in literature</h2>
                    <table class="borders propertyTable">
						<thead>
							<tr>
								<th>Scientific&nbsp;Name</th>
								<th>Reference</th>
								<th>Volume</th>
								<th>Author</th>
								<th>Year</th>
								<th>Source</th>
							</tr>
						</thead>
						<tbody>
							<tr class="earliestReference">
								<td>Dacelo novaeguineae</td>
								<td>Novitates Zoologicae.
									<br><span class="earliestReferenceLabel">(Earliest reference within BHL)</span>
								</td>
								<td>v. 27 (1920)</td>
								<td></td>
								<td>1920</td>
								<td><a href="http://bhl.ala.org.au/page/3243106" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">The odyssey of an animal collector /  Introd. by G. M. Vevers.</span>
								</td>
								<td>
									<span class="volume"></span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1954</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/11599297" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Proceedings of the United States National Museum.</span>
								</td>
								<td>
									<span class="volume">v. 104 1957</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1957</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/15385780" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Proceedings of the United States National Museum.</span>
								</td>
								<td>
									<span class="volume">v. 100 1954</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1878</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/15673891" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Postilla.</span>
								</td>
								<td>
									<span class="volume">no.118 (1968)</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1968</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/10688225" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Check-list and bibliography on the occurrence of insects in birds' nests.</span>
								</td>
								<td>
									<span class="volume"></span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1959</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/6268503" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Bulletin of the Peabody Museum of Natural History.</span>
								</td>
								<td>
									<span class="volume">no.39 (1972)</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1972</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/10590403" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Bulletin of the Museum of Comparative Zoology at Harvard College.</span>
								</td>
								<td>
									<span class="volume">v.123 (1960-1961)</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year">1960</span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/2809017" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Bulletin of the British Museum (Natural History).</span>
								</td>
								<td>
									<span class="volume">54</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year"></span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/2292863" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
							<tr>
								<td>Dacelo novaeguineae</td>
								<td>
									<span class="title">Bulletin of the British Museum (Natural History).</span>
								</td>
								<td>
									<span class="volume">47</span><br>
								</td>
								<td>
									<span class="authorship"></span>
								</td>
								<td>
									<span class="year"></span>
								</td>
								<td><a href="http://bhl.ala.org.au/page/2281851" title="view original publication" target="_blank">Biodiversity Heritage Library</a></td>
							</tr>
						
						</tbody>
					</table>
				</section>
			</div>
		</section>
	</div><!--col-wide-->
</div><!--inner-->
	
<?php get_footer(); ?>