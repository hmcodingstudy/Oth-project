let subtotal = document.getElementById("subtotal");
let subtotalText = subtotal.innerText;
subtotalText = subtotalText.replace(",", "");

let subtotal2 = document.getElementById("subtotal2");
let subtotal2Text = subtotal2.innerText;
subtotal2Text = subtotal2Text.replace(",", "");

let total = document.getElementById("total");
let totalText = total.innerText;
totalText = totalText.replace(",", "");

let deliveryCost = document.getElementById("deliveryCost");
let deliveryCostText = deliveryCost.innerText;
deliveryCostText = deliveryCostText.replace(",", "");

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
  if (subtotalText >= 100000) {
    deliveryCostText = 0;
  } else if (subtotalText < 100000) {
    deliveryCostText = 3000;
  }
  if (quantityText <= 0) {
    alert("최소 수량은 1개입니다.");
    quantityText = 1;
    subtotalText = 29000;
    deliveryCostText = 3000;
  }
  total.innerText = (subtotalText + deliveryCostText).toLocaleString();
  quantity.innerText = quantityText;
  subtotal.innerText = subtotalText.toLocaleString();
  subtotal2.innerText = subtotalText.toLocaleString();
  deliveryCost.innerText = deliveryCostText.toLocaleString();
}
