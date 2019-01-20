<?php

// ウィジェット
register_sidebar();

// RSSフィード
add_theme_support('automatic-feed-links');

// カスタムメニュー
register_nav_menu('navigation', 'ナビゲーション');

/* // カスタムヘッダー
add_theme_support('custom-header',array(
  'width' => 1500,
  'height' => 398,
  'default-image' => '%s/header-1500x398.png',
  'header-text' => false
) );
*/

// カスタムヘッダー 2
$custom_header_defaults = array(
		'default-image'          => get_template_directory_uri() . '/header-1500x398.jpg',
		'width'                  => 1500,
		'height'                 => 398,
		'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
);
add_theme_support( 'custom-header', $custom_header_defaults );

// カスタム背景
add_theme_support('custom-background');

// 概要（抜粋）の文字数
function my_length($length) {
  return 70;
}
add_filter('excerpt_mblength','my_length');

//概要（抜粋）の省略記号
function my_more($more) {
  return '…';
}
add_filter('excerpt_more','my_more');

// アイキャッチ画像
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 150, true);
