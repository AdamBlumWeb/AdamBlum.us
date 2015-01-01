<article role="article" class="post">
	<header>
		<h1 class="post-heading"><?php echo $this->data['heading']; ?></h1>
		<p class="post-date"><?php echo date('j F Y', strtotime($this->data['date'])); ?></p>
	</header>
	<section class="post-content">
		<?php echo $this->get_content(); ?>
	</section>
	<footer>
		<p class="post-author">written by <?php echo $this->data['author']; ?></p>
		<p><a class="all-posts" href="posts" rel="prev">View All Posts</a></p>
	</footer>
</article>


