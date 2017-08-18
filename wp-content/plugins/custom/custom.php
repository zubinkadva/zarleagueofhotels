<?php
/*
Plugin Name: My First WordPress Plugin
Plugin URI: http://nmitd.net.in
Description: Displays static and dynamic content with(out) shortcodes
Version: 1.0
Author: ZAR
Author URI: http://zar.comuv.com
License: GPLv2
*/

function call_via_shortcode() {
	echo 'Hello World!!<br><br>';
}

function call_all_pages($post) {
	echo 'You are currently viewing: '.wp_title(' | ',false).'<br><br>';
	return $post;
}

add_action('the_content','call_all_pages');
add_shortcode('myshortcode','call_via_shortcode');
?>