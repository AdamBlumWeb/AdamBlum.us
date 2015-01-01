<?php

class Page {

	public 	$name;
	public 	$type;
	public	$match;
	public 	$configfile;
	public 	$data	=	array();

	public 	function 	__construct($route) {
		$this->name 	=	$route['name'];
		$this->type 	=	$route['type'];
		$this->match 	=	$route['match'];

		if ($this->match) {
			$this->configfile 	= 	$this->match;
		} else {
			$this->configfile 	= 	$this->name;
		}

		$this->import_data();




	}

	private	function	import_data() {
		$routedata 		=	new RouteData($this->type, $this->configfile);
		$this->data 	=	$routedata->data;
		$this->data['view'] = $this->configfile;
		$this->data['type'] = $this->type;
	}






}

?>