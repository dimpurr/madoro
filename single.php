<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section id="article">
	
	<?php get_template_part('content'); ?>

	<nav id="post_nav">
		<span id="p_n_l"><?php previous_post_link( '%link', '&larr; ' . '%title' ); ?></span>
		<span id="p_n_r"><?php next_post_link( '%link', '%title ' . '&rarr;' ); ?></span>
	</nav>

	<?php comments_template( '', true ); ?>

</section>

<?php endwhile; // end of the loop. ?>
<?php
	get_sidebar();
	get_footer(); ?>