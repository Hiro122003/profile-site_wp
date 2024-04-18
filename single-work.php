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
<main class="l-s-news">
  <div class="p-s-news">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="s-news-title"><?php the_title(); ?></h1>
        <div class="s-news-category_date">
          <span class="s-news-category">
            <!-- <?php $get_category =  get_the_category(); ?>
        <?php echo $get_category[0]->name ?> / -->
            <!-- カテゴリーリンクの出力 -->
            <?php echo get_the_category_list(', '); ?>/
          </span>
          <span class="s-news-date">
            <!-- 日付リンクの出力 -->
            <?php
            $post_year = get_the_date('Y');
            $post_month = get_the_date('m');
            ?>
            <a href="<?php echo get_month_link($post_year, $post_month) ?>">
              <?php echo get_the_date('Y年m月d日'); ?>
            </a>
          </span>
        </div>
        <div class="s-news-img">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/leaves-2031234_1920.png" alt="no-img">
          <?php endif; ?>
        </div>
        <div class="s-news-text">
          <?php the_content(); ?>
        </div>

        <div class="s-news-link">
          <!-- 前の記事 -->
          <div class="p-s-news-pre-link s-news-link-border">

            <?php previous_post_link('&lt; %link'); ?>
          </div>
          <!-- 記事一覧 -->
          <div class="p-s-news-link s-news-link-border">
            <a href="<?php echo esc_url(home_url('works')); ?>" class="s-news-link-list">一覧へ戻る</a>
          </div>
          <!-- 次の記事 -->
          <div class="p-s-news-next-link s-news-link-border">
            <?php next_post_link('%link  &gt;'); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>




<?php get_footer(); ?>