<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
		<?php if (have_posts()) : ?>

		<h2>Search Results</h2>
		<p>Your search for <strong><?php the_search_query() ?></strong> discovered the following results:</p>

	<?php while (have_posts()) : the_post(); // START INDIVIDUAL ENTRY ?>
		<div class="post" id="post-<?php the_ID(); ?>"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> on <?php the_time('D, F jS, Y @ g:ia') ?></h3></div>
		
		<div class="excerpt">
		<?php the_excerpt(); ?>
		</div>
	
		<p class="center"><img src="<?php bloginfo("template_url"); ?>/images/hr.png" alt="" /></p>
	
	<?php endwhile; // START REST OF PAGE ?>
		<div class="browse">
		<p class="older"><?php next_posts_link('&laquo; Older Posts '); ?></p>
		<p class="newer"><?php previous_posts_link('Newer Posts &raquo;'); ?></p>
		</div>

	<?php else :?>
		<h2>Search Results</h2>
		<p>Nothing was found for your search: <strong><?php the_search_query() ?></strong></p>
		<p>Try your search again?</p>
	<?php endif; ?>
	
</div><!--content-->
<?php get_footer(); ?>