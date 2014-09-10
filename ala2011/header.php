<?php
if ( is_page('97') ) {
	include(TEMPLATEPATH . '/header_home.php');
} 
elseif ( is_page('3116') || in_category('37') ) {//test for portal help page
	include(TEMPLATEPATH . '/header_portalhelp.php');
} 
else { //default
	include(TEMPLATEPATH . '/header_standard.php');
}
?>