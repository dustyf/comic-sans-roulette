<?php
/*
 * Plugin Name: Comic Sans Roulette
 * Plugin URI: http://dustyf.com
 * Description: Randomly change all fonts on your site to Comic Sans on page load.
 * Version: 1.0
 * Author: Dustin Filippini
 * Author URI: http://dustyf.com
 * License: GPLv2
 */


function comic_sans_roulette() {
	$random = mt_rand( 0, 9 );
	if ( $random == 0 ) {
		echo '<style>* { font-family: "Comic Sans MS" !important; }</style>';
	}
}
add_action( 'wp_head', 'comic_sans_roulette' );