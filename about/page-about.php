<?php
// Template Name:会社紹介ページ
?>

<?php get_header(); ?>

<div class="page-visual">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about.webp" alt="" />
</div>

<main>
  <section id="info" class="page-section">
    <h3 class="text-gradation">会社紹介</h3>

    <?php
    $page_id = get_page_by_path('about-list');  //〇〇スラッグ名が入ります
    $page = get_post($page_id);
    echo $page->post_content;  //本文を取得
    ?>

    <!-- <dl class="about-list">
      <dt>会社名</dt>
      <dd>CG-BIM</dd>
      <dt>所在地</dt>
      <dd>東京都豊島区南池袋</dd>
      <dt>地図</dt>
      <dd class="g-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.9454655225804!2d139.7143152!3d35.72755970000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d68f6cfe057%3A0xddd17dcd7ecaf745!2z6LGK5bO25Yy656uL5Y2X5rGg6KKL5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1729754897988!5m2!1sja!2sjp"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </dd>
      <dt>設立</dt>
      <dd>1999/04/15</dd>
      <dt>資本金</dt>
      <dd>15億円</dd>
      <dt>事業内容</dt>
      <dd>
        1.建築CGパース制作<br />
        2.BIMを使ったCGモデリング<br />
        3.建物や空間のVR/ARコンテンツ制作
      </dd>
      <dt>連結従業員数</dt>
      <dd>140名(2024年4月現在)</dd>
    </dl> -->
  </section>
  <section id="recruit" class="page-section">
    <h3 class="text-gradation">採用情報</h3>

    <?php
    $page_id = get_page_by_path('recruit');  //〇〇スラッグ名が入ります
    $page = get_post($page_id);
    echo $page->post_content;  //本文を取得
    ?>

    <!-- <dl class="about-list">
      <dt>募集職種</dt>
      <dd>総合職<br />CGエンジニア</dd>
      <dt>月給</dt>
      <dd>235,000円(※試用期間3ヶ月)</dd>
      <dt>賞与</dt>
      <dd>年2回 ※夏季・冬季</dd>
      <dt>昇給</dt>
      <dd>昇給年1回 (4月)</dd>
      <dt>勤務地</dt>
      <dd>東京/池袋(JR池袋駅徒歩5分)</dd>
      <dt>勤務時間</dt>
      <dd>フレックスタイム制(標準労働時間1日7.25時間)</dd>
      <dt>休日休暇</dt>
      <dd>年間120日(完全週休2日制)</dd>
      <dt>年次有給休暇</dt>
      <dd>特別休暇、年末年始休暇、慶弔休暇など(初年度10日)</dd>
    </dl> -->
  </section>
</main>

<?php get_footer(); ?>
</body>

</html>