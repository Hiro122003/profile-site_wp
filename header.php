<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Sofia&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/reset.css" />
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/swiper-bundle.min.css" />

  <!-- ページによって読み込むCSSファイルを変える -->
  <?php if (is_home() || is_front_page()) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/home.css" />

  <?php elseif (is_page('about')) : ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.6/vivus.min.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/about.css" />

  <?php elseif (is_page('skills')) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/skills.css" />

  <?php elseif (is_page('news')) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/news.css" />

  <?php elseif (is_page('contact')) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/contact.css" />

  <?php elseif (is_page('thanks')) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/thanks.css" />

  <?php elseif (is_single()) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/single.css" />

  <?php elseif (is_archive()) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/archive.css" />



  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="l-wrapper" id="wrapper">

    <!-- ヘッダー header -->
    <header id="header" class="i-hd">
      <div class="p-hd">
        <div class="p-hd_logo">
          <a href="/" class="p-dh-link">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/basketball_logo.png" alt="ロゴ" width="160" height="80" />
          </a>
        </div>
        <nav class="hd-nav">
          <ul class="hd-nav-list">
            <li class="hd-nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>about" class="hd-nav-link <?php if (is_page('about')) echo 'current'; ?>"><span>About</span></a>
            </li>
            <li class="hd-nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>skills" class="hd-nav-link <?php if (is_page('skills')) echo 'current'; ?>"><span>Skills</span></a>
            </li>
            <li class="hd-nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>news" class="hd-nav-link <?php if (is_page('news')) echo 'current'; ?>"><span>News</span></a>
            </li>
            <li class="hd-nav-item contact-item">
              <a href="<?php echo esc_url(home_url('/')); ?>contact" class="hd-nav-link <?php if (is_page('contact')) echo 'current'; ?> contact-form"><span>Contact</span></a>
            </li>
          </ul>
        </nav>

        <!-- ハンバーガメニュー -->
        <div class="l-sp-menu-btn" id="sp_menu_btn">
          <div class="p-sp-menu-btn">
            <p class="p-sp-menu-btn-title">MENU</p>
          </div>
        </div>

      </div>
    </header>

    <!-- ハンバーガメニューのオーバーレイ -->
    <div class="l-sp-menu" id="sp_menu">
      <div class="p-sp-menu">
        <ul class="p-sp-menu__list">
          <li class="p-sp-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>about/" class="p-sp-menu__link<?php if (is_page('about')) echo ' current'; ?>"><span>About</span></a>
          </li>
          <li class="p-sp-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>skills/" class="p-sp-menu__link<?php if (is_page('skills')) echo ' current'; ?>"><span>Skills</span></a>
          </li>
          <li class="p-sp-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>news/" class="p-sp-menu__link<?php if (is_page('news')) echo ' current'; ?>"><span>News</span></a>
          </li>
          <li class="p-sp-menu__item p-sp-menu__item--contact">
            <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="p-sp-menu__link p-sp-menu__link--contact-btn<?php if (is_page('contact')) echo ' current'; ?>"><span>Contact</span></a>
          </li>
        </ul>

      </div>
    </div>