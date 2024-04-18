  <!-- ヘッダーの読み込み -->
  <?php
  /* Template Name: TOPページ */
  get_header(); ?>

  <!-- メインコンテンツ main -->
  <main class="l-main">
    <div class="main-wrapper">
      <div class="p-main-flex">
        <div class="main-logo">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bird-11814_512.gif" alt="welcome" class="main-logo-item" />
        </div>
        <div class="main-intro">
          <h1 class="main-occupation">WEB CODER</h1>
          <div class="main-intro-box">
            <div class="intro-flex">
              <div class="intro-name">
                <h2>Hiro</h2>
              </div>
              <div class="self-pic">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/self-logo.jpg" alt="" width="150" height="150" />
              </div>
            </div>
            <div class="main-intro-text">
              <p class="intro-text">
                
                私のポートフォリオサイトへようこそ<br />
                WordPressでのサイト制作や、<br>HTML/CSS/JavaScriptを使ったコーディングなど、<br />
                お仕事のご依頼やご相談など、<span class="word-break-2">お気軽にお問い合わせください。</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- オープニングアニメーション -->
  <!-- <div class="fv_loading">
    <div class="fv_loading-shadow">
      <div class="fv_logo fv_logo_loading">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/thank-you-2490552_1920.png" alt="welcome for my site" class="fv_logo_item" />
      </div>
    </div>
  </div> -->

  </div>

  <!-- footerの読み込み -->
  <?php get_footer(); ?>