<div id="sidebar">
	<ul>
		<?php if ( !dynamic_sidebar( 'Sidebar' )) : ?>
			<!--
			<li id="sidebar-nav" class="widget menu">
				<h3><?php _e('Navigation'); ?></h3>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); // editable within the Wordpress backend ?>
				</ul>
			</li>
			-->
		<?php endif; ?>
	</ul>
</div>