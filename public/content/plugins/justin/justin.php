<?php
/*
Plugin Name: Justin
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: justin
Domain Path: /languages
*/

class JustinAttribution
{
	public function add($content)
	{
		return $content . " <span style='font-size: 50%'>-Justin Page</span>";
	}
}

$justin = new JustinAttribution;
add_filter('attr_justin', [$justin, "add"]);
