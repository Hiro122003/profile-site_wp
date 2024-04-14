<?php 
/* Template Name: お問い合わせページ */
get_header(); ?>

<!-- パンくずリスト -->
<?php if(function_exists('bcn_display')) : ?>
  <div class="breadcrumb">
    <div class="header-title">
    <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>

      <!-- メインコンテンツ main -->
        <?php the_content(); ?>

      <!-- <div id="contact" class="l-contact">
        <div class="p-contact-form">
            <h2 class="p-contact-main-title">お問い合わせ</h2>
            <form action="">
                <div class="input">
                    <p>名前</p>
                    <input type="text">
                </div>
                <div class="input">
                    <p>フリガナ</p>
                    <input type="text">
                </div>
                <div class="input">
                    <p>住所</p>
                    <input type="text">
                </div>
                <div class="input">
                    <p>電話番号</p>
                    <input type="text">
                </div>
                <div class="input">
                    <p>メールアドレス</p>
                    <input type="mail">
                </div>
                <div class="textarea">
                    <p>問い合わせ内容</p>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="submit">
                    <input type="submit"  value="送信">
                </div>
            </form>
        </div>
    </div> -->

<?php get_footer(); ?>