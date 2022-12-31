<?php
include "../inc/session.php";

if($s_id != "admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://localhost/Oth/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>관리자 페이지</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin_common.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css" />
    <script src="https://kit.fontawesome.com/a32c586e93.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="nav">
      <div>
        <a href="index.php" class="header_logo">Oth,</a>
        <div class="go_homepage">
          <i class="far fa-arrow-alt-circle-left"></i>
          <a href="http://oth.dothome.co.kr/Oth/index.php">홈페이지 바로가기</a>
        </div>
      </div>
      <ul class="menu">
        <li>
          <i class="fa-solid fa-caret-right"></i>
          <span>주문</span>
        </li>
        <li>
          <i class="fa-solid fa-caret-right"></i>
          <span>상품</span>
        </li>
        <li>
          <a href="members/list.php">
            <i class="fa-solid fa-caret-right"></i>
            <span>회원관리</span>
          </a>
        </li>
        <li>
          <a href="../notice/list.php">
            <i class="fa-solid fa-caret-right"></i>
            <span>공지</span>
          </a>
        </li>
        <li>
          <a href="../board/list.php">
            <i class="fa-solid fa-caret-right"></i>
            <span>Q&A</span>
          </a>
        </li>
        <li>
          <i class="fa-solid fa-caret-right"></i>
          <span>통계</span>
        </li>
      </ul>
    </div>
    <div class="screen">
      <div class="welcome">관리자님, 어서오세요</div>
      <table class="front_order">
        <tbody>
          <tr>
            <th colspan="5" class="title_1">
              <i class="fa-solid fa-truck"></i>주문 현황
            </th>
          </tr>
          <tr>
            <td>
              <span>결제 완료</span>
              <div>
                <span class="color_text">2</span>
                <span>건</span>
              </div>
            </td>
            <td>
              <span>상품 준비중</span>
              <div>
                <span class="color_text">5</span>
                <span>건</span>
              </div>
            </td>
            <td>
              <span>배송 지연</span>
              <div>
                <span class="color_text">0</span>
                <span>건</span>
              </div>
            </td>
            <td>
              <span>배송 중</span>
              <div>
                <span class="color_text">10</span>
                <span>건</span>
              </div>
            </td>
            <td>
              <span>배송 완료</span>
              <div>
                <span class="color_text">30</span>
                <span>건</span>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="screen_bottom">
        <div class="front_products">
          <div class="title_2"><i class="fa-solid fa-gift"></i>상품</div>
          <ul>
            <li>
              <span>판매중</span>
              <div>
                <span class="color_text">20</span>
                <span>개</span>
              </div>
            </li>
            <li>
              <span>판매중지</span>
              <div>
                <span class="color_text">0</span>
                <span>개</span>
              </div>
            </li>
            <li>
              <span>품절</span>
              <div>
                <span class="color_text">2</span>
                <span>개</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="front_qna">
          <div class="title_2">
            <i class="fa-regular fa-circle-question"></i>문의
          </div>
          <div>
            <span>새 문의글</span>
            <div>
              <span class="color_text">0</span>
              <span>건</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>