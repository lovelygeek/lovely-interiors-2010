<?php get_header(); ?>
<?php get_sidebar(); ?>	

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="subject"><a href="<?php trackback_url(); ?>"><?php the_title(); ?></a></div>
			<div class="commentlink"><?php the_time('l, F jS, Y') ?> <?php edit_post_link('Edit &raquo;', '&oslash; ', ''); ?></div>
		</div>
		
			<div class="entry"><?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?></div>

		<p><img src="<?php bloginfo("template_url"); ?>/images/heart.png" alt="" class="middle" /> <?php wp_link_pages(); ?><a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a></p>
		<?php comments_template(); // Get wp-comments.php template ?>
		
		<div class="browse">
		<p class="next"><?php next_post_link('%link &raquo;'); ?></p>
		<p class="previous"><?php previous_post_link('&laquo; %link'); ?></p>
		</div>
		<?php endwhile; endif; ?>
		
</div><!--content-->	
<?php get_footer(); ?>