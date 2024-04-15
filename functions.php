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

//type属性、style属性を完璧に消す
function html5_validation($buffer)
{
  $buffer = preg_replace('/\s?type=(\'|")text\/(javascript|css)(\'|")/is', '', $buffer);
  return $buffer;
}
function buf_start()
{
  ob_start('html5_validation');
}
function buf_end()
{
  if (ob_get_length()) {
    ob_end_flush();
  }
}
add_action('after_setup_theme', 'buf_start');
add_action('shutdown', 'buf_end');


// 余計なソース削除
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');



//////////////////////  セキュリティ対策  //////////////////////

//投稿者アーカイブが不要な場合（ユーザーID漏洩防止）
add_filter('author_rewrite_rules', '__return_empty_array');

// authorページ削除
function author_custom_redirection()
{
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
  $wp_rewrite->author_base = '';
  $wp_rewrite->author_structure = '/';
  if (isset($_REQUEST['author']) && !empty($_REQUEST['author'])) {
    wp_redirect(home_url());
    exit;
  }
}
add_action('init', 'author_custom_redirection');
