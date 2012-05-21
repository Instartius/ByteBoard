<li id="comment-<? comment_ID(); ?>" class="comment <? commentli_classes(); ?>">
	<? if ( $comment -> comment_approved == '0') : ?>
		<p class="waiting-for-approval">
			<em>
				Tú comentario esta en cola para ser aprobado.
			</em>
		</p>
	<? endif; ?>
	<div class="comment-text">
		<?php comment_text(); ?>
	</div>
	<div class="comment-meta">
		<? edit_comment_link('Editar comentario', '', ''); ?>
		<? comment_type(); ?> by <? comment_author_link(); ?> on <? comment_date(); ?> at <? comment_time(); ?>
		<p class="gravatar">
			<?php if(function_exists('get_avatar')) { echo get_avatar($comment, '36'); } ?>
		</p>
	</div>
</li>