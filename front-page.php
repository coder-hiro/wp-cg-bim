<?php
// Template Name:トップページ
?>

<?php get_header(); ?>

<header>
  <h1>CG-BIM Studio</h1>
  <p class="tag-line">
    ビジョンを形にする<br />建築CGバースで新たな未来を描こう
  </p>
</header>

<div class="main-visual">

  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/main.webp" alt="" />
</div>

<div class="custom-shape-divider-bottom-1729241260">
  <svg
    data-name="Layer 1"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 1200 120"
    preserveAspectRatio="none">
    <path
      d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
      opacity=".25"
      class="shape-fill"></path>
    <path
      d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
      opacity=".5"
      class="shape-fill"></path>
    <path
      d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
      class="shape-fill"></path>
  </svg>
</div>

<div class="main-copy">
  <h2 class="gradation">
    CG-BIM StudioではBIMを活用し<br />建築の未来をデジタルモデルで描き出します。
  </h2>
  <p class="lead">
    高品質なCGパースを通じて、リアルな建築イメージを再現し、設計変更の迅速な反映や効率化されたプロジェクト管理を実現します。<br />
    卓越したCGパース制作により、お客様のビジョンを実現するために、最先端のBIM技術を駆使し、革新的な建築CGパースを提供致します。
  </p>
</div>

<main>
  <section id="news" class="page-section">
    <h3>お知らせ</h3>
    <div class="news-wrapper">




      <?php
      $arg = array(
        'posts_per_page' => 3, // 表示する件数
        'orderby' => 'date', // 日付でソート
        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
        'category_name' => 'news', // 表示したいカテゴリーのスラッグを指定
        //'tag' => 'post'//表示したいタグをスラッグ指定
      );
      $posts = get_posts($arg);
      if ($posts): ?>

        <?php
        foreach ($posts as $post) :
          setup_postdata($post);
        ?>
          <!-- ループ開始 -->

          <div class="news-box">
            <a href="<?php the_permalink(); ?>">

              <div class="thumb-box"><?php the_post_thumbnail(); ?></div>
              <!-- <img src="<?php the_post_thumbnail_url(); ?>" alt="" /> -->

              <div class="cate">
                <div class="cate-name">

                  <?php
                  $cate = get_the_category();
                  $cate_name = $cate[0]->cat_name;
                  echo $cate_name;
                  ?>

                </div>
                <p class="post-date"><?php the_time('Y,m,d'); ?></p>
              </div>
              <h4><?php the_title(); ?></h4>
            </a>
          </div>

        <?php endforeach; ?>
        <!-- ループ終了 -->

      <?php
      /// 必ずクエリをリセット
      endif;
      wp_reset_postdata();
      ?>



    </div>
  </section>

  <section id="service" class="page-section">
    <h3>4つのサービス</h3>

    <div class="service-wrapper">
      <div class="service-box">
        <h4>外観CGパース</h4>
        <p class="service-illust">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/service-1.svg" alt="" />
        </p>
        <p class="service-text">
          建物の外観をCG技術を使用してリアルに再現し、建物の外見や材質、環境などを視覚的に表現します。建物のデザインや色彩、光の表現などを調整して、建築物の魅力を引き出します。
        </p>
      </div>

      <div class="service-box">
        <h4>内観CGパース</h4>
        <p class="service-illust">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/service-2.svg" alt="" />
        </p>
        <p class="service-text">
          建物の内部空間をCG技術を使用して表現し、部屋のレイアウトや家具、照明、素材などを再現します。クライアントの要望に応じた内装デザインをビジュアル化し、イメージの共有やプレゼンテーションに活用されます。
        </p>
      </div>

      <div class="service-box">
        <h4>BIMを使ったCGモデリング</h4>
        <p class="service-illust">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/service-3.svg" alt="" />
        </p>
        <p class="service-text">
          BIMを活用することで、3Dモデリングによる空間情報だけでなく、時間情報や費用情報などの情報も統合的に扱い、建築プロジェクト全体を最適化することができます。
        </p>
      </div>

      <div class="service-box">
        <h4>VR・ARコンテンツ</h4>
        <p class="service-illust">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/service-4.svg" alt="" />
        </p>
        <p class="service-text">
          建物や空間のVR（仮想現実）やAR（拡張現実）コンテンツを制作します。クライアントや顧客が建物や空間を仮想的に体験し、リアルなイメージを得ることができます。
        </p>
      </div>
    </div>
  </section>

  <section id="pick-up" class="page-section">
    <h3>おすすめ作品</h3>
    <div class="pick-up-wrapper">


      <?php
      $arg = array(
        'posts_per_page' => 3, // 表示する件数
        'orderby' => 'date', // 日付でソート
        'order' => 'ASC', // DESCで最新から表示、ASCで最古から表示
        'category_name' => 'pick-up', // 表示したいカテゴリーのスラッグを指定
        //'tag' => 'post'//表示したいタグをスラッグ指定
      );
      $posts = get_posts($arg);
      if ($posts): ?>


        <?php
        foreach ($posts as $post) :
          setup_postdata($post);
        ?>
          <!-- ループ開始 -->
          <div class="pick-up-box" data-rank="<?php echo get_post_meta($post->ID, 'rank', true) ?>">
            <div class="eye-catch">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
            </div>
            <h4><?php the_title(); ?></h4>
            <div class="pick-up-cate">
              <div class="pick-up-cate-name">

                <!-- 投稿データのタグを取得 -->
                <?php
                $posttags1 = get_the_tags();
                if ($posttags1) {
                  foreach ($posttags1 as $tag1) {
                    echo $tag1->name;
                    echo ' ';
                  }
                } ?>

              </div>
              <time class="post-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
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

    <a href="#" class="btn to-works">他の作品を見る</a>
  </section>

  <section id="about" class="page-section">
    <h3 class="about__title">私たちCG-BIMにできること</h3>
    <div class="about__wrapper">
      <div class="about__boxs">
        <p class="about__text-a">「最先端技術で建築の未来を創ります」</p>
        <p class="about__text-b">
          建築パース、BIM、VRなど幅広い3DCGサービスを提供し、AIや画像生成AIの導入支援で、建築設計の効率化をサポート。<br />あなたの建築プロジェクトを、テクノロジーで革新的にサポートします。
        </p>
      </div>
      <div class="about-photo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-image.webp" alt="" />
      </div>
    </div>
  </section>

  <section id=" " class="page-section">
    <h3>お客様の声</h3>
    <div class="voice-wrapper">

      <div class="voice-box">
        <div class="avatar">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/avatar1.svg" alt="" />
        </div>
        <p class="voice-name"><?php echo get_post_meta(29, 'company', true) ?>
          <span><?php echo get_post_meta(29, 'name', true) ?></span>
        </p>
        <p class="voice-date"><?php echo get_post_meta(29, 'date', true) ?></p>
        <h4><?php echo get_post_meta(29, 'title', true) ?></h4>
        <p class="voice-text">
          <?php echo get_post_meta(29, 'content', true) ?>
        </p>
      </div>

      <div class="voice-box">
        <div class="avatar">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/avatar2.svg" alt="" />
        </div>
        <p class="voice-name"><?php echo get_post_meta(32, 'company', true) ?>
          <span><?php echo get_post_meta(32, 'name', true) ?></span>
        </p>
        <p class="voice-date"><?php echo get_post_meta(32, 'date', true) ?></p>
        <h4><?php echo get_post_meta(32, 'title', true) ?></h4>
        <p class="voice-text">
          <?php echo get_post_meta(32, 'content', true) ?>
        </p>
      </div>

      <div class="voice-box">
        <div class="avatar">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/avatar3.svg" alt="" />
        </div>
        <p class="voice-name"><?php echo get_post_meta(34, 'company', true) ?>
          <span><?php echo get_post_meta(34, 'name', true) ?></span>
        </p>
        <p class="voice-date"><?php echo get_post_meta(34, 'date', true) ?></p>
        <h4><?php echo get_post_meta(34, 'title', true) ?></h4>
        <p class="voice-text">
          <?php echo get_post_meta(34, 'content', true) ?>
        </p>
      </div>



    </div>

  </section>
</main>
<?php get_footer(); ?>


<?php wp_footer(); ?>
</body>

</html>