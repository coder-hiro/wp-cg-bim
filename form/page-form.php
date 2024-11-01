<?php
// Template Name:資料請求ページ
?>

<?php get_header(); ?>

<div class="page-visual">
  <img src="../img/form.webp" alt="" />
</div>

<main>
  <section id="form" class="page-section">
    <h3 class="text-gradation">資料請求｜入力画面</h3>

    <div class="to-phone">
      <p>お急ぎの場合は、お電話からも承ります。</p>
      <a href="tel:03-1111-2222">03-1111-2222</a>
    </div>

    <form action="" class="h-adr">
      <span class="p-country-name" style="display: none">Japan</span>
      <dl class="input">
        <dt>お名前</dt>
        <dd>
          <input type="text" name="onamae" required autocomplete="name" />
        </dd>
        <dt>メールアドレス</dt>
        <dd>
          <input
            type="email"
            name="email"
            required
            autocomplete="email"
            placeholder="abc@sample.com" />
        </dd>
        <dt>郵便番号</dt>
        <dd>
          <input
            type="text"
            class="p-postal-code"
            maxlength="8"
            placeholder="ハイフン不要です" />
        </dd>
        <dt>住所1</dt>
        <dd>
          <input
            type="text"
            class="p-region p-locality p-street-address p-extended-address"
            required />
        </dd>
        <dt>住所2</dt>
        <dd>
          <input
            type="text"
            name="address2"
            required
            placeholder="以降の住所を入力して下さい" />
        </dd>
        <dt>建物/ビル名</dt>
        <dd>
          <input
            type="text"
            name="address3"
            placeholder="部屋番号を入力して下さい" />
        </dd>
        <dt>備考欄</dt>
        <dd><textarea name="message"></textarea></dd>
      </dl>
      <div class="policy-wrapper">
        <div class="policy-inner">
          <h4>プライバシーポリシー</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis a hic mollitia impedit, quasi voluptatum? In, error
            maiores harum nemo cum maxime omnis nobis incidunt perferendis
            unde dignissimos ipsum eius?s
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis a hic mollitia impedit, quasi voluptatum? In, error
            maiores harum nemo cum maxime omnis nobis incidunt perferendis
            unde dignissimos ipsum eius?s
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis a hic mollitia impedit, quasi voluptatum? In, error
            maiores harum nemo cum maxime omnis nobis incidunt perferendis
            unde dignissimos ipsum eius?s
          </p>
        </div>
        <label for="policy">
          <input
            type="checkbox"
            name="policy-check"
            id="policy"
            required />プライバシーポリシーの内容を確認し同意する。</label>
      </div>
      <input type="submit" value="送信" class="btn to-works" />
    </form>
  </section>
</main>

<?php get_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/yubinbango.js"></script>
</body>

</html>