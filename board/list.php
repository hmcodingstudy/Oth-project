<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$cate = isset($_GET["cate"])? $_GET["cate"] : "";

$table_name = "board";

if($cate){
    $sql = "select * from $table_name where cate='$cate';";
} else{
    $sql = "select * from $table_name;";
};

$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);

$list_num = 5;
$page_num = 3;

$page = isset($_GET["page"])? $_GET["page"] : 1;

$total_page = ceil($total / $list_num);
$total_block = ceil($total_page / $page_num);
$now_block = ceil($page / $page_num);

$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
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
        <link rel="stylesheet" type="text/css" href="../css/qna.css" />
        <script>
            function sel_cate(){
                var cate = document.getElementById("cate");
                var idx = cate.options.selectedIndex;
                // console.log(idx);
                var sel_cate_val = cate.options[idx].value;
                if(idx == 0){
                    location.href = "list.php";
                } else{
                    location.href = "list.php?cate="+sel_cate_val;
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
        <section class="qna_section">
            <div class="qna_title_wrap">
                <h2>Q&A</h2>
                <select name="cate" id="cate" class="cate" onchange="sel_cate()">
                    <option value=""<?php if($cate == "") echo " selected"; ?>>전체</option>
                    <option value="products"<?php if($cate == "products") echo " selected"; ?>>상품</option>
                    <option value="order"<?php if($cate == "order") echo " selected"; ?>>주문/결제</option>
                    <option value="delivery"<?php if($cate == "delivery") echo " selected"; ?>>배송</option>
                    <option value="etc"<?php if($cate == "etc") echo " selected"; ?>>기타</option>
                </select>
            </div>
            <table class="qna_table" >
                <tr class="board_list_title">
                    <th class="no">번호</th>
                    <th class="cate">분류</th>
                    <th class="b_title">제목</th>
                    <th class="b_name">작성자</th>
                    <th class="w_date">작성일</th>
                    <th class="cnt">조회수</th>
                </tr>
            <?php
            $start = ($page - 1) * $list_num;
            if($cate){
                $sql = "select * from $table_name where cate='$cate' order by idx desc limit $start, $list_num;";
            } else{
                $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
            };
            $result = mysqli_query($dbcon, $sql);
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
            ?>
            <tr class="board_list_content">
                <td><?php echo $i; ?></td>
                <td class="board_cate">
                    <?php 
                    if($array["cate"] == "products"){
                        echo "상품";
                    } else if($array["cate"] == "order"){
                        echo "주문/결제";
                    } else if($array["cate"] == "delivery"){
                        echo "배송";
                    } else if($array["cate"] == "etc"){
                        echo "기타";
                    };                
                    ?>
                </td>
                <td class="board_content_title">
                    <a href="password.php?b_idx=<?php echo $array["idx"]; ?>" >
                        <span class="lock">자물쇠</span>
                        <div class="qna_title"><?php echo $array["b_title"]; ?></div>
                    </a>
                </td>
                <td><?php echo $array["b_name"]; ?></td>
                <?php $w_date = substr($array["w_date"], 0, 10); ?>
                <td><?php echo $w_date; ?></td>
                <td><?php echo $array["cnt"]; ?></td>
            </tr>
            <?php
                    $i--;
                }; 
            ?>
            </table>
            <a href="write.php" class="write_btn">write</a>
            <div class="pager">
                <?php
                // pager : 이전 페이지
                if($page <= 1){
                ?>
                <a href="list.php?page=1" class="pre"><</a>
                <?php } else{ ?>
                <a href="list.php?page=<?php echo ($page - 1); ?>" class="pre"><</a>
                <?php }; ?>
                <?php
                // pager : 페이지 번호 출력
                for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
                ?>
                <a href="list.php?page=<?php echo $print_page; ?>" class="page_number"><?php echo $print_page; ?></a>
                <?php }; ?>
                <?php
                // pager : 다음 페이지
                if($page >= $total_page){
                ?>
                <a href="list.php?page=<?php echo $total_page; ?>" class="next">></a>
                <?php } else{ ?>
                <a href="list.php?page=<?php echo ($page + 1); ?>" class="next">></a>
                <?php }; ?>
            </div>
        </section>
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
    </body>
</html>
