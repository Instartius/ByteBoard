<header>
	<div class="container">
		<div id="title">
			<div id="logo">
				<a href="<? bloginfo('url'); ?>/" title="<? bloginfo('description'); ?>">
					<img src="<? header_image(); ?>" />
				</a>
				<h1 class="hide">
					<?php bloginfo('name'); ?>
				</h1>
			</div>
			<div id="tagline">
				<?php bloginfo('description'); ?>
			</div>
		</div><!--#title-->
		<div id="header-advert">
			<script type="text/javascript">
				google_ad_client = "ca-pub-5110428742100635";
				google_ad_slot = "0205002617";
				google_ad_width = 728;
				google_ad_height = 90;
			</script>
			<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
		<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
			<!-- Wigitized Header -->
		<?php endif ?>
		<div class="clear"></div>
	</div><!--.container-->
</header>