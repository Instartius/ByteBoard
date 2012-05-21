<p>
	<label for="comment">
		Comentario:
	</label>
	<textarea name="comment" id="comment" tabindex="4"></textarea>
</p>
<p>
	<input name="submit" type="submit" id="submit" tabindex="5" value="Publicar" />
	<input type="hidden" name="comment_post_ID" value="<? echo $id; ?>" />
</p>