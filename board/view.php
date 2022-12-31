<?php
include "../inc/session.php";

$b_idx = $_GET["b_idx"];
$s_pwd = isset($_SESSION["b_pwd"])? $_SESSION["b_pwd"]:"";

$table_name = "board";

include "../inc/dbcon.php";

$sql = "select * from $table_name where idx=$b_idx;";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);

$b_pwd = $array["b_pwd"];

//비밀번호 입력하지 않고 주소 쳐서 바로 들어온 경우 차단
if($s_pwd != $b_pwd){
    echo "
    <script type=\"text/javascript\">
        alert(\"비밀번호를 입력해 주세요.\");
        location.href = \"password.php?b_idx=$b_idx\";
    </script>
    ";
}

// 조회수 업데이트
$cnt = $array["cnt"]+1;
$sql = "update $table_name set cnt = $cnt where idx = $b_idx;";
mysqli_query($dbcon, $sql);
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
    <link rel="stylesheet" type="text/css" href="../css/board_view.css" />
    <script>
        function edit_board(){
                document.board_form.submit();
        };
        function remove_board(){
                var ck = confirm("정말 삭제하시겠습니까?");
                if(ck){
                    location.href="delete.php?b_idx=<?php echo $b_idx; ?>";
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
    <section class="qna_view_section">
        <h2>Q&A</h2>
        <form name="board_form" action="modify.php?b_idx=<?php echo $b_idx; ?>" method="post">
        <table class="board_list_set">
            <tr class="board_list_title">
                <th class="v_title">작성자</th>
                <td class="v_content"><?php echo $array["b_name"]; ?></td>
            </tr>
            <tr class="board_view_content">
                <th class="v_title">날짜</th>
                <td class="v_content">
                <?php echo ($array["w_date"]); ?>
                </td>
            </tr>
            <tr class="board_view_content">
                <th class="v_title">제목</th>
                <td class="v_content"><?php echo $array["b_title"]; ?></td>
            </tr>
            <tr class="board_view_content">
                <th class="v_title">조회수</th>
                <td class="v_content"><?php echo $cnt; ?></td>
            </tr>
            <tr class="board_view_text">
                <td colspan="2" class="v_text">
                <?php 
                $b_content = str_replace("\n", "<br>", $array["b_content"]);
                $b_content = str_replace(" ", "&nbsp;", $b_content);
                echo $b_content; 
                ?>
                </td>
            </tr>
        </table>
        </form>
        <p class="btn_list">
            <a href="list.php" class="list">list</a>
            <a href="#" onclick="edit_board()" class="edit">edit</a>
            <a href="#" onclick="remove_board()" class="delete">delete</a>
        </p>
    </section>
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