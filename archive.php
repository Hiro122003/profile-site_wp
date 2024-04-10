<?php get_header(); ?>

<!-- パンくずリスト -->
<?php if (function_exists('bcn_display')) : ?>
  <div class="breadcrumb">
    <div class="header-title">
      <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>

<!-- <div class="header-title">
  <a href="index.html">Home</a>
  <p>&nbsp;&gt;&nbsp;</p>
  <a href="news.html">お知らせ</a>
  <p>&nbsp;&gt;&nbsp;</p>
  <a href="event.html">イベント</a>
  <p>&nbsp;&gt;&nbsp;</p>
  <p>今年も開催♪プレゼント企画</p>
</div> -->

<main class="l-news">
  <div class="p-news">
    <h1 class="p-news-title">
      <?php if (is_month()) : ?>
        <?php echo get_the_date('Y年m月'); ?>
      <?php else : ?>
        <?php single_cat_title(); ?>
      <?php endif; ?>
    </h1>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="p-news-wrap">
          <a href="<?php the_permalink() ?>" class="p-news-link">
            <div class="p-news-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('archive_thumbnail'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/leaves-2031234_1920.png" alt="no-img">
              <?php endif; ?>
              <div class="p-news-shadow">
                <p class="p-news-shadow-text">詳細ページ</p>
              </div>
            </div>
            <div class="p-news-box">
              <h2 class="p-news-topic"><?php the_title(); ?></h2>
              <div class="p-news-text">
                <!-- <?php the_content(); ?> -->
                <?php echo get_the_excerpt(); ?>
              </div>
              <span class="blog-type">
                <?php $get_category =  get_the_category(); ?>
                <?php echo $get_category[0]->name ?>
                <!-- <?php echo get_the_category_list(', '); ?> -->
                /</span>
              <span class="p-news-date"><?php echo get_the_date(('Y年m月d日')); ?></span>
            </div>
          </a>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php the_posts_pagination(); ?>
  </div>

</main>


<?php get_footer(); ?>