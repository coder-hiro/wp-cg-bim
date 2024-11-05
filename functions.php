<?php

// すべてのアイキャッチ画像の有効化
add_theme_support('post-thumbnails');


// デフォルトのアイキャッチ画像を指定する
function set_default_thumbnail_image($html)
{
  if ("" === $html) {
    $html = '<img src="' . get_template_directory_uri() . '/img/post.jpg"
    alt="デフォルトのアイキャッチ画像" />';
  }
  return $html;
}
add_filter('post_thumbnail_html', 'set_default_thumbnail_image');

//cssとjsファイルの読み込み
function my_enqueue_scripts()
{
  //cssファイルの読み込み
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', false, filemtime(get_stylesheet_directory() . '/style.css'));

  //jQuery本体の読み込み
  wp_enqueue_script('jquery');

  //script.jsの読み込み
  wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', false, filemtime(get_stylesheet_directory() . '/js/script.js'), true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
