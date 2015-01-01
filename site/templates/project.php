<article role="article" class="project">
	<header>
		<h1 class="project-heading"><?php echo $this->data['heading']; ?></h1>
		<p class="project-date"><?php echo date('F Y', strtotime($this->data['date'])); ?></p>
		<p class="project-url"><a href="<?php echo $this->data['url']; ?>">View Project</a></p>
	</header>
	<section class="project-content">
		<?php echo $this->get_content(); ?>
	</section>
	<footer>
		<p class="project-author">for <?php echo $this->data['client']; ?></p>
		<p><a class="all-projects" href="projects" rel="prev">View All Projects</a></p>
	</footer>
</article>


