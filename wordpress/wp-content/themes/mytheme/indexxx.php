<?php get_header(); ?>
<?php 
	if (have_posts()) :
		while (have_posts()):
			next_post_link();
			previous_post_link();
			the_title();
			the_post(); 
			the_content();
			the_category();
			the_excerpt();
			the_tags();
			the_time();
			the_shortlink();
			the_meta();
			the_ID();
			the_author();
		endwhile; 
	else:
			_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	
	?>
     <? get_footer(); ?>
