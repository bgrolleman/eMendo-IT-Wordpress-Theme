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
			<div class="container">
				<div id="header">
					<div id="logo"><h1>eMendo-IT</h1></div>
						<?php wp_nav_menu (
							array(
								'menu' => 'primary_nav',
								'container' => '',
								'depth' => 1,
								'menu_id' => 'menu'
							)
						)
						?>
				</div>
				<div id="content">
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="block">
							<div class="block_inside">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<small><?= __('on') ?> <?php the_time('M d'); ?> <?= __('by'); ?> <?php the_author_posts_link(); ?> 
									(<?php the_category(',') ?>,<?php the_tags(',') ?>)</small>
								<?php the_content('Read More'); ?>
							</div>
						</div>
					<?php endwhile; ?>
						<div id="posts_navigation">
							<?php previous_posts_link(); ?>
							<?php next_posts_link(); ?>
						</div>
					<?php else : ?>
						<div class="block">
							<div class="block_inside">
								<h2><?= __('Not Found'); ?></h2>
								<p><?= __('Sorry, can\'t find a post'); ?></p>
								<?php include(TEMPLATEPATH . '/searchform.php'); ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div id="sidebar">
					<?php dynamic_sidebar(); ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="footblock"><h2><?= get_menu_title('footer_left') ?></h2><?php wp_nav_menu ( array('theme_location' => 'footer_left')); ?></div>
				<div class="footblock"><h2><?= get_menu_title('footer_center') ?></h2><?php wp_nav_menu ( array('theme_location' => 'footer_center')); ?></div>
				<div class="footblock"><h2><?= get_menu_title('footer_right') ?></h2><?php wp_nav_menu ( array('theme_location' => 'footer_right')); ?></div>
			</div>
		</div>
	</body>
</html>
