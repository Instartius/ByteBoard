<form action="<? echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<? 
		if($user_ID):
			content_place_holder('commentuser');
		else:
			content_place_holder('commentanon');
		endif;
		do_action('comment_form', $post->ID);
		content_place_holder('commentarea');
	?>
</form>