<div class="post-meta">
	<div class="post-title">
		<h2>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
				<?php the_title(); ?>
    		</a>
		</h2>
	</div><!--.post-title-->
	<div class="post-date">
		<span>
			<?php the_time('j \d\e F \d\e\l Y'); ?>			
		</span>
	</div><!--.post-date-->
	<div class="post-info">
		<div class="comments">
			<span>
				<?php comments_popup_link('0', '1', '%'); ?>
			</span>
			Comentarios
		</div>
		<div class="editor-data">
			<?php the_author_posts_link(); ?>
		</div>
	</div><!--.post-info-->
</div><!--.postMeta-->
<div class="post-content">
	<?php 
    /*if ( has_post_thumbnail() ) 
	{ 
		echo '<div class="featured-thumbnail">';
		the_post_thumbnail();
		echo '</div>'; 
	} */
	?>
	<?php the_content(__('Leer más'));?>
</div>
<div class="post-social">
	<?php content_place_holder('postsocial'); ?>
</div>
