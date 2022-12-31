<?php
include "../inc/session.php";
include "../inc/login_check.php";
include "../inc/dbcon.php";

$sql = "select * from members;";

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원관리</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../../css/admin_common.css" />
    <link rel="stylesheet" type="text/css" href="../../css/members_list.css" />
    <link rel="stylesheet" type="text/css" href="../../css/admin.css" />
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <div class="screen">
    <div class="title">회원관리</div>
        <p class="total_member">total : <?php echo $total; ?>명</p>
        <table class="mem_list_set">
            <tr class="mem_list_title">
                <th>번호</th>
                <th>이름</th>
                <th>아이디</th>
                <th>전화번호</th>
                <th>이메일</th>
                <th>주소</th>
                <th class="modify_title">관리</th>
            </tr>
            <?php
                $start = ($page - 1) * $list_num;
                $sql = "select * from members limit $start, $list_num;";
                $result = mysqli_query($dbcon, $sql);
                $i = $start + 1;
                while($array = mysqli_fetch_array($result)){
            ?>
            <tr class="mem_list_content" onClick="location.href='member_info.php?g_idx=<?php echo $array["idx"]; ?>'">
                <td class="no"><?php echo $i; ?></td>
                <td class="u_name"><?php echo $array["u_name"]; ?></td>
                <td class="u_id"><?php echo $array["u_id"]; ?></td>
                <td class="mobile"><?php echo $array["mobile_1"]; ?>-<?php echo $array["mobile_2"]; ?>-<?php echo $array["mobile_3"]; ?></td>
                <td class="email"><?php echo $array["email_id"]; ?>@<?php echo $array["email_dns"]; ?></td>
                <?php 
                $pscode = $array["ps_code"];
                $address = $array["addr_1"]." ".$array["addr_2"];
                ?>
                <td class="address">
                    (<?php echo $pscode; ?>)</br>
                    <?php echo $address; ?>
                </td>
                <td class="modify">
                    <a href="member_info.php?g_idx=<?php echo $array["idx"]; ?>">수정</a>
                </td>
            </tr>
            <?php
                    $i++;
                }; 
            ?>
        </table>
        <p class="pager">
            <?php
            if($page <= 1){
            ?>
            <a href="list.php?page=1" class="pager_arrow_1"><</a>
            <?php } else{ ?>
            <a href="list.php?page=<?php echo ($page - 1); ?>" class="pager_arrow_1"><</a>
            <?php }; ?>
            <?php
            for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
            ?>
            <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>
            <?php
            if($page >= $total_page){
            ?>
            <a href="list.php?page=<?php echo $total_page; ?>"class="pager_arrow_2">></a>
            <?php } else{ ?>
            <a href="list.php?page=<?php echo ($page + 1); ?>"class="pager_arrow_2">></a>
            <?php }; ?>
        </p>
    </div>
</body>
</html>