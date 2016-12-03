<?php
use App\Core\App;
App::bind('config', require 'config.php');
App::bind('database', new Query_builder(
		Connection::connect(App::get('config')['database'])
));

function view($view,$data = []) {
	extract($data);
	return include "app/views/{$view}.view.php";
}
function redirect($path) {
	header("Location: /{$path}");
}