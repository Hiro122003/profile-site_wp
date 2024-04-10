<?php
/* Template Name: Skillsページ */
get_header(); ?>

<!-- パンくずリスト -->
<?php if (function_exists('bcn_display')) : ?>
  <div class="breadcrumb">
    <div class="header-title">
      <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>

<!-- メインコンテンツ main -->
<main class="l-skills">
  <div class="p-skill">
    <h1 class="skill-title">Skills</h1>
    <div class="p-skill-grid">
      <div class="p-skill-box-flex">

        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/english.png" alt="skill1" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">英語</h2>
          <p class="p-skill-content">
            海外生活数年あり。<br>日常会話は問題ありません。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/chinese.png" alt="skill2" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">中国語</h2>
          <p class="p-skill-content">
            台湾での留学経験あり。<br>簡単な日常会話できます。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/excel.png" alt="skill3" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">エクセル</h2>
          <p class="p-skill-content">
            実務でも使用経験多数。<br>MOSの資格も取得してます。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/vba.png" alt="skill4" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">VBA</h2>
          <p class="p-skill-content">
            実務でも使用経験あり。<br>業務効率化に貢献しました。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/html5.png" alt="skill5" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">HTML</h2>
          <p class="p-skill-content">
            0から1のコーディングが得意です。<br>日々勉強中！！
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/css.png" alt="skill6" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">CSS</h2>
          <p class="p-skill-content">
            デザイン性を重視したコーディングが得意です。<br>scss記法も使用可能。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/javascript-736400_640.png" alt="skill7" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">JavaScript</h2>
          <p class="p-skill-content">
            フロントエンド開発に必須の言語です。<br>JQueryも使用可能です。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/wordpress-3090999_640.png" alt="skill8" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">ワードプレス</h2>
          <p class="p-skill-content">
            サイト制作で使用してます。<br>オリジナルテーマの作成可能です。
          </p>
        </div>
      </div>

      <div class="p-skill-box-flex">
        <div class="p-skill-img-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills/react-js.png" alt="skill9" width="150" height="150" />
        </div>
        <div class="skill-content-box">
          <h2 class="p-skill-title">React</h2>
          <p class="p-skill-content">
            JavaScriptのライブラリです。<br>アプリの開発に使用してます。
          </p>
        </div>
      </div>

    </div>
  </div>
</main>
</div>

<?php get_footer(); ?>