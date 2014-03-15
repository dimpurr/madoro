<?php // 获取头部
	get_header(); ?>

<?php if ( have_posts() ) : ?>

<section id="article">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php // 获取文章展示模版 content.php
			get_template_part('content'); ?>
	<?php endwhile; ?>

</section>

<nav id="pagenavi">
	<?php dpt_pagenavi(); ?>
</nav>

<?php else : ?>

	<h1>404</h1>

<?php endif; ?>

<?php // 获取尾部
	get_sidebar();
	get_footer(); ?>