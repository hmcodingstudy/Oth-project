<?php 
include "../inc/session.php"; 
include "../inc/dbcon.php";

$sql = "select * from members where idx = $s_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oth,</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../css/pwd_cng.css" />
    <script>
        function form_check(){
            var n_pwd = document.getElementById("n_pwd");
            if (n_pwd.value == "") {
            let txt = document.getElementById("err_password");
            txt.textContent = "비밀번호를 입력하세요.";
            n_pwd.focus();
            return false;
            }
        }
    </script>
    <style>
        .password_form{
            width:800px;
            height:500px;
            text-align:center;
            margin:auto;
        }
        form span{
            display:block;
            font-size:20px;
            font-weight:500;
            margin-top:150px;
            margin-bottom:50px;
        }
        legend{
            display:none
        }
        input{
            border:1px solid black;
            width: 40%;
            height:40px;
            padding-top:3px;
            font-size:17px;
        }
        button{
            border:1px solid black;
            width: 10%;
            height:47px;
            background:black;
            color:white;
            cursor: pointer;
        }
        button:hover{
            background:white;
            color:black;
            transition:0.5s;
        }
    </style>
</head>
<body>
    <div class="main_page">
        <header>
            <div class="header_menubar" onclick="openNav()">menu bar</div>
            <a href="index.php" class="header_logo">Oth,</a>
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
        <main>
            <form class="password_form" name="password_cng_form" action="password_cng_ok.php?s_idx=<?php echo $array["idx"]; ?>" method="post" onsubmit="form_check()">
            <?php $idx?>
                <fieldset>
                    <input type="hidden" name="idx" value="<?php echo $array["idx"]; ?>">
                    <input type="hidden" name="pwd" value="<?php echo $array["pwd"]; ?>">
                    <span>새 비밀번호를 입력해 주세요.</span>
                    <div class="pwdwrap">
                        <legend>비밀번호</legend>
                        <p>
                            <input type="password" class="n_pwd" name="n_pwd" id="n_pwd">
                            <button type="submit">확인</button>
                        </p>
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
    </div>
</body>
</html>