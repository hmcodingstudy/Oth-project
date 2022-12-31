/*슬라이드*/
  $(".main_img_slider").bxSlider({
    mode: "fade",
    controls: false,
  });
  $(".container").bxSlider({
    minSlides: 4,
    maxSlides: 5,
    moveSlides: 1,
    slideWidth: 255,
    slideMargin: 10,
    pager: false,
    // responsive: true,
    shrinkItems: false,
  });

/*스크롤 이벤트*/
window.addEventListener("scroll", () => {
  var intFrameWidth = window.innerWidth;
  let main_detail_wrap = document.querySelector(".main_detail_wrap");
  let detail_img = document.querySelector(".detail_img");
  let detail_txt_wrap = document.querySelector(".detail_txt_wrap");
  let detail_btn = document.querySelector(".detail_btn");
  var winH = window.innerHeight;
  var winH_ = winH - 300;
  var scrollY = window.scrollY;
  var posFromTop = main_detail_wrap.getBoundingClientRect().top;
  var absolutePos = scrollY + posFromTop;

  if (intFrameWidth <= 860) {
    if (winH_ > posFromTop) {
      main_detail_wrap.style.opacity = "1";
      detail_img.style.transform = "translateY(10px)";
      detail_img.style.opacity = "1";
      detail_txt_wrap.style.transform = "translateY(10px)";
      detail_txt_wrap.style.opacity = "1";
      detail_btn.style.transform = "translateY(10px)";
      detail_btn.style.opacity = "1";
    }
  } else{
      if (winH_ > posFromTop) {
        main_detail_wrap.style.opacity = "1";
        detail_img.style.transform = "translateX(37px)";
        detail_img.style.opacity = "1";
        detail_txt_wrap.style.transform = "translateX(-100px)";
        detail_txt_wrap.style.opacity = "1";
        detail_btn.style.transform = "translateX(-100px)";
        detail_btn.style.opacity = "1";
      }
    };
  });

/*resize시 스크롤 이벤트*/
if (intFrameWidth <= 860) {
  window.addEventListener("scroll", () => {
    var intFrameWidth = window.innerWidth;
    let main_detail_wrap = document.querySelector(".main_detail_wrap");
    let detail_img = document.querySelector(".detail_img");
    let detail_txt_wrap = document.querySelector(".detail_txt_wrap");
    let detail_btn = document.querySelector(".detail_btn");
    var winH = window.innerHeight;
    var winH_ = winH - 300;
    var scrollY = window.scrollY;

    var posFromTop = main_detail_wrap.getBoundingClientRect().top;

    var absolutePos = scrollY + posFromTop;
        if (winH_ > posFromTop) {
          main_detail_wrap.style.opacity = "1";
          detail_img.style.transform = "translateY(10px)";
          detail_img.style.opacity = "1";
          detail_txt_wrap.style.transform = "translateY(10px)";
          detail_txt_wrap.style.opacity = "1";
          detail_btn.style.transform = "translateY(10px)";
          detail_btn.style.opacity = "1";
        }
      });
    } else {
      window.addEventListener("scroll", () => {
        if (winH_ > posFromTop) {
          main_detail_wrap.style.opacity = "1";
          detail_img.style.transform = "translateX(37px)";
          detail_img.style.opacity = "1";
          detail_txt_wrap.style.transform = "translateX(-100px)";
          detail_txt_wrap.style.opacity = "1";
          detail_btn.style.transform = "translateX(-100px)";
          detail_btn.style.opacity = "1";
        }
      });
    }

  window.addEventListener("resize", () => {
    var intFrameWidth = window.innerWidth;
    let main_detail_wrap = document.querySelector(".main_detail_wrap");
    let detail_img = document.querySelector(".detail_img");
    let detail_txt_wrap = document.querySelector(".detail_txt_wrap");
    let detail_btn = document.querySelector(".detail_btn");

    var winH = window.innerHeight;
    var winH_ = winH - 300;
    var scrollY = window.scrollY;

    var posFromTop = main_detail_wrap.getBoundingClientRect().top;
    var absolutePos = scrollY + posFromTop;

    if (intFrameWidth <= 860) {
      window.addEventListener("scroll", () => {
        if (winH_ > posFromTop) {
          main_detail_wrap.style.opacity = "1";
          detail_img.style.transform = "translateY(10px)";
          detail_img.style.opacity = "1";
          detail_txt_wrap.style.transform = "translateY(10px)";
          detail_txt_wrap.style.opacity = "1";
          detail_btn.style.transform = "translateY(10px)";
          detail_btn.style.opacity = "1";
        }
      });
    } else {
      window.addEventListener("scroll", () => {
        if (winH_ > posFromTop) {
          main_detail_wrap.style.opacity = "1";
          detail_img.style.transform = "translateX(37px)";
          detail_img.style.opacity = "1";
          detail_txt_wrap.style.transform = "translateX(-100px)";
          detail_txt_wrap.style.opacity = "1";
          detail_btn.style.transform = "translateX(-100px)";
          detail_btn.style.opacity = "1";
        }
      });
    }
  });

