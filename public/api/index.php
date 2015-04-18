<?php
require dirname(dirname(__DIR__)) . '/public/wp/wp-blog-header.php';
header("Content-type: application/json");

$api = new \Slim\Slim();

$api->get("/", function() {
	echo "Welcome! How can I help you?";
});

$api->get("/:type", function($type) use ($api) {
	$args = ['post_type' => $type];
	$payload = \app\models\WPObject::find($args);

	echo json_encode($payload);
});

$api->get("/:type", function($type) use ($api) {
	$args = ['post_type' => $type] + $api->request()->get()
	   	+ $api->request()->get();
	$payload = \app\models\WPObject::find($args);

	echo json_encode($payload);

});

$api->get("/:type/random", function($type) use ($api) {
	$args = ['post_type' => $type, 'posts_per_page' => 1, 
		'orderby' => 'rand'];
	$payload = \app\models\WPObject::find($args);

	echo json_encode($payload);

});

$api->get("/:type/:id", function($type, $id) use ($api) {
	$payload = \app\models\WPObject::find($id);

	echo json_encode($payload);

});

$api->run();
