var markers = [];
var overlays = [];
var mapContainer = document.getElementById("map"),
  mapOption = {
    center: new kakao.maps.LatLng(37.5599, 126.9188),
    level: 6,
  };
var map = new kakao.maps.Map(mapContainer, mapOption);

var positions = [
  {
    title: "빅슬립샵",
    latlng: new kakao.maps.LatLng(37.56261419999978, 126.93031700000004),
    address: "서울특별시 성산로 379 우측 2층",
    phone: "02-3443-5618",
  },
  {
    title: "브라와",
    latlng: new kakao.maps.LatLng(37.55318589999962, 126.90541589999997),
    address: "서울특별시 마포구 희우정로10길 30 1층",
    phone: "02-456-5646",
  },
  {
    title: "오브젝트 서교점",
    latlng: new kakao.maps.LatLng(37.55572010000016, 126.92953719999933),
    address: "서울특별시 마포구 와우산로35길 13",
    phone: "02-1414-2358",
  },
];

var imageSrc = "images/marker.png";

for (var i = 0; i < positions.length; i++) {
  var imageSize = new kakao.maps.Size(50, 50);
  var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize);
  var marker = new kakao.maps.Marker({
    map: map,
    position: positions[i].latlng,
    title: positions[i].title,
    image: markerImage,
  });
  markers.push(marker);
  var data = positions[i];
  displayMarker(data);
}

//**오버레이 생성**
function displayMarker(data) {
  var overlay = new kakao.maps.CustomOverlay({
    yAnchor: 1.6,
    position: markers[i].getPosition(),
  });
  overlays.push(overlay);

  var content = document.createElement("div");
  content.style.cssText =
    "background: white; border-radius:5px; box-shadow: 0px 0px 5px 0px gray;";

  var shop_title_box = document.createElement("div");
  shop_title_box.style.cssText =
    "background: lightgray; border-bottom: 1px solid lightgray; display:flex; height:35px";

  var shop_title = document.createElement("div");
  shop_title.innerHTML = data.title;
  shop_title.style.cssText =
    "margin:auto; font-size:18px; font-weight: bold; line-height:22px; ";

  var closeBtn = document.createElement("button");
  closeBtn.innerHTML = "X";
  closeBtn.style.cssText =
    "font-size:12px; background:none; border:none; cursor:pointer;";
  closeBtn.onclick = function () {
    overlay.setMap(null);
  };

  var shop_content = document.createElement("div");
  shop_content.innerHTML = [data.address] + "<p>" + [data.phone] + "</p>";
  shop_content.style.cssText =
    "font-size:12px; padding:10px; line-height:18px; text-align:left";

  content.append(shop_title_box, shop_content);
  shop_title_box.append(shop_title, closeBtn);
  overlay.setContent(content);

  kakao.maps.event.addListener(marker, "click", function () {
    overlay.setMap(map);
  });

  var shop_list1 = document.querySelector(".shop_list1");
  var shop_list2 = document.querySelector(".shop_list2");
  var shop_list3 = document.querySelector(".shop_list3");
  shop_list1.addEventListener("mouseover", function () {
    overlays[0].setMap(map);
    overlays[1].setMap(null);
    overlays[2].setMap(null);
  });
  shop_list1.addEventListener("mouseleave", function () {
    overlays[0].setMap(null);
  });
  shop_list2.addEventListener("mouseover", function () {
    overlays[0].setMap(null);
    overlays[1].setMap(map);
    overlays[2].setMap(null);
  });
  shop_list2.addEventListener("mouseleave", function () {
    overlays[1].setMap(null);
  });
  shop_list3.addEventListener("mouseover", function () {
    overlays[0].setMap(null);
    overlays[1].setMap(null);
    overlays[2].setMap(map);
  });
  shop_list3.addEventListener("mouseleave", function () {
    overlays[2].setMap(null);
  });
}
