<?php
// タイトルの出力
function title_setup()
{
  add_theme_support('title-tag');
  //サムネイル画像の有効化
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'title_setup');


// wordpressのjqueryをストップする
function stop_jquery()
{
  if (!is_admin()) {
    wp_deregister_script('jquery');
  }
}
add_action('init', 'stop_jquery');

// WPのpタグの出力を止める 
add_action('init', function () {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function () {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = true;
  return $init;
});

// 問い合わせホームのpタグの出力を止める　Contact Form 7
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

//////////////////////  不用なソースコード削除  //////////////////////


function remove_unwanted_anchor_tags($content) {
  // aタグを削除
  $content = preg_replace('#<a.*?>.*?</a>#i', '', $content);
  return $content;
}
add_filter('the_content', 'remove_unwanted_anchor_tags');
