<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<article>
		<h1>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
		<?php edit_post_link('<small>Editar publicación</small>','',''); ?>
		<div class="post-content">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
		</div>
	</article>

	<div id="post-meta">
		<p><?php _e('Escrito en '); the_time('F j, Y'); /*_e(' at '); the_time() */?><?php _e(',  por '); the_author_posts_link() ?></p>
		<p><?php _e(' Categorias: '); the_category(', ') ?></p>
		<p><?php the_tags('Etiquetas: ', ', ', ' '); ?></p>
		<!--<p><?php _e('Receive new post updates:'); ?> <a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">Entries (RSS)</a></p>-->
		<!--<p><?php _e('Receive follow up comments updates: '); ?><?php post_comments_feed_link('RSS 2.0'); ?></p>-->
	</div><!--#post-meta-->
	
	<div id="post-author">
		<p class="gravatar">
			<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?>
		</p>
		<div id="authorDescription">
			<?php the_author_meta('description') ?> 
			<div id="author-link">
				<p><?php _e('Más articulos de '); the_author_posts_link() ?></p>
			</div><!--#author-link-->
		</div><!--#author-description -->
	</div><!--#post-author-->

</div><!-- #post-## -->

<div class="newer-older">
	<p class="older"><?php previous_post_link('%link', '&laquo; Anterior publicación') ?></p>
	<p class="newer"><?php next_post_link('%link', 'Siguiente publicación &raquo;') ?></p>
</div><!--.newer-older-->

<?php comments_template( '', true ); ?>