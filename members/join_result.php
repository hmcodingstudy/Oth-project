<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Oth,</title>
        <link rel="stylesheet" type="text/css" href="../css/reset.css" />
        <link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/result.css" />
        <script type="text/javascript" src="../js/common.js"></script>
        <script
        src="https://kit.fontawesome.com/a32c586e93.js"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="main_page">
            <header>
                <div class="header_menubar" onclick="openNav()">menu bar</div>
                <a href="../index.php" class="header_logo">Oth,</a>
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
                    <a href="mypage.php" class="go_mypage">my page</a>
                    <a href="../cart.php" class="go_cart">cart</a>
                </div>
            </header>
            <main>
                <div class="gnb">
                    <a href="javascript:void(0)" class="gnb_close_btn" onclick="closeNav()">접기 아이콘</a>
                    <ul>
                        <li><a href="../about.php">About</a></li>
                        <li><a href="../shop.php">Shop</a></li>
                        <li><a href="../board/list.php">QnA</a></li>
                        <li><a href="../notice/list.php">Notice</a></li>
                    </ul>
                    <div class="sidebar_login_wrap">
                        <?php if(!$s_idx){ ?>
                        <!-- 로그인 전 -->
                        <div class="bf_login">
                            <a href="../login/login.php" class="sidebar_login">Login</a>
                            <span>/</span>
                            <a href="join.php" class="sidebar_join">Join</a>
                        </div>
                        <?php } else if($s_id == "admin"){ ?>
                        <!-- 관리자 로그인 -->
                        <div class="af_login">
                            <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                            <span>/</span>
                            <a href="mypage.php" class="sidebar_mypage">my page</a>
                            <?php } else{ ?>
                        </div>
                        <!-- 로그인 후 -->
                        <div class="af_login">
                            <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                            <span>/</span>
                            <a href="mypage.php" class="sidebar_mypage">my page</a>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="complete_text">
                        <h3>회원 가입이 완료되었습니다.</h3>
                        <span>회원 정보 수정은 마이페이지에서 가능합니다.</span>
                        <p>
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <a href="../login/login.php">로그인 페이지로 이동</a>
                        </p>
                    </div>
                </div>
            </main>
            <footer>
                <div class="fs_info1">
                    <p>Company Name: 오티에이치콤마(oth,) | Owner: 문예진 | Personal Info Manager: 오티에이치콤마</p>
                    <p>Phone Number: 010-4854-8705 | Email: othcomma@gmail.com</p>
                    <p>Address: 서울특별시 서대문구 연희로 25길 4-16 3층 | Business Registration Number:  229-22-66610</p>
                </div>
                <div class="fs_info2">
                    <p>Business License:  2022-서울서대문-0252</p>
                </div>
                <div class="term">
                    <div class="escrow_wrap">
                        <div class="escrow_logo"><img src="../images/escrow_inicisPay2.png"></img></div>
                        <div class="escrow_txt">안전구매(에스크로) 서비스 가맹점</div>
                    </div>
                    <div class="term_link_wrap">
                        <a href="#">Terms of Use</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Confirm Entrepreneur Information</a>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    </body>
</html>
