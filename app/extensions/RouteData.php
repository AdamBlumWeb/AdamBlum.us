<?php

class RouteData extends JSONData {
	public 	function 	__construct($type, $name) {
		parent::__construct(CONFIG.DS.'routes', $type, $name);
	}
}

?>