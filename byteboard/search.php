<? content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>
<div class="container">
	<div id="content" class="search">	
		<h1><?php the_search_query(); ?></h1>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<? content_place_holder('postitem'); ?>
			</div>
		<?php endwhile; else: ?>
			<div class="no-results">
				<? content_place_holder('noresults'); ?>
			</div>
		<?php endif; ?>
	
		<div class="oldernewer">
			<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
			<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		</div>
	</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<? content_place_holder('htmlend'); ?>