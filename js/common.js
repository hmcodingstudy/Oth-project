function openNav() {
  document.querySelector(".gnb").style.width = "250px";
  document.querySelector("body").style.marginLeft = "250px";
}
function closeNav() {
  document.querySelector(".gnb").style.width = "0px";
  document.querySelector("body").style.marginLeft = "0px";
}

var sch_box_ckNum = 0;
$(function () {
  $(".go_search").click(function () {
    if (sch_box_ckNum == 0) {
      $(".search_box input").animate({ width: 70 }, "fast");
      sch_box_ckNum = 1;
    } else {
      $(".search_box input").animate({ width: 0 }, "fast");
      sch_box_ckNum = 0;
    }
  });
});
