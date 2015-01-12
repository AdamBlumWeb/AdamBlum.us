
<article class="page">
	<header class="page-header">
		<h1 class="page-heading"><?php echo $this->data['heading']; ?></h1>
	</header>
	<section class="page-content">
		<?php echo $this->get_content(); ?>
	</section>
	<section class="post-list">
		<?php
		foreach (glob(CONFIG.DS.'routes'.DS.'post'.DS."*.json") as $filename) {
			$name = basename($filename, '.json');
			$routedata = new RouteData('post', $name);
			$post[$name]['title'] = $routedata->data['heading'];
			$post[$name]['desc'] = $routedata->data['meta']['description'];
			$post[$name]['link'] = "post-".$name;
			$post[$name]['date'] = $routedata->data['date'];

		}


		$posts = _array_sort($post, 'date', SORT_DESC);

		foreach ($posts as $key => $data) {
			echo "<article><header><h3><a href='" . $data['link'] . "' role='link'>" . $data['title'] . "</a></h3><time>" . date('j M ’y', strtotime($data['date'])) . "</time></header><p>" . $data['desc'] . "</p></article>";
		}


//
		?>
	</section>
</article>



