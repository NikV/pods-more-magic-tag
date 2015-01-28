<?php

/**
 * Plugin Name: Pods Magic Tag More
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: 1.0
 * Author: nikhil
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
*/

function pods_more_stff_things_more($code, $template_name,  $pods) {


	$content = get_post_field( 'post_content', $pods->ID() );
	$get_extended = get_extended($content);
	$code = str_replace( '{@post_more}', $get_extended['main'], $code );

	return $code;
}
add_filter('pods_templates_pre_template', 'pods_more_stff_things_more', 10, 3);



