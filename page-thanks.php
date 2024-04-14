<?php get_header(); ?>


<!-- パンくずリスト -->
<?php if (function_exists('bcn_display')) : ?>
  <div class="breadcrumb">
    <div class="header-title">
      <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>


<!-- メインコンテンツ main -->
<div class="thanks">
  <div class="thanks-title">
    <h1 class="thanks-reply">お問い合わせの送信が完了しました。</h1>
  </div>
</div>







<?php get_footer(); ?>





<!-- <div class="input">
  <p>名前</p>
[text* name1 placeholder "名前太郎"]
</div>
<div class="input">
  <p>フリガナ</p>
 [text* name2 placeholder "ナマエタロウ"]
</div>
<div class="input">
  <p>住所</p>
  [text adress]
</div>
<div class="input">
  <p>電話番号</p>
  [tel* tel1]
</div>
<div class="input">
  <p>メールアドレス</p>
  [email* email1]
</div>
<div class="textarea">
  <p>問い合わせ内容</p>
[textarea* textarea1]
</div> -->

