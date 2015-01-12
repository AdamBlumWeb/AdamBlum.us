<article role="article" class="post">
	<header class="post-header">
		<h1 class="post-heading"><?php echo $this->data['heading']; ?></h1>
		<p class="post-date"><?php echo date('j F Y', strtotime($this->data['date'])); ?></p>
	</header>
	<section class="post-content">
		<?php echo $this->get_content(); ?>
	</section>
	<footer>
		<p class="post-byline">written by <span class="post-author" itemprop="name"><?php echo $this->data['author']; ?></span></p>
		<p><a class="all-posts" href="posts" rel="prev">View All Posts</a></p>
	</footer>
</article>


