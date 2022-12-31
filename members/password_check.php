<?php
include "../inc/session.php";
include "../inc/login_check.php";

$idx = $_POST["idx"];
$pwd = $_POST["pwd"];
$c_pwd = $_POST["c_pwd"];

$table_name = "members";

include "../inc/dbcon.php";

$sql = "select * from members where idx=$s_idx;";

$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

if($pwd != $c_pwd){
    echo "
        <script>
            alert(\"비밀번호가 일치하지 않습니다.\");
            history.back();
        </script>
    ";
} else {
    echo "
    <script type=\"text/javascript\">
        location.href = \"password_cng.php?s_idx=$idx\";
    </script>
    ";
}

mysqli_close($dbcon);
?>
