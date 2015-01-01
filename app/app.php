<?php
	require		"bootstrap.php";


Core::load("lib",
	array(
		"JSON-Data",
		"Assets"
	)
);

Core::load("extensions",
	array(
		"Config",
		"RouteData",
		"Stylesheets"
	)
);

Core::load("modules",
	array(
		"Application",
		"Router",
		"Snippets",
		"View",
		"Markdown",
		"Page"
	)
);


$app 		= 	new Application('app');

$router 	=	new Router('router');

$page 		=	new Page($router->route);

$view 		= 	new View($page->data);

?>