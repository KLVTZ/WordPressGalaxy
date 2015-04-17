<?php namespace app\models;

class WPObject
{
	use \app\traits\PropertyExtract;

	public $ID;
	public $title;
	public $content;
	public $status;
	public $type;
	public $date;

	public function __construct($wp_post_array)
	{
		$this->extract($wp_post_array, [
			'key' => function ($key, $value) {
				return (substr($key, 0, 5) === "post_") ? substr($key, 5) : $key;
			}
		]);
	}

	/**
	 * Finds and creates the WP objects using WP get_post and get_posts methods
	 *
	 * @param mixed $args Numeric ID or array of arguments
	 * @param mixed	Single WP objects or array of WP Objects
	 */
	public static function find($args)
	{
		if (is_numeric($args))
			return static::find_one($args);	

		if (is_array($args))
			return static::find_many($args);
	}


	/**
	 * Handles creating a single post object
	 *
	 * @param int $id WordPress id
	 * @return WPObject
	 */
	public static function find_one($id)
	{
		$object = get_post($id);
		$wpobject = new static($object);

		return $wpobject;	
	}


	/**
	 * Find a set of objects based on arguments
	 *
	 * @param array $args List of parameters for finding the object set
	 * @return array WPObject instances
	 */
	public static function find_many($args)
	{
		return array_map(function($object) {
			return new static($object);
		}, get_posts($args));
	}

	/**
	 * Create a new object
	 *
	 * @param array $data Object data
	 * @return WPObject Instance of WPObject tied to newly created WP Object
	 */
	public static function create($data)
	{
		unset($data['ID']);
		return static::find_one(wp_insert_post($data));
	}

	/**
	 * Updates the existing object
	 *
	 * @param array $data
	 * @return WPObject
	 */
	public function update($data)
	{
		foreach ($data as $key => $value) {
			if (property_exists($this, $key)) {
				$this->$key = $value;	
			}
		}

		$data['ID'] = $this->ID;
		wp_update_post($data);

		return $this;
	}


	/**
	 * Delete instance
	 *
	 * @return WPObject
	 */
	public function delete()
	{
		wp_delete_post($this->ID);

		return $this;	
	}
}
