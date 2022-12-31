$(".tab_btn1").click(function () {
  $(".tab1").show();
  $(".tab2").hide();
  $(".tab3").hide();
});
$(".tab_btn2").click(function () {
  $(".tab1").hide();
  $(".tab2").show();
  $(".tab3").hide();
});
$(".tab_btn3").click(function () {
  $(".tab1").hide();
  $(".tab2").hide();
  $(".tab3").show();
});

/*버튼 색 변경*/
let tab_btn1 = document.querySelector(".tab_btn1");
let tab_btn2 = document.querySelector(".tab_btn2");
let tab_btn3 = document.querySelector(".tab_btn3");

function tab1_on() {
  tab_btn1.setAttribute("class", "tab_btn1 on");
  tab_btn2.setAttribute("class", "tab_btn2");
  tab_btn3.setAttribute("class", "tab_btn3");
}
function tab2_on() {
  tab_btn1.setAttribute("class", "tab_btn1");
  tab_btn2.setAttribute("class", "tab_btn2 on");
  tab_btn3.setAttribute("class", "tab_btn3");
}
function tab3_on() {
  tab_btn1.setAttribute("class", "tab_btn1");
  tab_btn2.setAttribute("class", "tab_btn2");
  tab_btn3.setAttribute("class", "tab_btn3 on");
}
