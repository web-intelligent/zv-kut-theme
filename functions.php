<?php

add_theme_support( 'post-thumbnails' );

add_filter( 'excerpt_length', function(){
	return 10;
} );

add_filter('excerpt_more', function($more) {
	return '...';
});