<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CG-BIM|トップページ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&display=swap"
    rel="stylesheet" />

  <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
  <header>
    <h1>CG-BIM Studio</h1>
    <p class="tag-line">
      ビジョンを形にする<br />建築CGバースで新たな未来を描こう
    </p>
  </header>

  <nav class="pc-nav">
    <ul>
      <li><a href="#">CG-BIM</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>" #top>トップ</a>
        <div class="menu-outer">
          <div class="menu-inner">
            <div class="menu-box">
              <a href="<?php echo esc_url(home_url()); ?>/#service">
                <img src="https://placehold.jp/300x200.png" alt="" />
                <span>サービス</span></a>
            </div>
            <div class="menu-box">
              <a href="<?php echo esc_url(home_url()); ?>/#pick-up">
                <img src="https://placehold.jp/300x200.png" alt="" />
                <span>おすすめ</span>
              </a>
            </div>
            <div class="menu-box">
              <a href="<?php echo esc_url(home_url()); ?>/#about">
                <img src="https://placehold.jp/300x200.png" alt="" />
                <span>私たちについて</span>
              </a>
            </div>
            <div class="menu-box">
              <a href="<?php echo esc_url(home_url()); ?>/#voice">
                <img src="https://placehold.jp/300x200.png" alt="" />
                <span>お客様の声</span>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="<?php echo esc_url(home_url('?page_id=9')); ?>">実績紹介</a></li>
      <li><a href="<?php echo esc_url(home_url('?page_id=11')); ?>">会社紹介</a>

        <div class="menu-outer">
          <div class="menu-inner">
            <div class="menu-box">
              <a href="<?php echo esc_url(home_url('?page_id=11')); ?>/#about">
                <img src="https://placehold.jp/300x200.png" alt="" />
                <span>会社案内</span>
              </a>
            </div>
            <div class="menu-box">
              <a href="<?php echo esc_url(home_url('?page_id=11')); ?>/#recruit">
                <img src="https://placehold.jp/300x200.png" alt="" />
                <span>採用情報</span>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="<?php echo esc_url(home_url('?page_id=13')); ?>">資料請求</a></li>
      <li><a href="#">Facebook</a></li>
    </ul>
  </nav>

  <button id="ham-btn"><span></span></button>
  <nav id="sp-nav">
    <ul>
      <li><a href="<?php echo esc_url(home_url()); ?>#top">トップ</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/works/">実績紹介</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/about/">会社紹介</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/form/">資料請求</a></li>
      <li>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/facebook-brands-solid.svg" alt="" /></a>
      </li>
    </ul>
  </nav>