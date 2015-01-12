<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
	<meta name="description" content="<?php echo $this->description; ?>"/>
	<link rel="shortcut icon" href="favicon.ico?v=2" />
	<title><?php echo $this->title; ?> &mdash; Adam Blum</title>
	<?php
		$style = new Stylesheet('global-prefixed');
		$style->load();
	?>
</head>
<body id="<?php echo $this->id; ?>">
<header role="banner">
	<nav role="navigation">
	<?php
		$navdata = new Config('navigation', 'sitenav');
		$nav = $navdata->data;

		foreach ($nav as $id => $data) {
			if ($this->id === $id) {
				$class = 'active';
			}
			$url = $data['url'];
			$text = $data['text'];
			echo "\t<a class='$class' href='$url'>$text</a>\n\t";
			$class = '';
		}
	?>
</nav>
</header>
<main role="main">