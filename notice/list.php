<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$sql = "select * from notice;";
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
        <link rel="stylesheet" type="text/css" href="../css/notice.css" />
        <link rel="stylesheet" href="../css/jquery.bxslider.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
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
        <main>
            <div class="gnb">
                <a href="javascript:void(0)" class="gnb_close_btn" onclick="closeNav()">접기 아이콘</a>
                <ul>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="../board/list.php">QnA</a></li>
                    <li><a href="list.php">Notice</a></li>
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
                    <!-- <?php echo $s_name; ?>님 -->
                    <div class="af_login">
                        <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                        <span>/</span>
                        <a href="../members/mypage.php" class="sidebar_mypage">my page</a>
                        <?php }; ?>
                    </div>
                </div>
            </div>
            <section class="notice_section">
                <h1>Notice</h1>
                <table class="notice_table" >
                    <tr class="notice_list_title">
                        <th class="no">번호</th>
                        <th class="n_title">제목</th>
                        <th class="writer">작성자</th>
                        <th class="w_date">등록일</th>
                        <th class="cnt">조회수</th>
                    </tr>
                    <?php
                    $start = ($page - 1) * $list_num;
                    $sql = "select * from notice order by idx desc limit $start, $list_num;";
                    $result = mysqli_query($dbcon, $sql);
                    $i = $total - (($page - 1) * $list_num);
                    while($array = mysqli_fetch_array($result)){
                    ?>
                    <tr class="notice_list_content">
                        <td><?php echo $i; ?></td>
                        <td class="notice_content_title">
                            <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                                <?php echo $array["n_title"]; ?>
                            </a>
                        </td>
                        <td>관리자</td>
                        <?php $w_date = substr($array["w_date"], 0, 10); ?>
                        <td><?php echo $w_date; ?></td>
                        <td><?php echo $array["cnt"]; ?></td>
                    </tr>
                    <?php
                            $i--;
                        }; 
                    ?>
                </table>
                <?php if($s_id == "admin"){ ?>
                        <a href="write.php" class="notice_write_button">write</a>
                <?php }; ?>
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
        </main>
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
    </div>
    <script type="text/javascript" src="../js/common.js"></script>
    </body>
</html>
