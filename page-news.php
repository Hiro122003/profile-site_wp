<!DOCTYPE html>
<?php
/* Template Name: Newsページ */
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
<main class="l-news">
  <div class="p-news">
    <h1 class="p-news-title">News</h1>

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $the_query = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      // 'category_name' => 'blog',
      'post_status' => 'publish',
      'orderby' => 'date',
      'paged' => $paged,
    ));
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <article class="p-news-wrap">
          <a href="<?php the_permalink() ?>" class="p-news-link">
            <div class="p-news-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
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
  </div>

</main>
<!-- ページネーションの追加 ページ番号のリンクで表示-->
<div class="pagination">
  <?php
      echo paginate_links(array(
        'total' => $the_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'format' => '?paged=%#%',
        'show_all' => false,
        'end_size' => 1,
        'mid_size' => 2,
        'prev_next' => true,
        'prev_text' => __('&larr; 前へ'),
        'next_text' => __('次へ &rarr;'),
        'type' => 'plain',
      ));
  ?>
</div>


<!-- <div class="pagination">
  <div class="nav-previous"><?php next_posts_link('&larr; 古い投稿', $the_query->max_num_pages); ?></div>
  <div class="nav-next"><?php previous_posts_link('新しい投稿 &rarr;'); ?></div>
</div> -->


<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>