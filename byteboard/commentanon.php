<p>
    <p>
		<label for="author">
			Nombre <? if($req) echo "(requerido)"; ?>
		</label>
		<br/>
		<input type="text" name="author" id="author" value="<? echo $comment_author; ?>" size="22" tabindex="1" />
	</p>
	<p>
		<label for="email">
			Correo Electrónico (no será publicado):
			<? if($req) echo "(required)"; ?>
		</label>
		<br/>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
	</p>
	<p>
		<label for="url">
			Sitio Web / Blog:
		</label>
		<br/>
		<input type="text" name="url" id="url" value="<? echo $comment_author_url; ?>" size="22" tabindex="3" />
	</p>
</p>