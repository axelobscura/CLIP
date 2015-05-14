<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>
<?php include ('header_home.php'); ?>
<div class="hero_blog">
</div>
<div class="container blog">
	<div class="row">
    	<div class="col-md-4">
        	<?php get_sidebar(); ?>
        </div>
        <div class="col-md-8">
        	<div id="content">
            	<?php query_posts('posts_per_page=10'); ?>
            	<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p><?php the_content(__('(more...)')); ?></p>
                <hr> <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
                
                
            </div>
        </div>
    </div>
    <div id="delimiter">
    </div>
    
</div>
<?php get_footer(); ?>