<? content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>
<div class="container">
	<div id="content">
		<h1>
			<?php printf( __( 'Registro de la etiqueta: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
		</h1>
		<?php echo tag_description(); /* displays the tag's description from the Wordpress admin */ ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<? content_place_holder('postitem'); ?>
			</div><!--.1`post-single-->
		<?php endwhile; else: ?>
			<div class="no-results">
				<? content_place_holder('noresults'); ?>
			</div><!--noResults-->
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