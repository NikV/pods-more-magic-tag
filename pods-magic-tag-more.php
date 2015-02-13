<?php

/**
 * Plugin Name: Pods Magic Tag More
 * Description: A brief description of the Plugin.
 * Version: 1.0
 * Author: Nikhil Vimal
 * Author URI: nik.techvoltz.com
 * License: GPL2
*/

/**
 * The function that register the magic tag
 *
 * @param $code
 * @param $template_name
 * @param $pods
 */
function pods_post_more_magic_tag($code, $template_name,  $pods) {
	//Will only run if the more tag exists
	if ( strstr( get_post_field( 'post_content', $pods->ID() ), '<!--more-->' ) ) {
		
	$content      = get_post_field( 'post_content', $pods->ID() );
	$get_extended = get_extended( $content );//get_extended() will get content before the more tag
	$code = str_replace( '{@excerpt_read_more}', $get_extended['main'], $code );
	
	return $code;

	}

	else {
		$code = str_replace( '{@excerpt_read_more}', get_post_field( 'post_excerpt', $pods->ID() ), $code );
		return $code;
	}



}
add_filter('pods_templates_pre_template', 'pods_post_more_magic_tag', 1, 3);
