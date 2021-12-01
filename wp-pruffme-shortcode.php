<?php
/**
 * Plugin Name: Pruffme Webinar Shortcode
 * Description: Put Pruffme webinar iframe into the page
 * Author: Viacheslav Adishchev
 * Author URI: https://github.com/adishchev/wp-pruffme-shortcode
 * Version: 1.0
 */
 
// Шоткод добавляет код вставки вебинара Pruffme
add_shortcode('pruffme', function($attrs) {
	$attrs = shortcode_atts([
		'type' => 'webinar', // required
		'hash' => null,      // required
	], $attrs );

	$html = '';

	if (isset($attrs['type']) && $attrs['type'] === 'webinar' && isset($attrs['hash'])) {
		$html = '<iframe id="pruffme" style="width:100%; height:100vh;" src="'. plugin_dir_url( __FILE__ ) . 'pruffme.php?hash='.htmlspecialchars($attrs['hash']).'"></iframe>';
	}
	return $html;
});

