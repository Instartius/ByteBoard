<div class="container">
	<nav>
		<?php 
			if ( is_user_logged_in() ) 
			{
     			wp_nav_menu( array( 'theme_location' => 'logged-in-menu' ) ); /* if the visitor is logged in, this primary navigation will be displayed */
			}
			else 
			{
     			wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); /* if the visitor is NOT logged in, this primary navigation will be displayed. if a single menu should be displayed for both conditions, set the same menues to be displayed under both conditions through the Wordpress backend */
			}
		?>
		<div class="search">
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div>
	</nav>
</div>