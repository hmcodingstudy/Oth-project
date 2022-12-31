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
        <link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/about.css" />
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
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
                <a href="cart.html" class="go_cart">cart</a>
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

            <section>
                <div class="text_wrap">
                    <div class="text_wrap_1">
                        <p>Oth, [othcomma]</p>
                        <p>: One space Tale Happen</p>
                        <p>:One of The Human sense</p>
                    </div>
                    <div class="text_wrap_2">
                        <p>Oth,는 일상과 여행 속에서 받았던 영감을 하나로 엮어 이야기를 만들고, 그 이야기들을 마치 간접적 체험이 가능한 사진전처럼 풀어 브랜드를 전개하고 있습니다. </p>
                        <p>디렉터가 촬영한 사진을 기반으로 시각, 후각, 촉감 등 오감을 자극하는 상품을 제작하여 여러분의 공간 속에 다양한 이야기가 공존할 수 있도록 고민하고</p>
                        <p>이미지와 감정이 사진의 형식이 아닌 다차원적 형태로 존재할 수 있는 방법을 제안합니다.</p>
                    </div>
                    <div class="text_wrap_3">
                        <p>Oth, creates stories by putting inspirations from travel and daily life together, and develops the brand as if the stories may invite to an indirect experience of an exhibition.</p>
                        <p>Oth, produces the products which stimulate five senses; vision, smell, touch, hearing and taste that are based on the photos taken by the director</p>
                        <p>to make various stories to perform coexistance in your spaces, and proposes the ways that images and emotions to exist in multi-dimensional forms, not in the form of pictures.</p>
                    </div>
                </div>
                <div class="video_wrap">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zQ4kZLl3wYQ?rel=0&autoplay=1&mute=1&controls=0&loop=1&playlist=zQ4kZLl3wYQ&playsinline=1&disablekb=1"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen;></iframe>
                </div>
            </section>
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
    </div>
    <script type="text/javascript" src="js/common.js"></script>
    </body>
</html>
