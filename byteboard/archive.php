<?php content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>

<div class="container" >
	<div id="content">
		<h1>
			<?php if ( is_day() ) : /* if the daily archive is loaded */ ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
			<?php elseif ( is_month() ) : /* if the montly archive is loaded */ ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_date('F Y') ); ?>
			<?php elseif ( is_year() ) : /* if the yearly archive is loaded */ ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
			<?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
				Blog Archives
			<?php endif; ?>
		</h1>
	
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
			<p class="older"><?php next_posts_link('&laquo; Publicaciones anteriores') ?></p>
			<p class="newer"><?php previous_posts_link('Publicaciones posteriores &raquo;') ?></p>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php content_place_holder('htmlend'); ?>