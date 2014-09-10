<?php
// 0.1 Logout.php
// - workaround for nonce setting to bypass the logout prompting
//
// 20101011
//
// load wp libs
require('../../../wp-blog-header.php');
// get a once
$nonce = wp_create_nonce('log-out'); 
// gen logout url
$url = "http://www.ala.org.au/wp-login.php?action=logout&_wpnonce=$nonce";
// redir to this url
header("Location: $url");

?>
