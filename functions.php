<?php

add_theme_support( 'post-thumbnails' );

add_filter( 'excerpt_length', function(){
	return 20;
} );

add_filter('excerpt_more', function($more) {
	return '...';
});

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'widget_menu' => 'Меню в боковой колонке',
		'footer_menu' => 'Меню в подвале',
		'mobile_menu' => 'Мобильное меню'
	] );
} );

register_sidebar( array(
    'name'          => esc_html__( 'Важное', 'zv-kut-theme' ),
	'id'            => 'attention',
    'description'   => esc_html__( 'Добавить виджет', 'zv-kut-theme' ),
    'before_widget' => '<ul class="attention">',
    'after_widget'  => '</ul>',
    'before_title'  => '<h6 class="widget-caption">',
    'after_title'   => '</h6>',
) );

register_sidebar( array(
    'name'          => esc_html__( 'Любой виджет', 'zv-kut-theme' ),
	'id'            => 'widgets',
    'description'   => esc_html__( 'Добавить виджет', 'zv-kut-theme' ),
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h6 class="widget-caption">',
    'after_title'   => '</h6>',
) );

add_action('init', 'ads');
function ads(){
	register_post_type('ads', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'author', 'excerpt', 'page-attributes', 'post-formats'),
		'labels' => array(
			'name' => 'Объявление',
			'all_items' => 'Все объявления',
			'add_new' => 'Добавить новое',
			'add_new_item' => 'Добавление объявления'
        ),
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
	));
}