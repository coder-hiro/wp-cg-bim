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


