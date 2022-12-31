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
    <link rel="stylesheet" type="text/css" href="css/buy.css" />
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
    <main>
        <section class="buy_wrap">
            <div class="buy_col1">
                <div class="buy_product_info">
                    <h3>주문 상품 정보</h3>
                    <div class="buy_product">
                        <span class="buy_product_img">상품사진</span>
                        <div class="buy_product_textbox">
                            <span class="buy_product_text1">젊은 날의 바다</span>
                            <span class="buy_product_text2">￦29,000</span>
                        </div>
                    </div>
                </div>
                <section class="customer_info">
                    <h3>주문자 정보</h3>
                    <div class="customer_info_box">
                        <input type="text" placeholder="이름">
                        <input type="number" placeholder="연락처">
                    </div>
                </section>
                <section>
                    <div class="delivery_info">
                        <h3>배송 정보</h3>
                        <div class="delivery_check">
                            <input type="checkbox">
                            <span>주문자 정보와 동일</span>
                        </div>
                        <div class="delivery_row1">
                            <input type="text" placeholder="수령인" class="delivery_name">
                            <input type="text" placeholder="연락처" class="delivery_phone">
                        </div>

                        <div class="delivery_row2">
                            <input type="text" placeholder="우편번호" class="delivery_postalcode">
                            <button>주소찾기</button>
                        </div>

                        <div class="delivery_row3">
                            <input type="text" placeholder="주소" class="delivery_address1">
                            <input type="text" placeholder="상세주소" class="delivery_address2">
                        </div>
                        <div class="delivery_memo">
                            <span></span>배송메모
                            <input type="text">
                        </div>
                    </div>
                </section>
            </div>
            <div class="buy_col2">
                <div class="buy_summary">
                    <h3>주문 요약</h3>
                    <div class="buy_sum_box">
                        <div class="buy_sum_price_wrap">
                            <span class="buy_sum_price1">상품가격</span>
                            <span class="buy_sum_price2">29,000</span>
                        </div>
                        <div class="buy_sum_deliveryfee_wrap">
                            <span class="buy_sum_deliveryfee1">배송비</span>
                            <span class="buy_sum_deliveryfee2">+ 3,000</span>
                        </div>
                        <div class="buy_sum_total_wrap">
                            <hr>
                            <span class="buy_sum_total1">총 주문금액</span>
                            <span class="buy_sum_total2">32,000</span>
                        </div>
                    </div>
                </div>
                <div class="buy_payment">
                    <h3>결제 수단</h3>
                    <div class="method_wrap">
                        <div class="method1">
                            <input type="radio" name="payment method" checked>
                            <span>신용카드</span>
                        </div>
                        <div class="method2">
                            <input type="radio" name="payment method">
                            <span>실시간 계좌이체</span>
                        </div>
                        <div class="method3">
                            <input type="radio" name="payment method">
                            <span>무통장입금</span>
                        </div>
                    </div>
                </div>
                <div class="buy_payment_agree">
                    <div class="agree_row1">
                        <input type="checkbox"  name="apply_all" id="apply_all" onclick="all_apply()">
                        <span>전체 동의</span>
                    </div>
                    <div class="agree_row2">
                        <input type="checkbox" name="apply_box" class="apply_box" id="ag2" onclick="apply_check()">
                        <span>개인정보 수집 및 이용 동의</span>
                    </div>
                    <div class="agree_row3">
                        <input type="checkbox" name="apply_box" class="apply_box" id="ag3"  onclick="apply_check()">
                        <span>구매조건 확인 및 결제진행에 동의</span>
                    </div>
                </div>
                <div class="pay_button">
                    <a href="buy_result.php">결제하기</a>
                </div>
            </div>
        </section>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/buy.js"></script>
</body>
</html>