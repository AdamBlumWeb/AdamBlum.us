<?php

abstract class Asset {

	protected $url;

	protected	function	__construct($type, $name, $cache = false) {
		$this->file = 'assets'.DS.$type.DS.$name;
		if ($cache) {
			$this->url = $this->file;
		}
	}


}



?>