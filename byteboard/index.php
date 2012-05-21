<?php content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>
<?php content_place_holder('slide'); ?>

<div class="container">
	<div id="content">
		<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
			<!--Wigitized 'Alert' for the home page -->
		<?php endif ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<?php content_place_holder('postitem'); ?>
			</div>
		<?php endwhile; else: ?>
			<div class="no-results">
				<?php content_place_holder('noresults'); ?>
			</div>
		<?php endif; ?>
		<div class="oldernewer">
			<p class="older"><?php next_posts_link('&laquo; Anteriores publicaciones') ?></p>
			<p class="newer"><?php previous_posts_link('Posteriores publicaciones &raquo;') ?></p>
		</div>
	</div><!--#content-->

	<?php get_sidebar(); ?>
	
	<div class="clear"></div>
</div><!--.container-->
<?php get_footer(); ?>
<?php content_place_holder('htmlend'); ?>