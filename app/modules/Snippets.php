<?php

class Snippet {

	public $file;

	public 	function 	__construct($file) {
		$this->file = $file;
	}

	public 	function 	load() {
		include 	SITE.DS.'snippets'.DS.$this->file.'.php';
	}

}

?>