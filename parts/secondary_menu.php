<?php

wp_nav_menu( [
	'theme_location'  => 'widget_menu',
	'menu'            => '', 
	'container'       => 'ul', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'secondary-menu', 
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] );

?>