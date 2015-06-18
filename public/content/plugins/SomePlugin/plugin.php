<?php namespace KLVTZ\SomeCoolPlugin;
/**
 * Plugin Name: Some Cool Plugin
 * Author: KLVTZ
 */

trait CreatePosts {

	public  function create_content_type($options)
	{
		return "You just created a new content type, with traits, called " . $options["type"];
	}
}

class RandomClass {

	use \KLVTZ\SomeCoolPlugin\CreatePosts; 
	protected $content_type_message;

	public function __construct($options)
	{
		$this->content_type_message = $this->create_content_type($options);	
	}


	public function print_message()
	{
		echo $this->content_type_message;
	}
}

add_action('plugins_loaded', function ()
{
	$object = new RandomClass(["type" => "Location"]);
});
// add_action('init', [$object, "print_message"]);
