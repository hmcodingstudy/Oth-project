<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oth,</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/product_page.css" />
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
        <section class="prd_section">
            <div class="prd_select_wrap">
                <div class="prd_col1">
                    <img src="images/sp_pdt1.jpg" class="prd_img1">
                    <div class="prd_sub_img_wrap">
                        <img src="images/sp_pdt1.jpg" class="prd_img2" onclick="changeImage(this.src)">
                        <img src="images/p_list1.jpg" class="prd_img3" onclick="changeImage(this.src)">
                        <img src="images/p_list2.jpg" class="prd_img4" onclick="changeImage(this.src)">
                        <img src="images/p_list3.jpg" class="prd_img5" onclick="changeImage(this.src)">
                    </div>
                </div>
                <div class="prd_col2">
                    <div class="prd_detail_box">
                        <h3>젊은 날의 바다</h3>
                        <span class="prd_detail_txt1">
                            젊은 날의 바다 향은 윤슬이 반짝이는 바다가 주는 찬란함과 그 속에서 연상되었던 우리의 빛나는 청춘에서 영감을 받았습니다.
                            아름다웠던 순간을 눌러 담아 기억하기 위해 만든 시그니처 향.
                            우리가 그랬듯, 당신의 아름다운 순간이 찬란하게 기억되길 바라는 마음입니다.
                        </span>
                        <span class="prd_detail_txt2">
                            [TOP] blue hosta, tangerine<br>
                            [MIDDLE] geranium, vanilla orchid, peony<br>
                            [BASE] vetiver bourbon, white clove
                        </span>
                        <div class="price_wrap">
                            <div class="prd_quantity_box">
                                <button class="minus" onclick="count('minus')">-</button> 
                                <div class="quantity">1</div> 
                                <button class="plus" onclick="count('plus')">+</button>
                            </div>
                            <div class="prd_price_box">
                                <span>KRW</span>
                                <span id="subtotal">29,000</span>
                            </div>
                        </div>
                        <button class="add_to_cart"><a href="#" >add to cart</a></button>
                        <div class="prd_delivery_box">
                            <p>delivery↓</p>
                            <span>배송비 : 3000원 (100,000원 이상 구매 시 무료)<br>
                            제주 및 도서 산간 3,000원 추가</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prd_detail">
                <img src="images/pdt_page1.jpg">
                <img src="images/pdt_page2.jpg">
                <img src="images/pdt_page3.jpg">
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/productpage.js"></script>
</body>
</html>