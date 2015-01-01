<?php

class Application {

	public 	$settings 	=	array();

	public 	function 	__construct($settings) {
		$this->import_settings($settings);
		$this->apply_settings();
	}

	private 	function 	import_settings($file) {
		$settings 	= 	new Config('application', $file);
		$this->settings	=	$settings->data;
	}

	private 	function 	apply_settings() {
		date_default_timezone_set($this->settings['timezone']);
	}

}

?>