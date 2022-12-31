let subtotal = document.getElementById("subtotal");
let subtotalText = subtotal.innerText;
subtotalText = subtotalText.replace(",", "");

function count(type) {
  let quantity = document.querySelector(".quantity");
  let quantityText = quantity.innerText;
  if (type === "minus") {
    quantityText = parseInt(quantityText) - 1;
    subtotalText = parseInt(subtotalText) - 29000;
  } else if (type === "plus") {
    quantityText = parseInt(quantityText) + 1;
    subtotalText = parseInt(subtotalText) + 29000;
  }
  //0개 이하 선택시 alert 경고창 + 숫자와 가격 1개 기준으로 수정
  if (quantityText <= 0) {
    alert("최소 수량은 1개입니다.");
    quantityText = 1;
    subtotalText = 29000;
    deliveryCostText = 3000;
  }
  quantity.innerText = quantityText;
  subtotal.innerText = subtotalText.toLocaleString();
}

/*이미지 변경*/
function changeImage(img_url){
    var big_img = document.querySelector(".prd_img1");
    big_img.src= img_url;   //변수 지정
};