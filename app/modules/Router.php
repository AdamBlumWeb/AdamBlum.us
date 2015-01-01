<?php

class Router {

	public 	$routes 	=	array();
	public 	$route 		=	array();

	public 		function 	__construct($settings) {
		$this->import_routes($settings);

		if (!$this->get_route()) {
			$this->route['name'] 	= 	"error";
			$this->route['type'] 	= 	"error";
			$this->route['match']	= 	"notfound";
		}

	}

	private 	function 	import_routes($file) {
		$settings 		= 	new Config('router', $file);
		$this->routes	=	$settings->data;
	}

	private 	function 	get_route() {
		foreach($this->routes as $route => $key) {
			if (preg_match($route, $_SERVER['REQUEST_URI'], $matches)) {
				$this->route['name'] 	= 	$key['name'];
				$this->route['type'] 	= 	$key['type'];
				$this->route['match']	= 	$matches[$key['type']];

				return true;
			}
		}
	}

}

?>