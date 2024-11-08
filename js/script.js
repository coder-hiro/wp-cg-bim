jQuery(function ($) {
  //  ハンバーガーメニュー
  $("#ham-btn").on("click", function () {
    $(this).toggleClass("click");
    $("#sp-nav").toggleClass("slide");
  });
});
