<?php

abstract class JSONData {

	public			$root;
	public			$folder;
	public 			$file;
	public			$url;
	public			$data 	= 	array();

	protected	function	__construct($root, $folder, $file) {
		$this->root 	=	$root;
		$this->folder 	=	$folder;
		$this->file 	=	$file;
		$this->url 		=	$this->root.DS.$this->folder.DS.$this->file.'.json';
		$this->data 	=	self::pull();
	}

	protected	function	pull() {
		return	json_decode(file_get_contents($this->url), true);
	}
}



?>