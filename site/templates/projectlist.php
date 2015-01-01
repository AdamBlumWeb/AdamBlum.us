
<article>
	<header>
		<h1><?php echo $this->data['heading']; ?></h1>
	</header>
	<section>
		<?php echo $this->get_content(); ?>
	</section>
	<section class="project-list">
		<?php
		foreach (glob(CONFIG.DS.'routes'.DS.'project'.DS."*.json") as $filename) {
			$name = basename($filename, '.json');
			$routedata = new RouteData('project', $name);
			$post[$name]['title'] = $routedata->data['heading'];
			$post[$name]['desc'] = $routedata->data['meta']['description'];
			$post[$name]['link'] = "project-".$name;
			$post[$name]['date'] = $routedata->data['date'];

		}


		$posts = _array_sort($post, 'date', SORT_DESC);

		foreach ($posts as $key => $data) {
			echo "<article><header><h3><a href='" . $data['link'] . "' role='link'>" . $data['title'] . "</a></h3><time>" . date('M ’y', strtotime($data['date'])) . "</time></header><p>" . $data['desc'] . "</p></article>";
		}


//
		?>
	</section>
</article>



