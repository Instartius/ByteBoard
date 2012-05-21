<?php content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>

<div class="container" />
<div id="content" class="article">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php content_place_holder('postread'); ?>
	<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
</div class="container">
<?php get_footer(); ?>
<?php content_place_holder('htmlend'); ?>