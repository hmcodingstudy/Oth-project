<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../../css/login.css" />
    <script type="text/javascript" src="../../js/common.js"></script>
    <script>
        function login_form_check(){
            var u_id = document.getElementById("u_id");
            var pwd = document.getElementById("pwd");
            if(!u_id.value){
                alert("아이디를 입력하세요.");
                u_id.focus();
                return false;
            };
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <div class="main_page">
        <header>
            <div class="header_menubar" onclick="openNav()">menu bar</div>
            <a href="../../index.php" class="header_logo">Oth,</a>
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
                <a href="mypage.html" class="go_mypage">my page</a>
                <a href="cart.html" class="go_cart">cart</a>
            </div>
        </header>
        <div class="gnb">
            <a href="javascript:void(0)" class="gnb_close_btn" onclick="closeNav()">접기 아이콘</a>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="qna.html">QnA</a></li>
                <li><a href="notice.html">Notice</a></li>
            </ul>
            <div class="sidebar_login_wrap">
                <a href="login.html" class="sidebar_login">Login</a>
                <span>/</span>
                <a href="join.html" class="sidebar_join">Join</a>
            </div>
        </div>
        <main>
            <form class="login_section" name="login_section" action="login_ok.php" method="post" onsubmit="return form_check()">
                <fieldset>
                    <legend>Login</legend>
                    <div class="login_wrap">
                        <input type="text" name="u_id" class="u_id" placeholder="아이디">
                        <span id="err_id" class="err_txt"></span>
                        <input type="password" name="pwd" class="pwd" placeholder="비밀번호">
                        <span id="err_password" class="err_txt"></span>
                    </div>
                    <div class="pwsearch_wrap">
                        <a href="#" class="pwsearch">Forgotten ID or Password</a>
                    </div>
                    <div class="login_button_wrap">
                        <button type="submit" class="login_button">Login</button>
                        <p class="join_button"><a href="../members/join.php">Sign up</a></p>
                    </div>
                </fieldset>
            </form>
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
                    <div class="escrow_logo"><img src="../../images/escrow_inicisPay2.png"></img></div>
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