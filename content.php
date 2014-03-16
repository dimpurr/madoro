<article class="ar_ctn">

<header class="ar_h">
	
	<h2><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a></h2>
	
	<div class="hl">
		<div class="hl_tags">
			<?php echo edit_post_link( __('编辑','dpt') ); ?><?php the_category(' '); ?><a href="<?php the_permalink(); ?>"><?php the_time('m / j') ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php the_time('H : i') ?></a><?php the_tags('','',''); ?>
		</div>
	</div>
		
	<div class="hr">
		
		<a href="<?php comments_link(); ?>" >
			<?php comments_number( __('回复','dpt') , __('1','dpt') , __('%','dpt') ); ?>
		</a>
		
	</div>

</header>

<section class="ar_t">
	<?php the_content(__('继续阅读','dpt')); ?>
</section>

</article>