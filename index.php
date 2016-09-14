<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="subject"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="commentlink"><?php the_time('l, F jS, Y') ?> <?php edit_post_link('Edit &raquo;', '&oslash; ', ''); ?></div>
		</div>

		<!--storycontent-->
		<?php the_content('Read the rest of this entry &raquo;'); ?>
		<!--storycontent-->
		
		<p><img src="<?php bloginfo("template_url"); ?>/images/heart.png" alt="" class="middle" /> <?php wp_link_pages(); ?><a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a></p>
		<p class="center"><img src="<?php bloginfo("template_url"); ?>/images/hr.png" alt="" /></p>
		<?php comments_template(); // Get wp-comments.php template ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
		<div class="browse">
		<p class="older"><?php next_posts_link('&laquo; Older Posts '); ?></p>
		<p class="newer"><?php previous_posts_link('Newer Posts &raquo;'); ?></p>
		</div>
	</div>	

<?php get_footer(); ?>