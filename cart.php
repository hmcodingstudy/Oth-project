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
    <link rel="stylesheet" type="text/css" href="css/cart.css" />
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
        <section class="cart_section">
            <h1>Cart</h1>
            <table border=1 class="cart_table" >
                <tr>
                    <td class="cart_col1">
                        <span class="cart_img">상품 이미지</span>
                        <span class="cart_pdt_title">젊은 날의 바다</span>
                    </td>
                    <td class="cart_col2">
                        <div class="cal">
                            <button class="minus" onclick="count('minus')">-</button> 
                            <div class="quantity">1</div> 
                            <button class="plus" onclick="count('plus')">+</button>
                        </div>
                    </td>
                    <td class="cart_col3">
                        <div>KRW</div>
                        <div id="subtotal2">29,000</div>
                    </td>
                </tr>
            </table>
            <table border=1 class="total_table" >
                <tr>
                    <td class="total_col1">
                        Subtotal
                    </td>
                    <td class="total_col2" id="subtotal">
                        29,000
                    </td>
                </tr>
                <tr>
                    <td class="total_col1">
                        Shipping
                    </td>
                    <td class="total_col2" id="deliveryCost">
                        3,000
                    </td>
                </tr>
            </table>
            <br><span class="qtt_err_txt"></span>
            <div class="buynow_wrap">
                <div class="total_price">
                    <span class="total_price_txt1">Total</span>
                    <div class="total_price_txt2">
                        <span>KRW</span>
                        <span id="total">32,000</span>
                    </div>
                </div>
                <button class="buynow_button"><a href="buy.php">buy now</a></button>
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
    <script type="text/javascript" src="js/cart.js"></script>
</body>
</html>