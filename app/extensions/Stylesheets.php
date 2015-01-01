<?php

class Stylesheet extends Asset {
	public 	function 	__construct($file, $cache = true) {
		parent::__construct('css', $file.'.css', $cache);
	}

	public function load() {
		echo "<link rel='stylesheet' href='$this->url?v=1'/>";
	}
}

?>