<?php get_header(); ?>
<?php the_post(); ?>

<section id="article">
	
	<?php get_template_part('content'); ?>

</section>


<nav id="post_nav">
	<span id="p_n_l"><?php previous_post_link( '%link', '&larr; ' . '%title' ); ?></span>
	<span id="p_n_r"><?php next_post_link( '%link', '%title ' . '&rarr;' ); ?></span>
</nav>

<?php comments_template( '', true ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>