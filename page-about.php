<?php
/* Template Name: ABOUTページ */
get_header(); ?>
<!-- パンくずリスト -->


<!-- メインコンテンツ main -->
<main class="l-about" id="about">
  <!-- ファーストビュー -->
  <section class="first_view l-section">
    <div class="p-first-view">
      <!-- スワイパーの実装 -->
      <div class="p-first-view__fv-slide">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/intro_swiper/taiwan_pot.jpg" alt="自己紹介画像1" class="p-first-view__img" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/intro_swiper/owl-6466676_1920.jpg" alt="自己紹介画像2" class="p-first-view__img" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/intro_swiper/mountains-100367_1920.jpg" alt="自己紹介画像3" class="p-first-view__img" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/intro_swiper/kawasaki.jpg" alt="自己紹介画像4" class="p-first-view__img" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/intro_swiper/taiwan_pot2.jpg" alt="自己紹介画像5" class="p-first-view__img" />
          </div>
        </div>
      </div>

      <!-- スワイパーのナビゲーション -->
      <div class="p-first-view__pagination-wrap">
        <div class="p-first-view__pagination"></div>
      </div>

      <!-- ファーストビューメッセージ -->
      <div class="p-first-view__fv-message">
        <h2 class="p-first-view__fv-message-text">
          Thank you for coming to my site !!
        </h2>
      </div>
    </div>
  </section>

  <!-- 済んだ国、地域 -->
  <section class="l-intro l-section" id="introduction">
    <div class="p-intro">
      <div class="intro-text">
        <p class="intro-item">
          私のポートフォリオサイトにお越し頂き、<span class="word-break">ありがとうございます。</span><br />
          海外文化が好きで、これまでに住んだ国や地域は、<br />
          オーストラリア2年半、台湾1年、イギリス1年です。<br />
          現在WordPressを中心に学習中・案件募集中です。<br />
        </p>
      </div>

      <div class="p-settled-city">
        <h2>１年以上住んだ都市</h2>
      </div>

      <div class="p-intro-slide">
        <div class="swiper-wrapper p-swiper-flex">
          <div class="swiper-slide p-swiper-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/perth_AUS.jpg" alt="住んだ国1" class="p-intro-slide__img" />
            <p class="city-name">オーストラリア パース</p>
          </div>
          <div class="swiper-slide p-swiper-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/taiiwan.jpg" alt="住んだ国2" class="p-intro-slide__img" />
            <p class="city-name">台湾 台北</p>
          </div>
          <div class="swiper-slide p-swiper-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/palace-530055_1920.jpg" alt="住んだ国3" class="p-intro-slide__img" />
            <p class="city-name">イングランド ロンドン</p>
          </div>
          <div class="swiper-slide p-swiper-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ishigaki.jpg" alt="住んだ国4" class="p-intro-slide__img" />
            <p class="city-name">日本 石垣島</p>
          </div>
          <div class="swiper-slide p-swiper-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kyoto-2895857_1920.jpg" alt="住んだ国5" class="p-intro-slide__img" />
            <p class="city-name">日本 京都市</p>
          </div>
          <div class="swiper-slide p-swiper-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/osaka-2225441_1920.jpg" alt="住んだ国6" class="p-intro-slide__img" />
            <p class="city-name">日本 大阪市</p>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hiroshima-6767838_1920.jpg" alt="住んだ国7" class="p-intro-slide__img" />
            <p class="city-name">日本 広島市</p>
          </div>
        </div>
      </div>

      <!-- アニメーションロゴ -->
      <div class="animation_logo animation_logo-1">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/city1.png" alt="city" class="animation_logo-item animation_logo-item-1">
      </div>
      <div class="animation_logo animation_logo-2">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/city2.png" alt="city" class="animation_logo-item animation_logo-item-2">
      </div>
    </div>
  </section>

  <!-- 趣味  -->
  <section class="l-hobby " id="hobby">
    <div class="p-hobby">
      <h2 class="p-hobby-title">趣味</h2>
      <div class="hobby-flex">
        <div class="hobby-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mountains-8229139_1920.jpg" alt="hobby1">
          <h2 class="hobby-title">登山・ハイキング</h2>
          <p>健康に気を使って始めました。</p>
        </div>
        <div class="hobby-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/intro_swiper/kawasaki.jpg" alt="hobby2">
          <h2 class="hobby-title">ツーリング</h2>
          <p>山道を通ってのツーリングが一番</p>
        </div>
        <div class="hobby-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/onsen.jpg" alt="hobby3">
          <h2 class="hobby-title">旅行</h2>
          <p>最近は日本国内の旅行に凝ってます</p>
        </div>
      </div>
    </div>
  </section>
</main>
</div>

<?php get_footer(); ?>