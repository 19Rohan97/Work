$(function () {
  var e = $("#searchtoggl i"),
    a = $("#searchbar");
  $(".nav > li a").on("click", function (i) {
    i.preventDefault(),
      "searchtoggl" == $(this).attr("id") &&
        (a.is(":visible")
          ? e.removeClass("fa-search-minus").addClass("fa-search")
          : e.removeClass("fa-search").addClass("fa-search-minus"),
        a.slideToggle(300, function () {}));
  }),
    $("#searchform").submit(function (e) {
      $("#searchform").submit(), e.preventDefault();
    });
}),
  jQuery(document).ready(function () {
    jQuery("#demo1").skdslider({
      delay: 5e3,
      animationSpeed: 2e3,
      showNextPrev: !1,
      showPlayButton: !1,
      autoSlide: !0,
      animationType: "fading",
    }),
      jQuery("#responsive").change(function () {
        $("#responsive_wrapper").width(jQuery(this).val());
      });
  });
var wow = new WOW({
  boxClass: "wow",
  animateClass: "animated",
  offset: 30,
  mobile: !1,
});
wow.init(),
  $("#owl-demo2 .zoom").click(function (e) {
    e.preventDefault();
    var a = $(this).find("img").attr("src");
    $(".largeImg img").attr("src", a);
  }),
  $(document).ready(function () {
    $().UItoTop({ easingType: "easeOutQuart" });
  });

$("document").ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $(".topNavSection").addClass("navFixed");
      $(".navFixed").addClass("");
      $(".navFixed").addClass("animated");
    } else {
      $(".topNavSection").removeClass("navFixed");
      $(".topNavSection").removeClass("");
      $(".topNavSection").removeClass("animated");
    }
  });
});
