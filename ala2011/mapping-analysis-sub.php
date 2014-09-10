<?php
/**
 * Template Name: mapping-analysis
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
 get_header();?>
<header id="page-header">
	<div class="inner">
<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
		<h1><?php the_title();?></h1>
	</div><!--inner-->
</header> 
<div class="inner">
	<div class="clearfix">
		<form action="" method="get" class="sm-search">
			<label for="q">Search layers:</label>
			<input type="text" id="q" name="q" value="" placeholder="Search layers" />
			<button type="submit" />Search</button>
		</form>
	</div>        
                        
	<ul>
		<li>Click on layer name to link to the metadata summary and links to full metadata record.</li>
		<li>Download as <a class="button" href="http://spatial.ala.org.au/layers.csv">CSV</a> <a class="button" href="http://spatial.ala.org.au/layers.json">JSON</a></li>
		<!--  | <a href="http://spatial.ala.org.au/layers.xml">XML</a> -->
		<!--<li><a href="http://spatial.ala.org.au/layers.csv">Download as CSV</a></li>-->
	</ul>
	<table class="table-borders">
		<thead>
			<tr>
				<th>Classification 1</th>
				<th>Classification 2</th>
				<th>Display name</th>
				<th>Short name</th>
				<th>Description</th>
				<th>Type</th>
				<th>Metadata contact organization</th>
				<th>Keywords</th>
				<th>Preview</th>
				<!-- <th>Reference date</th> -->
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/aspas_asmas_aat">Antarctic Protected Areas</a></td>
					<td class="wrapword">aspas_asmas_aat</td>
					<td>This record describes GIS polygon data (shapefile) representing the boundaries of Antarctic Specially Protected Areas (ASPAs) and Antarctic Specially Managed Areas (ASMAs) in the Australian Antarctic Territory managed by the Australian Antarctic Division. The dataset also includes a spreadsheet with the planimetric areas of these ASPAs and ASMAs.</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td></td>
					<td>reserve, park, conservation, AAT</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:aspas_asmas_aat.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:aspas_asmas_aat&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:aspas_asmas_aat">KML</a>-->
					</td>
					<!-- <td>2011</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/east_afa_final">Areas for Further Assessment within the East Marine Region</a></td>
					<td class="wrapword">east_afa_final</td>
					<td>East Areas for Further Assessment: Batemans, Hunter, Clarence, Tweed, Fraser, Tasmantid, Norfolk, plus the Coral Sea Conservation Zone</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>reserve, coral, conservation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:east_afa_final.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:east_afa_final&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:east_afa_final">KML</a>-->
					</td>
					<!-- <td>2010-02-26</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/australian_coral_ecoregions">Australian Coral Ecoregions</a></td>
					<td class="wrapword">australian_coral_ecoregions</td>
					<td>Australian Coral Ecoregions</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>Coral Reef Research - J.E.N. Veron</td>
					<td>coral</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:australian_coral_ecoregions.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:australian_coral_ecoregions&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:australian_coral_ecoregions">KML</a>-->
					</td>
					<!-- <td>2011-01-20</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/capad08_ext">Collaborative Australian Protected Areas Database</a></td>
					<td class="wrapword">capad08_ext</td>
					<td>Collaborative Australian Protected Areas Database - CAPAD 2008</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>IUCN, reserve, park, conservation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:capad08_ext.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:capad08_ext&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:capad08_ext">KML</a>-->
					</td>
					<!-- <td>2008-06-30</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/diwa_type_criteria">Directory of Important Wetlands</a></td>
					<td class="wrapword">diwa_type_criteria</td>
					<td>Directory of Important Wetlands Spatial Database including Wetlands Type and Criteria</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>reserve, water, bird</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:diwa_type_criteria.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:diwa_type_criteria&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:diwa_type_criteria">KML</a>-->
					</td>
					<!-- <td>2008-10-15</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/nrm_regions_2010">NRM Regions</a></td>
					<td class="wrapword">nrm_regions_2010</td>
					<td>National Resource Management (NRM) Regions</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>adminisration, government, landcare, heritage, local</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:nrm_regions_2010.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:nrm_regions_2010&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:nrm_regions_2010">KML</a>-->
					</td>
					<!-- <td>2010-11-11</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Biodiversity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ramsar">RAMSAR wetland regions</a></td>
					<td class="wrapword">ramsar</td>
					<td>RAMSAR wetland regions</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>reserve, water, bird</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ramsar.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ramsar&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ramsar">KML</a>-->
					</td>
					<!-- <td>2010-11-26</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/fal_dom_ha_01">Fallow practice - dominant (area)</a></td>
					<td class="wrapword">fal_dom_ha_01</td>
					<td>Dominant fallow practice for cereal farmers, based on area in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, SLA, cereal, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:fal_dom_ha_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:fal_dom_ha_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:fal_dom_ha_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/fal_dom_no_01">Fallow practice - dominant (number)</a></td>
					<td class="wrapword">fal_dom_no_01</td>
					<td>Dominant fallow practice for cereal farmers, based on number of respondents in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, SLA, cereal, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:fal_dom_no_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:fal_dom_no_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:fal_dom_no_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/irr_dom_no_01">Irrigation practice - dominant</a></td>
					<td class="wrapword">irr_dom_no_01</td>
					<td>Dominant irrigation practices for cereal farmers, based on number of respondents in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, SLA, water, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:irr_dom_no_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:irr_dom_no_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:irr_dom_no_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/st_dom_ha_01">Stubble practice - dominant (area)</a></td>
					<td class="wrapword">st_dom_ha_01</td>
					<td>Dominant stubble practice for cereal farmers, based on area in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, cereal, SLA, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:st_dom_ha_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:st_dom_ha_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:st_dom_ha_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/til_dom_ha_01">Tillage practice - dominant (area)</a></td>
					<td class="wrapword">til_dom_ha_01</td>
					<td>Dominant tillage practice for cereal farmers, based on area in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, cereal, SLA, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:til_dom_ha_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:til_dom_ha_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:til_dom_ha_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/til_dom_no_01">Tillage practice - dominant (number)</a></td>
					<td class="wrapword">til_dom_no_01</td>
					<td>Dominant tillage practice for cereal farmers, based on number of respondents in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, cereal, SLA, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:til_dom_no_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:til_dom_no_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:til_dom_no_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Farming</td>
					<td><a href="http://spatial.ala.org.au/layers/more/st_dom_no_01">stubble practice - dominant (number)</a></td>
					<td class="wrapword">st_dom_no_01</td>
					<td>Dominant stubble practice for cereal farmers, based on number of respondents in 2000-2001 by SLA (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>farm, cereal, SLA, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:st_dom_no_01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:st_dom_no_01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:st_dom_no_01">KML</a>-->
					</td>
					<!-- <td>2000-2001</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_analysis_boundary_v01">Analysis Boundary v01</a></td>
					<td class="wrapword">ger_analysis_boundary_v01</td>
					<td>ger analysis boundary</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, IBRA, ecoregion, bioregion</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_analysis_boundary_v01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_analysis_boundary_v01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_analysis_boundary_v01">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_border_ranges">Border Ranges</a></td>
					<td class="wrapword">ger_border_ranges</td>
					<td>ger border ranges</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, administrate, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_border_ranges.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_border_ranges&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_border_ranges">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_geri_boundary_v102_australia">GERI Boundary v102</a></td>
					<td class="wrapword">ger_geri_boundary_v102_australia</td>
					<td>ger geri boundary</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, manage, adminstrate, region, border, coast, hunter, Kosciuszko, slope, summit</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_geri_boundary_v102_australia.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_geri_boundary_v102_australia&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_geri_boundary_v102_australia">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_hunter">Hunter</a></td>
					<td class="wrapword">ger_hunter</td>
					<td>ger hunter</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, administrative, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_hunter.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_hunter&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_hunter">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_hunter_analysis_mask">Hunter Analysis Mask</a></td>
					<td class="wrapword">ger_hunter_analysis_mask</td>
					<td>ger hunter analysis mask</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, administrative, manage, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_hunter_analysis_mask.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_hunter_analysis_mask&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_hunter_analysis_mask">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_hunter_areas_of_interest">Hunter Areas Of Interest</a></td>
					<td class="wrapword">ger_hunter_areas_of_interest</td>
					<td>ger hunter areas of interest</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, administrative, manage, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_hunter_areas_of_interest.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_hunter_areas_of_interest&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_hunter_areas_of_interest">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_k2c_management_regions_oct2009">K2C Management Regions</a></td>
					<td class="wrapword">ger_k2c_management_regions_oct2009</td>
					<td>ger k2c management regions</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, manage, adminstrate, region, border, coast, hunter, Kosciuszko, slope, summit, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_k2c_management_regions_oct2009.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_k2c_management_regions_oct2009&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_k2c_management_regions_oct2009">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_kosciuszko_to_coast">Kosciuszko To Coast</a></td>
					<td class="wrapword">ger_kosciuszko_to_coast</td>
					<td>ger kosciuszko to coast</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, region, administrate, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_kosciuszko_to_coast.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_kosciuszko_to_coast&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_kosciuszko_to_coast">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_s2s_priority_area_billabong_creek_v01">S2S Priority Area Billabong Creek v01</a></td>
					<td class="wrapword">ger_s2s_priority_area_billabong_creek_v01</td>
					<td>ger priority area billabong creek</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, slope, summit, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_s2s_priority_area_billabong_creek_v01.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_s2s_priority_area_billabong_creek_v01&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_s2s_priority_area_billabong_creek_v01">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_s2s_priority_areas_v05">S2S Priority Areas v05</a></td>
					<td class="wrapword">ger_s2s_priority_areas_v05</td>
					<td>ger s2s priority areas</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, slope, summit, manage, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_s2s_priority_areas_v05.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_s2s_priority_areas_v05&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_s2s_priority_areas_v05">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_slopes_to_summit">Slopes to summit</a></td>
					<td class="wrapword">ger_slopes_to_summit</td>
					<td>ger slopes to summit</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, slope, summit, manage, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_slopes_to_summit.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_slopes_to_summit&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_slopes_to_summit">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td>Great Eastern Ranges</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ger_upper_hunter_focus_area_v2">Upper Hunter Focus Area v2</a></td>
					<td class="wrapword">ger_upper_hunter_focus_area_v2</td>
					<td>ger upper hunter focus area</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GER</td>
					<td>GER, region</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ger_upper_hunter_focus_area_v2.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ger_upper_hunter_focus_area_v2&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ger_upper_hunter_focus_area_v2">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/landuse">Land use</a></td>
					<td class="wrapword">landuse</td>
					<td>Catchment scale land use (ALUM secondary class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>landuse, manage</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:landuse.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:landuse&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:landuse">KML</a>-->
					</td>
					<!-- <td>1997-2009</td> -->
				</tr>
			
				<tr>
					<td>Area Management</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/nrm_exp">Natural resource management expenditure</a></td>
					<td class="wrapword">nrm_exp</td>
					<td>Average Annual NRM Expenditure ($)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>ABARE</td>
					<td>region, funds</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:nrm_exp.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:nrm_exp&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:nrm_exp">KML</a>-->
					</td>
					<!-- <td>2001-06</td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td>Region</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ibra_merged">IBRA Regions</a></td>
					<td class="wrapword">ibra_merged</td>
					<td>Interim Biogeographic Regionalisation of Australia</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>bioregion, ecoregion, system</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ibra_merged.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ibra_merged&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ibra_merged">KML</a>-->
					</td>
					<!-- <td>2005</td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td>Region</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ibra_sub_merged">IBRA Sub Regions</a></td>
					<td class="wrapword">ibra_sub_merged</td>
					<td>IBRA sub regions</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>IBRA Sub</td>
					<td>bioregion, ecoregion, system</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ibra_sub_merged.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ibra_sub_merged&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ibra_sub_merged">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td>Region</td>
					<td><a href="http://spatial.ala.org.au/layers/more/imcra4_pb">IMCRA Regions</a></td>
					<td class="wrapword">imcra4_pb</td>
					<td>Integrated Marine and Coastal Regionalisation of Australia</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td>bioregion, ecoregion, system, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:imcra4_pb.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:imcra4_pb&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:imcra4_pb">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td>Status</td>
					<td><a href="http://spatial.ala.org.au/layers/more/migratry_sp">Migratory species (2008)</a></td>
					<td class="wrapword">migratry_sp</td>
					<td>Number of migratory species occurring in a 5km grid cell (frequency)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>ERIN</td>
					<td>threatened, bird</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:migratry_sp.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:migratry_sp&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:migratry_sp">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td>Status</td>
					<td><a href="http://spatial.ala.org.au/layers/more/threatnd_sp">Threatened species (2008)</a></td>
					<td class="wrapword">threatnd_sp</td>
					<td>Number of threatened species occurring in a 5km grid cell (frequency)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>ERIN</td>
					<td>endangered, vulnerable, critical</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:threatnd_sp.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:threatnd_sp&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:threatnd_sp">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/odensity">Occurrence Density</a></td>
					<td class="wrapword">odensity</td>
					<td>Occurrence Density</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>ALA-SPATIAL</td>
					<td>average, sample</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:odensity.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:odensity&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:odensity">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Biodiversity</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/srichness">Species Richness</a></td>
					<td class="wrapword">srichness</td>
					<td>Species Richness</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>ALA-SPATIAL</td>
					<td>diversity, occurrence, sample, average</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srichness.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srichness&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srichness">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Evaporation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/evapm">Evaporation - annual mean</a></td>
					<td class="wrapword">evapm</td>
					<td>Mean annual evaporation (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>water, temperature, precipitation, rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:evapm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:evapm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:evapm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Evaporation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/evap_mean">Evaporation - average</a></td>
					<td class="wrapword">evap_mean</td>
					<td>Mean annual evaporation (Ml /5km x 5km pixel)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>AWAP</td>
					<td>water, temperature, precipitation, rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:evap_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:evap_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:evap_mean">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Evaporation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/evapx">Evaporation - month max</a></td>
					<td class="wrapword">evapx</td>
					<td>Maximum month evaporation (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>water, temperature, precipitation, rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:evapx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:evapx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:evapx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Evaporation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/evapi">Evaporation - month min</a></td>
					<td class="wrapword">evapi</td>
					<td>Minimum month evaporation (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>water, temperature, precipitation, rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:evapi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:evapi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:evapi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Evaporation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/evap_cv">Evaporation - variability</a></td>
					<td class="wrapword">evap_cv</td>
					<td>Coefficient of variation of annual evaporation (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>water, temperature, precipitation, rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:evap_cv.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:evap_cv&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:evap_cv">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Growth index</td>
					<td><a href="http://spatial.ala.org.au/layers/more/megagi">Growth index C3 macrotherm plants - annual mean</a></td>
					<td class="wrapword">megagi</td>
					<td>Mean annual growth index C3 macrotherm plants</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>water, temperature, precipitation, rain, capacity</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:megagi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:megagi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:megagi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Growth index</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mesogi">Growth index C3 mesotherm plants - annual mean</a></td>
					<td class="wrapword">mesogi</td>
					<td>Mean annual growth index C3 mesotherm plants</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>water, temperature, precipitation, rain, capacity</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mesogi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mesogi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mesogi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Growth index</td>
					<td><a href="http://spatial.ala.org.au/layers/more/c4gi">Growth index C4 megatherm plants - annual mean</a></td>
					<td class="wrapword">c4gi</td>
					<td>Mean annual growth index C4 megatherm plants</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>water, temperature, precipitation, rain, capacity</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:c4gi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:c4gi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:c4gi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rh2mean">Humidity - annual mean relative</a></td>
					<td class="wrapword">rh2mean</td>
					<td>Mean annual relative humidity (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rh2mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rh2mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rh2mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rhu215_m">Humidity - annual mean relative 3pm </a></td>
					<td class="wrapword">rhu215_m</td>
					<td>Mean annual relative humidity at 3pm (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rhu215_m.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rhu215_m&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rhu215_m">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rh2max">Humidity - month max relative</a></td>
					<td class="wrapword">rh2max</td>
					<td>Maximum month relative humidity (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rh2max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rh2max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rh2max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rhu215_x">Humidity - month max relative 3pm </a></td>
					<td class="wrapword">rhu215_x</td>
					<td>Maximum month relative humidity at 3pm (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rhu215_x.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rhu215_x&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rhu215_x">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rh2min">Humidity - month min relative</a></td>
					<td class="wrapword">rh2min</td>
					<td>Minimum month relative humidity (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rh2min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rh2min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rh2min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rhu215_i">Humidity - month min relative 3pm </a></td>
					<td class="wrapword">rhu215_i</td>
					<td>Minimum month relative humidity at 3pm (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rhu215_i.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rhu215_i&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rhu215_i">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/vpd2mean">Vapour pressure deficit - annual mean</a></td>
					<td class="wrapword">vpd2mean</td>
					<td>Mean annual vapour pressure deficit (KPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vpd2mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vpd2mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vpd2mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/vpd29_m">Vapour pressure deficit - annual mean 9am</a></td>
					<td class="wrapword">vpd29_m</td>
					<td>Mean annual vapour pressure deficit at 9am (KPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vpd29_m.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vpd29_m&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vpd29_m">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/vpd2max">Vapour pressure deficit - month max</a></td>
					<td class="wrapword">vpd2max</td>
					<td>Maximum month vapour pressure deficit (KPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vpd2max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vpd2max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vpd2max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/vpd29_x">Vapour pressure deficit - month max 9am</a></td>
					<td class="wrapword">vpd29_x</td>
					<td>Maximum month vapour pressure deficit at 9am (KPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vpd29_x.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vpd29_x&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vpd29_x">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/vpd2min">Vapour pressure deficit - month min</a></td>
					<td class="wrapword">vpd2min</td>
					<td>Minimum month vapour pressure deficit (KPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vpd2min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vpd2min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vpd2min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Humidity</td>
					<td><a href="http://spatial.ala.org.au/layers/more/vpd29_i">Vapour pressure deficit - month min 9am</a></td>
					<td class="wrapword">vpd29_i</td>
					<td>Minimum month vapour pressure deficit at 9am (KPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>temperature, moisture</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vpd29_i.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vpd29_i&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vpd29_i">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/arid_mean">Aridity index - annual mean</a></td>
					<td class="wrapword">arid_mean</td>
					<td>Mean annual aridity index </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>evaporation, rain, precipitation, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:arid_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:arid_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:arid_mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/arid_max">Aridity index - month max</a></td>
					<td class="wrapword">arid_max</td>
					<td>Maximum month aridity index </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>evaporation, rain, precipitation, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:arid_max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:arid_max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:arid_max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/arid_min">Aridity index - month min</a></td>
					<td class="wrapword">arid_min</td>
					<td>Minimum month aridity index </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>evaporation, rain, precipitation, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:arid_min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:arid_min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:arid_min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rain_ann">Precipitation - annual</a></td>
					<td class="wrapword">rain_ann</td>
					<td>Mean annual rainfall (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>ANU</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rain_ann.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rain_ann&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rain_ann">KML</a>-->
					</td>
					<!-- <td>1999</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio12">Precipitation - annual (Bio12)</a></td>
					<td class="wrapword">bioclim_bio12</td>
					<td>Precipitation - annual (bio12)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio12.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio12&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio12">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/slrain0">Precipitation - annual (log) seasonality index</a></td>
					<td class="wrapword">slrain0</td>
					<td>annual (log) rainfall seasonality index</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:slrain0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:slrain0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:slrain0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rainm">Precipitation - annual mean</a></td>
					<td class="wrapword">rainm</td>
					<td>Mean annual rainfall (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rainm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rainm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rainm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/srain0">Precipitation - annual seasonality</a></td>
					<td class="wrapword">srain0</td>
					<td>annual rainfall seasonality index</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srain0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srain0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srain0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/srain0mp">Precipitation - annual seasonality ratio</a></td>
					<td class="wrapword">srain0mp</td>
					<td>annual rainfall seasonality ratio</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srain0mp.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srain0mp&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srain0mp">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rain_aut">Precipitation - autumn</a></td>
					<td class="wrapword">rain_aut</td>
					<td>Average autumn (mar, apr, may) rainfall (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>BRS</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rain_aut.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rain_aut&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rain_aut">KML</a>-->
					</td>
					<!-- <td>2009</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rel_aut">Precipitation - autumn reliability</a></td>
					<td class="wrapword">rel_aut</td>
					<td>Rainfall reliability for autumn season (proportion of years where 50% of mean seasonal rainfall has been exceeded)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>BRS</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rel_aut.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rel_aut&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rel_aut">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio19">Precipitation - coldest quarter (Bio19)</a></td>
					<td class="wrapword">bioclim_bio19</td>
					<td>Precipitation - coldest quarter (Bio19)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio19.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio19&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio19">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/raini">Precipitation - driest month</a></td>
					<td class="wrapword">raini</td>
					<td>Precipitation of the driest month (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:raini.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:raini&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:raini">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio14">Precipitation - driest period (Bio14)</a></td>
					<td class="wrapword">bioclim_bio14</td>
					<td>Precipitation - driest period (Bio14)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio14.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio14&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio14">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio17">Precipitation - driest quarter  (Bio17)</a></td>
					<td class="wrapword">bioclim_bio17</td>
					<td>Precipitation - driest quarter  (Bio17)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio17.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio17&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio17">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/srain2mp">Precipitation - equinox seasonality ratio</a></td>
					<td class="wrapword">srain2mp</td>
					<td>Equinox rainfall seasonality ratio</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srain2mp.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srain2mp&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srain2mp">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rprecmax">Precipitation - max difference between successive months</a></td>
					<td class="wrapword">rprecmax</td>
					<td>Greatest rainfall difference between successive months (mm/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rprecmax.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rprecmax&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rprecmax">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rprecmin">Precipitation - min difference between successive months</a></td>
					<td class="wrapword">rprecmin</td>
					<td>Least rainfall difference between successive months (mm/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rprecmin.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rprecmin&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rprecmin">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio15">Precipitation - seasonality (Bio15)</a></td>
					<td class="wrapword">bioclim_bio15</td>
					<td>Precipitation - seasonality ( (Bio15)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio15.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio15&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio15">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/srain1mp">Precipitation - solstice seasonality ratio</a></td>
					<td class="wrapword">srain1mp</td>
					<td>Solstice rainfall seasonality ratio</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srain1mp.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srain1mp&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srain1mp">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rain_spr">Precipitation - spring</a></td>
					<td class="wrapword">rain_spr</td>
					<td>Average spring (sep, oct, nov) rainfall (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rain_spr.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rain_spr&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rain_spr">KML</a>-->
					</td>
					<!-- <td>2009</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/slrain2">Precipitation - spring or autumn (log) season</a></td>
					<td class="wrapword">slrain2</td>
					<td>Spring or autumn (log) rainfall season</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:slrain2.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:slrain2&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:slrain2">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/srain2">Precipitation - spring or autumn season</a></td>
					<td class="wrapword">srain2</td>
					<td>Spring or autumn rainfall season</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srain2.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srain2&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srain2">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rel_spr">Precipitation - spring reliability</a></td>
					<td class="wrapword">rel_spr</td>
					<td>Rainfall reliability for spring season (proportion of years where 50% of mean seasonal rainfall has been exceeded)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rel_spr.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rel_spr&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rel_spr">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rain_sum">Precipitation - summer</a></td>
					<td class="wrapword">rain_sum</td>
					<td>Average summer (dec, jan, feb) rainfall (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rain_sum.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rain_sum&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rain_sum">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/slrain1">Precipitation - summer or winter (log) season</a></td>
					<td class="wrapword">slrain1</td>
					<td>summer or winter (log) rainfall season</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:slrain1.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:slrain1&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:slrain1">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/srain1">Precipitation - summer or winter season</a></td>
					<td class="wrapword">srain1</td>
					<td>summer or winter rainfall season</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:srain1.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:srain1&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:srain1">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rel_sum">Precipitation - summer reliability</a></td>
					<td class="wrapword">rel_sum</td>
					<td>Rainfall reliability for summer season (proportion of years where 50% of mean seasonal rainfall has been exceeded)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rel_sum.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rel_sum&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rel_sum">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio18">Precipitation - warmest quarter (Bio18)</a></td>
					<td class="wrapword">bioclim_bio18</td>
					<td>Precipitation - warmest quarter  (Bio18)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio18.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio18&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio18">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rainx">Precipitation - wettest month</a></td>
					<td class="wrapword">rainx</td>
					<td>Precipitation of the wettest month (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rainx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rainx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rainx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio13">Precipitation - wettest period (Bio13)</a></td>
					<td class="wrapword">bioclim_bio13</td>
					<td>Precipitation - wettest period (Bio13)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio13.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio13&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio13">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio16">Precipitation - wettest quarter (Bio16)</a></td>
					<td class="wrapword">bioclim_bio16</td>
					<td>Precipitation - wettest quarter (Bio16)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio16.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio16&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio16">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rain_win">Precipitation - winter</a></td>
					<td class="wrapword">rain_win</td>
					<td>Average winter (jun, jul, aug) rainfall (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>BRS</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rain_win.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rain_win&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rain_win">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rel_win">Precipitation - winter reliability</a></td>
					<td class="wrapword">rel_win</td>
					<td>Rainfall reliability for winter season (proportion of years where 50% of mean seasonal rainfall has been exceeded)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>BRS</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rel_win.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rel_win&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rel_win">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/adefm">Precipitation deficit - annual mean</a></td>
					<td class="wrapword">adefm</td>
					<td>Mean annual precipitation deficit (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:adefm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:adefm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:adefm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/adefi">Precipitation deficit - month max</a></td>
					<td class="wrapword">adefi</td>
					<td>Maximum month precipitation deficit (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:adefi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:adefi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:adefi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/adefx">Precipitation deficit - month min</a></td>
					<td class="wrapword">adefx</td>
					<td>Minimum month precipitation deficit (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:adefx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:adefx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:adefx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_12">WorldClim: Precipitation - annual</a></td>
					<td class="wrapword">worldclim_bio_12</td>
					<td>Annual Precipitation</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_12.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_12&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_12">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_19">WorldClim: Precipitation - coldest quarter</a></td>
					<td class="wrapword">worldclim_bio_19</td>
					<td>Precipitation of Coldest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_19.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_19&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_19">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_14">WorldClim: Precipitation - driest month</a></td>
					<td class="wrapword">worldclim_bio_14</td>
					<td>Precipitation of Driest Month</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_14.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_14&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_14">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_17">WorldClim: Precipitation - driest quarter</a></td>
					<td class="wrapword">worldclim_bio_17</td>
					<td>Precipitation of Driest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_17.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_17&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_17">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_15">WorldClim: Precipitation - seasonality</a></td>
					<td class="wrapword">worldclim_bio_15</td>
					<td>Precipitation Seasonality</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_15.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_15&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_15">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_18">WorldClim: Precipitation - warmest quarter</a></td>
					<td class="wrapword">worldclim_bio_18</td>
					<td>Precipitation of Warmest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_18.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_18&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_18">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_13">WorldClim: Precipitation - wettest month</a></td>
					<td class="wrapword">worldclim_bio_13</td>
					<td>Precipitation of Wettest Month</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_13.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_13&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_13">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Precipitation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_16">WorldClim: Precipitation - wettest quarter</a></td>
					<td class="wrapword">worldclim_bio_16</td>
					<td>Precipitation of Wettest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_16.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_16&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_16">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio20">Radiation - annual mean (Bio20)</a></td>
					<td class="wrapword">bioclim_bio20</td>
					<td>Radiation - annual mean (Bio20)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio20.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio20&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio20">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio27">Radiation - coldest quarter (Bio27)</a></td>
					<td class="wrapword">bioclim_bio27</td>
					<td>Radiation - coldest quarter (Bio27)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio27.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio27&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio27">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio25">Radiation - driest quarter (Bio25)</a></td>
					<td class="wrapword">bioclim_bio25</td>
					<td>Radiation - driest quarter (Bio25)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio25.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio25&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio25">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio21">Radiation - highest period (Bio21)</a></td>
					<td class="wrapword">bioclim_bio21</td>
					<td>Radiation - highest period (Bio21)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio21.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio21&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio21">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio22">Radiation - lowest period (Bio22)</a></td>
					<td class="wrapword">bioclim_bio22</td>
					<td>Radiation - lowest period (Bio22)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio22.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio22&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio22">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/radnx">Radiation - max month precipitation modified</a></td>
					<td class="wrapword">radnx</td>
					<td>Maximum month rainfall-modified solar radiation (MJ/m2/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:radnx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:radnx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:radnx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/radnm">Radiation - mean annual precipitation modified</a></td>
					<td class="wrapword">radnm</td>
					<td>Mean annual rainfall-modified solar radiation (MJ/m2/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:radnm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:radnm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:radnm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/radni">Radiation - min month precipitation modified</a></td>
					<td class="wrapword">radni</td>
					<td>Minimum month rainfall-modified solar radiation (MJ/m2/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:radni.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:radni&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:radni">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio23">Radiation - seasonality (Bio23)</a></td>
					<td class="wrapword">bioclim_bio23</td>
					<td>Radiation - seasonality (Bio23)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio23.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio23&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio23">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio26">Radiation - warmest quarter  (Bio26)</a></td>
					<td class="wrapword">bioclim_bio26</td>
					<td>Radiation - warmest quarter  (Bio26)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio26.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio26&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio26">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Solar radiation</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio24">Radiation - wettest quarter (Bio24)</a></td>
					<td class="wrapword">bioclim_bio24</td>
					<td>Radiation - wettest quarter (Bio24)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>solar, sun</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio24.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio24&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio24">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/maxtm">Temperature - annual max mean</a></td>
					<td class="wrapword">maxtm</td>
					<td>Mean annual maximum temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:maxtm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:maxtm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:maxtm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio1">Temperature - annual mean (Bio01)</a></td>
					<td class="wrapword">bioclim_bio1</td>
					<td>Temperature - annual mean (Bio01)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio1.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio1&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio1">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mintm">Temperature - annual min mean</a></td>
					<td class="wrapword">mintm</td>
					<td>Mean annual minimum temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mintm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mintm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mintm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/trnga">Temperature - annual range</a></td>
					<td class="wrapword">trnga</td>
					<td>Annual Range Temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:trnga.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:trnga&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:trnga">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio7">Temperature - annual range (Bio07)</a></td>
					<td class="wrapword">bioclim_bio7</td>
					<td>Temperature - annual range (Bio07)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio7.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio7&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio7">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/minti">Temperature - coldest month min</a></td>
					<td class="wrapword">minti</td>
					<td>Minimum temperature coldest month (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:minti.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:minti&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:minti">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio6">Temperature - coldest period min (Bio06)</a></td>
					<td class="wrapword">bioclim_bio6</td>
					<td>Temperature - coldest period min (Bio06)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio6.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio6&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio6">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio11">Temperature - coldest quarter mean (Bio11)</a></td>
					<td class="wrapword">bioclim_bio11</td>
					<td>Temperature - coldest quarter mean (Bio11)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio11.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio11&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio11">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/maxti">Temperature - coolest month max</a></td>
					<td class="wrapword">maxti</td>
					<td>Maximum temperature coolest month (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:maxti.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:maxti&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:maxti">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio2">Temperature - diurnal range mean (Bio02)</a></td>
					<td class="wrapword">bioclim_bio2</td>
					<td>Temperature - diurnal range mean (Bio02)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio2.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio2&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio2">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio9">Temperature - driest quarter mean (Bio09)</a></td>
					<td class="wrapword">bioclim_bio9</td>
					<td>Temperature - driest quarter mean (Bio09)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio9.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio9&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio9">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio3">Temperature - isothermality (Bio03)</a></td>
					<td class="wrapword">bioclim_bio3</td>
					<td>Temperature - isothermality (Bio03)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>day, daily, season, ratio</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio3.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio3&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio3">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/tmaxabsx">Temperature - max absolute mean max</a></td>
					<td class="wrapword">tmaxabsx</td>
					<td>Maximum month absolute mean maximum temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:tmaxabsx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:tmaxabsx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:tmaxabsx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rtxmax">Temperature - max difference in max</a></td>
					<td class="wrapword">rtxmax</td>
					<td>Maximum difference in maximum temperatures (°C/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rtxmax.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rtxmax&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rtxmax">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rtimax">Temperature - max difference in min</a></td>
					<td class="wrapword">rtimax</td>
					<td>Maximum difference in minimum temperatures (°C/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rtimax.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rtimax&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rtimax">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/trngx">Temperature - max month diurnal range</a></td>
					<td class="wrapword">trngx</td>
					<td>Maximum month diurnal temperature range (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:trngx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:trngx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:trngx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/tminabsm">Temperature - mean annual absolute mean min</a></td>
					<td class="wrapword">tminabsm</td>
					<td>Mean annual absolute mean minimum temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:tminabsm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:tminabsm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:tminabsm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/trngm">Temperature - mean annual diurnal range</a></td>
					<td class="wrapword">trngm</td>
					<td>Mean annual diurnal temperature range (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:trngm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:trngm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:trngm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/tminabsi">Temperature - min absolute mean min</a></td>
					<td class="wrapword">tminabsi</td>
					<td>Minimum month absolute mean minimum temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:tminabsi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:tminabsi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:tminabsi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rtxmin">Temperature - min difference in max</a></td>
					<td class="wrapword">rtxmin</td>
					<td>minimum difference in maximum temperatures (°C/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rtxmin.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rtxmin&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rtxmin">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/rtimin">Temperature - min difference in min</a></td>
					<td class="wrapword">rtimin</td>
					<td>Minimum difference in minimum temperatures (°C/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:rtimin.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:rtimin&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:rtimin">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/trngi">Temperature - min month diurnal range</a></td>
					<td class="wrapword">trngi</td>
					<td>Minimum month diurnal temperature range (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:trngi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:trngi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:trngi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/maxtx">Temperature - month hottest maximum</a></td>
					<td class="wrapword">maxtx</td>
					<td>Maximum temperature hottest month (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:maxtx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:maxtx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:maxtx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/tmaxabsm">Temperature - month mean absolute max</a></td>
					<td class="wrapword">tmaxabsm</td>
					<td>Mean annual absolute mean maximum temperature (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:tmaxabsm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:tmaxabsm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:tmaxabsm">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio4">Temperature - seasonality (Bio04)</a></td>
					<td class="wrapword">bioclim_bio4</td>
					<td>Temperature - seasonality (Bio04)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>variation, mean, ratio</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio4.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio4&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio4">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mintx">Temperature - warmest month min</a></td>
					<td class="wrapword">mintx</td>
					<td>Minimum temperature warmest month (°C)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mintx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mintx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mintx">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio5">Temperature - warmest period max (Bio05)</a></td>
					<td class="wrapword">bioclim_bio5</td>
					<td>Temperature - warmest period max (Bio05)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio5.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio5&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio5">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio10">Temperature - warmest quarter (Bio10)</a></td>
					<td class="wrapword">bioclim_bio10</td>
					<td>Temperature - warmest quarter (Bio10)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio10.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio10&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio10">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio8">Temperature - wettest quarter mean</a></td>
					<td class="wrapword">bioclim_bio8</td>
					<td>Temperature - wettest quarter mean</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio8.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio8&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio8">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_1">WorldClim: Temperature - annual mean</a></td>
					<td class="wrapword">worldclim_bio_1</td>
					<td>Annual Mean Temperature</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_1.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_1&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_1">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_7">WorldClim: Temperature - annual range</a></td>
					<td class="wrapword">worldclim_bio_7</td>
					<td>Temperature Annual Range</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_7.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_7&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_7">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_6">WorldClim: Temperature - coldest month min</a></td>
					<td class="wrapword">worldclim_bio_6</td>
					<td>Min Temperature of Coldest Month</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_6.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_6&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_6">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_11">WorldClim: Temperature - coldest quarter mean</a></td>
					<td class="wrapword">worldclim_bio_11</td>
					<td>Mean Temperature of Coldest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_11.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_11&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_11">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_2">WorldClim: Temperature - diurnal range mean</a></td>
					<td class="wrapword">worldclim_bio_2</td>
					<td>Mean Diurnal Range</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>day, daily, max, ratio</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_2.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_2&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_2">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_9">WorldClim: Temperature - driest quarter mean</a></td>
					<td class="wrapword">worldclim_bio_9</td>
					<td>Mean Temperature of Driest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>precipitation, rain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_9.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_9&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_9">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_3">WorldClim: Temperature - isothermality</a></td>
					<td class="wrapword">worldclim_bio_3</td>
					<td>Isothermality</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>diurnal, day, daily, season, ratio</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_3.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_3&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_3">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_4">WorldClim: Temperature - seasonality</a></td>
					<td class="wrapword">worldclim_bio_4</td>
					<td>Temperature Seasonality</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>range, mean, ratio</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_4.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_4&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_4">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_5">WorldClim: Temperature - warmest month max</a></td>
					<td class="wrapword">worldclim_bio_5</td>
					<td>Max Temperature of Warmest Month</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_5.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_5&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_5">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_10">WorldClim: Temperature - warmest quarter mean</a></td>
					<td class="wrapword">worldclim_bio_10</td>
					<td>Mean Temperature of Warmest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_10.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_10&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_10">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/worldclim_bio_8">WorldClim: Temperature - wettest quarter mean</a></td>
					<td class="wrapword">worldclim_bio_8</td>
					<td>Mean Temperature of Wettest Quarter</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>WorldClim</td>
					<td>rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:worldclim_bio_8.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:worldclim_bio_8&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:worldclim_bio_8">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windrm">Wind run - annual mean</a></td>
					<td class="wrapword">wind_windrm</td>
					<td>Wind run - annual mean (km/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>speed, distance</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windrm.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windrm&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windrm">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windrx">Wind run - month max</a></td>
					<td class="wrapword">wind_windrx</td>
					<td>Wind run - month max  (km/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>speed, distance</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windrx.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windrx&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windrx">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windri">Wind run - month min</a></td>
					<td class="wrapword">wind_windri</td>
					<td>Wind run - month min (km/day)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>speed, distance</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windri.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windri&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windri">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windsp15m">Wind speed - annual mean 3pm</a></td>
					<td class="wrapword">wind_windsp15m</td>
					<td>Wind speed - annual mean 3pm (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windsp15m.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windsp15m&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windsp15m">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windsp9m">Wind speed - annual mean 9am</a></td>
					<td class="wrapword">wind_windsp9m</td>
					<td>Wind speed - annual mean 9am (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windsp9m.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windsp9m&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windsp9m">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windspmean">Wind speed - annual mean 9am or 3pm</a></td>
					<td class="wrapword">wind_windspmean</td>
					<td>Wind speed - annual mean 9am or 3pm (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windspmean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windspmean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windspmean">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windsp15x">Wind speed - month max 3pm</a></td>
					<td class="wrapword">wind_windsp15x</td>
					<td>Wind speed - month max 3pm (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windsp15x.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windsp15x&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windsp15x">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windsp9x">Wind speed - month max 9am </a></td>
					<td class="wrapword">wind_windsp9x</td>
					<td>Wind speed - month max 9am (m/s) </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windsp9x.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windsp9x&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windsp9x">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windspmax">Wind speed - month max 9am or 3pm</a></td>
					<td class="wrapword">wind_windspmax</td>
					<td>Wind speed - month max 9am or 3pm (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windspmax.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windspmax&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windspmax">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windsp15i">Wind speed - month min 3pm</a></td>
					<td class="wrapword">wind_windsp15i</td>
					<td>Wind speed - month min 3pm (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windsp15i.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windsp15i&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windsp15i">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windsp9i">Wind speed - month min 9am</a></td>
					<td class="wrapword">wind_windsp9i</td>
					<td>Wind speed - month min 9am (m/s)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windsp9i.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windsp9i&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windsp9i">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Climate</td>
					<td>Wind</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wind_windspmin">Wind speed - month min 9am or 3pm </a></td>
					<td class="wrapword">wind_windspmin</td>
					<td>Wind speed - month min 9am or 3pm (m/s) </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wind_windspmin.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wind_windspmin&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wind_windspmin">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Distance</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_distanywater">Distance - to any water (weighted)</a></td>
					<td class="wrapword">substrate_distanywater</td>
					<td>Weighted distance to any water features (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_distanywater.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_distanywater&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_distanywater">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Distance</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_distcoast">Distance - to coast</a></td>
					<td class="wrapword">substrate_distcoast</td>
					<td>Distance - to coast</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_distcoast.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_distcoast&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_distcoast">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Distance</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_distnonpermw">Distance - to non-permanent water (weighted)</a></td>
					<td class="wrapword">substrate_distnonpermw</td>
					<td>Weighted distance to non-permanent water features (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_distnonpermw.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_distnonpermw&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_distnonpermw">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Distance</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_distpermwat">Distance - to permanent water (weighted)</a></td>
					<td class="wrapword">substrate_distpermwat</td>
					<td>Weighted distance to permanent water features (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_distpermwat.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_distpermwat&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_distpermwat">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Distance</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/aria">Remoteness index</a></td>
					<td class="wrapword">aria</td>
					<td>Accessibility/Remoteness Index of Australia (class)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>GISCA</td>
					<td>population, infrastructure, towns, service</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:aria.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:aria&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:aria">KML</a>-->
					</td>
					<!-- <td>2003</td> -->
				</tr>
			
				<tr>
					<td>Fire</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/fire_frq">Fire frequency</a></td>
					<td class="wrapword">fire_frq</td>
					<td>Fire frequency - number of fires between 1997-2008 for each cell</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>NAFI</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:fire_frq.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:fire_frq&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:fire_frq">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Fire</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/fire_tslb08">Time since last burn</a></td>
					<td class="wrapword">fire_tslb08</td>
					<td>Number of years since last burn (between 1997-2008)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>NAFI</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:fire_tslb08.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:fire_tslb08&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:fire_tslb08">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Hydrology</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/drain_mean">Drainage - average</a></td>
					<td class="wrapword">drain_mean</td>
					<td>Mean annual drainage (Ml / 5km x 5km pixel)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>water, runoff</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:drain_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:drain_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:drain_mean">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Hydrology</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/drain_cv">Drainage - variability</a></td>
					<td class="wrapword">drain_cv</td>
					<td>Coefficient of variation of annual drainage (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>water, runoff</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:drain_cv.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:drain_cv&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:drain_cv">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Hydrology</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/runoff_mean">Runoff - average</a></td>
					<td class="wrapword">runoff_mean</td>
					<td>Mean annual runoff (Ml / 5km x 5km pixel)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>water, runoff</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:runoff_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:runoff_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:runoff_mean">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Bathymetry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/gbr_gbr100">Great Barrier Reef 100m DEM</a></td>
					<td class="wrapword">gbr_gbr100</td>
					<td>Great Barrier Reef 100m DEM</td>
					
						
							<td>Environmental (gridded) 100m</td>
						
						
						
					
					<td>Deepreef Explorer</td>
					<td>bathymetry, depth</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:gbr_gbr100.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:gbr_gbr100&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:gbr_gbr100">KML</a>-->
					</td>
					<!-- <td>2010-08</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Boundaries</td>
					<td><a href="http://spatial.ala.org.au/layers/more/cz_poly">Contiguous Zone</a></td>
					<td class="wrapword">cz_poly</td>
					<td>Contiguous Zone - Australian Maritime Boundaries</td>
					
						
						
							<td>Contextual (polygonal) > 1:150,000</td>
						
						
					
					<td>GA</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:cz_poly.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:cz_poly&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:cz_poly">KML</a>-->
					</td>
					<!-- <td>2001-09 to 2006-02-17</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Boundaries</td>
					<td><a href="http://spatial.ala.org.au/layers/more/cs_poly">Continental Shelf</a></td>
					<td class="wrapword">cs_poly</td>
					<td>Continental Shelf - Australian Maritime Boundaries</td>
					
						
						
							<td>Contextual (polygonal) > 1:150,000</td>
						
						
					
					<td>GA</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:cs_poly.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:cs_poly&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:cs_poly">KML</a>-->
					</td>
					<!-- <td>2001-09 to 2006-02-17</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Boundaries</td>
					<td><a href="http://spatial.ala.org.au/layers/more/eez_poly">Exclusive Economic Zone</a></td>
					<td class="wrapword">eez_poly</td>
					<td>Exclusive Economic Zone - Australian Maritime Boundaries</td>
					
						
						
							<td>Contextual (polygonal) > 1:150,000</td>
						
						
					
					<td>GA</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:eez_poly.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:eez_poly&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:eez_poly">KML</a>-->
					</td>
					<!-- <td>2001-09 to 2006-02-17</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Boundaries</td>
					<td><a href="http://spatial.ala.org.au/layers/more/cw_state_poly">States including coastal waters</a></td>
					<td class="wrapword">cw_state_poly</td>
					<td>States (including coastal waters) - Australian Maritime Boundaries</td>
					
						
						
							<td>Contextual (polygonal) > 1:150,000</td>
						
						
					
					<td>GA</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:cw_state_poly.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:cw_state_poly&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:cw_state_poly">KML</a>-->
					</td>
					<!-- <td>2001-09 to 2006-02-17</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Boundaries</td>
					<td><a href="http://spatial.ala.org.au/layers/more/ts_poly">Territorial Sea</a></td>
					<td class="wrapword">ts_poly</td>
					<td>Territorial Sea - Australian Maritime Boundaries</td>
					
						
						
							<td>Contextual (polygonal) > 1:150,000</td>
						
						
					
					<td>GA</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ts_poly.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ts_poly&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ts_poly">KML</a>-->
					</td>
					<!-- <td>2001-09 to 2006-02-17</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mean-nitrate_cars2006">Nitrate - mean (cars2006)</a></td>
					<td class="wrapword">mean-nitrate_cars2006</td>
					<td>Mean nitrate CARS 2006</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CMAR</td>
					<td>CARS, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mean-nitrate_cars2006.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mean-nitrate_cars2006&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mean-nitrate_cars2006">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mean-phosphate_cars2006">Phosphate - mean (cars2006)</a></td>
					<td class="wrapword">mean-phosphate_cars2006</td>
					<td>Mean phosphate CARS 2006</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CMAR</td>
					<td>CARS, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mean-phosphate_cars2006.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mean-phosphate_cars2006&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mean-phosphate_cars2006">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mean-salinity_cars2009a">Salinity - mean (cars2009a)</a></td>
					<td class="wrapword">mean-salinity_cars2009a</td>
					<td>Mean salinity CARS 2009</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CMAR</td>
					<td>CARS, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mean-salinity_cars2009a.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mean-salinity_cars2009a&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mean-salinity_cars2009a">KML</a>-->
					</td>
					<!-- <td>2009</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mean-silicate_cars2006">Silicate - mean (cars2006)</a></td>
					<td class="wrapword">mean-silicate_cars2006</td>
					<td>Mean silicate CARS 2006</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CMAR</td>
					<td>CARS, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mean-silicate_cars2006.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mean-silicate_cars2006&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mean-silicate_cars2006">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mean-oxygen_cars2006">oxygen - mean (cars2006)</a></td>
					<td class="wrapword">mean-oxygen_cars2006</td>
					<td>Mean oxygen CARS 2006</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CMAR</td>
					<td>CARS, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mean-oxygen_cars2006.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mean-oxygen_cars2006&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mean-oxygen_cars2006">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Habitat</td>
					<td><a href="http://spatial.ala.org.au/layers/more/geohab">Estuary habitat mapping</a></td>
					<td class="wrapword">geohab</td>
					<td>OzCoasts estuary/coastal waterways geomorphic habitat mapping</td>
					
						
						
							<td>Contextual (polygonal) Digitised at 1:5,000</td>
						
						
					
					<td>OzCoasts</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:geohab.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:geohab&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:geohab">KML</a>-->
					</td>
					<!-- <td>2003</td> -->
				</tr>
			
				<tr>
					<td>Marine</td>
					<td>Temperature</td>
					<td><a href="http://spatial.ala.org.au/layers/more/mean-temperature_cars2009a">Temperature - mean (cars2009a)</a></td>
					<td class="wrapword">mean-temperature_cars2009a</td>
					<td>Mean temperature CARS 2009</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CMAR</td>
					<td>CARS, marine</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:mean-temperature_cars2009a.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:mean-temperature_cars2009a&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:mean-temperature_cars2009a">KML</a>-->
					</td>
					<!-- <td>2009</td> -->
				</tr>
			
				<tr>
					<td>Political</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/ne_world">Country Boundaries</a></td>
					<td class="wrapword">ne_world</td>
					<td>Natural Earth World Boundaries</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>Natural Earth</td>
					<td>nation, state, political</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ne_world.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ne_world&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ne_world">KML</a>-->
					</td>
					<!-- <td>2009-12-03</td> -->
				</tr>
			
				<tr>
					<td>Political</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/world">World Country Boundaries</a></td>
					<td class="wrapword">world</td>
					<td>Global Administrative Areas - World Boundary</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GADM</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:world.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:world&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:world">KML</a>-->
					</td>
					<!-- <td>2011-09-26</td> -->
				</tr>
			
				<tr>
					<td>Political</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/aus1">Australian States and Territories</a></td>
					<td class="wrapword">aus1</td>
					<td>Australian States and Territories</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ANZLIC</td>
					<td>political</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:aus1.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:aus1&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:aus1">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Political</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/aus2">LGA Boundaries</a></td>
					<td class="wrapword">aus2</td>
					<td>LGA Boundaries</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ANZLIC</td>
					<td>local, government, area, administate, region, state, territory</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:aus2.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:aus2&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:aus2">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/lith_geologicalunitpolygons1m">Surface Geology of Australia</a></td>
					<td class="wrapword">lith_geologicalunitpolygons1m</td>
					<td>Surface Geology of Australia 1:1,000,000 Scale, 2010 Edition</td>
					
						
						
							<td>Contextual (polygonal) 1:1,000,000 Scale</td>
						
						
					
					<td>GA</td>
					<td>lithology, rock, outcrop, unit, stratigraph</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:lith_geologicalunitpolygons1m.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:lith_geologicalunitpolygons1m&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:lith_geologicalunitpolygons1m">KML</a>-->
					</td>
					<!-- <td>2010</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Age</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_geolrngeage">Lithology - age range</a></td>
					<td class="wrapword">substrate_geolrngeage</td>
					<td>Geological age range (M years)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_geolrngeage.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_geolrngeage&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_geolrngeage">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Age</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_geolmeanage">Lithology - mean age</a></td>
					<td class="wrapword">substrate_geolmeanage</td>
					<td>Geological age mean (M years)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_geolmeanage.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_geolmeanage&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_geolmeanage">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Age</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_geollmeanage">Lithology - mean age (log)</a></td>
					<td class="wrapword">substrate_geollmeanage</td>
					<td>Geological age (log10) mean (Log10 M years)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_geollmeanage.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_geollmeanage&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_geollmeanage">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Age</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_geollrngeage">Lithology - mean age range (log)</a></td>
					<td class="wrapword">substrate_geollrngeage</td>
					<td>Geological age (log10) range (Log10 M years)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_geollrngeage.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_geollrngeage&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_geollrngeage">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_calcrete">Calcrete</a></td>
					<td class="wrapword">substrate_calcrete</td>
					<td>Calcrete in or below soil profile (presence)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, calcium, lithology</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_calcrete.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_calcrete&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_calcrete">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_corg0">Carbon store pre-European</a></td>
					<td class="wrapword">substrate_corg0</td>
					<td>Pre-European estimate of mean annual store of soil organic carbon (COrg0.Base) (kgC ha-1)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, primary, productivity, NPP</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_corg0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_corg0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_corg0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_fert">Lithology - fertility</a></td>
					<td class="wrapword">substrate_fert</td>
					<td>Inherent rock fertility (rating)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>nutrient, soil, rock</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_fert.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_fert&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_fert">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_ntotn0">Nitrogen - plant-available pre-European</a></td>
					<td class="wrapword">substrate_ntotn0</td>
					<td>Pre-European estimate of mean annual store of total plant-available soil nitrogen (NTot0.Base)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, nutrient</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_ntotn0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_ntotn0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_ntotn0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_nmnlconcn0">Nitrogen concentration pre-European</a></td>
					<td class="wrapword">substrate_nmnlconcn0</td>
					<td>Pre-European estimate of mean annual concentration of mineral nitrogen in soil water (NMnlConc0.Base)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, nutrient</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_nmnlconcn0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_nmnlconcn0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_nmnlconcn0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_nmnln0">Nitrogen store pre-European</a></td>
					<td class="wrapword">substrate_nmnln0</td>
					<td>Pre-European estimate of mean annual store of mineral nitrogen (NMnl0.Base)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, nutrient</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_nmnln0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_nmnln0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_nmnln0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_nutrients">Nutrient status</a></td>
					<td class="wrapword">substrate_nutrients</td>
					<td>Gross nutrient status (rating)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, fertility, nitrogen, phosphorus, potassium</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_nutrients.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_nutrients&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_nutrients">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_pmnln0">Phosphorus - plant-available pre-European</a></td>
					<td class="wrapword">substrate_pmnln0</td>
					<td>Pre-European estimate of mean annual store of plant-available mineral phosphorus (PMnl0.Base)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, fertility</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_pmnln0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_pmnln0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_pmnln0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_ptotn0">Phosphorus - plant-available total pre-European</a></td>
					<td class="wrapword">substrate_ptotn0</td>
					<td>Pre-European estimate of mean annual store of total plant-available soil phosphorus (PTot0.Base)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, fertility</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_ptotn0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_ptotn0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_ptotn0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_pmnlconcn0">Phosphorus pre-European</a></td>
					<td class="wrapword">substrate_pmnlconcn0</td>
					<td>Pre-European estimate of mean annual concentration of dissolved phosphorus in soil water (PMnlConc0.Base)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, fertility</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_pmnlconcn0.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_pmnlconcn0&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_pmnlconcn0">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Chemistry</td>
					<td><a href="http://spatial.ala.org.au/layers/more/sodicity">Sodicity</a></td>
					<td class="wrapword">sodicity</td>
					<td>Sodicity (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>soil,  sodium, water</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:sodicity.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:sodicity&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:sodicity">KML</a>-->
					</td>
					<!-- <td>1997</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/eaeo_mean">Crop factor - annual mean</a></td>
					<td class="wrapword">eaeo_mean</td>
					<td>Mean annual crop factor </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>evaporation, water, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:eaeo_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:eaeo_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:eaeo_mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/eaeo_max">Crop factor - month max</a></td>
					<td class="wrapword">eaeo_max</td>
					<td>Maximum month crop factor </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>evaporation, water, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:eaeo_max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:eaeo_max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:eaeo_max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/eaeo_min">Crop factor - month min</a></td>
					<td class="wrapword">eaeo_min</td>
					<td>Minimum month crop factor </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>evaporation, water, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:eaeo_min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:eaeo_min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:eaeo_min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_ksat">Hydrologic conductivity - average saturated</a></td>
					<td class="wrapword">substrate_ksat</td>
					<td>Solum average median horizon saturated hydraulic conductivity (mm/h)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, permiability, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_ksat.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_ksat&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_ksat">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_ks_err">Hydrological conductivity - uncertainty</a></td>
					<td class="wrapword">substrate_ks_err</td>
					<td>Solum average uncertainty of horizon saturated hydraulic conductivity estimates (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, permiability, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_ks_err.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_ks_err&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_ks_err">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_magnetics">Magnetic anomalies</a></td>
					<td class="wrapword">substrate_magnetics</td>
					<td>Magnetic anomalies (nanoTesla, nT)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_magnetics.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_magnetics&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_magnetics">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/soilm_mean">Moisture - average</a></td>
					<td class="wrapword">soilm_mean</td>
					<td>Mean annual soil moisture (upper layer)(%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:soilm_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:soilm_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:soilm_mean">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/soilm_cv">Moisture - variability</a></td>
					<td class="wrapword">soilm_cv</td>
					<td>Coefficient of variation of annual soil moisture (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>MCAS</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:soilm_cv.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:soilm_cv&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:soilm_cv">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio28">Moisture Index - annual mean (Bio28)</a></td>
					<td class="wrapword">bioclim_bio28</td>
					<td>Moisture Index - annual mean (Bio28)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio28.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio28&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio28">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio35">Moisture Index - coldest quarter mean (Bio35)</a></td>
					<td class="wrapword">bioclim_bio35</td>
					<td>Moisture Index - coldest quarter mean (Bio35)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio35.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio35&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio35">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio29">Moisture Index - highest period (Bio29)</a></td>
					<td class="wrapword">bioclim_bio29</td>
					<td>Moisture Index - highest period (Bio29)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio29.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio29&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio29">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio32">Moisture Index - highest quarter mean (Bio32)</a></td>
					<td class="wrapword">bioclim_bio32</td>
					<td>Moisture Index - highest quarter mean (Bio32)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio32.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio32&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio32">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio30">Moisture Index - lowest period (Bio30)</a></td>
					<td class="wrapword">bioclim_bio30</td>
					<td>Moisture Index - lowest period (Bio30)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio30.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio30&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio30">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio33">Moisture Index - lowest quarter mean (Bio33)</a></td>
					<td class="wrapword">bioclim_bio33</td>
					<td>Moisture Index - lowest quarter mean (Bio33)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio33.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio33&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio33">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio31">Moisture Index - seasonality (Bio31)</a></td>
					<td class="wrapword">bioclim_bio31</td>
					<td>Moisture Index - seasonality (Bio31)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio31.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio31&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio31">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/bioclim_bio34">Moisture Index - warmest quarter mean (Bio34)</a></td>
					<td class="wrapword">bioclim_bio34</td>
					<td>Moisture Index - warmest quarter mean (Bio34)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, water, saturation, temperature</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bioclim_bio34.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bioclim_bio34&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bioclim_bio34">KML</a>-->
					</td>
					<!-- <td>2008-02</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_hpedality">Pedality hydrological score</a></td>
					<td class="wrapword">substrate_hpedality</td>
					<td>Hydrological scoring of pedality (score)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, structure, water</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_hpedality.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_hpedality&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_hpedality">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_twi">Topographic wetness index</a></td>
					<td class="wrapword">substrate_twi</td>
					<td>Topographic wetness index (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, slope, water</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_twi.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_twi&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_twi">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_wr_unr">Unreliable water retention parameters</a></td>
					<td class="wrapword">substrate_wr_unr</td>
					<td>Solum average unreliable water retention parameters (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, capacity, water</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_wr_unr.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_wr_unr&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_wr_unr">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wdef_max">Water deficit - month max</a></td>
					<td class="wrapword">wdef_max</td>
					<td>Maximum month soil water deficit (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wdef_max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wdef_max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wdef_max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wdef_mean">Water deficit - month mean</a></td>
					<td class="wrapword">wdef_mean</td>
					<td>Minimum month soil water deficit (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wdef_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wdef_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wdef_mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wdef_min">Water deficit - month min</a></td>
					<td class="wrapword">wdef_min</td>
					<td>Minimum month soil water deficit (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wdef_min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wdef_min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wdef_min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/pawhc">Water holding capacity</a></td>
					<td class="wrapword">pawhc</td>
					<td>Plant available water holding capacity (mm x 1000)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:pawhc.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:pawhc&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:pawhc">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_solpawhc">Water holding capacity - plant-available </a></td>
					<td class="wrapword">substrate_solpawhc</td>
					<td>Plant-available soil water holding capacity (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_solpawhc.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_solpawhc&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_solpawhc">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wpot_mean">Water potential - annual mean</a></td>
					<td class="wrapword">wpot_mean</td>
					<td>Mean annual soil water potential (MPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wpot_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wpot_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wpot_mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/wpot_min">Water potential - month min</a></td>
					<td class="wrapword">wpot_min</td>
					<td>Minimum month soil water potential (MPa)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:wpot_min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:wpot_min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:wpot_min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/pwat_mean">Water stress index - annual mean</a></td>
					<td class="wrapword">pwat_mean</td>
					<td>Mean annual soil water stress index</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:pwat_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:pwat_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:pwat_mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/pwat_max">Water stress index - month max</a></td>
					<td class="wrapword">pwat_max</td>
					<td>Maximum month soil water stress index </td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:pwat_max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:pwat_max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:pwat_max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/pwat_min">Water stress index - month min</a></td>
					<td class="wrapword">pwat_min</td>
					<td>Minimum month soil water stress index</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:pwat_min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:pwat_min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:pwat_min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/spls_mean">Water surplus - annual mean</a></td>
					<td class="wrapword">spls_mean</td>
					<td>Mean annual soil water surplus (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:spls_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:spls_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:spls_mean">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/spls_max">Water surplus - month max</a></td>
					<td class="wrapword">spls_max</td>
					<td>Maximum month soil water surplus (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:spls_max.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:spls_max&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:spls_max">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Moisture</td>
					<td><a href="http://spatial.ala.org.au/layers/more/spls_min">Water surplus - month min</a></td>
					<td class="wrapword">spls_min</td>
					<td>Minimum month soil water surplus (mm)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, evaporation, temperature, rain, precipitation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:spls_min.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:spls_min&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:spls_min">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_gravity">Bouger gravity anamalies</a></td>
					<td class="wrapword">substrate_gravity</td>
					<td>Bouguer gravity anomalies (acceleration, Gal)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_gravity.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_gravity&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_gravity">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_bdensity">Bulk density</a></td>
					<td class="wrapword">substrate_bdensity</td>
					<td>Solum average bulk density (Mg/m3)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, structure, porosity</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_bdensity.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_bdensity&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_bdensity">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_clay">Clay %</a></td>
					<td class="wrapword">substrate_clay</td>
					<td>Solum average median clay content (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, grain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_clay.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_clay&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_clay">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/erodibility">Erodibility</a></td>
					<td class="wrapword">erodibility</td>
					<td>Erodibility (k factor )</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>erosion, stability, slope, friability</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:erodibility.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:erodibility&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:erodibility">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_erosional">Erosional surfaces - proportion</a></td>
					<td class="wrapword">substrate_erosional</td>
					<td>Proportion Erosional surfaces (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>erosion, stability, slope, friability</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_erosional.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_erosional&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_erosional">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/erosivity">Erosivity</a></td>
					<td class="wrapword">erosivity</td>
					<td>Rainfall erosivity (MJmm/ha/hr)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td>erosion, stability, slope, friability</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:erosivity.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:erosivity&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:erosivity">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_soldepth">Soil depth</a></td>
					<td class="wrapword">substrate_soldepth</td>
					<td>Solum depth (surface and subsoil layers) (metres)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, horizon</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_soldepth.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_soldepth&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_soldepth">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_pedality">Soil pedality</a></td>
					<td class="wrapword">substrate_pedality</td>
					<td>Grade of soil pedal structure (grade)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, structure, porosity, grain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_pedality.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_pedality&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_pedality">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td>Physics</td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_coarse">Soils - coarse</a></td>
					<td class="wrapword">substrate_coarse</td>
					<td>Soils dominated by coarse fragments including ironstone (class)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>soil, grain</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_coarse.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_coarse&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_coarse">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Substrate</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_datasupt">Substrate data reliability</a></td>
					<td class="wrapword">substrate_datasupt</td>
					<td>Data levels supporting soil property interpretations (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_datasupt.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_datasupt&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_datasupt">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/aspect">Aspect</a></td>
					<td class="wrapword">aspect</td>
					<td>Aspect (degree)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>BRS</td>
					<td>angle, direction</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:aspect.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:aspect&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:aspect">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/bath_topo_ausbath_09_v4">Bathymetry and Topography 9 sec</a></td>
					<td class="wrapword">bath_topo_ausbath_09_v4</td>
					<td>Australian bathymetry and topography grid, June 2009</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>GA</td>
					<td>depth</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:bath_topo_ausbath_09_v4.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:bath_topo_ausbath_09_v4&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:bath_topo_ausbath_09_v4">KML</a>-->
					</td>
					<!-- <td>2009</td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/elevation">Elevation </a></td>
					<td class="wrapword">elevation</td>
					<td>Elevation (metres above mean sea level)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>GA</td>
					<td>height</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:elevation.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:elevation&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:elevation">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_mrrtf">Ridge top flatness</a></td>
					<td class="wrapword">substrate_mrrtf</td>
					<td>Ridgetop Flatness (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_mrrtf.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_mrrtf&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_mrrtf">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_ridgetopflat">Ridge top flatness - proportion</a></td>
					<td class="wrapword">substrate_ridgetopflat</td>
					<td>Proportion Ridge tops (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_ridgetopflat.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_ridgetopflat&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_ridgetopflat">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/slope_length">Slope length</a></td>
					<td class="wrapword">slope_length</td>
					<td>Slope length (metres)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:slope_length.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:slope_length&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:slope_length">KML</a>-->
					</td>
					<!-- <td>2001</td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_relief">Topographic relief</a></td>
					<td class="wrapword">substrate_relief</td>
					<td>Terrain relief (metres)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>elevation, height, difference</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_relief.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_relief&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_relief">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_roughness">Topographic roughness</a></td>
					<td class="wrapword">substrate_roughness</td>
					<td>Terrain roughness (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>elevation, height, difference</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_roughness.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_roughness&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_roughness">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_slope">Topographic slope</a></td>
					<td class="wrapword">substrate_slope</td>
					<td>Terrain slope (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td>angle</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_slope.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_slope&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_slope">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_valleybottom">Valley bottom %</a></td>
					<td class="wrapword">substrate_valleybottom</td>
					<td>Proportion Valley bottoms (%)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_valleybottom.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_valleybottom&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_valleybottom">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Topography</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/substrate_mrvbf">Valley bottom flatness index</a></td>
					<td class="wrapword">substrate_mrvbf</td>
					<td>Valley Bottom Flatness (index)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO Ecosystem Sciences</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:substrate_mrvbf.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:substrate_mrvbf&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:substrate_mrvbf">KML</a>-->
					</td>
					<!-- <td></td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/myrtle_rust">Myrtle Rust Observations</a></td>
					<td class="wrapword">myrtle_rust</td>
					<td>Myrtle rust reports</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>GA</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:myrtle_rust.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:myrtle_rust&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:myrtle_rust">KML</a>-->
					</td>
					<!-- <td>2011-09-26</td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/landcover">Land cover</a></td>
					<td class="wrapword">landcover</td>
					<td>Vegetation cover, based on integrated vegetation (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td>vegetation</td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:landcover.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:landcover&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:landcover">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/ndvi_mean">NDVI Mean</a></td>
					<td class="wrapword">ndvi_mean</td>
					<td>Normalised difference vegetation index (NDVI*100)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>BRS</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:ndvi_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:ndvi_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:ndvi_mean">KML</a>-->
					</td>
					<!-- <td>2007</td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/npp_mean">NPP Mean</a></td>
					<td class="wrapword">npp_mean</td>
					<td>Mean Annual Net Primary Productivity (tonnes/ha/yr)</td>
					
						
							<td>Environmental (gridded) 0.01 degree (~1km)</td>
						
						
						
					
					<td>CSIRO</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:npp_mean.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:npp_mean&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:npp_mean">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/vast">Vegetation - condition</a></td>
					<td class="wrapword">vast</td>
					<td>Vegetation assets, states and transitions - VAST 2 (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>BRS</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:vast.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:vast&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:vast">KML</a>-->
					</td>
					<!-- <td>2008</td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/native_veg">Vegetation types - native</a></td>
					<td class="wrapword">native_veg</td>
					<td>Pre-European major vegetation groups (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:native_veg.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:native_veg&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:native_veg">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			
				<tr>
					<td>Vegetation</td>
					<td></td>
					<td><a href="http://spatial.ala.org.au/layers/more/present_veg">Vegetation types - present</a></td>
					<td class="wrapword">present_veg</td>
					<td>Current major vegetation group (class)</td>
					
						
						
							<td>Contextual (polygonal) </td>
						
						
					
					<td>ERIN</td>
					<td></td>
					<td>
						<!--<img src="/output/layerthumbs/ALA:present_veg.jpeg" />-->
						<img src="http://spatial.ala.org.au/geoserver/wms/reflect?layers=ALA:present_veg&width=200&height=200" />
						<br />
						<!--<a href="http://spatial.ala.org.au/geoserver/wms/kml?layers=ALA:present_veg">KML</a>-->
					</td>
					<!-- <td>2006</td> -->
				</tr>
			</tbody>
		</table>
		
		<p>Download as <a class="button" href="http://spatial.ala.org.au/layers.csv">CSV</a> <a class="button" href="http://spatial.ala.org.au/layers.json">JSON</a>
		<!--  | <a href="http://spatial.ala.org.au/layers.xml">XML</a> --></p>
	
</div><!--inner-->
<?php get_footer(); ?>