<div id="comments-form">
	<?
	if(comments_open())
	{
		if(get_option('comment_registration') && !$user_ID) : 
	?>
			<p>
				Lo sentimos, debes haber
				<a href="<? echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<? echo urlencode(get_permalink()); ?>">
					iniciado sesión
				</a>
				para comentar.
			</p>
		<?
		else:
			content_place_holder('comform');
		?>
			<p>
				Al comentar concencedes a <? bloginfo('name'); ?> perpetuo derecho de reproducir tus palabras. Comentarios que sean irrelevantes o inapropiados seran eliminados por la administración. Tu correo electronico es usado exclusivamente con fines de verificación y nunca será publicado.
			</p>
	<? endif; 
	}
	else
	{
	?>
		<p>
			Los comentarios están cerrados
		</p>
	<? 
	}
	?>
</div>