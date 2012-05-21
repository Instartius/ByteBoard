<head>
	<title>
		<?php get_good_title(); ?>
	</title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/lessframework.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.easing.1.3.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.bxSlider.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<?php content_place_holder('socialscripts'); ?>
</head>