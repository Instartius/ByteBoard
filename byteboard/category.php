<?php content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>

<div class="container">
	<div id="content">
		<h1>
			<?php printf( __( 'Categoría %s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
		</h1>
		<?php echo category_description(); ?>
		
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
			<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
			<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		</div><!--.oldernewer-->
	</div><!--#content-->
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php content_place_holder('htmlend'); ?>