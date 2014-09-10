<?php
if ( is_page('3116') || in_category('37') ) {//test for Theme page
		include(TEMPLATEPATH . '/footer_portalhelp.php');
}
elseif ( is_page('3079') ) {//test for mapping & analysis page
		include(TEMPLATEPATH . '/footer_fluid.php');
} 
else { //default
		include(TEMPLATEPATH . '/footer_standard.php');
	}
?>