<?php

/*
Plugin Name: Advanced Custom Fields: Hidden Field
Plugin URI: http://1trickpony.com
Description: A hidden field for Advanced Custom Fields
Version: 1.0.0
Author: erictr1ck
Author URI: http://1trickpony.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-hidden', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_hidden( $version ) {
	
	include_once('acf-hidden-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_hidden');	




// 3. Include field type for ACF4
function register_fields_hidden() {
	
	include_once('acf-hidden-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_hidden');	



	
?>