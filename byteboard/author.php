<? content_place_holder('htmlbegin'); ?>
<?php get_header(); ?>

<div class="container" >
	<div id="content">
		<?php
			if(isset($_GET['author_name'])) :
				$curauth = get_userdatabylogin($author_name);
			else :
				$curauth = get_userdata(intval($author));
			endif;
		?>
		<div class="author">
			<h1><?php _e('Acerca de '); ?> <?php echo $curauth->display_name; ?></h1>
			<p class="avatar"><?php if(function_exists('get_avatar')) { echo get_avatar( $curauth->user_email, $size = '180' ); } /* Displays the Gravatar based on the author's email address. Visit Gravatar.com for info on Gravatars */ ?></p>
			
			<?php if($curauth->description !="") { /* Displays the author's description from their Wordpress profile */ ?>
				<p><?php echo $curauth->description; ?></a></p>
			<?php } ?>
		</div>
	
		<div id="recent-author-posts">
			<h3><?php _e('Publicaciones recientes de '); echo $curauth->display_name; ?></h3>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); /* Displays the most recent posts by that author. Note that this does not display custom content types */ ?>
				<?php static $count = 0;
				if ($count == "5") // Number of posts to display
					{ break; }
				else { ?>
					<div class="post-single">
						<? content_place_holder('postitem'); ?>
					</div>
				<?php $count++; } ?>
			<?php endwhile; else: ?>
				<p><?php _e('No posts by '); echo $curauth->display_name; ?> yet.</p>
			<?php endif; ?>
		</div><!--#recentPosts-->
	
		<div id="recent-author-comments">
			<h3><?php _e('Recent Comments by '); echo $curauth->display_name; ?></h3>
			<?php
				$number=5; // number of recent comments to display
				$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
			?>
			<ul>
				<?php
					if ( $comments ) : foreach ( (array) $comments as $comment) :
					echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
				endforeach; else: ?>
					<p><?php _e('No comments by '); echo $curauth->display_name; ?></p>
				<?php endif; ?>
			</ul>
		</div><!--#recentAuthorComments-->
	</div>
</div>
<?php get_footer(); ?>
<? content_place_holder('htmlend'); ?>