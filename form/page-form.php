<?php
// Template Name:資料請求ページ
?>

<?php get_header(); ?>

<div class="page-visual">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/form.webp" alt="" />
</div>

<main>
  <section id="form" class="page-section">
    <h3 class="text-gradation">資料請求｜入力画面</h3>

    <div class="to-phone">
      <p>お急ぎの場合は、お電話からも承ります。</p>
      <a href="tel:03-1111-2222">03-1111-2222</a>
    </div>

    <?php
    echo do_shortcode('[contact-form-7 id="7bda436" html_class="h-adr" title="資料請求フォーム"]');
    ?>



  </section>
</main>

<?php get_footer(); ?>


<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/yubinbango.js"></script>
<script>
  //thanksページへリダイレクト
  document.addEventListener('wpcf7mailsent', function(event) {
    location = '<?php echo esc_url(home_url()); ?>/?page_id=15/';
  });
</script>
</body>

</html>