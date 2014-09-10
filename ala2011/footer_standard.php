<?php
/**
 * @package WordPress
 * @subpackage ALA_Theme
 */
?>
<footer>
	<?php add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); ?>
	<nav id="nav-footer-site">
	<?php wp_nav_menu( array( 'theme_location' => 'footer-site', 'menu_class' => '','items_wrap' => '<ol>%3$s</ol>' ) ); ?>
	</nav>
	<nav id="fat-footer">
	<?php do_action('wp_menubar','fat-footer'); ?>
	</nav>
	<section class="gbif">
	    <p><a href="http://www.gbif.org/"><img src="<?php bloginfo('template_directory'); ?>/images/GBIF.png" width="52" height="50" alt="GBIF logo" /></a> The Atlas of Living Australia is the Australian node of the <a href="http://www.gbif.org/" class="external">Global Biodiversity Information Facility (GBIF)</a>.</p>
	    <div style="display:inline-block;float:right;"><img src="<?php bloginfo('template_directory'); ?>/images/agi-s.png" width="167" height="46" alt="Atlas of Living Australia, an Australian Government Initiative" /></div>
	</section>
	<section class="copyright">
		<div class="img-left"><a href="http://creativecommons.org/licenses/by/3.0/au/" title="External link to Creative Commons"><img src="<?php bloginfo('template_directory'); ?>/images/creativecommons.png" width="88" height="31" alt="" /></a></div>
		<p>This site is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/au/" title="External link to Creative Commons" class="external">Creative Commons Attribution 3.0 Australia License</a>. <br>Provider content may be covered by other <a href="<?php echo get_permalink(24277);?>" title="Terms of Use">Terms of Use</a>.</p>
	    <div style="display:inline-block;float:right;"><img src="<?php bloginfo('template_directory'); ?>/images/NCRIS_PROVIDER_rev_c.png"  alt="NCRIS, an Australian Government Initiative" /></div>
	</section>
</footer><!--close footer-->
<?php wp_footer(); ?>
</body>
</html>