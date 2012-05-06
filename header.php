<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');?>" />
    <meta name="generator" content="Wordpress <?php bloginfo('version'); ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url');?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url');?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?><?php wp_title();?></title>
	</head>
	<body>
		<div id="main">
			<div id="container">
				<div id="header">
					<div id="logo">&nbsp;</div>
					<div id="menu">
						<?php wp_nav_menu (
							array(
								'menu' => 'primary_nav',
								'container' => '',
								'depth' => 1,
								'menu_id' => 'menu'
							)
						)
						?>
					</div> <!-- #menu -->
				</div> <!-- #header -->
