<?php
include "../inc/session.php";
include "../inc/login_check.php";

$idx = $_POST["idx"];
$pwd = $_POST["pwd"];
$n_pwd = $_POST["n_pwd"];

$table_name = "members";

include "../inc/dbcon.php";

$sql = "update members set ";
$sql .= "pwd='$n_pwd' ";
$sql .= "where idx=$s_idx;";

if($n_pwd){
    mysqli_query($dbcon, $sql);
    echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href = \"mypage.php\";
    </script>
    ";
} else{
    echo "
    <script type=\"text/javascript\">
        alert(\"새 비밀번호를 입력해주세요.\");
        location.href = \"password_cng.php?s_idx=$idx\";
    </script>
    ";
};

$result = mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
?>
