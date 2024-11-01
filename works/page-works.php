<?php
// Template Name:実績紹介ページ
?>

<?php get_header(); ?>

<div class="page-visual">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/work.webp" alt="" />
</div>

<main>
  <section id="works" class="page-section">
    <h3 class="text-gradation">実績紹介</h3>

    <div class="works-wrapper">
      <input type="radio" name="works-btn" id="all" checked />
      <label for="all">全部</label>

      <input type="radio" name="works-btn" id="exterior" />
      <label for="exterior">外観CGパース</label>

      <input type="radio" name="works-btn" id="interior" />
      <label for="interior">内観CGパース</label>

      <input type="radio" name="works-btn" id="bim" />
      <label for="bim">BIM</label>

      <input type="radio" name="works-btn" id="vr" />
      <label for="vr">VR/AR</label>

      <div class="works-box-wrapper">

        <?php
        $arg = array(
          'posts_per_page' => 10, // 表示する件数
          'orderby' => 'date', // 日付でソート
          'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
          'category_name' => 'works', // 表示したいカテゴリーのスラッグを指定
          //'tag' => 'post'//表示したいタグをスラッグ指定
        );
        $posts = get_posts($arg);
        if ($posts): ?>

          <?php
          foreach ($posts as $post) :
            setup_postdata($post);
          ?>
            <!-- ループ開始 -->

            <!-- <div class="works-box" data-category="ex"> -->
            <div class="works-box"
              data-category="
              <?php
              $flag = get_the_tags();
              foreach ((array)$flag as $tag) {
                echo $tag->slug;
              }
              ?>">
              <div class="works-photo">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
              </div>
              <h4><?php the_title(); ?></h4>
              <div class="works-text">
                <?php the_content() ?>
              </div>
              <div class="works-cate-wrapper">
                <p class="works-cate-name">

                  <!-- 投稿データのタグを取得 -->
                  <?php
                  $posttags1 = get_the_tags();
                  if ($posttags1) {
                    foreach ($posttags1 as $tag1) {
                      echo $tag1->name;
                      echo ' ';
                    }
                  } ?>

                </p>
                <time class="works-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
            </div>

          <?php endforeach; ?>
          <!-- ループ終了 -->


        <?php
        /// 必ずクエリをリセット
        endif;
        wp_reset_postdata();
        ?>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
</body>

</html>