<div id="comments">
	<?
		comments_validation();
		$i++; // Variable for alternating comment styles
		//content_place_holder('commentsloop');
		if($comments):
	?>
			<div id="commentsloop">
				<h3>
					<? comments_number('Sin comentarios', '1 comentario', '% comentarios'); ?>
				</h3>
				<ol>
					<?
					foreach($comments as $comment)
					{
						$comment_type = get_comment_type();
						if($comment_type == 'comment')
							content_place_holder('thecomment');
						else
							$trackback = true;
					}
					?>
				</ol>
				<?
				if ($trackback == true)
				{
				?>
					<h3>Trackbacks</h3>
					<ol>
						<? foreach ($comments as $comment) : ?>
							<? $comment_type = get_comment_type(); ?>
							<? if($comment_type != 'comment') ?>
								<li>
									<? comment_author_link() ?>
								</li>
						<? endforeach; ?>
					</ol>
				<?
				}
				?>
			</div>
		<?
		else:
		?>
			<p>
				No hay comentarios acerca de ésta publicación todavia. ¡Sé el primero en comentar!
			</p>
		<? endif; ?>
	<?
		content_place_holder('commentsform');
	?>
</div>