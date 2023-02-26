<?php get_header(); ?>
<div id="main">
	<div id="content">
		<h1>Main Content Area</h1>
<?php 

	if (have_posts()) :
		while (have_posts()):
			next_post_link();
			echo "<br>";
			previous_post_link();
			echo "<br>";
			the_title();
			echo "<br>";
			the_post(); 
			echo "<br>";
			the_content();
			echo "<br>";
			the_category();
			echo "<br>";
			the_excerpt();
			echo "<br>";
			the_tags();
			echo "<br>";
			the_shortlink();
			echo "<br>";
			the_meta();
			echo "<br>";
			the_ID();
			echo "<br>";
			the_author();
			echo "<br>";
			the_time();
			echo "<br>";
		endwhile; 
	else:
			_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	
	?>
	<div class="navi"> 
			<div class="right"> 
				<?php previous_posts_link('Previous'); ?>  / <?php next_posts_link('Next'); ?>						
			</div>			
		</div>
	</div>

	<?php get_sidebar(); ?>

</div>
     <?php get_footer(); ?>
