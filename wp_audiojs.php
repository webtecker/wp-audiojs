<?php
/*
Plugin Name: WP audio.js
Version: 1.0
Plugin URI: http://webtecker.com/wp-audiojs/
Description: Adds the audio.js drop-in javascript library into wordpress with a shortcode
Author: Brett Bittke
Author URI: http://webtecker.com
*/

define('WPAUDIOJS_VERSION', '1.0');

add_shortcode('wp_audiojs', 'wp_audiojs_handle');
add_action('wp_enqueue_scripts', 'wp_audiojs_scripts');


function wp_audiojs_handle($atts, $content="") {
	return "<audio src='".$content."' preload='none' class='audio-player'></audio>";
}



function wp_audiojs_scripts() {
	//Javascript
	wp_register_script('audiojs', plugins_url('/wp-audio.js/audio.min.js'));
	wp_enqueue_script('audiojs');
	wp_register_script('implement-audiojs', plugins_url('/wp-audio.js/implement.js'));
	wp_enqueue_script('implement-audiojs');
	//CSS
	wp_register_style('audiojs_style', plugins_url('/wp-audio.js/audiojs.css');
	wp_enqueue_style( 'audiojs_style');
}

?>