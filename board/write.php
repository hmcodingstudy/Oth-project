<?php 
include "../inc/session.php"; 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../css/qna_write.css" />
    <script>
        function board_check(){
            var b_name = document.getElementById("b_name");
            var b_pwd = document.getElementById("b_pwd");
            var b_title = document.getElementById("b_title");
            var b_content = document.getElementById("b_content");
            if(!b_name.value){
                alert("이름을 입력하세요.");
                b_name.focus();
                return false;
            };
            if(!b_title.value){
                alert("제목을 입력하세요.");
                b_title.focus();
                return false;
            };
            if(!b_content.value){
                alert("내용을 입력하세요.");
                b_content.focus();
                return false;
            };
            if(!b_pwd.value){
                alert("비밀번호를 입력하세요.");
                b_pwd.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <header>
        <div class="header_menubar" onclick="openNav()">menu bar</div>
        <a href="../index.php" class="header_logo">Oth,</a>
        <?php if ($s_id == "admin"){ ?>
            <!-- 관리자일때 -->
            <a href="../admin/index.php" class="go_admin">admin</a>
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
                <a href="../members/mypage.php" class="go_mypage">my page</a>
                <a href="../cart.php" class="go_cart">cart</a>
            </div>
        <?php }; ?>
    </header>
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
                <a href="../members/join.php" class="sidebar_join">Join</a>
            </div>
            <?php } else if($s_id == "admin"){ ?>
            <!-- 관리자 로그인 -->
            <div class="af_login">
                <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                <span>/</span>
                <a href="../members/mypage.php" class="sidebar_mypage">my page</a>
                <?php } else{ ?>
            </div>
            <!-- 로그인 후 -->
            <div class="af_login">
                <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                <span>/</span>
                <a href="../members/mypage.php" class="sidebar_mypage">my page</a>
                <?php }; ?>
            </div>
        </div>
    </div>
    <form class="board_write" name="board_form" action="insert.php" method="post" onsubmit="return board_check()">
        <fieldset>
            <legend>Q&A</legend>
            <p>
                <input type="text" name="b_name" id="b_name" placeholder="이름">
            </p>
            <p>
                <select name="cate" id="cate" class="cate">
                    <option value="products">상품</option>
                    <option value="order">주문/결제</option>
                    <option value="delivery">배송</option>
                    <option value="etc">기타</option>
                </select>
                <input type="text" name="b_title" id="b_title" placeholder="제목 입력">
            </p>
            <p>
                <label for="b_content"></label>
                <textarea cols="60" rows="10" name="b_content" id="b_content"></textarea>
            </p>
            <p>
                <label for="b_pwd">password</label>
                <input type="text" name="b_pwd" id="b_pwd">
            </p>
            <p>
                <button type="submit" class="upload_btn">OK</button>
            </p>
        </fieldset>
    </form>
    <footer>
        <div class="fs_info1">
            <p>Company Name: 오티에이치콤마(oth,) | Owner: 문예진 | Personal Info Manager: 오티에이치콤마</p>
            <p>Phone Number: 010-4854-8705 | Email: othcomma@gmail.com</p>
            <p>Address: 서울특별시 서대문구 연희로 25길 4-16 3층 | Business Registration Number: 229-22-66610</p>
        </div>
        <div class="fs_info2">
            <p>Business License: 2022-서울서대문-0252</p>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
</body>
</html>