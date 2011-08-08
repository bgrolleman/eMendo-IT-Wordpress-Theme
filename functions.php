<?php
  // This Theme assumes Wordpress 3.0 or higher
  add_theme_support('menus');
  register_nav_menu('primary_nav', 'Primary Navigation');
	register_nav_menu('footer_left', 'Footer Left');
	register_nav_menu('footer_center', 'Footer Center');
	register_nav_menu('footer_right', 'Footer Right');

	register_sidebar(array(
		'name' => 'right',
		'before_widget' => '<div class="block"><div class="block_inside">',
		'after_widget' => '</div></div>'
	));

	function get_menu_title ( $id ) {
		$menu_locations = get_nav_menu_locations();
		$menu = get_term_by('id',$menu_locations[$id],'nav_menu',ARRAY_A);
		return $menu['name'];
	}
?>
