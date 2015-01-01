<?php

/*
	BOOTSTRAP
		this sets some basic constants and calls our Core class
*/

	//	DS:		universal directory separator
	define(DS, DIRECTORY_SEPARATOR);

	//	ROOT:	the root folder of the entire application
	define(ROOT, dirname(dirname(__FILE__)));

	//	APP:	server-side data, classes, etc
	define(APP, dirname(__FILE__));

	//	SITE:	templates, etc
	define(SITE, ROOT . DS . "site");

	//	CONTENT:	views, etc
	define(CONTENT, ROOT . DS . "content");

	//	ASSETS:	CSS, JS, images, audio, video, etc
	define(ASSETS, ROOT . DS . "assets");

	//	DATA:	users, etc
	define(DATA, ROOT . DS . "data");

	//	CONFIG:	settings, routes, etc
	define(CONFIG, ROOT . DS . "config");


	require 	"core.php";

?>