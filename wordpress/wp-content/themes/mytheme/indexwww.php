
<?php get_header(); ?>

<div id="main">
	<div id="content">
		<h1>Main Content Area</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><a href="<? php the_permlink(); ?>" > <?php the_title(); ?> </a> </h1>
		
		<div class="byline"> by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink();  ?>"><?php the_time('l F d, Y'); ?></a></div>
		<p><?php the_content(__('(more...)')); ?></p>
		<hr>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, we couldn’t find the post you are looking for.'); ?></p>
		<?php endif; ?>
			<div class="navi"> 
			<div class="right"> 
				<?php previous_posts_link('Previous'); ?>  / <?php next_posts_link('Next'); ?>						
			</div>			
		</div>
	</div>

	<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>