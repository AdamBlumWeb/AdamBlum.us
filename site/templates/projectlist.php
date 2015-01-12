
<article class="page">
	<header class="page-header">
		<h1 class="page-heading"><?php echo $this->data['heading']; ?></h1>
	</header>
	<section class="page-content">
		<?php echo $this->get_content(); ?>
	</section>
	<section class="project-list" hidden>
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


<!-- ====================== DEV STUFF HERE ====================== -->



<section>
	<h2>New Heading Here</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium, maxime amet rerum. <em>Quidem repellendus</em> quas amet, nesciunt quia <small>distinctio iure</small> dignissimos ullam dolores quod at fuga similique nulla fugiat!
	</p>

	<div>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam molestias voluptatibus esse porro veniam minima adipisci, placeat voluptatum eaque perferendis, libero molestiae iusto itaque dolor ratione voluptate iste magnam quo.
		</p>
	</div>

	<figure>
		<img src="http://placehold.it/800x600" alt="" />
		<figcaption>
			<p>
				This is an example caption for an image.
			</p>
		</figcaption>
	</figure>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem ea iure facilis, nemo animi porro quia mollitia reprehenderit voluptates fugit voluptatem velit aliquam harum veritatis hic nulla asperiores, repellendus, sunt?
	</p>

	<figure>
		<img src="http://placehold.it/800x600" alt="" />
		<figcaption>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit reiciendis doloribus error ex nostrum eius minus, provident facere odio deleniti id aperiam, minima, dolore quam similique dolor. Sequi, consequuntur, fugit.
			</p>
		</figcaption>
	</figure>

	<dl hidden>
		<dt>
			Term
		</dt>
		<dd data-icon='computer'>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga omnis cupiditate nobis nemo culpa.
		</dd>

		<dt>
			Another Term
		</dt>
		<dd data-icon='phone'>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nisi esse suscipit quibusdam magnam.
		</dd>

		<dt>
			Another Term
		</dt>
		<dd data-icon='tablet'>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nisi esse suscipit quibusdam magnam.
		</dd>
	</dl>
</section>








</article>



