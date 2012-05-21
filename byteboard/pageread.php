<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	<article>
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
		<div class="post-content">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
		</div>
	</article>
    
    <div class="post-social">
		<div class="gp btn-social">
			<g:plusone size="medium" href="<?php echo the_permalink(); ?>"></g:plusone>
		</div>
		<div class="tw btn-social">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo the_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="foreverbyteco" data-lang="es" data-related="Doracol_">Twittear</a>
		</div>
		<div class="su btn-social">
			<su:badge layout="2" location="<?php echo the_permalink(); ?>"></su:badge>
		</div>
		<div class="fb btn-social">
    		<div id="fb-root"></div>
			<fb:like href="<?php echo the_permalink(); ?>" show_faces="false" width="450" layout="button_count"></fb:like>
		</div>
    </div>

	<div id="post-meta">
		<p><?php _e('Escrito en '); the_time('F j, Y'); ?><?php _e(',  por '); the_author_posts_link() ?></p>
		<p><?php _e(' Categorias: '); the_category(', ') ?></p>
		<p><?php the_tags('Etiquetas: ', ', ', ' '); ?></p>
	</div>

	<div id="post-author">
		<p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?></p>
		<div id="authorDescription">
			<?php the_author_meta('description') ?> 
			<div id="author-link">
				<p><?php _e('Más articulos de '); the_author_posts_link() ?></p>
			</div>
		</div>
	</div>
</div>