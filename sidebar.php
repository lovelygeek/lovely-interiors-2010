<div id="sidebar">
<h2>Navigation</h2>
<ul class="side">
<li><a href="<?php echo home_url( '/' ); ?>"><?php _e('Home'); ?></a></li>
<?php wp_list_pages('title_li='); ?> 
</ul>

<?php if (is_home()) { ?>

<h2>Welcome</h2>
Welcome to Lovely Interiors! I'm Cristina, owner of <a href="http://lovelygeek.net">Lovely Geek Designs</a>! This is my little space where I can share my interior design projects, inspirations, ideas, and share life inside the home. <a href="http://interiors.lovelygeek.net/about/">More?</a>
<p class="center">
<a href="http://feeds.feedburner.com/LovelyInteriors"><img src="<?php bloginfo("template_url"); ?>/images/rss.png" alt="rss" /></a>
<a href="http://www.flickr.com/photos/darth_cena/"><img src="<?php bloginfo("template_url"); ?>/images/flickr.png" alt="flickr" /></a>
<a href="http://twitter.com/#!/BonjourLaBelle"><img src="<?php bloginfo("template_url"); ?>/images/twitter.png" alt="@BonjourLaBelle" /></a>
</p>

<h2>Categories</h2>
<ul class="side"><?php wp_list_categories( '&title_li='); ?></ul>

<h2>Archives</h2>
<ul class="side"><?php wp_get_archives('type=monthly'); ?></ul>

<h2>Inspiration</h2>
<ul class="side"><?php wp_list_bookmarks('title_li=&categorize=0&category=5'); ?></ul>

<h2>Shopping</h2>
<ul class="side"><?php wp_list_bookmarks('title_li=&categorize=0&category=3'); ?></ul>

<h2>Search</h2>
<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"></label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
<?php } ?> 



<?php if ((is_page('about')) or (is_page('contact'))) { ?>
<h2>Elsewhere</h2>
<ul class="side">
<li><a href="http://lovelygeek.net">Lovely Geek Designs</a></li>
<li><a href="http://joshandcristina.com">Joshua &amp; Cristina</a></li>
</ul>
 
<p class="center">
<a href="http://feeds.feedburner.com/LovelyInteriors"><img src="<?php bloginfo("template_url"); ?>/images/rss.png" alt="rss" /></a>
<a href="http://www.flickr.com/photos/darth_cena/"><img src="<?php bloginfo("template_url"); ?>/images/flickr.png" alt="flickr" /></a>
<a href="http://twitter.com/#!/BonjourLaBelle"><img src="<?php bloginfo("template_url"); ?>/images/twitter.png" alt="@BonjourLaBelle" /></a>
</p> 
<?php } ?>



<?php if ((is_archive()) or (is_search())) { ?>
<h2>Calendar</h2>
<?php get_calendar(); ?>

<h2>Categories</h2>
<ul class="side"> <?php wp_list_categories( '&title_li='); ?> </ul>			

<h2>Search</h2>
<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"></label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
<?php } ?>	
</div><!--End sidebar-->