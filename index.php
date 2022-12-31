<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oth,</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=14511e9797cae11df04fef8ae16ef21a"></script>
  </head>
  <body>
    <header>
        <div class="header_menubar" onclick="openNav()">menu bar</div>
        <a href="index.php" class="header_logo">Oth,</a>
        <?php if ($s_id == "admin"){ ?>
          <!-- 관리자일때 -->
          <a href="admin/index.php" class="go_admin">admin</a>
          <?php } else { ?>
          <!-- 로그인 전 -->
          <div class="header_customer_nav">
            <form name="" action="" method="" class="search_box">
              <fieldset>
                <legend>검색</legend>
                <p>
                  <label for="search">입력</label>
                  <input type="text" id="search">
                </p>
              </fieldset>
            </form>
            <a href="#" class="go_search">search</a>
            <a href="members/mypage.php" class="go_mypage">my page</a>
            <a href="cart.php" class="go_cart">cart</a>
          </div>
        <?php }; ?>
    </header>
    <main>
      <div class="gnb">
        <a href="javascript:void(0)" class="gnb_close_btn" onclick="closeNav()">접기 아이콘</a>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="board/list.php">QnA</a></li>
          <li><a href="notice/list.php">Notice</a></li>
        </ul>
        <div class="sidebar_login_wrap">
          <?php if(!$s_idx){ ?>
          <!-- 로그인 전 -->
          <div class="bf_login">
              <a href="login/login.php" class="sidebar_login">Login</a>
              <span>/</span>
              <a href="members/join.php" class="sidebar_join">Join</a>
          </div>
          <?php } else if($s_id == "admin"){ ?>
          <!-- 관리자 로그인 -->
          <div class="af_login">
              <a href="login/logout.php" class="sidebar_logout">Logout</a>
              <span>/</span>
              <a href="members/mypage.php" class="sidebar_mypage">my page</a>
              <?php } else{ ?>
          </div>
          <!-- 로그인 후 -->
          <!-- <?php echo $s_name; ?>님 -->
          <div class="af_login">
              <a href="login/logout.php" class="sidebar_logout">Logout</a>
              <span>/</span>
              <a href="members/mypage.php" class="sidebar_mypage">my page</a>
              <?php }; ?>
          </div>
        </div>
      </div>
      <div class="main_img_slider">
        <div>
          <img src="images/main_img1.jpg" title="메인이미지1" class="main_img">
        </div>
        <div>
          <img src="images/main_img2.jpg" title="메인이미지2" class="main_img">
        </div>
        <div>
          <img src="images/main_img3.jpg" title="메인이미지3" class="main_img">
        </div>
      </div>
      <section class="slider_wrap">
        <div class="slider">
          <div class="pdt_txt">
            <div class="pdt_txt_head">
              <h2>Products</h2>
              <a href="shop.php">
                더보기 아이콘
              </a>
            </div>
            <span>Oth,는 일상과 여행 속에서 받았던 영감을 하나로 엮어 이야기를 만들고, 그 이야기들을 마치 간접적 체험이 가능한 사진전처럼 풀어 브랜드를 전개하고 있습니다.<br>
            디렉터가 촬영한 사진을 기반으로 시각, 후각, 촉감 등 오감을 자극하는 상품을 제작하여 여러분의 공간 속에 다양한 이야기가 공존할 수 있도록 고민하고 이미지와 감정이 사진의 형식이 아닌 다차원적 형태로 존재할 수 있는 방법을 제안합니다. </span>
          </div>
          <div class="pdt_container">
            <ul class="container">
                <li class="container_1"><a href="product_page.php">제품1</a></li>
                <li class="container_2"><a href="#">제품2</a></li>
                <li class="container_3"><a href="#">제품3</a></li>
                <li class="container_4"><a href="#">제품4</a></li>
                <li class="container_5"><a href="#">제품5</a></li>
                <li class="container_6"><a href="#">제품6</a></li>
                <li class="container_3"><a href="#">제품3</a></li>
                <li class="container_4"><a href="#">제품4</a></li>
            </ul>
          </div>
        </div>
      </section>
      <div class="main_detail_wrap">
        <div class="main_detail">
          <div class="detail_img">이미지</div>
          <div class="btn_wrap">
            <div class="detail_txt_wrap">
              때때로 훌훌 마음을 털어놓고 싶은 장소가 서울에 있습니다. 바쁜 삶 속에서 하루의 고단함을 잊게 해주는 풍경. 살랑이는 바람과 따뜻한 날씨. 바로 그곳엔 위로가 있습니다. 오티에이치콤마는 직접적인 언어로 질문을 던지는 대신 패브릭 속에 한강의 윤슬을 담아 여러분께 묻습니다. 한강은 당신에게 어떤 의미로 다가가며 또 당신은 이곳에서 무엇을 말하고 싶은지를요.
            </div>
            <a href="shop.php">
              <button class="detail_btn">
                <span>detail</span>
                <span>→</span>
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="rotate_text_box">
        <img class="rotate_text" src="images/rotate_text.png">
        <div>
            Oth, [othcomma]</br>
            : One space Tale Happen</br>
            : One of The Human sense</br>
            Oth,는 일상과 여행 속에서 받았던 영감을 하나로 엮어 이야기를 만들고, 그 이야기들을 마치 간접적 체험이 가능한 사진전처럼 풀어 브랜드를 전개하고 있습니다.</br>
            디렉터가 촬영한 사진을 기반으로 시각, 후각, 촉감 등 오감을 자극하는 상품을 제작하여 여러분의 공간 속에 다양한 이야기가 공존할 수 있도록 고민하고</br>
            이미지와 감정이 사진의 형식이 아닌 다차원적 형태로 존재할 수 있는 방법을 제안합니다.
        </div>
      </div>
      <!-- 비디오 -->
      <div class="video_wrap">
        <iframe class="index_video" width="560" height="315" src="https://www.youtube.com/embed/v4NXw26XojI?rel=0&autoplay=1&mute=1&controls=0&loop=1&playlist=v4NXw26XojI&playsinline=1&disablekb=1"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen;></iframe>
        <div class="video_detail_wrap">
          <div class="video_detail">
            <div>Best Item : Sunset fabric poster</div>
            <a href="shop.php">shop now</a>
          </div>
          <span>오티에이치콤마에서 선보이는 선셋 패브릭은 양양 호텔 창문으로 펼쳐진 새벽녘 노을빛에 영감을 받아 제작되었습니다.
            시원한 파도와 따스한 지평선의 빛깔은 마치 지친 마음을 보양하는 기분을 들게 하죠.
            양양에서 느꼈던 힘차고 두근거렸던 기운을 그대로 전하기 위해 호텔에서 커튼으로 사용되는 소재를 재현했습니다.</span>
        </div>
      </div>
      <div class="shoplist_wrap">
        <h2>Offline Store list</h2>
        <div class="map_wrap">
          <div id="map"></div>
          <ul class="location_list">
            <h3>Offline Store list</h3>
            <li class="shop_list1">
              <h4 id="shop_location1">빅슬립샵</h4>
              <div>서울특별시 성산로 379 우측 2층</div>
              <div>02-3443-5618</div>
            </li>
            <li class="shop_list2">
              <h4 id="shop_location2">브라와</h4>
              <div>서울특별시 마포구 희우정로10길 30</div>
              <div>02-456-5646</div>
            </li>
            <li class="shop_list3">
              <h4 id="shop_location3">오브젝트 서교점</h4>
              <div>서울특별시 마포구 와우산로35길 13</div>
              <div>02-1414-2358</div>
            </li>
          </ul>
        </div>
      </div>
    </main>
    <footer>
        <div class="fs_info1">
            <p>Company Name: 오티에이치콤마(oth,) | Owner: 문예진 | Personal Info Manager: 오티에이치콤마</p>
            <p>Phone Number: 010-4854-8705 | Email: othcomma@gmail.com</p>
            <p>Address: 서울특별시 서대문구 연희로 25길 4-16 3층 | Business Registration Number: 229-22-66610</p>
        </div>
        <div class="fs_info2">
            <p>Business License:  2022-서울서대문-0252</p>
        </div>
        <div class="term">
            <div class="escrow_wrap">
                <div class="escrow_logo"><img src="images/escrow_inicisPay2.png"></img></div>
                <div class="escrow_txt">안전구매(에스크로) 서비스 가맹점</div>
            </div>
            <div class="term_link_wrap">
              <a href="#">Terms of Use</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Confirm Entrepreneur Information</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
  </body>
</html>
