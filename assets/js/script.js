$=jQuery;
$(document).ready(function () {

  $(".openVideoModal").on("click", function () {
    const modal = $(".video-modal");

    modal.css("display", "flex").hide().fadeIn(200);
    $("#modalVideo")[0].play();
  });

  $(".close-modal").on("click", function () {
    $(".video-modal").fadeOut(200);
    $("#modalVideo")[0].pause();
    $("#modalVideo")[0].currentTime = 0;
  });

  $(".video-modal").on("click", function (e) {
    if ($(e.target).hasClass("video-modal")) {
      $(".video-modal").fadeOut(200);
      $("#modalVideo")[0].pause();
      $("#modalVideo")[0].currentTime = 0;
    }
  });

  $(".humbarger_menu").click(function () {
    $(".mobile_menu_overlay").addClass("active");
  });

  $(".close_mobile_menu").click(function () {
    $(".mobile_menu_overlay").removeClass("active");
  });

  $(".mobile_menu_overlay").click(function (e) {
    if ($(e.target).hasClass("mobile_menu_overlay")) {
      $(".mobile_menu_overlay").removeClass("active");
    }
  });
});

var owl = $(".books-slider");

owl.owlCarousel({
  loop: false,
  margin: 20,
  rtl: true,
  nav: false,
  dots: false,
  stagePadding: 0,
  responsive: {
    0: { items: 1, stagePadding: 30, margin: 15 },
    600: { items: 2, stagePadding: 30 },
    900: { items: 3, stagePadding: 30 },
    1200: { items: 4, stagePadding: 0 },
  },
});

let dotsBooks = $(".dots-books");
dotsBooks.empty();

let totalBooks = owl.find(".owl-item").length;
let visibleBooks = owl.data("owl.carousel").options.items;

let dotCountBooks = totalBooks - visibleBooks + 1;

for (let i = 0; i < dotCountBooks - 1; i++) {
  dotsBooks.append(`<button class="custom-dot" data-index="${i}"></button>`);
}

dotsBooks.find(".custom-dot").first().addClass("active");

dotsBooks.on("click", ".custom-dot", function () {
  let index = $(this).data("index");
  owl.trigger("to.owl.carousel", [index, 300]);
});

owl.on("changed.owl.carousel", function (event) {
  let index = event.item.index;
  dotsBooks.find(".custom-dot").removeClass("active");
  dotsBooks.find(`.custom-dot[data-index="${index}"]`).addClass("active");
});

$(".left-nav").click(function () {
  owl.trigger("next.owl.carousel");
});
$(".right-nav").click(function () {
  owl.trigger("prev.owl.carousel");
});

var owlSecond = $(".comment_slider");

owlSecond.owlCarousel({
  loop: false,
  margin: 20,
  rtl: true,
  nav: false,
  dots: false,
  stagePadding: 0,
  responsive: {
    0: { items: 1, stagePadding: 30, margin: 15 },
    600: { items: 2, stagePadding: 30 },
    900: { items: 2, stagePadding: 30 },
    1200: { items: 3, stagePadding: 0 },
  },
});

let dotsComments = $(".dots-comments");
dotsComments.empty();

let totalComments = owlSecond.find(".owl-item").length;
let visibleComments = owlSecond.data("owl.carousel").options.items;

let dotCountComments = totalComments - visibleComments + 1;

for (let i = 0; i < dotCountComments; i++) {
  dotsComments.append(`<button class="custom-dot" data-index="${i}"></button>`);
}

dotsComments.find(".custom-dot").first().addClass("active");

dotsComments.on("click", ".custom-dot", function () {
  let index = $(this).data("index");
  owlSecond.trigger("to.owl.carousel", [index, 300]);
});

owlSecond.on("changed.owl.carousel", function (event) {
  let index = event.item.index;
  dotsComments.find(".custom-dot").removeClass("active");
  dotsComments.find(`.custom-dot[data-index="${index}"]`).addClass("active");
});

$(".left-nav").click(function () {
  owlSecond.trigger("next.owl.carousel");
});
$(".right-nav").click(function () {
  owlSecond.trigger("prev.owl.carousel");
});
