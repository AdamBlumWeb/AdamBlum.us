<article role="article" class="project">
	<header>
		<h1 class="project-heading"><?php echo $this->data['heading']; ?></h1>
		<p>
			<span class="project-date"><?php echo date('F Y', strtotime($this->data['date'])); ?></span>
			&middot;
			<span class="project-client"><?php echo $this->data['client']; ?></span>
		</p>

	</header>
	<section class="project-content">
		<figure>
			<img src='<?php echo $this->data['img']; ?>' alt="<?php echo $this->data['heading']; ?>"/>
			<figcaption>
				<p><?php echo $this->data['caption']; ?></p>
			</figcaption>
		</figure>
		<div>
			<p>
				<a href="<?php echo $this->data['url']; ?>">View Project</a>
			</p>
		</div>
		<?php echo $this->get_content(); ?>
	</section>
	<footer>

		<p><a class="all-projects" href="projects" rel="prev">View All Projects</a></p>
	</footer>
</article>


