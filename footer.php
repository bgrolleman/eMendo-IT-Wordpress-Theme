		<div id="footer">
			<div class="container">
				<div class="footblock"><h2><?= get_menu_title('footer_left') ?></h2><?php wp_nav_menu ( array('theme_location' => 'footer_left')); ?></div>
				<div class="footblock"><h2><?= get_menu_title('footer_center') ?></h2><?php wp_nav_menu ( array('theme_location' => 'footer_center')); ?></div>
				<div class="footblock"><h2><?= get_menu_title('footer_right') ?></h2><?php wp_nav_menu ( array('theme_location' => 'footer_right')); ?></div>
			</div>
		</div>
		<?php wp_footer() ?>
	</body>
</html>
