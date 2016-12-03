<?php
namespace App\Core;
class Router
{
	public $routes = [
		'GET' => [],
		'POST' => []
	];
	public function define($routes)
	{
		$this->routes = $routes;
	}
	public function get( $uri, $controller ) {
		$this->routes['GET'][$uri] = $controller; 
	}
	public function post( $uri, $controller ) {
		$this->routes['POST'][$uri] = $controller;
	}
	/* Redirect the user to requested to webpage */
	public function direct( $uri, $method ) {
		if (array_key_exists($uri, $this->routes[$method])){
			list($controller,$method) = explode('@', $this->routes[$method][$uri]);
			return $this->call_action($controller, $method);
		}
		throw new Exception("Error Processing Request");
	}
	/* Load all routers */
	public static function load_routers( $file ) {
		$router = new static;							//define router object, $file contains the instance of $router
		require $file;										//loading the routes file,containing all the router
		return $router;										//return $router object, to enable chaining 
	}
	public function call_action($controller, $method) {
		$controller = "App\\Controller\\{$controller}";
		$controller = new $controller;
		if (! method_exists($controller, $method)) {
			throw new Exception("No {$method} exists!", 1);
		}
		return $controller->$method();
	}
}