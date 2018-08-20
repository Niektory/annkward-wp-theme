<?php

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'custom-header' );
add_theme_support( 'automatic-feed-links' );

function remove_accents_from_url( $title ) {
	return urlencode( remove_accents( urldecode( $title ) ) );
}
add_filter( 'sanitize_title', 'remove_accents_from_url' );
