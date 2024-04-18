<?php
/* Template Name: WORKSページ */
get_header(); ?>

<?php if(function_exists('bcn_display')) : ?>
  <div class="breadcrumb">
    <div class="header-title">
    <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>

<!-- メインコンテンツ main -->
<main class="l-works">
  <div class="p-works">
    <h1 class="p-works-main-title">Works</h1>
    <p class="p-works-main-text">これまでの作品のご紹介</p>
    <div class="p-works_wrapper">
      <!-- workクエリを取得 -->
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query = new WP_Query(array(
        'post_type' => 'work',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'date',
        'paged' => $paged,
      ));
      ?>
      <!-- ループ処理 -->
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="p-works-item">
            <a href="<?php the_permalink();?>" class="p-works-item-link">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/leaves-2031234_1920.png" alt="no-img">
              <?php endif; ?>
              <h2 class="p-works-item-title"><?php the_title(); ?></h2>
              <p class="p-works-item-content"><?php echo get_the_excerpt(); ?></p>
            </a>
          </div>
        <?php endwhile; ?>
    </div>
  </div>

  <!-- ページネーション -->
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

<?php endif; ?>
<?php wp_reset_postdata(); ?>
</main>
</div>

<!-- footerの読み込み -->
<?php get_footer(); ?>