<?php
/**
 * The main template file
 *
 * @package {%= title %}
 * @since 0.1.0
 */
 
get_header(); ?>

	<?php  if ( have_posts() ): ?>
		<?php while ( have_posts() ): the_post();  ?>
			
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>